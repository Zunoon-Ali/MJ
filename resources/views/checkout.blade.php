@extends('layouts.app')

@section('title', 'Checkout - Veridan Roots')

@section('content')
<section class="checkout-page sec py-5 bg-light" style="margin-top:80px;">
    <div class="container">
        <h2 class="mb-5 text-center fw-bold">Checkout</h2>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ request('product_id') }}">
            <input type="hidden" name="quantity" value="{{ request('quantity', 1) }}">

            <div class="row">
                <!-- Billing Details -->
                <div class="col-lg-7 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold mb-4">Billing Information</h5>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
                                        value="{{ old('first_name', Auth::user()->name ?? '') }}" required>
                                    @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                                        value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', Auth::user()->email ?? '') }}" required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}" required>
                                @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"
                                        value="{{ old('city') }}" required>
                                    @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Postal Code <span class="text-danger">*</span></label>
                                    <input type="text" name="postal_code" class="form-control @error('postal_code') is-invalid @enderror"
                                        value="{{ old('postal_code') }}" required>
                                    @error('postal_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Payment Method <span class="text-danger">*</span></label>
                                <select name="payment_method" class="form-select @error('payment_method') is-invalid @enderror" required>
                                    <option value="">Choose Payment Option</option>
                                    <option value="Cash on Delivery" {{ old('payment_method') == 'Cash on Delivery' ? 'selected' : '' }}>Cash on Delivery</option>
                                    <option value="Credit/Debit Card" {{ old('payment_method') == 'Credit/Debit Card' ? 'selected' : '' }}>Credit / Debit Card</option>
                                    <option value="PayPal" {{ old('payment_method') == 'PayPal' ? 'selected' : '' }}>PayPal</option>
                                </select>
                                @error('payment_method')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success w-100">
                                Place Order <i class="fa-solid fa-leaf ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-5">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold mb-4">Order Summary</h5>

                            @php
                            $subtotal = 0;
                            $shipping = 5.00;
                            $cartItems = [];

                            if(request('product_id')) {
                            // Direct Buy Now
                            $product = App\Models\Product::find(request('product_id'));
                            $qty = request('quantity', 1);
                            if($product) {
                            $subtotal = $product->price * $qty;
                            $cartItems[] = [
                            'id' => $product->id,
                            'name' => $product->name,
                            'price' => $product->price,
                            'quantity' => $qty,
                            'image' => $product->image
                            ];
                            }
                            } else {
                            // From Session Cart
                            if(session('cart')) {
                            foreach(session('cart') as $id => $details) {
                            $subtotal += $details['price'] * $details['quantity'];
                            $cartItems[] = $details; // Assuming structure matches (or adapt if needed)
                            }
                            }
                            }

                            $total = $subtotal + $shipping;
                            @endphp

                            @if(count($cartItems) > 0)
                            @foreach($cartItems as $item)
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    @if(isset($item['image']))
                                    <img src="{{ asset('storage/' . $item['image']) }}" onerror="this.onerror=null; this.src='https://placehold.co/70x70/377f52/ffffff?text=Product';" alt="{{ $item['name'] }}" width="60" class="rounded me-3">
                                    @else
                                    <img src="{{ asset('images/product2.png') }}" alt="{{ $item['name'] }}" width="60" class="rounded me-3">
                                    @endif
                                    <div>
                                        <h6 class="mb-0">{{ $item['name'] }}</h6>
                                        <small class="text-muted">Qty: {{ $item['quantity'] }}</small>
                                    </div>
                                </div>
                                <span>${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                            </div>
                            @endforeach

                            <hr>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal</span>
                                <span>${{ number_format($subtotal, 2) }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Shipping</span>
                                <span>${{ number_format($shipping, 2) }}</span>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between mb-3">
                                <strong>Total</strong>
                                <strong>${{ number_format($total, 2) }}</strong>
                            </div>
                            @else
                            <p class="text-center text-danger">No product selected</p>
                            @endif

                            <p class="text-muted small">
                                Your personal data will be used to process your order and support your experience throughout this website.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection