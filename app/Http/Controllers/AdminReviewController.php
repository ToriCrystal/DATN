<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\User;
use Stripe\Review;
use Illuminate\Pagination\Paginator;

class AdminReviewController extends Controller
{

    public function index()
    {
        $reviews = Reviews::all();
        $averageRating = $reviews->avg('rating');

        $goodReviews = Reviews::where('rating', '>=', 3)->paginate(10);
        $badReviews = Reviews::where('rating', '<', 3)->paginate(10);

        return view('admin.review.index', compact('goodReviews', 'badReviews', 'averageRating'));
    }


    public function destroy($id)
    {
        $review = Reviews::find($id);

        if ($review) {
            $review->delete();
            return redirect()->back()->with('message', 'Đánh giá đã được xóa thành công.');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy đánh giá.');
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $review = Reviews::find($id);
        $review->status = $request->input('status');
        $review->save();
    
        return redirect()->back();
    }
    
}
