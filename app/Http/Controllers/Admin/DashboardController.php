<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    public function index()
    {
        // For a real application, you would get actual counts from the database
        $stats = [
            'products' => count(Product::all()),
            'users' => User::where('role', 'customer')->count(),
            'orders' => 0, // Placeholder for now
            'revenue' => 0, // Placeholder for now
        ];

        $recentOrders = []; // Placeholder for now

        return view('admin.dashboard', compact('stats', 'recentOrders'));
    }
}
