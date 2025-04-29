@extends('layouts.admin')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="admin-stat-card products">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="stat-label">Products</div>
                    <div class="stat-value">{{ $stats['products'] }}</div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-box"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="admin-stat-card users">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="stat-label">Customers</div>
                    <div class="stat-value">{{ $stats['users'] }}</div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="admin-stat-card orders">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="stat-label">Orders</div>
                    <div class="stat-value">{{ $stats['orders'] }}</div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="admin-stat-card revenue">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="stat-label">Revenue</div>
                    <div class="stat-value">${{ number_format($stats['revenue'], 2) }}</div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-xl-8">
        <div class="card admin-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Orders</h5>
                <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-primary">View All</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($recentOrders) > 0)
                                @foreach($recentOrders as $order)
                                    <tr>
                                        <td>#{{ $order['id'] }}</td>
                                        <td>{{ $order['customer'] }}</td>
                                        <td>${{ number_format($order['total'], 2) }}</td>
                                        <td>
                                            <span class="status-badge {{ strtolower($order['status']) }}">
                                                {{ $order['status'] }}
                                            </span>
                                        </td>
                                        <td>{{ $order['created_at'] }}</td>
                                        <td>
                                            <a href="{{ route('admin.orders.show', $order['id']) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center py-4">No orders found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card admin-card">
            <div class="card-header">
                <h5 class="mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-outline-primary">
                        <i class="fas fa-plus me-2"></i> Add New Product
                    </a>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-primary">
                        <i class="fas fa-list me-2"></i> View All Orders
                    </a>
                    <a href="{{ route('admin.deliveries.index') }}" class="btn btn-outline-primary">
                        <i class="fas fa-truck me-2"></i> Manage Deliveries
                    </a>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="fas fa-chart-line me-2"></i> Generate Reports
                    </a>
                </div>
            </div>
        </div>

        <div class="card admin-card mt-4">
            <div class="card-header">
                <h5 class="mb-0">System Status</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-server me-2 text-success"></i> Server Status
                        </span>
                        <span class="badge bg-success rounded-pill">Online</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-database me-2 text-success"></i> Database
                        </span>
                        <span class="badge bg-success rounded-pill">Connected</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-hdd me-2 text-warning"></i> Disk Usage
                        </span>
                        <span class="badge bg-warning rounded-pill">75%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-memory me-2 text-success"></i> Memory Usage
                        </span>
                        <span class="badge bg-success rounded-pill">45%</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
