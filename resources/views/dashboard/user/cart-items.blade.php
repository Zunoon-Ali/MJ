@extends('dashboard.app.user.layout')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h3><i class="fas fa-list-ul me-2"></i>My Cart Items</h3>
                <a href="{{ route('cart') }}" class="btn btn-outline-success">
                    <i class="fas fa-shopping-cart me-1"></i>Go to Full Cart
                </a>
            </div>
        </div>
    </div>

    @if(count($cartItems) > 0)
    <!-- Cart Items Table -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th>Stock</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartItems as $id => $item)
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                    </td>
                                    <td>
                                        <strong>{{ $item['name'] }}</strong>
                                    </td>
                                    <td>
                                        <span class="text-success fw-bold">${{ number_format($item['price'], 2) }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <form action="{{ route('cart.update') }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="id" value="{{ $id }}">
                                                <div class="input-group input-group-sm" style="width: 120px;">
                                                    <button type="button" class="btn btn-outline-secondary" onclick="decrementQty({{ $id }})">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <input type="number" name="quantity" id="qty-{{ $id }}" value="{{ $item['quantity'] }}" min="1" max="{{ $item['stock'] }}" class="form-control text-center" readonly>
                                                    <button type="button" class="btn btn-outline-secondary" onclick="incrementQty({{ $id }}, {{ $item['stock'] }})">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <strong class="text-primary">${{ number_format($item['price'] * $item['quantity'], 2) }}</strong>
                                    </td>
                                    <td>
                                        @if($item['stock'] > 0)
                                        <span class="badge bg-success">{{ $item['stock'] }} in stock</span>
                                        @else
                                        <span class="badge bg-danger">Out of stock</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.remove') }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $id }}">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Remove this item from cart?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Total:</strong></td>
                                    <td colspan="3">
                                        <h4 class="mb-0 text-success">${{ number_format($total, 2) }}</h4>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex justify-content-between">
                        <a href="/product#products" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i>Continue Shopping
                        </a>
                        <a href="{{ route('checkout') }}" class="btn btn-success">
                            <i class="fas fa-credit-card me-1"></i>Proceed to Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <!-- Empty Cart Message -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm text-center py-5">
                <div class="card-body">
                    <i class="fas fa-shopping-cart fa-5x text-muted mb-4"></i>
                    <h4>Your cart is empty</h4>
                    <p class="text-muted mb-4">Looks like you haven't added any items to your cart yet.</p>
                    <a href="/product#products" class="btn btn-success">
                        <i class="fas fa-store me-2"></i>Browse Products
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<script>
    function incrementQty(id, max) {
        const input = document.getElementById('qty-' + id);
        const currentValue = parseInt(input.value);
        if (currentValue < max) {
            input.value = currentValue + 1;
            updateCart(id, input.value);
        }
    }

    function decrementQty(id) {
        const input = document.getElementById('qty-' + id);
        const currentValue = parseInt(input.value);
        if (currentValue > 1) {
            input.value = currentValue - 1;
            updateCart(id, input.value);
        }
    }

    function updateCart(id, quantity) {
        fetch('{{ route("cart.update") }}', {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    id: id,
                    quantity: quantity
                })
            })
            .then(response => response.json())
            .then(data => {
                location.reload();
            })
            .catch(error => console.error('Error:', error));
    }
</script>
@endsection