<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'rating',
        'comment',
        'status'
    ];

    /**
     * Get the user that wrote the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product that was reviewed.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get approved reviews for a product
     */
    public static function getApprovedReviews($productId)
    {
        return self::where('product_id', $productId)
            ->where('status', 'approved')
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * Get average rating for a product
     */
    public static function getAverageRating($productId)
    {
        $average = self::where('product_id', $productId)
            ->where('status', 'approved')
            ->avg('rating');

        return round($average, 1) ?: 0;
    }

    /**
     * Get review count for a product
     */
    public static function getReviewCount($productId)
    {
        return self::where('product_id', $productId)
            ->where('status', 'approved')
            ->count();
    }

    /**
     * Check if user has already reviewed this product
     */
    public static function hasUserReviewed($userId, $productId)
    {
        return self::where('user_id', $userId)
            ->where('product_id', $productId)
            ->exists();
    }
}
