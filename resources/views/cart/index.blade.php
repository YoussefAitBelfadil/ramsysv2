@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Shopping Cart</h1>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    @if($cart->items->count() > 0)
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart->items as $item)
                                        @php
                                            $product = $item->product();
                                        @endphp
                                        <tr>
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                                    <div class="ms-3">
                                                        <h6 class="mb-0">{{ $product['name'] }}</h6>
                                                        <small class="text-muted">{{ $product['category'] }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>${{ number_format($item->price, 2) }}</td>
                                            <td>
                                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="quantity-form">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="input-group input-group-sm" style="width: 120px;">
                                                        <button type="button" class="btn btn-outline-secondary quantity-btn" data-action="decrease">-</button>
                                                        <input type="number" name="quantity" class="form-control text-center quantity-input" value="{{ $item->quantity }}" min="1">
                                                        <button type="button" class="btn btn-outline-secondary quantity-btn" data-action="increase">+</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>${{ number_format($item->subtotal, 2) }}</td>
                                            <td>
                                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm text-danger" title="Remove item">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-4">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i> Continue Shopping
                    </a>

                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">
                            <i class="fas fa-trash me-2"></i> Clear Cart
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Order Summary</h5>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span>${{ number_format($cart->total, 2) }}</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>
                            <span>Free</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax</span>
                            <span>${{ number_format($cart->total * 0.1, 2) }}</span>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between mb-4">
                            <strong>Total</strong>
                            <strong class="text-primary">${{ number_format($cart->total * 1.1, 2) }}</strong>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <button class="btn btn-outline-primary" type="button">Apply</button>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg">
                                <i class="fas fa-lock me-2"></i> Proceed to Checkout
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">We Accept</h5>
                        <div class="d-flex gap-2 mb-3">
                            <div class="payment-icon">
                                <i class="fab fa-cc-visa fa-2x"></i>
                            </div>
                            <div class="payment-icon">
                                <i class="fab fa-cc-mastercard fa-2x"></i>
                            </div>
                            <div class="payment-icon">
                                <i class="fab fa-cc-amex fa-2x"></i>
                            </div>
                            <div class="payment-icon">
                                <i class="fab fa-cc-paypal fa-2x"></i>
                            </div>
                        </div>

                        <h5 class="card-title mb-3">Secure Checkout</h5>
                        <p class="text-muted small mb-0">
                            <i class="fas fa-lock me-2"></i> Your payment information is processed securely. We do not store credit card details nor have access to your credit card information.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center py-5">
                        <div class="mb-4">
                            <i class="fas fa-shopping-cart fa-4x text-muted"></i>
                        </div>
                        <h3 class="mb-3">Your cart is empty</h3>
                        <p class="text-muted mb-4">Looks like you haven't added anything to your cart yet.</p>
                        <a href="{{ route('home') }}" class="btn btn-primary">
                            <i class="fas fa-shopping-bag me-2"></i> Start Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<style>
    .quantity-input {
        border-left: 0;
        border-right: 0;
    }

    .payment-icon {
        color: #6c757d;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Quantity buttons functionality
        const quantityBtns = document.querySelectorAll('.quantity-btn');

        quantityBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.dataset.action;
                const form = this.closest('.quantity-form');
                const input = form.querySelector('.quantity-input');
                let value = parseInt(input.value);

                if (action === 'increase') {
                    input.value = value + 1;
                } else if (action === 'decrease' && value > 1) {
                    input.value = value - 1;
                }

                // Auto-submit the form when quantity changes
                form.submit();
            });
        });
    });
</script>
@endsection
