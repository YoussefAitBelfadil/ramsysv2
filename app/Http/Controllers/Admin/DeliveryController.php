<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    public function index()
    {
        // For now, we'll use dummy data
        $deliveries = [
            [
                'id' => 1,
                'order_id' => 1001,
                'customer' => 'John Doe',
                'address' => '123 Main St, City, Country',
                'status' => 'In Transit',
                'tracking_number' => 'TRK123456789',
                'estimated_delivery' => '2023-06-15',
                'created_at' => '2023-06-10',
            ],
            [
                'id' => 2,
                'order_id' => 1002,
                'customer' => 'Jane Smith',
                'address' => '456 Oak Ave, Town, Country',
                'status' => 'Delivered',
                'tracking_number' => 'TRK987654321',
                'estimated_delivery' => '2023-06-12',
                'created_at' => '2023-06-08',
            ],
            [
                'id' => 3,
                'order_id' => 1003,
                'customer' => 'Robert Johnson',
                'address' => '789 Pine Rd, Village, Country',
                'status' => 'Processing',
                'tracking_number' => 'TRK456789123',
                'estimated_delivery' => '2023-06-18',
                'created_at' => '2023-06-11',
            ],
        ];

        return view('admin.deliveries.index', compact('deliveries'));
    }

    public function show($id)
    {
        // For now, we'll use dummy data
        $delivery = [
            'id' => $id,
            'order_id' => 1000 + $id,
            'customer' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '123-456-7890',
            'address' => '123 Main St, City, Country',
            'status' => 'In Transit',
            'tracking_number' => 'TRK123456789',
            'carrier' => 'FedEx',
            'estimated_delivery' => '2023-06-15',
            'created_at' => '2023-06-10',
            'updated_at' => '2023-06-11',
            'tracking_history' => [
                [
                    'date' => '2023-06-11 14:30:00',
                    'status' => 'In Transit',
                    'location' => 'Distribution Center',
                    'description' => 'Package in transit to delivery location',
                ],
                [
                    'date' => '2023-06-10 09:15:00',
                    'status' => 'Processing',
                    'location' => 'Warehouse',
                    'description' => 'Package has been processed and is ready for shipment',
                ],
            ],
            'items' => [
                [
                    'product_name' => 'Gaming PC - RTX 4080',
                    'quantity' => 1,
                    'price' => 2499.99,
                ],
            ],
        ];

        return view('admin.deliveries.show', compact('delivery'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:Processing,In Transit,Out for Delivery,Delivered,Failed Delivery',
            'notes' => 'nullable|string',
        ]);

        // In a real application, you would update the delivery status in the database
        // For now, we'll just redirect with a success message

        return redirect()->route('admin.deliveries.show', $id)
            ->with('success', 'Delivery status updated successfully.');
    }
}
