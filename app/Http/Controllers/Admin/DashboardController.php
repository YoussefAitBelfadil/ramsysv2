<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    public function index()
    {
        $stats = [
            'products' => count(Product::all()),
            'users' => User::where('role', 'customer')->count(),
            'orders' => 0,
            'revenue' => 0,
        ];

        $recentOrders = [];

        return view('admin.dashboard', compact('stats', 'recentOrders'));
    }
}
