<?php
namespace App\Http\Controllers\admin\author;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
class AdminAuthorController extends Controller
{
    public function __construct(){
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
    }  
    public function alltg(){
        $authors = Author::withCount('products')->orderBy('products_count', 'desc')->paginate(15);
        return view('admin.author.alltg', ['authors' => $authors]);
    }
    public function onetg($id){
        $author = Author::where('id', $id)->first();
        if (!$author) return view('admin.errors.404');
        $productsByAuthor = $author->products()->latest()->take(5)->get();
        return view('admin.author.onetg', ['author' => $author, 'productsByAuthor' => $productsByAuthor]);
    }
    public function addtg() {
        return view('admin.author.form');
    }
    public function edittg(int $id){
        $author = Author::where('id', $id)->first();
        return view('admin.author.form', ['author' => $author]);
    }
    public function createtg(AuthorRequest $request) {
        if ($request->hasFile('author_img_cloudinary')) {
            $imgUrl = Cloudinary::upload($request->file('author_img_cloudinary')->getRealPath())->getSecurePath();
        } else {
            $imgUrl = '';
        }
        if ($request->hasFile('author_img')) {
            $imagePath = $request->author_img->store('upload/img', 'public');
        } else {
            $imagePath = '';
        }
        $debutDate = $request->author_debutDate;
        if (is_null($request->author_debutDate)) {
            $currentDateTime = Carbon::now();
            $debutDate = $currentDateTime->format('YmdHis');
        }
        Author::create([
            'author_name' => $request->author_name,
            'author_description' => $request->author_description,
            'author_debutDate' => $debutDate,
            'author_img' => $imagePath,
            'author_img_cloudinary' => $imgUrl,
        ]);
        return redirect()->route('admin.alltg');
    }
    public function updatetg(AuthorRequest $request, int $id)
    {
        $author = Author::where('id', $id)->first();
        if ($request->hasFile('author_img_cloudinary')) {
            $string = $author->author_img_cloudinary;
            $token = explode('/', $string);
            $token2 = explode('.', $token[sizeof($token) - 1]);
            Cloudinary::destroy($token2[0]);
            $imgUrl = Cloudinary::upload($request->file('author_img_cloudinary')->getRealPath())->getSecurePath();
        } else {
            $imgUrl = $author->author_img_cloudinary;
        }
        if ($request->hasFile('author_img')) {
            $imagePath = $request->author_img->store('upload/img', 'public');
        } else {
            $imagePath = $author->author_img;
        }
        $author->update([
            'author_name' => $request->author_name,
            'author_description' => $request->author_description,
            'author_debutDate' => $request->author_debutDate,
            'author_img_cloudinary' => $imgUrl,
            'author_img' => $imagePath,
        ]);
        return redirect()->route('admin.alltg');
    }

    public function deletetg(Request $request)
    {
        $author = Author::where('id', $request->id)->first();
        // $string = $author->author_img;
        // $token = explode('/', $string);
        // $token2 = explode('.', $token[sizeof($token) - 1]);
        // Cloudinary::destroy($token2[0]);
        $author->delete();
        return redirect()->route('admin.alltg');
    }
    public function alltgInTrash()
    {
        $author = Author::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.author.alltgintrash',  compact('author'));
    }
    public function destroytg(int $id)
    {
        $author = Author::withTrashed()->find($id);
        $author->forceDelete();
    }
    public function restoretg(int $id)
    {
        $author = Author::withTrashed()->find($id);
        $author->restore();
        return redirect()->back()->with('message', 'Tác giả đã được khôi phục thành công.');
    }
}
