<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Post;
use App\Models\Sellers;
use App\Models\CategoryPost;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use function Symfony\Component\HttpKernel\DataCollector\collect;

// use App\Models\loai_phong;

class AdminController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('admin'); 
        $this->shareData($request);
    }

    public function shareData (Request $request) {
        // $tongsp = DB::table('products')->count();
        // tổng lượt xem
        // $tonglx = DB::table('products')->sum('views');
        // tổng user
        // $tong_user = DB::table('users')->count();
        // tổng order
        // $tt_order = DB::table('orders')->sum('total_price');
        // tổng đơn hàng hết
        //
        $inputTime = $request->input('currentTime');
        $currentTime = $inputTime instanceof Carbon ? $inputTime : Carbon::parse($inputTime);
        // tổng đơn hàng
        $tong_order = DB::table('orders')->whereDate('created_at', '=', $currentTime)->count();
        $tong_remaining = DB::table('products')->where('remaining', 0)->whereDate('created_at', '=', $currentTime)->count();
        // get status
        $ordersData = DB::table('orders')
            ->select('status', DB::raw('COUNT(*) as count'))
            ->whereDate('created_at', '=', $currentTime)
            ->groupBy('status')
            ->get()
            ->keyBy('status')
            ->toArray();
        
        $pending = $ordersData[0]->count ?? 0;
        $shipping = $ordersData[1]->count ?? 0;
        $done = $ordersData[2]->count ?? 0;
        $cancel = $ordersData[4]->count ?? 0;

        $data_order_pen = DB::table('orders')
            ->whereDate('created_at', '=', now()->toDateString())
            ->where('status', 0)
            ->count();

        $data_order_done = DB::table('orders')
            ->whereDate('created_at', '=', now()->toDateString())
            ->where('status', 1)
            ->count();

        \View()->share([
            // 'tongsp' => $tongsp, 
            'tong_order' => $tong_order, 
            // 'tonglx' => $tonglx, 
            // 'tong_user' => $tong_user, 
            // 'tt_order' => $tt_order, 
            'tong_remaining' => $tong_remaining, 
            'pending' => $pending, 
            'shipping' => $shipping, 
            'done' => $done, 
            'cancel' => $cancel, 
            'data_order_pen' => $data_order_pen, 
            'data_order_done' => $data_order_done,
            'currentTime' => $inputTime
        ]);
    
    }

    public function dashboard(Request $request) {
        $inputTime = $request->input('currentTime');
        
        $jsonOrder = $this->fillterOrder($inputTime);
        $jsonDoanhthu = $this->statitisDoanhThu($inputTime);
        // dd($jsonOrder, $jsonDoanhthu);
        $jsonOrder2 = $this -> statiticOrder2($inputTime);
        // dd($jsonOrder2);
        if (array_sum($jsonOrder2) == 0) {
            $percent = 0;
        }else{
            $percent = 100;
        }
        $type_payment = [
            'qr_code' => $jsonOrder2['qr_code'],
            'tt_online' => $jsonOrder2['tt_online'],
            'tt_cod' => $jsonOrder2['tt_cod'],
            'percent' => $percent
        ];
        $total_revenue = $jsonOrder2['total_revenue'];
        $this->middleware('admin'); 
        $this->shareData($request);
        return view('admin.dashboard', compact('jsonOrder', 'jsonDoanhthu', 'type_payment', 'total_revenue'));   
    }

    // public function statitic

    public function statiticOrder2 ($inputTime) {
        $paymentData = DB::table('orders')
            ->select('type_payment', DB::raw('COUNT(*) as count'))
            ->groupBy('type_payment')
            ->whereDate('created_at', $inputTime)
            ->get()
            ->keyBy('type_payment')
            ->toArray();

        $total_revenue = DB::table('orders')->whereDate('created_at', $inputTime)->sum('total_price');
        $qr_code = $paymentData[1]->count ?? 0;
        $tt_online = $paymentData[2]->count ?? 0;
        $tt_cod = $paymentData[3]->count ?? 0;
            
        return [
            'qr_code' => $qr_code,
            'tt_online' => $tt_online,
            'tt_cod' => $tt_cod,
            'total_revenue' => $total_revenue,
        ];
    }

    public function statitisOrder($startday, $endTime) {
        $list_sum_order = [];
        $list_sum_order_done = [];
        
        $orders = Order::whereBetween('created_at', [$startday, $endTime])->orderBy('created_at')->get();
        $groupByDay = $orders->groupBy(function ($order) {
            return \Carbon\Carbon::parse($order->created_at)->format('H');
        });
        for ($hour = 0; $hour <= $endTime->hour; $hour++) {
            $check = false;
            foreach ($groupByDay as $key => $item) {
                // check và set giá trị đúng với thời gian tương ứng của đơn hàng
                if ($key == $hour) {
                    $list_sum_order[] = $item->count();
                    $list_sum_order_done[] = $item->where('status', 1)->count();
                    $check = true;
                    break;
                }
            }
            // check và set giá trị = 0 
            if ($check == false) {
                $list_sum_order[] = 0;
                $list_sum_order_done[] = 0;
            }
        }
        return [
            'sum_order' => $list_sum_order,
            'sum_done' => $list_sum_order_done
        ];

    }

    public function statitisDoanhThu ($currentTime) {
        $startday = \Carbon\Carbon::parse($currentTime)->startOfDay();

        $arr_dtAll = [];
        $arr_dtDone = [];
        $arr_time = ['00:00:00', '04:00:00', '09:00:00', '14:00:00', '19:00:00'];
        $now = \Carbon\Carbon::now();

        $orders = Order::whereBetween('created_at', [$startday, $now])->orderBy('created_at')->get();
        
        $interval = 24 / 5; // Interval of 4.8 hours
        $groupedOrders = $orders->groupBy(function ($order) use ($startday, $interval) {
            $columnIndex = floor($order->created_at->diffInHours($startday) / $interval);
            return $startday->copy()->addHours($columnIndex * $interval)->format('Y-m-d H:00:00');
        });

        // dd($groupedOrders);

        for ($hour = 0; $hour < count($arr_time); $hour++) {
            $check = false;
            foreach ($groupedOrders as $key => $item) {
                // print($key."<br>");
                // check và set giá trị đúng với thời gian tương ứng của đơn hàng
                if ($key == $currentTime." ".$arr_time[$hour]) {
                    // print($item->sum('total_price'));
                    $arr_dtAll[] = $item->sum('total_price');
                    $arr_dtDone[] = $item->where('status', 1)->sum('total_price');
                    $check = true;
                    break;
                }
            }
            // check và set giá trị = 0 
            if ($check == false) {
                $arr_dtAll[] = 0;
                $arr_dtDone[] = 0;
            }
        }

        if (array_sum($arr_dtAll) > 0 && array_sum($arr_dtDone) > 0) {
            $min = min($arr_dtAll);
            $max = max($arr_dtAll)*2;
            $step = ceil(($max - $min) / count($arr_dtAll));
        }else{
            $min = 0;
            $max = 20;
            $step = 4;
        }   
        // dd($max, $arr_dtAll, $arr_dtDone);
        // $formatdtAll = array_map(function($number) {
        //     return number_format((int)$number);
        // }, $arr_dtAll);
        // $formatdtDone = array_map(function($number) {
        //     return number_format((int)$number);
        // }, $arr_dtDone);

        return [
            'sum_dtAll' => $arr_dtAll,
            'sum_dtDone' => $arr_dtDone,
            'min' => (int)$min,
            'max' => (int)$max,
            'step' => (int)$step
        ];
       
    }

    public function fillterOrder($inputTime) {
        $currentTime = $inputTime instanceof Carbon ? $inputTime : Carbon::parse($inputTime);

        if ($currentTime) {
            $startOfDay = \Carbon\Carbon::parse($currentTime)->startOfDay();
            $now = \Carbon\Carbon::now();
            if ($currentTime->isSameDay($now)) {
                $endTime = $now;
            } else {
                $endTime = $currentTime->endOfDay();
            }

        } else {
            $startOfDay = \Carbon\Carbon::now();
            $endTime = \Carbon\Carbon::now();
        }

        $jsonOrder = $this->statitisOrder($startOfDay, $endTime);
        // dd($jsonOrder);
        $list_sum_order = $jsonOrder['sum_order'];
        $list_sum_order_done = $jsonOrder['sum_done'];
        if (array_sum($list_sum_order) > 0 && array_sum($list_sum_order_done) > 0) {
            $min = min($list_sum_order);
            $max = max($list_sum_order)*2;
            
            $step = ceil(($max - $min) / count($list_sum_order)*4);
        }else{
            $min = 0;
            $max = 20;
            $step = 4;
        }
        $jsonOrder = [
            'sum_product' => $list_sum_order,
            'sum_done' => $list_sum_order_done,
            'min' => (int)$min,
            'max' => (int)$max,
            'step' => (int)$step
        ];
        return $jsonOrder;
    }

    public function newsarticle()
    {
        $newsarticle = Post::join('posts_category', 'posts.post_category_id', '=', 'posts_category.id')
            ->select('posts.*', 'posts_category.post_category_name')
            ->paginate(10);
        return view('admin.news.newsarticle', compact('newsarticle'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function newsarticlecreate()
    {
        $newsarticlecreate = CategoryPost::get();
        return view('admin.news.newsarticle-create', compact('newsarticlecreate'));
    }

    public function newsarticledetails($id)
    {
        $newsarticledetails = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.name as author_name')
            ->find($id);
        return view('admin.news.newsarticle-details',  compact('newsarticledetails'));
    }

    public function newsarticledelete($id)
    {
        $newsarticle = Post::find($id);

        if (!$newsarticle) {
            return redirect()->back()->with('error', 'Tin tức không tồn tại');
        }

        $newsarticle->delete();

        return redirect()->back()->with('success', 'Tin tức đã được xóa thành công');
    }

    public function newsarticleedit($id)
    {
        $newsarticle = Post::with('category')->find($id);
        $categories = CategoryPost::all();

        return view('admin.news.newsarticle-edit', compact('newsarticle', 'categories'));
    }

    public function newsarticlesupdate(Request $request, $id)
    {
        $newsarticle = Post::find($id);

        $newsarticle->post_title = $request->input('post_title');
        $newsarticle->post_excerpt = $request->input('post_excerpt'); // Assuming this is the correct field
        $newsarticle->post_content = $request->input('post_content');
        $newsarticle->post_category_id = $request->input('post_category_id');
        $newsarticle->post_thumbnail = $request->input('post_thumbnail'); // Handle file upload separately if needed
        $newsarticle->published_at = $request->input('published_at');
        $newsarticle->isHot = $request->input('isHot');
        $newsarticle->status = $request->input('status');
        $newsarticle->meta_title = $request->input('meta_title');
        $newsarticle->meta_description = $request->input('meta_description');

        $newsarticle->save();

        return redirect()->route('admin.news');
    }

    public function newsCategory()
    {
        $newsCategory = CategoryPost::with('posts')->get();
        return view('admin.news.newscategory.newscategory', compact('newsCategory'));
    }

    public function newsCategoryCreate()
    {
        $newsCategory = CategoryPost::get();
        return view('admin.news.newscategory.newscategory-create', compact('newsCategory'));
    }

    public function newsCategoryStore(Request $request)
    {
        $request->validate([
            'post_category_name' => 'required|string|max:255',
            'status' => 'required|in:0,1'
        ]);

        $category = CategoryPost::create([
            'post_category_name' => $request->input('post_category_name'),
            'post_category_slug' => $request->input('post_category_slug'),

            'status' => $request->input('status')
        ]);

        // Automatically generate post_category_slug
        $category->save();

        return redirect()->route('admin.newsCategory')->with('success', 'Category created successfully.');
    }

    public function newsCategoryDelete($id)
    {
        $newsCategory = CategoryPost::find($id);

        if (!$newsCategory) {
            return redirect()->back()->with('error', 'Danh mục tin tức không tồn tại');
        }

        $newsCategory->delete();

        return redirect()->back()->with('success', 'Danh mục tin tức đã được xóa thành công');
    }

    public function newsCategoryEdit($id)
    {
        $newsCategory = CategoryPost::find($id);

        return view('admin.news.newscategory.newscategory-edit', compact('newsCategory'));
    }

    public function newsCategoryUpdate(Request $request, $id)
    {
        $newsCategory = CategoryPost::find($id);

        $newsCategory->post_category_name = $request->input('post_category_name');
        $newsCategory->post_category_slug = $request->input('post_category_slug'); // Assuming this is the correct field
        $newsCategory->status = $request->input('status');

        $newsCategory->save();

        return redirect()->route('admin.newsCategory');
    }

}
