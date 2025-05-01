<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     */
    public function index()
    {
        $reviews = ProductReview::with(['user', 'product'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.review', compact('reviews'));
    }

    /**
     * Show reviews pending approval.
     */
    public function pending()
    {
        $reviews = ProductReview::with(['user', 'product'])
            ->where('status', 'pending')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.review', compact('reviews'));
    }

    /**
     * Approve a review.
     */
    public function approve($id)
    {
        $review = ProductReview::findOrFail($id);
        $review->status = 'approved';
        $review->save();

        return back()->with('success', 'Review approved successfully.');
    }

    /**
     * Reject a review.
     */
    public function reject($id)
    {
        $review = ProductReview::findOrFail($id);
        $review->status = 'rejected';
        $review->save();

        return back()->with('success', 'Review rejected successfully.');
    }

    /**
     * Delete a review.
     */
    public function destroy($id)
    {
        $review = ProductReview::findOrFail($id);
        $review->delete();

        return back()->with('success', 'Review deleted successfully.');
    }
}
