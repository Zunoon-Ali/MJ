@extends('layouts.app')

@section('title', 'Your Cart - Veridan Roots')

@section('content')
<section class="cart-page sec py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center fw-bold" style="color:#377f52;">YOUR SHOPPING CART</h2>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="row">
            <!-- Cart Items (Main Table) -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body table-responsive">
                        <table class="table align-middle mb-0" id="cart-table">
                            <thead class="table-light">
                                <tr>
                                    <th class="product-details-container">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-end">Subtotal</th>
                                    <th class="text-end" style="min-width: 80px;">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <tr data-id="{{ $id }}" data-stock="{{ $details['stock'] ?? 10 }}">
                                    <td data-label="Product">
                                        <div class="d-flex align-items-center product-details-container">
                                            @if(isset($details['image']))
                                            <img src="{{ asset('storage/' . $details['image']) }}" onerror="this.onerror=null; this.src='https://placehold.co/70x70/377f52/ffffff?text=No+Image';" alt="{{ $details['name'] }}" width="70" class="rounded me-3">
                                            @else
                                            <img src="https://placehold.co/70x70/377f52/ffffff?text=No+Image" alt="{{ $details['name'] }}" width="70" class="rounded me-3">
                                            @endif
                                            <div>
                                                <h6 class="mb-1">{{ $details['name'] }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Price" class="text-center">${{ $details['price'] }}</td>
                                    <td data-label="Quantity" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button class="btn btn-outline-secondary btn-sm update-cart-btn" data-action="decrease" type="button">-</button>
                                            <input type="number" class="form-control form-control-sm text-center mx-1 quantity-input" value="{{ $details['quantity'] }}" min="1" max="{{ $details['stock'] ?? 10 }}" style="width:50px;">
                                            <button class="btn btn-outline-secondary btn-sm update-cart-btn" data-action="increase" type="button">+</button>
                                        </div>
                                    </td>
                                    <td data-label="Subtotal" class="text-end subtotal">${{ $details['price'] * $details['quantity'] }}</td>
                                    <td data-label="Remove" class="text-end">
                                        <button class="btn btn-sm btn-outline-danger remove-from-cart" type="button" title="Remove Item"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">Your cart is empty</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="{{ url('/') }}" class="btn btn-outline-success mt-3" style="border-color:#377f52; color:#377f52;">
                    <i class="fa fa-arrow-left me-2"></i> Continue Shopping
                </a>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white fw-bold border-bottom">
                        Order Summary
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 fw-bold">
                                Order Total: <span class="fs-5" style="color:#377f52;" id="cart-total">${{ $total ?? 0 }}</span>
                            </li>
                        </ul>

                        <div class="d-grid mt-4">
                            <a href="{{ route('checkout') }}" class="btn btn-lg text-white" style="background-color:#377f52; border-color:#377f52;">
                                Proceed to Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $(".update-cart-btn").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            var row = ele.closest("tr");
            var input = row.find(".quantity-input");
            var quantity = parseInt(input.val());
            var stock = parseInt(row.data("stock"));
            var action = ele.data("action");

            if (action === "increase") {
                if (quantity < stock) {
                    quantity++;
                } else {
                    alert("Sorry, only " + stock + " items left in stock!");
                    return; // Stop execution
                }
            } else if (action === "decrease" && quantity > 1) {
                quantity--;
            }

            input.val(quantity);
            // Trigger update immediately
            updateCart(row.data("id"), quantity);
        });

        $(".quantity-input").change(function(e) {
            e.preventDefault();
            var ele = $(this);
            var row = ele.closest("tr");
            var quantity = parseInt(ele.val());
            var stock = parseInt(row.data("stock"));

            if (quantity < 1) {
                quantity = 1;
                ele.val(1);
            }
            if (quantity > stock) {
                alert("Sorry, only " + stock + " items left in stock!");
                quantity = stock;
                ele.val(stock);
            }
            updateCart(row.data("id"), quantity);
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            var row = ele.closest("tr");

            if (confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route("cart.remove") }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: row.data("id")
                    },
                    success: function(response) {
                        window.location.reload();
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert('Error removing item. Please try again.');
                    }
                });
            }
        });

        function updateCart(id, quantity) {
            $.ajax({
                url: '{{ route("cart.update") }}',
                method: "PATCH",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    quantity: quantity
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    // alert('Error updating cart. Please try again.'); 
                }
            });
        }
    });
</script>
@endsection