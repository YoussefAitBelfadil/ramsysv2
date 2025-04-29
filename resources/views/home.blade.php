@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Build Your Dream PC</h1>
                    <p class="hero-subtitle">High-performance computers and premium components for gamers, creators, and professionals.</p>
                    <a href="#featured-products" class="btn btn-hero">Shop Now</a>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{ asset('images/products/pcGamer.jpeg') }}" alt="Gaming PC" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="container" id="featured-products">
        <h2 class="section-title">Featured Products</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($products as $product)
                <div class="col">
                    <div class="card product-card">
                        <img src="{{ asset($product['image']) }}" class="product-img" alt="{{ $product['name'] }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text text-muted">{{ $product['short_description'] }}</p>
                            <div class="mt-auto">
                                <p class="product-price">${{ number_format($product['price'], 2) }}</p>
                                <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary">
                                    <i class="fas fa-eye me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="container mt-5 pt-5">
        <h2 class="section-title">Why Choose Ramsys</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="fas fa-award fa-3x text-primary"></i>
                        </div>
                        <h4>Premium Quality</h4>
                        <p class="text-muted">We source only the highest quality components for our systems, ensuring reliability and performance.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="fas fa-headset fa-3x text-primary"></i>
                        </div>
                        <h4>Expert Support</h4>
                        <p class="text-muted">Our team of tech experts is always ready to help with any questions or issues you might have.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="fas fa-truck fa-3x text-primary"></i>
                        </div>
                        <h4>Fast Delivery</h4>
                        <p class="text-muted">We offer quick and secure shipping on all orders, with tracking information provided.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container mt-5 pt-5">
        <h2 class="section-title">What Our Customers Say</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="fst-italic">"The gaming PC I purchased from Ramsys exceeded all my expectations. The build quality is exceptional, and the performance is outstanding."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/avatar-1.jpg') }}" alt="Customer" class="rounded-circle" width="50" height="50">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Michael Johnson</h6>
                                <small class="text-muted">Professional Gamer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="fst-italic">"As a graphic designer, I needed a powerful workstation that could handle demanding applications. Ramsys delivered exactly what I needed."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/avatar-2.jpg') }}" alt="Customer" class="rounded-circle" width="50" height="50">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Sarah Williams</h6>
                                <small class="text-muted">Graphic Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <p class="fst-italic">"The customer service at Ramsys is exceptional. They helped me choose the right components for my PC build and were always available to answer questions."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/avatar-3.jpg') }}" alt="Customer" class="rounded-circle" width="50" height="50">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">David Chen</h6>
                                <small class="text-muted">Software Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5 text-center">
                        <h3>Stay Updated</h3>
                        <p class="text-muted mb-4">Subscribe to our newsletter to receive updates on new products, special offers, and tech tips.</p>
                        <form class="row g-3 justify-content-center">
                            <div class="col-md-8">
                                <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
