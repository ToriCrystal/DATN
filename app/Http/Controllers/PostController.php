<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryDetail;
use App\Models\Post;
use App\Models\CommentPost;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\CategoryPost;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Products;
use App\Models\Author;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->shareData();
    }

    public function shareData()
    {
        $newsPostCategory = CategoryPost::has('posts', '>', 0)->get();
        $topProducts = Product::where('isHot', 1)
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->take(4)
            ->get();
        $topAuthors = Author::withCount('products')
            ->orderByDesc('products_count')
            ->take(4)
            ->get();
        $category = Category::orderBy('created_at', 'desc')->withCount('products')->get();
        $products = Product::paginate(16);
        $totalCount = Product::count();
        $sumPro = Product::count();
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

                $wishlistItems = Product::whereIn('id', $wishlist)->get();
            }
        }
        $attributes = [];
        foreach ($products as $product) {
            $attributes[$product->id] = json_decode($product->attributes, true);
        }
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
        ]);
    }
    public function newsCategoryShow($category_slug)
    {
        $cart = session()->get('cart', []);
        $newsCategory = Post::join('posts_category', 'posts.post_category_id', '=', 'posts_category.id')
            ->join('admins', 'posts.admin_id', '=', 'admins.id')
            ->where('posts_category.post_category_slug', $category_slug)
            ->select('posts.*', 'admins.name as author_name')
            ->paginate(16);
        return view('page.news-category', compact('newsCategory', 'cart'));
    }

    public function news()
    {
        $cart = session()->get('cart', []);
        $news = Post::join('admins', 'posts.admin_id', '=', 'admins.id')
            ->join('posts_category', 'posts.post_category_id', '=', 'posts_category.id')
            ->select('posts.*', 'admins.name as author_name', 'posts_category.post_category_name', 'posts_category.post_category_slug')
            ->withCount('comments')
            ->paginate(12);
        return view('page.news', compact('news', 'cart'));
    }

    public function newsDetail($id)
    {
        $cart = session()->get('cart', []);

        try {
            $newsDetail = Post::join('posts_category', 'posts.post_category_id', '=', 'posts_category.id')
                ->join('admins', 'posts.admin_id', '=', 'admins.id')
                ->leftJoin('comments_post', 'posts.id', '=', 'comments_post.post_id')
                ->where('posts.id', $id)
                ->select(
                    'posts.id',
                    'posts.post_category_id',
                    'posts.post_title',
                    'posts.post_slug',
                    'posts.post_excerpt',
                    'posts.post_thumbnail',
                    'posts.post_content',
                    'posts.status',
                    'posts.published_at',
                    'posts.views', // Add views to the selected columns
                    'posts_category.post_category_name',
                    'posts_category.post_category_slug',
                    'admins.name as author_name',
                    'admins.image as author_image',
                    \DB::raw('COUNT(comments_post.id) as comment_count')
                )
                ->groupBy(
                    'posts.id',
                    'posts.post_category_id',
                    'posts.post_title',
                    'posts.post_slug',
                    'posts.post_excerpt',
                    'posts.post_thumbnail',
                    'posts.post_content',
                    'posts.status',
                    'posts.published_at',
                    'posts_category.post_category_name',
                    'posts_category.post_category_slug',
                    'posts.views',
                    'admins.name',
                    'admins.image'
                )
                ->firstOrFail();

            // Tăng lượt xem
            $newsDetail->increment('views');

            $comments = CommentPost::with('user')
                ->where('post_id', $newsDetail->id)
                ->get();

            $previousPost = Post::where('id', '<', $newsDetail->id)->orderBy('id', 'desc')->first();
            $nextPost = Post::where('id', '>', $newsDetail->id)->orderBy('id', 'asc')->first();

            return view('page.news-detail', compact('newsDetail', 'comments', 'previousPost', 'nextPost', 'cart'));
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function newsNext($id)
    {
        $nextPost = Post::where('id', '>', $id)->orderBy('id', 'asc')->first();
        if ($nextPost) {
            return redirect()->route('newsDetail', $nextPost->id);
        } else {
            return redirect()->back()->with('error', 'Không còn tin nào kế tiếp');
        }
    }
    public function newsProvious($id)
    {
        $previousPost = Post::where('id', '<', $id)->orderBy('id', 'desc')->first();
        if ($previousPost) {
            return redirect()->route('newsDetail', $previousPost->id);
        } else {
            return redirect()->back()->with('error', 'Không còn tin nào trước đó');
        }
    }
    public function newsCommentStore(Request $request)
    {
        $request->validate([
            'comment' => 'required|max:150',
        ]);
        $userType = auth()->guard('admin')->check() ? 'admin' : 'user';
        $userId = $userType == 'admin' ? auth('admin')->id() : auth()->id();
        $commentData = [
            'post_id'   => $request->post_id,
            'message'   => $request->comment,
            'user_id'   => $userType == 'user' ? $userId : null,
            'admin_id'  => $userType == 'admin' ? $userId : null,
            'user_type' => $userType,
        ];
        try {
            $comment = CommentPost::create($commentData);
            return response()->json(['success' => true, 'comment' => $comment]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
    public function updateNewsViewCount($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->view_count += 1;
            $post->save();
        }
        return redirect()->route('newsDetail', $id);
    }
}
