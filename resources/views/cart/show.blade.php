@extends('layouts.app')

@section('title', $product['name'])

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $product['category'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
                </ol>
            </nav>
        </div>
    </div>

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

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid rounded">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h1 class="mb-3">{{ $product['name'] }}</h1>
            <div class="d-flex align-items-center mb-3">
                <div class="me-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <span class="ms-1">4.5</span>
                </div>
                <span class="text-muted">(24 reviews)</span>
            </div>

            <h2 class="text-primary mb-4">${{ number_format($product['price'], 2) }}</h2>

            <p class="mb-4">{{ $product['description'] }}</p>

            <div class="mb-4">
                <h5 class="mb-3">Key Specifications:</h5>
                <ul class="list-group list-group-flush">
                    @foreach($product['specs'] as $key => $value)
                        <li class="list-group-item px-0 d-flex justify-content-between">
                            <span class="fw-bold">{{ $key }}</span>
                            <span>{{ $value }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <form action="{{ route('cart.add') }}" method="POST" class="mb-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">

                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="quantity" class="col-form-label">Quantity:</label>
                    </div>
                    <div class="col-auto">
                        <div class="input-group" style="width: 130px;">
                            <button type="button" class="btn btn-outline-secondary" id="decrease-qty">-</button>
                            <input type="number" id="quantity" name="quantity" class="form-control text-center" value="1" min="1">
                            <button type="button" class="btn btn-outline-secondary" id="increase-qty">+</button>
                        </div>
                    </div>
                    <div class="col-auto">
                        <span class="form-text text-success" id="stock-status">
                            <i class="fas fa-check-circle me-1"></i> In Stock
                        </span>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-heart me-2"></i> Add to Wishlist
                    </button>
                </div>
            </form>

            <div class="d-flex align-items-center mb-4">
                <div class="me-4">
                    <i class="fas fa-truck text-primary me-2"></i>
                    <span>Free Shipping</span>
                </div>
                <div>
                    <i class="fas fa-shield-alt text-primary me-2"></i>
                    <span>2 Year Warranty</span>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <span class="me-3">Share:</span>
                <a href="#" class="me-2 text-muted"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="me-2 text-muted"><i class="fab fa-twitter"></i></a>
                <a href="#" class="me-2 text-muted"><i class="fab fa-pinterest"></i></a>
                <a href="#" class="text-muted"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">Specifications</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content p-4" id="productTabsContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <h4 class="mb-4">Product Description</h4>
                            <p>{{ $product['description'] }}</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                        <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                            <h4 class="mb-4">Technical Specifications</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($product['specs'] as $key => $value)
                                            <tr>
                                                <th style="width: 30%;">{{ $key }}</th>
                                                <td>{{ $value }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <h4 class="mb-4">Customer Reviews</h4>
                            <div class="mb-4">
                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="mb-0 me-3">4.5 out of 5</h5>
                                    <div>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                    </div>
                                </div>
                                <p class="text-muted">Based on 24 reviews</p>
                            </div>

                            <div class="mb-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-placeholder">
                                                    <span>JD</span>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0">John Doe</h6>
                                                <div class="text-muted small">Posted on May 10, 2023</div>
                                                <div>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-2">Excellent product, highly recommended!</h6>
                                        <p class="mb-0">This product exceeded my expectations. The performance is outstanding and the build quality is top-notch. I would definitely recommend it to anyone looking for a high-end PC.</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-placeholder">
                                                    <span>JS</span>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0">Jane Smith</h6>
                                                <div class="text-muted small">Posted on April 28, 2023</div>
                                                <div>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                    <i class="far fa-star text-warning"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mb-2">Great value for money</h6>
                                        <p class="mb-0">I'm very happy with my purchase. The product works great and the shipping was fast. The only minor issue is that it runs a bit hot under heavy load, but that's expected for this level of performance.</p>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="btn btn-outline-primary">
                                <i class="fas fa-comment-alt me-2"></i> Write a Review
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h3 class="mb-4">Related Products</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach(array_slice(\App\Models\Product::getFeaturedProducts(), 0, 4) as $relatedProduct)
                    @if($relatedProduct['id'] != $product['id'])
                        <div class="col">
                            <div class="card h-100 product-card">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById('quantity');
        const increaseBtn = document.getElementById('increase-qty');
        const decreaseBtn = document.getElementById('decrease-qty');

        increaseBtn.addEventListener('click', function() {
            let value = parseInt(quantityInput.value);
            quantityInput.value = value + 1;
        });

        decreaseBtn.addEventListener('click', function() {
            let value = parseInt(quantityInput.value);
            if (value > 1) {
                quantityInput.value = value - 1;
            }
        });
    });
</script>
@endsection
