<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    public function index()
    {
        // For now, we'll use dummy data
        $orders = [
            [
                'id' => 1001,
                'customer' => 'John Doe',
                'email' => 'john.doe@example.com',
                'total' => 2499.99,
                'status' => 'Completed',
                'payment_status' => 'Paid',
                'created_at' => '2023-06-10',
            ],
            [
                'id' => 1002,
                'customer' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'total' => 1899.99,
                'status' => 'Processing',
                'payment_status' => 'Paid',
                'created_at' => '2023-06-08',
            ],
            [
                'id' => 1003,
                'customer' => 'Robert Johnson',
                'email' => 'robert.johnson@example.com',
                'total' => 589.99,
                'status' => 'Pending',
                'payment_status' => 'Pending',
                'created_at' => '2023-06-11',
            ],
        ];

        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        // For now, we'll use dummy data
        $order = [
            'id' => $id,
            'customer' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '123-456-7890',
            'billing_address' => '123 Main St, City, Country',
            'shipping_address' => '123 Main St, City, Country',
            'total' => 2499.99,
            'subtotal' => 2272.72,
            'tax' => 227.27,
            'shipping' => 0,
            'status' => 'Completed',
            'payment_status' => 'Paid',
            'payment_method' => 'Credit Card',
            'created_at' => '2023-06-10',
            'items' => [
                [
                    'product_name' => 'Gaming PC - RTX 4080',
                    'quantity' => 1,
                    'price' => 2499.99,
                    'subtotal' => 2499.99,
                ],
            ],
        ];

        return view('admin.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:Pending,Processing,Completed,Cancelled,Refunded',
        ]);

        // In a real application, you would update the order status in the database
        // For now, we'll just redirect with a success message
        return redirect()->route('admin.orders.show', $id)
            ->with('success', 'Order status updated successfully.');
    }
}
