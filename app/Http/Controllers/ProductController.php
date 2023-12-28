<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\ChuDe;
use App\Models\ChudeProduct;
use App\Models\Products;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\User;
use App\Models\CategoryDetail;
use App\Models\Post;
use App\Models\CommentPost;
use App\Models\Event;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Author;
use App\Models\CategoryPost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->shareData();
    }

    public function cart()
    {
        $cart = session()->get('cart', []);
        $groupedCart = [];

        foreach ($cart as $item) {
            if (is_array($item)) {
                unset($item['seller_id']);
                $groupedCart[] = $item;
            }
        }

        // dd($cart);   
        return view('page.cart', compact('groupedCart', 'cart'));
    }

    public function shareData()
    {
        $newsPostCategory = CategoryPost::all();
        $topProducts = Products::where('isHot', 1)
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->take(4)
            ->get();
        $topAuthors = Author::withCount('products')
            ->orderByDesc('products_count')
            ->take(4)
            ->get();
        $category = Category::orderBy('created_at', 'desc')->withCount('products')->get();
        $products = Products::paginate(16);
        $totalCount = Products::count();
        $sumPro = Products::count();
        $categoryDetails = CategoryDetail::all();
        $groupedData = [];

        foreach ($categoryDetails as $detail) {
            $categorySlug = $detail->category_slug;
            $name = $detail->name;
            $item = $detail->item;

            if (!isset($groupedData[$categorySlug][$name])) {
                $groupedData[$categorySlug][$name] = [];
            }

            $groupedData[$categorySlug][$name][] = $item;
        }

        $wishlistItems = [];

        if (auth()->user()) {
            $user = User::find(auth()->user()->id);

            if ($user && isset($user->wishlist)) {
                $wishlist = json_decode($user->wishlist, true) ?: [];
                $wishlistItems = Products::whereIn('id', $wishlist)->get();
            }
        }

        $attributes = [];
        foreach ($products as $product) {

            $attributes[$product->id] = json_decode($product->attributes, true);
        }   

        $cart = session()->get('cart', []);
        \View()->share([
            'category' => $category,
            'sumPro' => $sumPro,
            'groupedData' => $groupedData,
            'wishlistItems' => $wishlistItems,
            'totalCount' => $totalCount,
            'attributes' => $attributes,
            'products' => $products,
            'topProducts' => $topProducts,
            'topAuthors' => $topAuthors,
            'newsPostCategory' => $newsPostCategory,
            'cart' => $cart
        ]);
    }

    function donhang(Request $request, $ret = false)
    {
        $cart = session()->get('cart', []);

        if (Auth::check()) {
            $user_id = Auth::user()->id;
        } else {
            return $this->index();
        }
        $orders = Order::join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.*', 'users.name')
            ->where('orders.user_id', $user_id)
            ->orderBy('orders.created_at', 'desc')
            ->paginate(10);

        if ($ret == true) {
            return $orders;
        } else {
            return view('page.donhang', compact('orders', 'cart'));
        }
    }

    public function viewOrderDetail($order_code)
    {
        $cart = session()->get('cart', []);

        // $order_detail = OrderDetail::where('order_code', $order_code)
        //     ->paginate(10);
        $order_detail = OrderDetail::join('orders', 'order_detail.order_id', '=', 'orders.id')
            ->select('order_detail.*', 'orders.*')
            ->where('orders.order_code', $order_code)
            ->paginate(10);

        // $products = Products::join('sellers', 'products.seller_id', '=', 'sellers.id')
        //     ->select('sellers.*', 'products.seller_id')
        //     ->paginate(10);

        return view('page.donhang-detail', compact('order_code', 'order_detail', 'cart'));
    }

    public function search(Request $request)
    {
        $cart = session()->get('cart', []);

        $productCounts = [
            'all' => Products::count(), // Total product count
            'under_100k' => 0,
            'over_100k' => 0,
        ];

        $results = Products::query();

        $priceFilter = $request->input('priceFilter');
        if ($priceFilter && in_array($priceFilter, [1, 2])) {
            if ($priceFilter == 1) {
                $results->where('price', '<=', 100000);
                $productCounts['under_100k'] = Products::where('price', '<=', 100000)->count();
            } else {
                $results->where('price', '>', 100000);
                $productCounts['over_100k'] = Products::where('price', '>', 100000)->count();
            }
        }

        $query = $request->input('search');
        $results = Products::where('product_name', 'like', '%' . $query . '%')->paginate(16);

        return view('page.search', ['results' => $results, 'cart' => $cart, 'productCounts' => $productCounts]);
    }

    public function index()
    {
        $cart = session()->get('cart', []);

        $productsWithChuDe = Products::with('chude')->get();

        $author = Products::with('authors')->get();

        $greatProduct = Products::where('isHot', 1)
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->take(6)
            ->with(['authors', 'reviews'])
            ->get();

        // foreach ($greatProduct as $product) {
        //     $product->average_rating = $product->averageRating();
        // }

        $latestProducts = Products::orderBy('created_at')->take(3)->get();
        $myProducts = Products::where('isHot', 1)->take(12)->get();

        $popularPosts = Post::withCount('comments')
            ->with('comments') // Eager load comments
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->take(6)
            ->join('admins', 'posts.admin_id', '=', 'admins.id')
            ->select('posts.*', 'admins.name as author_name')
            ->get();

        $goodProducts = Products::all()
            ->sortByDesc(function ($product) {
                return $product->averageRating();
            })
            ->take(6);

        $extraHotProduct = Products::where('isHot', 1)
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->first();

        $mainEvent = Event::where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->orderBy('priority', 'desc')
            ->orderBy('start_date', 'desc')
            ->first();

        // dd($events);

        return view('page.index', compact('myProducts', 'latestProducts', 'greatProduct', 'popularPosts', 'extraHotProduct', 'mainEvent', 'productsWithChuDe', 'author', 'cart', 'goodProducts'));
    }

    public function product(Request $request)
    {
        $cart = session()->get('cart', []);

        $productCounts = [
            'all' => Products::count(), // Total product count
            'under_100k' => 0,
            'over_100k' => 0,
        ];

        $query = Products::query();

        $priceFilter = $request->input('priceFilter');
        if ($priceFilter && in_array($priceFilter, [1, 2])) {
            if ($priceFilter == 1) {
                $query->where('price', '<=', 100000);
                $productCounts['under_100k'] = Products::where('price', '<=', 100000)->count();
            } else {
                $query->where('price', '>', 100000);
                $productCounts['over_100k'] = Products::where('price', '>', 100000)->count();
            }
        }

        $products = $query->paginate(16);

        return view('page.product', compact('products', 'cart', 'productCounts'));
    }

    public function goodreviews(Request $request)
    {
        $cart = session()->get('cart', []);
    
        $productCounts = [
            'all' => Products::count(), // Total product count
            'under_100k' => 0,
            'over_100k' => 0,
        ];
    
        $query = Products::query();
    
        $priceFilter = $request->input('priceFilter');
        if ($priceFilter && in_array($priceFilter, [1, 2])) {
            if ($priceFilter == 1) {
                $query->where('price', '<=', 100000);
                $productCounts['under_100k'] = Products::where('price', '<=', 100000)->count();
            } else {
                $query->where('price', '>', 100000);
                $productCounts['over_100k'] = Products::where('price', '>', 100000)->count();
            }
        }
    
        // Add condition for averageRating greater than 3
        $query->whereHas('reviews', function ($q) {
            $q->where('rating', '>', 3);
        });
    
        $goodProducts = $query->paginate(16);
    
        // Update the counts based on averageRating greater than 3
        $productCounts['all'] = $goodProducts->total(); // Update total product count
        $productCounts['under_100k'] = $query->where('price', '<=', 100000)->count(); // Update count for under_100k
        $productCounts['over_100k'] = $query->where('price', '>', 100000)->count(); // Update count for over_100k
    
        return view('page.bestreview', compact('goodProducts', 'productCounts', 'cart'));
    }
    


    public function addToWishlist(Request $request)
    {
        $userId = $request->input('user_id');
        $productId = $request->input('product_id');

        $user = User::find($userId);

        if ($user) {
            $wishlist = json_decode($user->wishlist, true) ?: [];

            // Kiểm tra xem sản phẩm đã tồn tại trong danh sách yêu thích chưa
            $existingProduct = array_filter($wishlist, function ($item) use ($productId) {
                return $item['id'] == $productId;
            });

            if (empty($existingProduct)) {
                $product = Products::find($productId, ['id', 'product_name', 'product_image', 'price']);

                if ($product) {
                    $wishlist[] = [
                        'id' => $product->id,
                        'product_name' => $product->product_name,
                        'product_image' => $product->product_image,
                        'price' => $product->price,
                    ];

                    $user->wishlist = json_encode($wishlist);
                    $user->save();

                    return response()->json(['status' => 'success', 'message' => 'Sản phẩm đã được thêm vào danh sách yêu thích']);
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Không tìm thấy sản phẩm']);
                }
            } else {
                return response()->json(['status' => 'info', 'message' => 'Sản phẩm đã tồn tại trong danh sách yêu thích']);
            }
        }

        return response()->json(['status' => 'error', 'message' => 'Chưa đăng nhập']);
    }


    public function removeFromWishlist(Request $request)
    {
        $userId = $request->input('user_id');
        $productId = $request->input('product_id');

        $user = User::find($userId);

        if ($user) {
            $wishlist = json_decode($user->wishlist, true) ?: [];

            // Find the index of the product in the wishlist
            $productIndex = array_search($productId, array_column($wishlist, 'id'));

            if ($productIndex !== false) {
                // Remove the product from the wishlist
                array_splice($wishlist, $productIndex, 1);

                $user->wishlist = json_encode($wishlist);
                $user->save();

                // You can return the updated wishlist HTML or any other response if needed
                $wishlistHTML = view('wishlist_items', ['wishlist' => $wishlist])->render();
                return response()->json(['status' => 'success', 'message' => 'Sản phẩm đã được xóa khỏi danh sách yêu thích', 'wishlistHTML' => $wishlistHTML]);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Không tìm thấy sản phẩm trong danh sách yêu thích']);
            }
        }

        return response()->json(['status' => 'error', 'message' => 'Chưa đăng nhập']);
    }


    public function detail(string $slug)
    {
        $cart = session()->get('cart', []);

        $product = Products::where('product_slug', $slug)->first();

        if (!$product) {
            return abort(404);
        }
        // Retrieve reviews and comments for the product
        $reviews = $product->reviews()->with('user')->get();

        // Calculate the average rating
        $averageRating = $product->averageRating();

        $relatedProducts = Products::where('product_slug', '!=', $slug)
            ->take(6)
            ->get();
              $attributes = [];
        $attributes = json_decode($product->attributes, true);
     
    
        return view('page.product-detail', compact('product', 'reviews', 'averageRating', 'cart', 'relatedProducts', 'attributes'));
    }

    public function productFillter(Request $request, $slug)
    {
        $cart = session()->get('cart', []);

        $productCounts = [
            'all' => 0, // Initialize total product count to 0
            'under_100k' => 0,
            'over_100k' => 0,
        ];

        $query = Products::query();

        $priceFilter = $request->input('priceFilter');
        if ($priceFilter && in_array($priceFilter, [1, 2])) {
            if ($priceFilter == 1) {
                $query->where('price', '<=', 100000);
                $productCounts['under_100k'] = $query->count();
            } else {
                $query->where('price', '>', 100000);
                $productCounts['over_100k'] = $query->count();
            }
        }

        $category = Category::where('category_slug', $slug)->first();
        if (!is_null($category)) {
            // Count all products in the category (without price filter)
            $productCounts['all'] = $category->products()->count();

            // Apply the price filter within the category
            $products = $category->products()
                ->where(function ($q) use ($priceFilter) {
                    if ($priceFilter == 1) {
                        $q->where('price', '<=', 100000);
                    } elseif ($priceFilter == 2) {
                        $q->where('price', '>', 100000);
                    }
                })
                ->with('authors')
                ->paginate(16);
        }

        return view('page.product', compact('products', 'cart', 'productCounts'));
    }

    public function showPromotionalProducts(Request $request)
    {
        $cart = session()->get('cart', []);

        $query = Products::where('weekly_discount', 1)
            ->where('isVisible', 1)
            ->where('remaining', '>', 0)
            ->whereNotNull('discount_price');

        $priceFilter = $request->input('priceFilter');
        if ($priceFilter && in_array($priceFilter, [1, 2])) {
            $query->where('price', ($priceFilter == 1) ? '<=' : '>', 100000);
        }

        $promotionalProducts = $query->paginate(16);
        $promotionalProductsCount = $promotionalProducts->total(); // Get the total count

        return view('page.promotional', compact('promotionalProducts', 'promotionalProductsCount', 'cart'));
    }



    public function newsProduct(Request $request)
    {
        $cart = session()->get('cart', []);

        $startOfWeek = Carbon::now()->startOfWeek();
        $query = Products::where('isVisible', 1)
            ->whereDate('created_at', '>=', $startOfWeek)
            ->where('remaining', '>', 0)
            ->orderBy('created_at', 'desc');

        // Filter by price
        $priceFilter = $request->input('priceFilter');
        if ($priceFilter && in_array($priceFilter, [1, 2])) {
            $query->where('price', ($priceFilter == 1) ? '<=' : '>', 100000);
        }

        $newestProducts = $query->paginate(16);
        $newestProductsCount = $newestProducts->total(); // Get the total count

        return view('page.newsproduct', compact('newestProducts', 'newestProductsCount', 'cart'));
    }


    public function contactus()
    {
        $cart = session()->get('cart', []);

        return view('page.contactus', compact('cart'));
    }

    public function TermsofUse()
    {
        $cart = session()->get('cart', []);

        return view('page.TermsofUse', compact('cart'));
    }

    public function submitContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        $contact = new Contact([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['comment'],
        ]);

        $contact->save();

        return response()->json(['success' => true]);
    }

    public function author($author_id)
    {
        $cart = session()->get('cart', []);

        $author = Author::where('id', $author_id)->first();

        if (!$author) {
            abort(404);
        }

        $products = $author->products()->paginate(8);

        $productCount = $products->total();

        return view('page.author', compact('author', 'products', 'productCount', 'cart'));
    }


    public function submitReview(Request $request)
    {
        // Validate the form data
        $request->validate([
            'starRating' => 'required|integer|min:1|max:5',
            'reviewContent' => 'required|string',
        ]);

        // Create a new review
        Reviews::create([
            'product_id' => $request->input('product_id'), // Make sure you pass product_id to the form
            'user_id' => auth()->user()->id, // Assuming you're using authentication
            'rating' => $request->input('starRating'),
            'comment' => $request->input('reviewContent'),
        ]);

        // Optionally, you can redirect the user back or to a specific page
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function askanswer()
    {
        $cart = session()->get('cart', []);

        return view('page.askanswer', compact('cart'));
    }

    public function vision()
    {
        $cart = session()->get('cart', []);

        return view('page.vison', compact('cart'));
    }
}
