<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index()
    {
        $cart = $this->getCart();
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::find($request->product_id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = $this->getCart();

        // Check if product already exists in cart
        $cartItem = $cart->items()->where('product_id', $request->product_id)->first();

        if ($cartItem) {
            // Update quantity if product already in cart
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            // Add new item to cart
            $cart->items()->create([
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $product['price']
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = $this->getCart();
        $cartItem = $cart->items()->findOrFail($id);

        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
    }

    public function remove($id)
    {
        $cart = $this->getCart();
        $cart->items()->findOrFail($id)->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }

    public function clear()
    {
        $cart = $this->getCart();
        $cart->items()->delete();

        return redirect()->route('cart.index')->with('success', 'Cart cleared successfully.');
    }

    private function getCart()
    {
        if (Auth::check()) {
            // For logged in users
            $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        } else {
            // For guests, use session ID
            $sessionId = session()->getId();
            $cart = Cart::firstOrCreate(['session_id' => $sessionId]);
        }

        return $cart;
    }

    // Method to merge guest cart with user cart after login
    public function mergeCart()
    {
        if (Auth::check()) {
            $sessionId = session()->getId();
            $guestCart = Cart::where('session_id', $sessionId)->first();
            $userCart = Cart::firstOrCreate(['user_id' => Auth::id()]);

            if ($guestCart && $guestCart->items->count() > 0) {
                foreach ($guestCart->items as $item) {
                    $existingItem = $userCart->items()->where('product_id', $item->product_id)->first();

                    if ($existingItem) {
                        $existingItem->quantity += $item->quantity;
                        $existingItem->save();
                    } else {
                        $userCart->items()->create([
                            'product_id' => $item->product_id,
                            'quantity' => $item->quantity,
                            'price' => $item->price
                        ]);
                    }
                }

                // Delete the guest cart
                $guestCart->delete();
            }
        }
    }
}
