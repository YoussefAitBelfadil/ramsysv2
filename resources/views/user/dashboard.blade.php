@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4 mb-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="avatar-placeholder mb-3">
                            <span class="display-4 text-primary">{{ substr(Auth::user()->name, 0, 1) }}</span>
                        </div>
                        <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                        <p class="text-muted small mb-0">{{ Auth::user()->email }}</p>
                    </div>

                    <hr>

                    <div class="list-group list-group-flush">
                        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action active">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                        <a href="{{ route('profile') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-edit me-2"></i> My Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-shopping-bag me-2"></i> My Orders
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-heart me-2"></i> Wishlist
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-address-book me-2"></i> Address Book
                        </a>
                        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action text-danger"
                           onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                        <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title mb-4">Dashboard</h2>
                    <p class="lead">Welcome back, {{ Auth::user()->name }}!</p>
                    <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="card-title mb-4">Recent Orders</h3>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="text-center py-4">
                                        <p class="text-muted mb-0">You haven't placed any orders yet.</p>
                                    </td>
                                </tr>
                                <!-- Sample order data (commented out for now) -->
                                <!--
                                <tr>
                                    <td>#1001</td>
                                    <td>May 15, 2023</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>$1,299.99</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                    </td>
                                </tr>
                                -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Account Summary -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <i class="fas fa-user-circle me-2 text-primary"></i> Account Details
                            </h5>
                            <p class="mb-1"><strong>Name:</strong> {{ Auth::user()->name }}</p>
                            <p class="mb-1"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                            <p class="mb-3"><strong>Member Since:</strong> {{ Auth::user()->created_at->format('F d, Y') }}</p>
                            <a href="{{ route('profile') }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit me-1"></i> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <i class="fas fa-map-marker-alt me-2 text-primary"></i> Default Address
                            </h5>
                            <p class="text-muted mb-3">You haven't added any addresses yet.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-plus me-1"></i> Add Address
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recommended Products -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4">Recommended For You</h3>

                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach(array_slice(\App\Models\Product::getFeaturedProducts(), 0, 3) as $product)
                            <div class="col">
                                <div class="card h-100 product-card">
                                    <img src="{{ asset($product['image']) }}" class="product-img" alt="{{ $product['name'] }}">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $product['name'] }}</h5>
                                        <div class="mt-auto">
                                            <p class="product-price">${{ number_format($product['price'], 2) }}</p>
                                            <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .avatar-placeholder {
        width: 80px;
        height: 80px;
        background-color: #e6f0ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .list-group-item {
        border: none;
        padding: 0.75rem 1rem;
        border-radius: 5px !important;
        margin-bottom: 0.25rem;
    }

    .list-group-item.active {
        background-color: var(--primary-color);
    }
</style>
@endsection
