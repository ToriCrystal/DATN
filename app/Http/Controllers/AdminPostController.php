<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\Order;
use App\Models\Post;
use App\Models\CategoryPost;
use Illuminate\Support\Str;
use Image;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
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

    public function newsarticlestore(Request $request)
    {

        // Handle file upload
        $imageName = null;
        if ($request->hasFile('post_thumbnail')) {
            $imageName = Cloudinary::upload($request->file('post_thumbnail')->getRealPath())->getSecurePath();
        }
        // Create a new Post instance
        $post = new Post([
            'post_title' => $request->input('post_title'),
            'post_slug' => Str::slug($request->input('post_title')),
            'post_excerpt' => $request->input('post_excerpt'),
            'post_thumbnail' => $imageName,
            'post_content' => $request->input('post_content'),
            'isHot' => $request->has('isHot') ? 1 : 0,
            'status' => $request->input('status', 0),
            'published_at' => $request->input('published_at'),
            'admin_id' => $request->input('admin_id'),
            'post_category_id' => $request->input('post_category_id'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            
        ]);
        // Save the Post instance
        $post->save();

        // Redirect with success message
        return redirect()->route('admin.news')->with('message', 'Tin tức đã được thêm thành công!');
    }

    public function uploadImage(Request $request)
    {
        try {
            $uploadedImage = $request->file('upload');
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->storeAs('public/content', $imageName);
            $url = asset('storage/content/' . $imageName);
            return response()->json(['url' => $url]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function newsarticledetails($id)
    {
        $newsarticledetails = Post::join('admins', 'posts.admin_id', '=', 'admins.id')
            ->select('posts.*', 'admins.name as author_name')
            ->find($id);
        return view('admin.news.newsarticle-details',  compact('newsarticledetails'));
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
        $newsarticle->post_excerpt = $request->input('post_excerpt');
        $newsarticle->post_content = $request->input('post_content');
        $newsarticle->post_category_id = $request->input('post_category_id');
        $newsarticle->published_at = $request->input('published_at');
        $newsarticle->isHot = $request->input('isHot');
        $newsarticle->status = $request->input('status');
        $newsarticle->meta_title = $request->input('meta_title');
        $newsarticle->meta_description = $request->input('meta_description');
        if ($request->hasFile('post_thumbnail')) {
            // $thumbnailPath = $request->file('post_thumbnail')->store('upload/img', 'public');

            $thumbnailPath = Cloudinary::upload($request->file('post_thumbnail')->getRealPath())->getSecurePath();
            $newsarticle->post_thumbnail = $thumbnailPath;

        }


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
        $category->save();
        return redirect()->route('admin.newsCategory')->with('message', 'Danh mục tin tức tạo thành công.');
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
    public function newsarticledelete($id)
    {
        Post::find($id)->delete();
    }
    public function newsarticleTrash()
    {
        $postsInTrash = Post::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.news.newsarticle-trash',  compact('postsInTrash'));
    }
    public function destroy(int $id)
    {
        $post = Post::withTrashed()->find($id);
        $post->forceDelete();
    }
    public function restore(int $id)
    {
        $post = Post::withTrashed()->find($id);
        $post->restore();
        return redirect()->back()->with('message', 'Tin tức đã được khôi phục thành công.');
    }
    public function newsCategoryInTrash()
    {
        $newsCategoryInTrash = CategoryPost::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.news.newscategory.newscategory-trash',  compact('newsCategoryInTrash'));
    }
    public function newsCategoryDelete($id)
    {
        $newsCategory = CategoryPost::where('id', $id)->withCount('posts')->first();
        if ($newsCategory->posts_count > 0) {
            return response()->json(['error' => 'Danh mục hiện tại đang còn bài viết, vui lòng xóa bài viết khỏi danh mục trước.'], 400);
        }
        CategoryPost::where('id', $id)->delete();
        return response()->json(['success' => 'Danh mục xóa thành công'], 200);
    }
    public function newsCategoryDestroy($id)
    {
        $newsCategory = CategoryPost::withTrashed()->find($id);
        $newsCategory->forceDelete();
    }
    public function newsCategoryRestore($id)
    {
        $newsCategory = CategoryPost::withTrashed()->find($id);
        $newsCategory->restore();
        return redirect()->back()->with('message', 'Danh mục đã được khôi phục thành công.');
    }
}
