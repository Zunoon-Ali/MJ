@extends('dashboard.app.user.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0"><i class="fas fa-shopping-bag me-2"></i>My Orders</h3>
                </div>
                <div class="card-body">
                    @forelse($orders as $order)
                    <div class="card mb-3 border">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5>Order #{{ $order->order_number }}</h5>
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
                                    <p class="mb-0"><strong>Total:</strong> ${{ number_format($order->total, 2) }}</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-primary">
                                        <i class="fas fa-eye me-1"></i>View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-5">
                        <i class="fas fa-shopping-cart fa-4x text-muted mb-3"></i>
                        <h5>No orders yet</h5>
                        <p class="text-muted">Start shopping to see your orders here!</p>
                        <a href="{{ url('/product') }}" class="btn btn-primary">Browse Products</a>
                    </div>
                    @endforelse

                    @if($orders->count() > 0)
                    {{ $orders->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection