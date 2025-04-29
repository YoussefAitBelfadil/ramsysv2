@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <div class="bg-primary text-white p-5 rounded">
                <h1>Welcome to Ramsys</h1>
                <p class="lead">Your trusted source for high-quality PCs and components</p>
                <p>Explore our wide range of products designed for gamers, professionals, and enthusiasts.</p>
            </div>
        </div>
    </div>

    <h2 class="mb-4">Featured Products</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($products as $product)
            <div class="col">
                <div class="card h-100 product-card">
                    <img src="{{ asset($product['image']) }}" class="card-img-top p-3 product-img" alt="{{ $product['name'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['short_description'] }}</p>
                        <div class="mt-auto">
                            <p class="fs-4 fw-bold text-primary">${{ number_format($product['price'], 2) }}</p>
                            <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
