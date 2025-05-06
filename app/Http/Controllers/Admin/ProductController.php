<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }
///////////////////////////////////////////////////////////////////////////////////

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('admin.products.index')
                ->with('error', 'Product not found.');
        }

        return view('admin.products.show', compact('product'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'short_description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'specs' => 'required|array',
        ]);

        $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        // $validatedData["image"] =$request->file("image")->store('images' ,"public") ;

        Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'short_description' => $validatedData['short_description'],
            'price' => $validatedData['price'],
            'category' => $validatedData['category'],
            'image' =>  $uploadedFileUrl,
            'specs' => json_encode($validatedData['specs']),
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product created successfully.');
    }

    /////////////////////////////////////////////////////////////////////////////
    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('admin.products.index')
                ->with('error', 'Product not found.');
        }

        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'specs' => 'required|array',
        ]);

        // In a real application, you would update the product in the database
        // For now, we'll just redirect with a success message

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        // In a real application, you would delete the product from the database
        // For now, we'll just redirect with a success message

        return redirect()->route('admin.products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
