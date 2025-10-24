@extends('layouts.app')

@section('title', 'Your Cart - Veridan Roots')

@section('content')
<section class="cart-page sec py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center fw-bold" style="color:#377f52;">YOUR SHOPPING CART</h2>

        <div class="row">
            <!-- Cart Items (Main Table) -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm">
                    <!-- Apply table-responsive here to contain the wide table -->
                    <div class="card-body table-responsive">
                        <table class="table align-middle mb-0">
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
                                <!-- Product Row Example 1 -->
                                <tr>
                                    <td data-label="Product">
                                        <div class="d-flex align-items-center product-details-container">
                                            <img src="{{ asset('images/product2.png') }}" onerror="this.onerror=null; this.src='https://placehold.co/70x70/377f52/ffffff?text=Oil';" alt="Herbal Hair Oil" width="70" class="rounded me-3">
                                            <div>
                                                <h6 class="mb-1">Herbal Hair Oil (200ml)</h6>
                                                <small class="text-muted">Nourishing Formula</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Price" class="text-center">$39.99</td>
                                    <td data-label="Quantity" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
                                            <input type="number" class="form-control form-control-sm text-center mx-1" value="1" min="1" style="width:50px;">
                                            <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
                                        </div>
                                    </td>
                                    <td data-label="Subtotal" class="text-end">$39.99</td>
                                    <td data-label="Remove" class="text-end">
                                        <button class="btn btn-sm btn-outline-danger" type="button" title="Remove Item"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                                <!-- Product Row Example 2 -->
                                <tr>
                                    <td data-label="Product">
                                        <div class="d-flex align-items-center product-details-container">
                                            <img src="{{ asset('images/product3.png') }}" onerror="this.onerror=null; this.src='https://placehold.co/70x70/377f52/ffffff?text=Shampoo';" alt="Volumizing Shampoo" width="70" class="rounded me-3">
                                            <div>
                                                <h6 class="mb-1">Volumizing Shampoo</h6>
                                                <small class="text-muted">Large 500ml bottle</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Price" class="text-center">$24.00</td>
                                    <td data-label="Quantity" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">-</button>
                                            <input type="number" class="form-control form-control-sm text-center mx-1" value="2" min="1" style="width:50px;">
                                            <button class="btn btn-outline-secondary btn-sm quantity-btn" type="button">+</button>
                                        </div>
                                    </td>
                                    <td data-label="Subtotal" class="text-end">$48.00</td>
                                    <td data-label="Remove" class="text-end">
                                        <button class="btn btn-sm btn-outline-danger" type="button" title="Remove Item"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="{{ url('/') }}" class="btn btn-outline-success mt-3" style="border-color:#377f52; color:#377f52;">
                    <i class="fa fa-arrow-left me-2"></i> Continue Shopping
                </a>
            </div>

            <!-- Order Summary (Fixed the content structure here) -->
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white fw-bold border-bottom">
                        Order Summary
                    </div>
                    <div class="card-body">
                        {{-- This section is now a clean list of totals, resolving the mobile wrapping issue --}}
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Cart Subtotal (3 items): <span>$87.99</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping: <span>$7.50</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 fw-bold">
                                Order Total: <span class="fs-5" style="color:#377f52;">$95.49</span>
                            </li>
                        </ul>

                        <div class="d-grid mt-4">
                            <button class="btn btn-lg text-white" type="submit" style="background-color:#377f52; border-color:#377f52;">
                                <a href="{{ url('checkout') }}" class="text-white">

                                    Proceed to Checkout
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const input = e.target.closest('.d-flex').querySelector('input[type="number"]');
                let value = parseInt(input.value);
                if (e.target.textContent === '+') {
                    value++;
                } else if (e.target.textContent === '-' && value > 1) {
                    value--;
                }
                input.value = value;
                // In a real app, you would now trigger an AJAX update for the cart.
                console.log(`Quantity updated for product to: ${value}`);
            });
        });
    });
</script>