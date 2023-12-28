<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;

use App\Models\OrderDetail;
// use App\Models\loai_phong;

class AdminController extends Controller
{

    public function dashboard()
    {

        $tongsp = DB::table('Products')->count();
        // tổng lượt xem
        $tonglx = DB::table('Products')->sum('views');
        // tổng đơn hàng
        $tong_order = DB::table('Orders')->count();
        // tổng user
        $tong_user = DB::table('users')->count();

        $tt_order = DB::table('Orders')->sum('total_price');

        return view('admin.dashboard',compact('tongsp','tong_order','tonglx','tong_user','tt_order'));
    }

    function allus()
    {

        $user = user::get();

        return view('admin/allus', ['user' => $user]);
    }



    function editss(Request $request, $id_sp)
    {
        $sanpham = Products::find($id_sp);
        if ($sanpham == null) return Redirect('/thongbao');
        return view('admin/editss', ['sanpham' => $sanpham]);
    }
    function editus(Request $request, $id)
    {
        $user = user::find($id);
        if ($user == null) return Redirect('/thongbao');
        return view('admin/editus', ['user' => $user]);
    }
    function updateus(Request $request, $id)
    {
        $user = user::find($id);
        if ($user == null) return Redirect('/thongbao');
        $user->name = $_POST['name'];

        // $sanpham->urlHinh = $_POST['upload/images/'.'urlHinh'];

        $user->image = '/upload/images/' . $_POST['image'];
        $user->email = $_POST['email'];
        $user->address = $_POST['address'];
        $user->gender = $_POST['gender'];
        $user->save();
        return Redirect('admin/allus');
    }
    function editpq(Request $request, $id)
    {
        $user = user::find($id);
        if ($user == null) return Redirect('/thongbao');
        return view('admin/editus', ['user' => $user]);
    }
    function updatepq(Request $request, $id)
    {
        $user = User::find($id);
        if ($user == null) {
            return Redirect('/thongbao');
        }

        $user->role = $_POST['role']; // Giả sử giá trị role được gửi qua biểu mẫu là role mới
        $user->save();

        return Redirect('admin/allus');
    }

    function updateSanPham(Request $request, $id_sp)
    {
        $sanpham = Products::find($id_sp);
        if ($sanpham == null) return Redirect('/thongbao');
        $sanpham->ten_sp = $_POST['ten_sp'];
        $sanpham->gia = $_POST['gia'];
        // $sanpham->urlHinh = $_POST['upload/images/'.'urlHinh'];
        $sanpham->gia_km = $_POST['gia_km'];
        $sanpham->hinh = 'upload/images/' . $_POST['hinh'];
        $sanpham->save();
        return Redirect('admin/allsp');
    }





    public function donhang()
    {
        $query_donhang = Order::join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name')
            ->paginate(10);
        return view('admin.allorder', compact('query_donhang'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function restore()
    {

        return redirect('admin/allorder');
    }
    public function restore_us()
    {

        return redirect('admin/allus');
    }

    function orderItem($order_code)
    {
        $order = Order::with('items')->find($order_code);
        // echo "<br><br><br><br><br><br><br>";
        if (!$order) {
            return redirect()->route('admin.allorder')->with('error', 'Không tìm thấy đơn hàng.');
        }

        $donhang = Order::join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name')
            ->where('orders.order_code', $order_code)
            ->first();
        // print($donhang);
        // Lấy danh sách sản phẩm liên quan trong đơn hàng
        $sanphams = Products::join('order_detail', 'order_detail.product_id', '=', 'products.id')
            ->whereIn('order_detail.order_code', [$order_code])
            ->select('order_detail.*', 'products.product_image')
            ->get();

        return view('admin.orderItem', compact('order', 'donhang', 'sanphams'));
    }


    public function thayDoiTrangThai(Request $request)
    {
        $orderId = $request->input('id_dh');
        $newStatus = 0; // Thay đổi thành trạng thái 1 (Đang vận chuyển), bạn có thể thay đổi tùy theo trường hợp

        $order = Order::findOrFail($orderId);

        if ($order) {
            if ($order->status == 0) {
                $newStatus = 1;
            } elseif ($order->status == 1) {
                $newStatus = 2;
            }

            $order->status = $newStatus;
            $order->save();

            return redirect()->back();
        }
    }

    public function news(){
        return view('admin.news.news');
    }
}
