@extends('layouts.app')

@section('title', $product['name'])

@section('content')
    <div class="container mt-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
            </ol>
        </nav>

        <!-- Back Button -->
        <a href="{{ route('home') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back to Products
        </a>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="row">
                    <!-- Product Image -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="{{ asset($product['image']) }}" class="img-fluid product-detail-img" alt="{{ $product['name'] }}">

                        <!-- Thumbnail Gallery -->
                        <div class="row mt-3 g-2">
                            <div class="col-3">
                                <img src="{{ asset($product['image']) }}" class="img-fluid rounded border" alt="{{ $product['name'] }} - Thumbnail 1">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($product['image']) }}" class="img-fluid rounded border" alt="{{ $product['name'] }} - Thumbnail 2">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($product['image']) }}" class="img-fluid rounded border" alt="{{ $product['name'] }} - Thumbnail 3">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($product['image']) }}" class="img-fluid rounded border" alt="{{ $product['name'] }} - Thumbnail 4">
                            </div>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="col-lg-6">
                        <h1 class="product-detail-title">{{ $product['name'] }}</h1>

                        <!-- Product Rating -->
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <span class="ms-2 text-muted">(4.5/5 - 48 reviews)</span>
                        </div>

                        <p class="lead">{{ $product['description'] }}</p>

                        <!-- Product Price -->
                        <div class="product-detail-price">${{ number_format($product['price'], 2) }}</div>

                        <!-- Availability -->
                        <div class="mb-4">
                            <span class="badge bg-success p-2">
                                <i class="fas fa-check-circle me-1"></i> In Stock
                            </span>
                            <span class="ms-3 text-muted">
                                <i class="fas fa-shipping-fast me-1"></i> Free shipping
                            </span>
                        </div>

                        <!-- Quantity Selector -->
                        <div class="mb-4">
                            <label for="quantity" class="form-label fw-bold">Quantity</label>
                            <div class="input-group" style="width: 150px;">
                                <button class="btn btn-outline-secondary" type="button">-</button>
                                <input type="text" class="form-control text-center" id="quantity" value="1">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 d-md-flex mb-4">
                            <button class="btn btn-cart btn-lg">
                                <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                            </button>
                            <button class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-heart me-2"></i> Wishlist
                            </button>
                        </div>

                        <!-- Product Features -->
                        <div class="mt-4">
                            <h4>Key Features</h4>
                            <ul class="list-group list-group-flush">
                                @foreach(array_slice($product['specifications'], 0, 3) as $key => $value)
                                    <li class="list-group-item bg-transparent ps-0">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <strong>{{ $key }}:</strong> {{ $value }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Specifications -->
        <div class="card border-0 shadow-sm mt-4">
            <div class="card-body p-4">
                <h3 class="mb-4">Technical Specifications</h3>
                <table class="table specs-table">
                    <thead>
                        <tr>
                            <th>Specification</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product['specifications'] as $key => $value)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Related Products -->
        <section class="mt-5">
            <h3 class="section-title">You May Also Like</h3>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach(array_slice($products = \App\Models\Product::getFeaturedProducts(), 0, 4) as $relatedProduct)
                    @if($relatedProduct['id'] != $product['id'])
                        <div class="col">
                            <div class="card product-card">
                                <img src="{{ asset($relatedProduct['image']) }}" class="product-img" alt="{{ $relatedProduct['name'] }}">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $relatedProduct['name'] }}</h5>
                                    <div class="mt-auto">
                                        <p class="product-price">${{ number_format($relatedProduct['price'], 2) }}</p>
                                        <a href="{{ route('product.show', $relatedProduct['id']) }}" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </div>
@endsection
