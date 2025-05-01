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
                        <img src="{{ asset('images/products/pcGamer.jpeg')}}" class="img-fluid product-detail-img" alt="{{ $product['name'] }}">

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
                                <input type="text" class="form-control text-center" name="quantity" id="quantity" value="1">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 d-md-flex mb-4">
                            <a href="{{ route('cart.add')}}" >
                                <button class="btn btn-cart btn-lg">
                                    <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                </button>
                            </a>
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
                        <img src="{{ asset('images/products/pcGamer.jpeg')}}" class="img-fluid product-detail-img" alt="{{ $product['name'] }}">

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
                            @php
                                $averageRating = \App\Models\ProductReview::getAverageRating($product['id']);
                                $reviewCount = \App\Models\ProductReview::getReviewCount($product['id']);
                                $fullStars = floor($averageRating);
                                $halfStar = $averageRating - $fullStars >= 0.5;
                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                            @endphp

                            @for ($i = 0; $i < $fullStars; $i++)
                                <i class="fas fa-star text-warning"></i>
                            @endfor

                            @if ($halfStar)
                                <i class="fas fa-star-half-alt text-warning"></i>
                            @endif

                            @for ($i = 0; $i < $emptyStars; $i++)
                                <i class="far fa-star text-warning"></i>
                            @endfor

                            <span class="ms-2 text-muted">({{ $averageRating }}/5 - {{ $reviewCount }} {{ Str::plural('review', $reviewCount) }})</span>
                            <a href="#reviews" class="ms-2 text-primary">Read reviews</a>
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
                                <button class="btn btn-outline-secondary" type="button" id="decreaseQuantity">-</button>
                                <input type="text" class="form-control text-center" name="quantity" id="quantity" value="1">
                                <button class="btn btn-outline-secondary" type="button" id="increaseQuantity">+</button>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 d-md-flex mb-4">
                            <a href="{{ route('cart.add')}}" >
                                <button class="btn btn-cart btn-lg">
                                    <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                </button>
                            </a>
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

        <!-- Product Reviews Section -->
        <div class="card border-0 shadow-sm mt-4" id="reviews">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0">Customer Reviews</h3>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="fas fa-star me-2"></i> Write a Review
                    </button>
                </div>

                <!-- Review Summary -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="review-summary text-center p-4">
                            <div class="display-4 fw-bold text-primary mb-2">{{ $averageRating }}</div>
                            <div class="rating-stars mb-2">
                                @for ($i = 0; $i < $fullStars; $i++)
                                    <i class="fas fa-star text-warning"></i>
                                @endfor

                                @if ($halfStar)
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                @endif

                                @for ($i = 0; $i < $emptyStars; $i++)
                                    <i class="far fa-star text-warning"></i>
                                @endfor
                            </div>
                            <p class="text-muted">Based on {{ $reviewCount }} {{ Str::plural('review', $reviewCount) }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="rating-bars">
                            @php
                                $ratingCounts = [
                                    5 => \App\Models\ProductReview::where('product_id', $product['id'])->where('rating', 5)->where('status', 'approved')->count(),
                                    4 => \App\Models\ProductReview::where('product_id', $product['id'])->where('rating', 4)->where('status', 'approved')->count(),
                                    3 => \App\Models\ProductReview::where('product_id', $product['id'])->where('rating', 3)->where('status', 'approved')->count(),
                                    2 => \App\Models\ProductReview::where('product_id', $product['id'])->where('rating', 2)->where('status', 'approved')->count(),
                                    1 => \App\Models\ProductReview::where('product_id', $product['id'])->where('rating', 1)->where('status', 'approved')->count(),
                                ];
                            @endphp

                            @for ($i = 5; $i >= 1; $i--)
                                <div class="rating-bar d-flex align-items-center mb-2">
                                    <div class="rating-label me-2">{{ $i }} <i class="fas fa-star text-warning"></i></div>
                                    <div class="progress flex-grow-1" style="height: 10px;">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: {{ $reviewCount > 0 ? ($ratingCounts[$i] / $reviewCount) * 100 : 0 }}%"
                                            aria-valuenow="{{ $ratingCounts[$i] }}" aria-valuemin="0" aria-valuemax="{{ $reviewCount }}">
                                        </div>
                                    </div>
                                    <div class="rating-count ms-2">{{ $ratingCounts[$i] }}</div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Review Filter -->
                <div class="review-filter mb-4">
                    <div class="btn-group" role="group" aria-label="Review filter">
                        <button type="button" class="btn btn-outline-primary active" data-filter="all">All Reviews</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="5">5 Star</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="4">4 Star</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="3">3 Star</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="2">2 Star</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="1">1 Star</button>
                    </div>
                </div>

                <!-- Reviews List -->
                <div class="reviews-list">
                    @php
                        $reviews = \App\Models\ProductReview::getApprovedReviews($product['id']);
                    @endphp

                    @if($reviews->count() > 0)
                        @foreach($reviews as $review)
                            <div class="review-item mb-4 p-4 border-bottom" data-rating="{{ $review->rating }}">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="review-user">
                                        <div class="d-flex align-items-center">
                                            <div class="review-avatar me-3">
                                                <div class="avatar-placeholder">
                                                    {{ strtoupper(substr($review->user->name, 0, 1)) }}
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">{{ $review->user->name }}</h5>
                                                <div class="text-muted small">{{ $review->created_at->format('M d, Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $review->rating)
                                                <i class="fas fa-star text-warning"></i>
                                            @else
                                                <i class="far fa-star text-warning"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <div class="review-content mt-3">
                                    <p>{{ $review->comment }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-5">
                            <div class="mb-3">
                                <i class="far fa-comment-dots fa-4x text-muted"></i>
                            </div>
                            <h4>No Reviews Yet</h4>
                            <p class="text-muted">Be the first to review this product</p>
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#reviewModal">
                                <i class="fas fa-star me-2"></i> Write a Review
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Pagination (if needed) -->
                @if($reviews->count() > 5)
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-outline-primary" id="loadMoreReviews">
                            Load More Reviews
                        </button>
                    </div>
                @endif
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

    <!-- Review Modal -->
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel">Write a Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if(Auth::check())
                        @if(!\App\Models\ProductReview::hasUserReviewed(Auth::id(), $product['id']))
                            <form id="reviewForm" action="{{ route('reviews.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">

                                <div class="mb-4 text-center">
                                    <label class="form-label d-block mb-3">Your Rating</label>
                                    <div class="rating-input">
                                        <input type="hidden" name="rating" id="rating" value="5">
                                        <i class="fas fa-star rating-star" data-rating="1"></i>
                                        <i class="fas fa-star rating-star" data-rating="2"></i>
                                        <i class="fas fa-star rating-star" data-rating="3"></i>
                                        <i class="fas fa-star rating-star" data-rating="4"></i>
                                        <i class="fas fa-star rating-star" data-rating="5"></i>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="comment" class="form-label">Your Review</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Share your experience with this product..." required></textarea>
                                    <div class="form-text">Minimum 10 characters required.</div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Review</button>
                                </div>
                            </form>
                        @else
                            <div class="text-center py-4">
                                <div class="mb-3">
                                    <i class="fas fa-check-circle fa-4x text-success"></i>
                                </div>
                                <h4>You've Already Reviewed This Product</h4>
                                <p class="text-muted">Thank you for your feedback!</p>
                            </div>
                        @endif
                    @else
                        <div class="text-center py-4">
                            <div class="mb-3">
                                <i class="fas fa-user-lock fa-4x text-muted"></i>
                            </div>
                            <h4>Please Sign In</h4>
                            <p class="text-muted">You need to be logged in to write a review.</p>
                            <a href="{{ route('login') }}" class="btn btn-primary mt-2">
                                Sign In
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Review Success Modal -->
    <div class="modal fade" id="reviewSuccessModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thank You!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <div class="mb-3">
                        <i class="fas fa-check-circle fa-4x text-success"></i>
                    </div>
                    <h4>Your Review Has Been Submitted</h4>
                    <p class="text-muted">Thank you for sharing your experience with this product. Your review will be visible after moderation.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Styles for Reviews -->
    <style>
        /* Review Section Styles */
        .review-summary {
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        .rating-bars .rating-bar {
            font-size: 14px;
        }

        .rating-label {
            width: 50px;
        }

        .rating-count {
            width: 30px;
            text-align: right;
        }

        .review-item {
            background-color: #fff;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .review-item:hover {
            background-color: #f8f9fa;
        }

        .avatar-placeholder {
            width: 40px;
            height: 40px;
            background-color: #0066cc;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .rating-input {
            font-size: 2rem;
            display: inline-block;
        }

        .rating-star {
            color: #ffc107;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .rating-star:hover,
        .rating-star.selected,
        .rating-star:hover ~ .rating-star,
        .rating-star.selected ~ .rating-star {
            color: #ffc107;
        }

        .rating-star:hover:before,
        .rating-star.selected:before,
        .rating-star:hover ~ .rating-star:before,
        .rating-star.selected ~ .rating-star:before {
            content: "\f005";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
        }

        /* Map for review filter buttons */
        .review-filter .btn-group {
            flex-wrap: wrap;
        }

        .review-filter .btn {
            margin-bottom: 5px;
        }

        /* Animation for new reviews */
        @keyframes highlightReview {
            0% { background-color: rgba(0, 102, 204, 0.1); }
            100% { background-color: transparent; }
        }

        .review-item.new-review {
            animation: highlightReview 2s ease;
        }
    </style>

@endsection

        <!-- Related Products -->
        {{-- <section class="mt-5">
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
        </section> --}}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            console.log(csrfToken);

            // Quantity selector
            const quantityInput = document.getElementById('quantity');
            const decreaseBtn = document.getElementById('decreaseQuantity');
            const increaseBtn = document.getElementById('increaseQuantity');

            decreaseBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });

            increaseBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                quantityInput.value = value + 1;
            });

            // Star rating input
            const ratingStars = document.querySelectorAll('.rating-star');
            const ratingInput = document.getElementById('rating');

            // Initialize stars (all selected by default)
            ratingStars.forEach(star => {
                star.classList.add('selected');

                star.addEventListener('click', function() {
                    const rating = parseInt(this.getAttribute('data-rating'));
                    ratingInput.value = rating;

                    // Reset all stars
                    ratingStars.forEach(s => s.classList.remove('selected'));

                    // Select stars up to the clicked one
                    for (let i = 0; i < ratingStars.length; i++) {
                        const star = ratingStars[i];
                        if (parseInt(star.getAttribute('data-rating')) <= rating) {
                            star.classList.add('selected');
                        }
                    }
                });
            });

            // Review filter
            const filterButtons = document.querySelectorAll('.review-filter .btn');
            const reviewItems = document.querySelectorAll('.review-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    // Show/hide reviews based on filter
                    reviewItems.forEach(item => {
                        if (filter === 'all' || parseInt(item.getAttribute('data-rating')) === parseInt(filter)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Review form submission
            const reviewForm = document.getElementById('reviewForm');

            if (reviewForm) {
                reviewForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Get form data
                    const formData = new FormData(reviewForm);

                    // Submit form via AJAX
                    fetch(reviewForm.getAttribute('action'), {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Close review modal
                        const reviewModal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
                        reviewModal.hide();

                        // Show success modal
                        const successModal = new bootstrap.Modal(document.getElementById('reviewSuccessModal'));
                        successModal.show();

                        // Reset form
                        reviewForm.reset();

                        // Reload page after a delay to show the new review (if auto-approved)
                        setTimeout(() => {
                            window.location.reload();
                        }, 3000);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('There was an error submitting your review. Please try again.');
                    });
                });
            }

            // Load more reviews functionality
            const loadMoreBtn = document.getElementById('loadMoreReviews');

            if (loadMoreBtn) {
                let visibleReviews = 5;
                const reviewsPerPage = 5;

                // Hide reviews beyond initial count
                reviewItems.forEach((item, index) => {
                    if (index >= visibleReviews) {
                        item.style.display = 'none';
                    }
                });

                loadMoreBtn.addEventListener('click', function() {
                    // Show next batch of reviews
                    for (let i = visibleReviews; i < visibleReviews + reviewsPerPage; i++) {
                        if (reviewItems[i]) {
                            reviewItems[i].style.display = 'block';
                        }
                    }

                    visibleReviews += reviewsPerPage;

                    // Hide button if all reviews are visible
                    if (visibleReviews >= reviewItems.length) {
                        loadMoreBtn.style.display = 'none';
                    }
                });
            }

            // Check for flash messages and show appropriate modal
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('review') === 'success') {
                const successModal = new bootstrap.Modal(document.getElementById('reviewSuccessModal'));
                successModal.show();
            }
        });
    </script>
@endsection
