@extends('dashboard.app.user.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0"><i class="fas fa-file-invoice me-2"></i>Order Details</h3>
                    <a href="{{ route('user.orders') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-arrow-left me-1"></i>Back to Orders
                    </a>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Order Information</h5>
                            <p class="mb-1"><strong>Order Number:</strong> {{ $order->order_number }}</p>
                            <p class="mb-1"><strong>Date:</strong> {{ $order->created_at->format('M d, Y h:i A') }}</p>
                            <p class="mb-1"><strong>Status:</strong>
                                @if($order->status == 'pending')
                                <span class="badge bg-warning">Pending</span>
                                @elseif($order->status == 'processing')
                                <span class="badge bg-info">Processing</span>
                                @elseif($order->status == 'shipped')
                                <span class="badge bg-primary">Shipped</span>
                                @elseif($order->status == 'delivered')
                                <span class="badge bg-success">Delivered</span>
                                @else
                                <span class="badge bg-danger">Cancelled</span>
                                @endif
                            </p>
                            <p class="mb-0"><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Shipping Information</h5>
                            <p class="mb-1"><strong>Name:</strong> {{ $order->customer_name }}</p>
                            <p class="mb-1"><strong>Email:</strong> {{ $order->customer_email }}</p>
                            <p class="mb-1"><strong>Phone:</strong> {{ $order->customer_phone }}</p>
                            <p class="mb-1"><strong>Address:</strong> {{ $order->shipping_address }}</p>
                            <p class="mb-0"><strong>City:</strong> {{ $order->city }}, {{ $order->postal_code }}</p>
                        </div>
                    </div>

                    <h5>Order Items</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->items as $item)
                                <tr>
                                    <td>{{ $item->product_name }}</td>
                                    <td>${{ number_format($item->price, 2) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>${{ number_format($item->subtotal, 2) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3" class="text-end"><strong>Subtotal:</strong></td>
                                    <td>${{ number_format($order->subtotal, 2) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end"><strong>Shipping:</strong></td>
                                    <td>${{ number_format($order->shipping_cost, 2) }}</td>
                                </tr>
                                <tr class="table-success">
                                    <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                    <td><strong>${{ number_format($order->total, 2) }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection