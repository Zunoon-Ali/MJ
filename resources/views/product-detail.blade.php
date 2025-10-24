@extends('layouts.app')

@section('title', 'Product Detail - Veridan Roots')

@section('content')

<section class="product-detail sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('images/product2.png') }}" alt="product-detail" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3">Product Name Here</h2>
                <p class="text-muted mb-4">
                    This is a premium herbal product crafted with natural ingredients to nourish your hair and scalp.
                </p>
                <h4 class="mb-3">$39.99</h4>

                <form>
                    <div class="d-flex align-items-center mb-4">
                        <label class="me-2">Quantity:</label>
                        <input type="number" name="quantity" value="1" min="1" class="form-control w-25">
                    </div>

                    <a href="{{ route('cart') }}" class="theme-btn me-3">
                        Add to Cart
                        <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </a>

                    <a href="{{ route('checkout') }}" class="theme-btn alt-btn">
                        Buy Now
                        <span class="leaf-icon"><i class="fa-solid fa-leaf"></i></span>
                    </a>
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
                            <i class="fa-solid fa-star me-1"></i> Reviews (3)
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="productTabContent">
                    <!-- ✅ Additional Info Tab -->
                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="product-info-content">
                            <h5>Product Description</h5>
                            <p>
                                This herbal hair formula combines nutrient-rich ingredients to strengthen, repair, and
                                rejuvenate hair from root to tip. Free from parabens, sulfates, and harsh chemicals — 
                                perfect for all hair types.
                            </p>

                            <ul class="info-list">
                                <li><strong>Weight:</strong> 250ml</li>
                                <li><strong>Ingredients:</strong> Aloe Vera, Argan Oil, Rosemary Extract</li>
                                <li><strong>Usage:</strong> Apply twice a week for best results</li>
                                <li><strong>Made in:</strong> USA</li>
                            </ul>
                        </div>
                    </div>

                    <!-- ✅ Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="reviews-section">
                            <div class="review-item">
                                <h6>Sarah K.</h6>
                                <p class="rating text-warning">★★★★★</p>
                                <p>“Absolutely love this product! My hair feels smoother and stronger after just two uses.”</p>
                            </div>

                            <div class="review-item">
                                <h6>Ali R.</h6>
                                <p class="rating text-warning">★★★★☆</p>
                                <p>“Great fragrance and results, though delivery took a bit long.”</p>
                            </div>

                            <div class="review-item">
                                <h6>Emma J.</h6>
                                <p class="rating text-warning">★★★★★</p>
                                <p>“This product is a game-changer! Totally worth the price.”</p>
                            </div>

                            <!-- Review Form -->
                            <div class="review-form mt-5">
                                <h5>Leave a Review</h5>
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" rows="4" placeholder="Write your review..."></textarea>
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
