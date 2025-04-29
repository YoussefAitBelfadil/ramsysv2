<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'product_id', 'quantity', 'price'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        // Since we're using a dummy Product model, we'll implement a method to get product details
        return Product::find($this->product_id);
    }

    public function getSubtotalAttribute()
    {
        return $this->price * $this->quantity;
    }
}
