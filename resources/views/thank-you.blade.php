@extends('layouts.app')

@section('title', 'Thank You - Veridan Roots')

@section('content')
<section class="thank-you-page sec py-5" style="margin-top:80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body text-center p-5">
                        <div class="mb-4">
                            <i class="fas fa-check-circle text-success" style="font-size: 80px;"></i>
                        </div>

                        <h1 class="mb-3">Thank You for Your Order!</h1>
                        <p class="lead text-muted mb-4">Your order has been placed successfully.</p>

                        @php
                        $order = App\Models\Order::where('order_number', request('order'))->first();
                        @endphp

                        @if($order)
                        <div class="alert alert-info mb-4">
                            <h5 class="mb-2">Order Number</h5>
                            <h3 class="mb-0"><strong>{{ $order->order_number }}</strong></h3>
                        </div>

                        <div class="row text-start mb-4">
                            <div class="col-md-6">
                                <h6 class="fw-bold mb-3">Order Details</h6>
                                <p class="mb-1"><strong>Total:</strong> ${{ number_format($order->total, 2) }}</p>
                                <p class="mb-1"><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
                                <p class="mb-1"><strong>Status:</strong> <span class="badge bg-warning">{{ ucfirst($order->status) }}</span></p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fw-bold mb-3">Shipping Information</h6>
                                <p class="mb-1"><strong>Name:</strong> {{ $order->customer_name }}</p>
                                <p class="mb-1"><strong>Address:</strong> {{ $order->shipping_address }}</p>
                                <p class="mb-1"><strong>City:</strong> {{ $order->city }}, {{ $order->postal_code }}</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold mb-3">Order Items</h6>
                            @foreach($order->items as $item)
                            <div class="d-flex justify-content-between align-items-center mb-2 p-2 bg-light rounded">
                                <span>{{ $item->product_name }} (x{{ $item->quantity }})</span>
                                <span>${{ number_format($item->subtotal, 2) }}</span>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        <p class="text-muted mb-4">
                            A confirmation email has been sent to <strong>{{ $order->customer_email ?? 'your email' }}</strong>
                        </p>

                        <div class="d-flex gap-3 justify-content-center">
                            @auth
                            <a href="{{ route('user.orders') }}" class="btn btn-primary">
                                <i class="fas fa-list me-2"></i>View My Orders
                            </a>
                            @endauth
                            <a href="{{ url('/') }}" class="btn btn-success">
                                <i class="fas fa-home me-2"></i>Continue Shopping
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection