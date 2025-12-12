@extends('dashboard.app.admin.layout')

@section('content')
<div class="container-fluid py-4">
  <div class="row mb-4">
    <div class="col-12">
      <h2 class="mb-2">Admin Dashboard</h2>
      <p class="text-muted">Overview of your store's performance</p>
    </div>
  </div>

  <!-- Stats Cards -->
  <div class="row g-4 mb-5">
    <!-- User Count -->
    <div class="col-md-3">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body d-flex align-items-center">
          <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3 text-primary">
            <i class="fa-solid fa-users fa-2x"></i>
          </div>
          <div>
            <h6 class="text-muted mb-1">Total Users</h6>
            <h3 class="mb-0 fw-bold">{{ $userCount }}</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Sales -->
    <div class="col-md-3">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body d-flex align-items-center">
          <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3 text-success">
            <i class="fa-solid fa-coins fa-2x"></i>
          </div>
          <div>
            <h6 class="text-muted mb-1">Total Sales</h6>
            <h3 class="mb-0 fw-bold">${{ number_format($totalSales, 2) }}</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Stock -->
    <div class="col-md-3">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body d-flex align-items-center">
          <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3 text-warning">
            <i class="fa-solid fa-boxes-stacked fa-2x"></i>
          </div>
          <div>
            <h6 class="text-muted mb-1">Total Stock</h6>
            <h3 class="mb-0 fw-bold">{{ $totalStock }}</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Reviews -->
    <div class="col-md-3">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body d-flex align-items-center">
          <div class="rounded-circle bg-info bg-opacity-10 p-3 me-3 text-info">
            <i class="fa-solid fa-star fa-2x"></i>
          </div>
          <div>
            <h6 class="text-muted mb-1">Total Reviews</h6>
            <h3 class="mb-0 fw-bold">{{ $reviewCount }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <!-- Sales Chart -->
    <div class="col-lg-8">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-header bg-white border-bottom-0 py-3">
          <h5 class="card-title mb-0 fw-bold">Sales Overview (Last 7 Days)</h5>
        </div>
        <div class="card-body">
          <canvas id="salesChart" height="150"
            data-labels="{{ json_encode($chartLabels) }}"
            data-values="{{ json_encode($chartValues) }}"></canvas>
        </div>
      </div>
    </div>

    <!-- Secondary Stats / Shipped -->
    <div class="col-lg-4">
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body text-center py-5">
          <div class="rounded-circle bg-info bg-opacity-10 p-4 d-inline-block mb-3 text-info">
            <i class="fa-solid fa-truck-fast fa-3x"></i>
          </div>
          <h2 class="fw-bold">{{ $shippedOrders }}</h2>
          <p class="text-muted mb-0">Orders Shipped</p>
        </div>
      </div>

      <div class="card shadow-sm border-0 bg-dark text-white">
        <div class="card-body p-4">
          <h5 class="mb-3"><i class="fa-solid fa-bolt me-2"></i> Quick Actions</h5>
          <div class="d-grid gap-2">
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm text-start"><i class="fa-solid fa-plus me-2"></i> Add New Product</a>
            <a href="{{ route('orders.index') }}" class="btn btn-outline-light btn-sm text-start"><i class="fa-solid fa-list me-2"></i> Manage Orders</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const chartElement = document.getElementById('salesChart');
  const ctx = chartElement.getContext('2d');

  // Parse data from data attributes
  const chartLabels = JSON.parse(chartElement.dataset.labels);
  const chartValues = JSON.parse(chartElement.dataset.values);

  const salesChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: chartLabels,
      datasets: [{
        label: 'Sales ($)',
        data: chartValues,
        borderColor: '#198754',
        backgroundColor: 'rgba(25, 135, 84, 0.1)',
        borderWidth: 2,
        pointBackgroundColor: '#198754',
        pointRadius: 4,
        fill: true,
        tension: 0.4
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          mode: 'index',
          intersect: false,
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            borderDash: [5, 5]
          }
        },
        x: {
          grid: {
            display: false
          }
        }
      }
    }
  });
</script>
@endsection