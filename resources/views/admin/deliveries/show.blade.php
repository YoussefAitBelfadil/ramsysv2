@extends('layouts.admin')

@section('title', 'Delivery Details')

@section('header', 'Delivery Details')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card admin-card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Delivery #{{ $delivery['id'] }}</h5>
                <span class="status-badge {{ strtolower($delivery['status']) }}">
                    {{ $delivery['status'] }}
                </span>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6 class="text-muted mb-3">Delivery Information</h6>
                        <p class="mb-1"><strong>Order ID:</strong> #{{ $delivery['order_id'] }}</p>
                        <p class="mb-1"><strong>Tracking Number:</strong> {{ $delivery['tracking_number'] }}</p>
                        <p class="mb-1"><strong>Carrier:</strong> {{ $delivery['carrier'] }}</p>
                        <p class="mb-1"><strong>Estimated Delivery:</strong> {{ $delivery['estimated_delivery'] }}</p>
                        <p class="mb-1"><strong>Created:</strong> {{ $delivery['created_at'] }}</p>
                        <p class="mb-0"><strong>Last Updated:</strong> {{ $delivery['updated_at'] }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted mb-3">Customer Information</h6>
                        <p class="mb-1"><strong>Name:</strong> {{ $delivery['customer'] }}</p>
                        <p class="mb-1"><strong>Email:</strong> {{ $delivery['email'] }}</p>
                        <p class="mb-1"><strong>Phone:</strong> {{ $delivery['phone'] }}</p>
                        <p class="mb-0"><strong>Shipping Address:</strong> {{ $delivery['address'] }}</p>
                    </div>
                </div>

                <h6 class="text-muted mb-3">Items in Delivery</h6>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($delivery['items'] as $item)
                                <tr>
                                    <td>{{ $item['product_name'] }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td>${{ number_format($item['price'], 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <h6 class="text-muted mb-3">Update Delivery Status</h6>
                <form action="{{ route('admin.deliveries.update-status', $delivery['id']) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                                <select class="form-select" name="status" required>
                                    <option value="Processing" {{ $delivery['status'] == 'Processing' ? 'selected' : '' }}>Processing</option>
                                    <option value="In Transit" {{ $delivery['status'] == 'In Transit' ? 'selected' : '' }}>In Transit</option>
                                    <option value="Out for Delivery" {{ $delivery['status'] == 'Out for Delivery' ? 'selected' : '' }}>Out for Delivery</option>
                                    <option value="Delivered" {{ $delivery['status'] == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                    <option value="Failed Delivery" {{ $delivery['status'] == 'Failed Delivery' ? 'selected' : '' }}>Failed Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="notes" placeholder="Add notes (optional)">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card admin-card">
            <div class="card-header">
                <h5 class="mb-0">Tracking History</h5>
            </div>
            <div class="card-body p-0">
                <div class="timeline p-4">
                    @foreach($delivery['tracking_history'] as $history)
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">{{ $history['status'] }}</h6>
                                <p class="mb-1">{{ $history['description'] }}</p>
                                <p class="text-muted mb-0 small">
                                    <i class="fas fa-map-marker-alt me-1"></i> {{ $history['location'] }}
                                    <span class="ms-2">
                                        <i class="fas fa-clock me-1"></i> {{ $history['date'] }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
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
                        <i class="fas fa-print me-2"></i> Print Shipping Label
                    </a>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="fas fa-envelope me-2"></i> Send Tracking Info to Customer
                    </a>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="fas fa-truck me-2"></i> View Carrier Details
                    </a>
                    <a href="{{ route('admin.orders.show', $delivery['order_id']) }}" class="btn btn-outline-primary">
                        <i class="fas fa-shopping-cart me-2"></i> View Order Details
                    </a>
                </div>
            </div>
        </div>

        <div class="card admin-card">
            <div class="card-header">
                <h5 class="mb-0">Delivery Map</h5>
            </div>
            <div class="card-body">
                <div class="delivery-map mb-3">
                    <img src="https://via.placeholder.com/400x300?text=Delivery+Map" alt="Delivery Map" class="img-fluid rounded">
                </div>
                <p class="text-muted small mb-0">
                    <i class="fas fa-info-circle me-1"></i> This is a placeholder for a real delivery tracking map. In a production environment, this would be integrated with a mapping service like Google Maps or a shipping carrier's API.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline-item {
        position: relative;
        padding-bottom: 25px;
    }

    .timeline-item:last-child {
        padding-bottom: 0;
    }

    .timeline-marker {
        position: absolute;
        left: -30px;
        top: 0;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background-color: var(--primary-color);
        border: 3px solid white;
        box-shadow: 0 0 0 1px var(--primary-color);
    }

    .timeline-item:not(:last-child)::after {
        content: '';
        position: absolute;
        left: -23px;
        top: 15px;
        bottom: 0;
        width: 2px;
        background-color: #e9ecef;
    }
</style>
@endsection
