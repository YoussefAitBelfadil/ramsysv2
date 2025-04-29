<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::getFeaturedProducts();
        return view('home', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }
}
