@extends('layouts.admin')

@section('title', 'Order Details')

@section('header', 'Order Details')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card admin-card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Order #{{ $order['id'] }}</h5>
                <div>
                    <span class="status-badge {{ strtolower($order['status']) }} me-2">
                        {{ $order['status'] }}
                    </span>
                    <span class="status-badge {{ strtolower($order['payment_status']) }}">
                        {{ $order['payment_status'] }}
                    </span>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="text-muted mb-3">Customer Information</h6>
                        <p class="mb-1"><strong>Name:</strong> {{ $order['customer'] }}</p>
                        <p class="mb-1"><strong>Email:</strong> {{ $order['email'] }}</p>
                        <p class="mb-0"><strong>Phone:</strong> {{ $order['phone'] }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted mb-3">Order Information</h6>
                        <p class="mb-1"><strong>Date:</strong> {{ $order['created_at'] }}</p>
                        <p class="mb-1"><strong>Payment Method:</strong> {{ $order['payment_method'] }}</p>
                        <p class="mb-0"><strong>Order Status:</strong> {{ $order['status'] }}</p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="text-muted mb-3">Billing Address</h6>
                        <p class="mb-0">{{ $order['billing_address'] }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted mb-3">Shipping Address</h6>
                        <p class="mb-0">{{ $order['shipping_address'] }}</p>
                    </div>
                </div>

                <h6 class="text-muted mb-3">Order Items</h6>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order['items'] as $item)
                                <tr>
                                    <td>{{ $item['product_name'] }}</td>
                                    <td>${{ number_format($item['price'], 2) }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>${{ number_format($item['subtotal'], 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-end"><strong>Subtotal:</strong></td>
                                <td>${{ number_format($order['subtotal'], 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end"><strong>Tax:</strong></td>
                                <td>${{ number_format($order['tax'], 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end"><strong>Shipping:</strong></td>
                                <td>${{ number_format($order['shipping'], 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                <td><strong>${{ number_format($order['total'], 2) }}</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <h6 class="text-muted mb-3">Update Order Status</h6>
                <form action="{{ route('admin.orders.update-status', $order['id']) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <select class="form-select" name="status" required>
                                    <option value="Pending" {{ $order['status'] == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Processing" {{ $order['status'] == 'Processing' ? 'selected' : '' }}>Processing</option>
                                    <option value="Completed" {{ $order['status'] == 'Completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="Cancelled" {{ $order['status'] == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    <option value="Refunded" {{ $order['status'] == 'Refunded' ? 'selected' : '' }}>Refunded</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">Update Status</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card admin-card">
            <div class="card-header">
                <h5 class="mb-0">Order Notes</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Add a note about this order..."></textarea>
                </div>
                <button class="btn btn-primary">Add Note</button>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card admin-card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-outline-primary">
                        <i class="fas fa-print me-2"></i> Print Invoice
                    </a>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="fas fa-envelope me-2"></i> Email Invoice to Customer
                    </a>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="fas fa-truck me-2"></i> Create Shipment
                    </a>
                    <a href="#" class="btn btn-outline-danger">
                        <i class="fas fa-times me-2"></i> Cancel Order
                    </a>
                </div>
            </div>
        </div>

        <div class="card admin-card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Customer Details</h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-shrink-0">
                        <div class="avatar-placeholder">
                            <span>{{ substr($order['customer'], 0, 1) }}</span>
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ $order['customer'] }}</h6>
                        <small class="text-muted">Customer since June 2023</small>
                    </div>
                </div>

                <div class="mb-3">
                    <p class="mb-1"><strong>Email:</strong> {{ $order['email'] }}</p>
                    <p class="mb-1"><strong>Phone:</strong> {{ $order['phone'] }}</p>
                    <p class="mb-0"><strong>Total Orders:</strong> 1</p>
                </div>

                <a href="#" class="btn btn-sm btn-outline-primary">View Customer Profile</a>
            </div>
        </div>

        <div class="card admin-card">
            <div class="card-header">
                <h5 class="mb-0">Payment Information</h5>
            </div>
            <div class="card-body">
                <p class="mb-1"><strong>Payment Method:</strong> {{ $order['payment_method'] }}</p>
                <p class="mb-1"><strong>Payment Status:</strong> {{ $order['payment_status'] }}</p>
                <p class="mb-1"><strong>Transaction ID:</strong> TXN123456789</p>
                <p class="mb-0"><strong>Payment Date:</strong> {{ $order['created_at'] }}</p>
            </div>
        </div>
    </div>
</div>

<style>
    .avatar-placeholder {
        width: 40px;
        height: 40px;
        background-color: #e6f0ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-weight: bold;
    }
</style>
@endsection
