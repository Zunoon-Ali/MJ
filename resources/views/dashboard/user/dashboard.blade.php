@extends('dashboard.app.user.layout')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          <h2 class="mb-0">
            <i class="fas fa-user-circle me-2"></i>
            Welcome, {{ Auth::user()->name }}!
          </h2>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 mb-4">
              <h4>Dashboard Overview</h4>
              <p class="text-muted">Manage your account and track your orders here.</p>
            </div>
          </div>

          <div class="row g-3">
            <!-- View Website Button -->
            <div class="col-md-6">
              <div class="card bg-success text-white h-100">
                <div class="card-body text-center">
                  <i class="fas fa-globe fa-3x mb-3"></i>
                  <h5>View Website</h5>
                  <p>Return to the main website</p>
                  <a href="{{ url('/') }}" class="btn btn-light">
                    <i class="fas fa-arrow-right me-2"></i>Go to Website
                  </a>
                </div>
              </div>
            </div>

            <!-- My Orders -->
            <div class="col-md-6">
              <div class="card bg-info text-white h-100">
                <div class="card-body text-center">
                  <i class="fas fa-shopping-bag fa-3x mb-3"></i>
                  <h5>My Orders</h5>
                  <p>View your order history</p>
                  <a href="{{ route('user.orders') }}" class="btn btn-light">
                    <i class="fas fa-list me-2"></i>View Orders
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-3 mt-3">
            <!-- Profile Settings -->
            <div class="col-md-6">
              <div class="card bg-warning text-dark h-100">
                <div class="card-body text-center">
                  <i class="fas fa-user-cog fa-3x mb-3"></i>
                  <h5>Profile Settings</h5>
                  <p>Update your profile information</p>
                  <a href="#" class="btn btn-dark">
                    <i class="fas fa-edit me-2"></i>Edit Profile
                  </a>
                </div>
              </div>
            </div>

            <!-- Cart -->
            <div class="col-md-6">
              <div class="card bg-danger text-white h-100">
                <div class="card-body text-center">
                  <i class="fas fa-shopping-cart fa-3x mb-3"></i>
                  <h5>Shopping Cart</h5>
                  <p>View items in your cart</p>
                  <a href="{{ route('cart') }}" class="btn btn-light">
                    <i class="fas fa-cart-arrow-down me-2"></i>Go to Cart
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection