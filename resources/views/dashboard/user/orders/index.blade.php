@extends('dashboard.app.user.layout')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <h3><i class="fas fa-box me-2"></i>My Orders</h3>
            <p class="text-muted">Track and manage all your orders</p>
        </div>
    </div>

    @forelse($orders as $order)
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h5 class="mb-1">Order #{{ $order->order_number }}</h5>
                            <p class="text-muted small mb-0">
                                <i class="fas fa-calendar me-1"></i>Placed on {{ $order->created_at->format('M d, Y h:i A') }}
                            </p>
                        </div>
                        <div>
                            @if($order->status == 'pending')
                            <span class="badge bg-warning text-dark px-3 py-2">
                                <i class="fas fa-clock me-1"></i>Pending
                            </span>
                            @elseif($order->status == 'processing')
                            <span class="badge bg-info px-3 py-2">
                                <i class="fas fa-cog me-1"></i>Processing
                            </span>
                            @elseif($order->status == 'shipped')
                            <span class="badge bg-primary px-3 py-2">
                                <i class="fas fa-shipping-fast me-1"></i>Shipped
                            </span>
                            @elseif($order->status == 'delivered')
                            <span class="badge bg-success px-3 py-2">
                                <i class="fas fa-check-circle me-1"></i>Delivered
                            </span>
                            @else
                            <span class="badge bg-danger px-3 py-2">
                                <i class="fas fa-times-circle me-1"></i>Cancelled
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- Order Details -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-dollar-sign text-success me-2"></i>
                                <div>
                                    <small class="text-muted d-block">Total Amount</small>
                                    <strong class="text-success">${{ number_format($order->total, 2) }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-box text-primary me-2"></i>
                                <div>
                                    <small class="text-muted d-block">Items</small>
                                    <strong>{{ $order->items->count() }} item(s)</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-truck text-info me-2"></i>
                                <div>
                                    <small class="text-muted d-block">Delivery</small>
                                    @php
                                    $estimatedDays = 7;
                                    if($order->status == 'processing') $estimatedDays = 5;
                                    if($order->status == 'shipped') $estimatedDays = 2;
                                    if($order->status == 'delivered') $estimatedDays = 0;

                                    $estimatedDate = $order->created_at->addDays($estimatedDays);
                                    $daysRemaining = max(0, now()->diffInDays($estimatedDate, false));
                                    @endphp
                                    @if($order->status == 'delivered')
                                    <strong class="text-success">Delivered</strong>
                                    @else
                                    <strong>{{ ceil($daysRemaining) }} day(s)</strong>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery Timeline -->
                    @if($order->status != 'cancelled')
                    <div class="delivery-timeline">
                        <div class="timeline-step {{ $order->status == 'pending' || $order->status == 'processing' || $order->status == 'shipped' || $order->status == 'delivered' ? 'completed' : '' }}">
                            <div class="timeline-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="timeline-content">
                                <small>Order Placed</small>
                            </div>
                        </div>
                        <div class="timeline-line {{ $order->status == 'processing' || $order->status == 'shipped' || $order->status == 'delivered' ? 'active' : '' }}"></div>
                        <div class="timeline-step {{ $order->status == 'processing' || $order->status == 'shipped' || $order->status == 'delivered' ? 'completed' : '' }}">
                            <div class="timeline-icon">
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="timeline-content">
                                <small>Processing</small>
                            </div>
                        </div>
                        <div class="timeline-line {{ $order->status == 'shipped' || $order->status == 'delivered' ? 'active' : '' }}"></div>
                        <div class="timeline-step {{ $order->status == 'shipped' || $order->status == 'delivered' ? 'completed' : '' }}">
                            <div class="timeline-icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="timeline-content">
                                <small>Shipped</small>
                            </div>
                        </div>
                        <div class="timeline-line {{ $order->status == 'delivered' ? 'active' : '' }}"></div>
                        <div class="timeline-step {{ $order->status == 'delivered' ? 'completed' : '' }}">
                            <div class="timeline-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="timeline-content">
                                <small>Delivered</small>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-outline-primary w-100 mb-2">
                        <i class="fas fa-eye me-1"></i>View Full Details
                    </a>
                    @if($order->status != 'delivered' && $order->status != 'cancelled')
                    <button class="btn btn-outline-info w-100">
                        <i class="fas fa-map-marker-alt me-1"></i>Track Order
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="card border-0 shadow-sm text-center py-5">
        <div class="card-body">
            <i class="fas fa-shopping-cart fa-5x text-muted mb-4"></i>
            <h4>No orders yet</h4>
            <p class="text-muted mb-4">Start shopping to see your orders here!</p>
            <a href="/product#products" class="btn btn-success">
                <i class="fas fa-store me-2"></i>Browse Products
            </a>
        </div>
    </div>
    @endforelse

    @if($orders->count() > 0)
    <div class="d-flex justify-content-center mt-4">
        {{ $orders->links() }}
    </div>
    @endif
</div>

<style>
    .delivery-timeline {
        display: flex;
        align-items: center;
        padding: 20px 0;
    }

    .timeline-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
    }

    .timeline-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e9ecef;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6c757d;
        transition: all 0.3s ease;
    }

    .timeline-step.completed .timeline-icon {
        background: #337a4e;
        color: white;
    }

    .timeline-content {
        margin-top: 8px;
        text-align: center;
    }

    .timeline-line {
        flex: 1;
        height: 3px;
        background: #e9ecef;
        margin: 0 10px;
        transition: all 0.3s ease;
    }

    .timeline-line.active {
        background: #337a4e;
    }
</style>
@endsection