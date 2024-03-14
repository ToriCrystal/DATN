<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use Stripe\Reviews;
use Illuminate\Pagination\Paginator;

class AdminReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::all();
        $averageRating = $reviews->avg('rating');

        $goodReviews = Review::where('rating', '>=', 3)->paginate(10);
        $badReviews = Review::where('rating', '<', 3)->paginate(10);

        return view('admin.review.index', compact('goodReviews', 'badReviews', 'averageRating'));
    }


    public function destroy($id)
    {
        $review = Review::find($id);

        if ($review) {
            $review->delete();
            return redirect()->back()->with('message', 'Đánh giá đã được xóa thành công.');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy đánh giá.');
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $review = Review::find($id);
        $review->status = $request->input('status');
        $review->save();
    
        return redirect()->back();
    }
    
}
