<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    /**
     * Store a newly created review in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|min:10|max:1000',
        ]);

        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'You must be logged in to leave a review.');
        }

        // Check if user has already reviewed this product
        if (ProductReview::hasUserReviewed(Auth::id(), $validated['product_id'])) {
            return back()->with('error', 'You have already reviewed this product.');
        }

        // Create the review
        $review = new ProductReview([
            'user_id' => Auth::id(),
            'product_id' => $validated['product_id'],
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
            'status' => 'pending' // or 'approved' if you don't want moderation
        ]);

        $review->save();

        return back()->with('success', 'Your review has been submitted and is pending approval.');
    }

    /**
     * Load reviews for a product via AJAX
     */
    public function loadReviews($productId)
    {
        $reviews = ProductReview::getApprovedReviews($productId);
        $averageRating = ProductReview::getAverageRating($productId);
        $reviewCount = ProductReview::getReviewCount($productId);

        return response()->json([
            'reviews' => $reviews,
            'averageRating' => $averageRating,
            'reviewCount' => $reviewCount
        ]);
    }
}
