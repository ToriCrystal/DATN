<?php

namespace App\Http\Controllers\admin\comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentProduct;
use App\Models\CommentPost;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminCommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
    }
    
    // public function allbl()
    // {
    //     $commentsPost = CommentPost::get();
    //     $commentsProduct = CommentProduct::get();

    //     $allComments = $commentsPost->concat($commentsProduct);

    //     $perPage = 10; // Number of items to display per page

    //     $currentPage = request('page') ?: 1; // Get the current page from the URL

    //     $paginatedAllComments = new LengthAwarePaginator(
    //         $allComments->forPage($currentPage, $perPage),
    //         $allComments->count(),
    //         $perPage,
    //         $currentPage,
    //         ['path' => url('/admin/comment')]
    //     );

    //     return view('admin.comment.allbl', compact('paginatedAllComments'));
    // }
    public function allblpost()
    {
        $activeComments = CommentPost::where('isVisible', '1')->with('post')->orderBy('created_at', 'desc')->limit(20)->get();
        $unactiveComments = CommentPost::where('isVisible', '0')->with('post')->orderBy('created_at', 'desc')->limit(20)->get();
        // return $activeComments;
        $stringLength = 80;
        return view('admin.comment.allblpost', ['activeComments' => $activeComments, 'unactiveComments' => $unactiveComments, 'stringLength' => $stringLength]);
    }
    public function allblpro()
    {
        $activeComments = CommentProduct::where('isVisible', '1')->with('product')->orderBy('created_at', 'desc')->limit(20)->get();
        $unactiveComments = CommentProduct::where('isVisible', '0')->with('product')->orderBy('created_at', 'desc')->limit(20)->get();
        $stringLength = 80;
        // return $activeComments;
        return view('admin.comment.allblpro', ['activeComments' => $activeComments, 'unactiveComments' => $unactiveComments, 'stringLength' => $stringLength]);
    }
    public function toggleStatusPro(int $id)
    {
        $comment = CommentPost::find($id);
    
        if (!$comment) {
            return response()->json(['error' => 'Bình luận không tồn tại'], 404);
        }
    
        $comment->isVisible = !$comment->isVisible; 
    
        $comment->save();
        
         return response()->json(['success' => 'Thay đổi trạng thái bình luận thành công'], 200);

    }
    
 public function toggleStatusPost(int $id)
    {
        $comment = CommentPost::find($id);
    
        if (!$comment) {
            return response()->json(['error' => 'Bình luận không tồn tại'], 404);
        }
    
        $comment->isVisible = !$comment->isVisible; 
    
        $comment->save();
    
        return response()->json(['success' => 'Thay đổi trạng thái bình luận thành công'], 200);
    }

    // public function onebl()
    // {
    // }
    // public function updatebl(int $id)
    // {
    //     $comment = Comment::find($id);
    //     $comment->toggleIsVisible();
    //     return redirect()->route('admin.allbl');
    // }
}
