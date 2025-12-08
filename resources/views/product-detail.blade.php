@extends('layouts.app')

@section('title', $product->name . ' - Veridan Roots')

@section('content')

<section class="product-detail sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded shadow">
                @else
                <img src="{{ asset('images/product2.png') }}" alt="{{ $product->name }}" class="img-fluid rounded shadow">
                @endif
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3">{{ $product->name }}</h2>
                <p class="text-muted mb-4">
                    {{ $product->description ?? 'This is a premium herbal product crafted with natural ingredients to nourish your hair and scalp.' }}
                </p>
                <h4 class="mb-3">${{ number_format($product->price, 2) }}</h4>

                <div class="mb-3">
                    <span class="badge bg-success">{{ $product->stock }} in stock</span>
                </div>

                <form method="GET" action="{{ route('checkout') }}">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="d-flex align-items-center mb-4">
                        <label class="me-2">Quantity:</label>
                        <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock }}" class="form-control w-25">
                    </div>

                    @auth
                    <a href="{{ route('cart') }}" class="theme-btn me-3">
                        Add to Cart
                        <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </a>

                    <button type="submit" class="theme-btn alt-btn">
                        Buy Now
                        <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </button>
                    @else
                    <a href="{{ route('login') }}" class="theme-btn me-3">
                        Add to Cart (Login Required)
                        <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </a>

                    <a href="{{ route('login') }}" class="theme-btn alt-btn">
                        Buy Now (Login Required)
                        <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </a>
                    @endauth
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ==== Product Review & Additional Info Section ==== -->
<section class="product-info sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="nav nav-tabs justify-content-center mb-4" id="productTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                            type="button" role="tab" aria-controls="info" aria-selected="true">
                            <i class="fa-solid fa-leaf me-1"></i> Additional Information
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            type="button" role="tab" aria-controls="reviews" aria-selected="false">
                            <i class="fa-solid fa-star me-1"></i> Reviews ({{ $product->reviews->count() }})
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="productTabContent">
                    <!-- ✅ Additional Info Tab -->
                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="product-info-content">
                            <h5>Product Description</h5>
                            <p>
                                {{ $product->description ?? 'This herbal formula combines nutrient-rich ingredients to strengthen, repair, and rejuvenate. Free from parabens, sulfates, and harsh chemicals — perfect for all types.' }}
                            </p>

                            <ul class="info-list">
                                <li><strong>Price:</strong> ${{ number_format($product->price, 2) }}</li>
                                <li><strong>Stock:</strong> {{ $product->stock }} available</li>
                                <li><strong>Category:</strong> {{ $product->category ?? 'General' }}</li>
                            </ul>
                        </div>
                    </div>

                    <!-- ✅ Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="reviews-section">
                            @forelse($product->reviews as $review)
                            <div class="review-item mb-4 pb-3 border-bottom">
                                <h6 class="mb-1">{{ $review->reviewer_name }}</h6>
                                <p class="rating text-warning mb-2">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <=$review->rating)
                                        ★
                                        @else
                                        ☆
                                        @endif
                                        @endfor
                                        <small class="text-muted ms-2">({{ $review->rating }}/5)</small>
                                </p>
                                <p class="mb-1">"{{ $review->review }}"</p>
                                <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                            </div>
                            @empty
                            <div class="text-center py-4">
                                <p class="text-muted">No reviews yet. Be the first to review this product!</p>
                            </div>
                            @endforelse

                            <!-- Review Form -->
                            <div class="review-form mt-5">
                                <h5 class="mb-4">Leave a Review</h5>

                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                                @endif

                                <form action="{{ route('review.store', $product->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <input type="text" name="reviewer_name" class="form-control @error('reviewer_name') is-invalid @enderror"
                                                placeholder="Enter your name"
                                                value="{{ old('reviewer_name', Auth::user()->name ?? '') }}" required>
                                            @error('reviewer_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Your Email (Optional)</label>
                                            <input type="email" name="reviewer_email" class="form-control @error('reviewer_email') is-invalid @enderror"
                                                placeholder="your@email.com"
                                                value="{{ old('reviewer_email', Auth::user()->email ?? '') }}">
                                            @error('reviewer_email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Rating <span class="text-danger">*</span></label>
                                        <select name="rating" class="form-select @error('rating') is-invalid @enderror" required>
                                            <option value="">Select Rating</option>
                                            <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>★★★★★ (5 Stars)</option>
                                            <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>★★★★☆ (4 Stars)</option>
                                            <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>★★★☆☆ (3 Stars)</option>
                                            <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>★★☆☆☆ (2 Stars)</option>
                                            <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>★☆☆☆☆ (1 Star)</option>
                                        </select>
                                        @error('rating')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Your Review <span class="text-danger">*</span></label>
                                        <textarea name="review" class="form-control @error('review') is-invalid @enderror"
                                            rows="5" placeholder="Tell us what you think about this product (minimum 10 characters)..." required>{{ old('review') }}</textarea>
                                        <small class="text-muted">Minimum 10 characters required</small>
                                        @error('review')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="theme-btn">
                                        Submit Review
                                        <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection