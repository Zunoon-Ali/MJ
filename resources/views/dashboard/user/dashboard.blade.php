@extends('dashboard.app.user.layout')

@section('content')
<div class="container-fluid">
  <!-- Welcome Header -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="welcome-card">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h2 class="mb-1"><i class="fas fa-user-circle me-2"></i>Welcome, {{ Auth::user()->name }}!</h2>
            <p class="text-muted mb-0">Here's your account overview</p>
          </div>
          <div class="text-end">
            <small class="text-muted d-block">Last Login</small>
            <strong>{{ now()->format('M d, Y') }}</strong>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Statistics Cards -->
  <div class="row g-4 mb-4">
    <div class="col-xl-3 col-md-6">
      <div class="stat-card stat-card-primary">
        <div class="stat-icon">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="stat-content">
          <h3>{{ $totalOrders }}</h3>
          <p>Total Orders</p>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="stat-card stat-card-warning">
        <div class="stat-icon">
          <i class="fas fa-clock"></i>
        </div>
        <div class="stat-content">
          <h3>{{ $pendingOrders }}</h3>
          <p>Pending Orders</p>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="stat-card stat-card-success">
        <div class="stat-icon">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="stat-content">
          <h3>{{ $deliveredOrders }}</h3>
          <p>Delivered</p>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6">
      <div class="stat-card stat-card-info">
        <div class="stat-icon">
          <i class="fas fa-box"></i>
        </div>
        <div class="stat-content">
          <h3>{{ $totalProducts }}</h3>
          <p>Products Purchased</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Charts Row -->
  <div class="row g-4 mb-4">
    <div class="col-lg-8">
      <div class="dashboard-card">
        <div class="card-header-custom">
          <h5><i class="fas fa-chart-line me-2"></i>Order Status Overview</h5>
        </div>
        <div class="card-body">
          <canvas id="orderChart" height="80"></canvas>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="dashboard-card">
        <div class="card-header-custom">
          <h5><i class="fas fa-chart-pie me-2"></i>Order Distribution</h5>
        </div>
        <div class="card-body">
          <canvas id="pieChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- My Purchased Products (Track Products) -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="dashboard-card">
        <div class="card-header-custom">
          <h5><i class="fas fa-box-open me-2"></i>My Purchased Products</h5>
          <small class="text-muted">Products you have ordered</small>
        </div>
        <div class="card-body">
          @if($purchasedProducts->count() > 0)
          <div class="table-responsive">
            <table class="table table-hover align-middle modern-table">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Order Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($purchasedProducts as $item)
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="product-thumb me-3">
                      <div>
                        <strong class="d-block">{{ $item->product->name }}</strong>
                        <small class="text-muted">Order #{{ $item->order->order_number }}</small>
                      </div>
                    </div>
                  </td>
                  <td><span class="price-tag">${{ number_format($item->price, 2) }}</span></td>
                  <td><span class="badge bg-secondary">{{ $item->quantity }}</span></td>
                  <td><strong class="text-success">${{ number_format($item->price * $item->quantity, 2) }}</strong></td>
                  <td>{{ $item->order->created_at->format('M d, Y') }}</td>
                  <td>
                    @if($item->order->status == 'pending')
                    <span class="status-badge status-pending">Pending</span>
                    @elseif($item->order->status == 'processing')
                    <span class="status-badge status-processing">Processing</span>
                    @elseif($item->order->status == 'shipped')
                    <span class="status-badge status-shipped">Shipped</span>
                    @elseif($item->order->status == 'delivered')
                    <span class="status-badge status-delivered">Delivered</span>
                    @else
                    <span class="status-badge status-cancelled">Cancelled</span>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @else
          <div class="empty-state">
            <i class="fas fa-box-open fa-4x text-muted mb-3"></i>
            <h5>No Products Purchased Yet</h5>
            <p class="text-muted">Start shopping to see your purchased products here</p>
            <a href="/product#products" class="btn btn-primary">
              <i class="fas fa-store me-2"></i>Browse Products
            </a>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <!-- Recent Orders -->
  <div class="row">
    <div class="col-12">
      <div class="dashboard-card">
        <div class="card-header-custom">
          <h5><i class="fas fa-receipt me-2"></i>Recent Orders</h5>
          <a href="{{ route('user.orders') }}" class="btn btn-sm btn-outline-primary">View All</a>
        </div>
        <div class="card-body">
          @if($recentOrders->count() > 0)
          <div class="table-responsive">
            <table class="table table-hover align-middle modern-table">
              <thead>
                <tr>
                  <th>Order #</th>
                  <th>Date</th>
                  <th>Items</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($recentOrders as $order)
                <tr>
                  <td><strong>#{{ $order->order_number }}</strong></td>
                  <td>{{ $order->created_at->format('M d, Y') }}</td>
                  <td><span class="badge bg-info">{{ $order->items->count() }} items</span></td>
                  <td><strong class="text-success">${{ number_format($order->total, 2) }}</strong></td>
                  <td>
                    @if($order->status == 'pending')
                    <span class="status-badge status-pending">Pending</span>
                    @elseif($order->status == 'processing')
                    <span class="status-badge status-processing">Processing</span>
                    @elseif($order->status == 'shipped')
                    <span class="status-badge status-shipped">Shipped</span>
                    @elseif($order->status == 'delivered')
                    <span class="status-badge status-delivered">Delivered</span>
                    @else
                    <span class="status-badge status-cancelled">Cancelled</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-sm btn-outline-primary">
                      <i class="fas fa-eye"></i> View
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @else
          <div class="empty-state">
            <i class="fas fa-shopping-cart fa-4x text-muted mb-3"></i>
            <h5>No Orders Yet</h5>
            <p class="text-muted">Start shopping to see your orders here</p>
            <a href="/product#products" class="btn btn-primary">
              <i class="fas fa-store me-2"></i>Browse Products
            </a>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .welcome-card {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 30px;
    border-radius: 15px;
    color: white;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
  }

  .stat-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  }

  .stat-icon {
    width: 70px;
    height: 70px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
  }

  .stat-card-primary .stat-icon {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
  }

  .stat-card-warning .stat-icon {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: white;
  }

  .stat-card-success .stat-icon {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    color: white;
  }

  .stat-card-info .stat-icon {
    background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    color: white;
  }

  .stat-content h3 {
    margin: 0;
    font-size: 32px;
    font-weight: 700;
    color: #2d3748;
  }

  .stat-content p {
    margin: 0;
    color: #718096;
    font-size: 14px;
  }

  .dashboard-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    overflow: hidden;
  }

  .card-header-custom {
    padding: 20px 25px;
    background: #f7fafc;
    border-bottom: 1px solid #e2e8f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .card-header-custom h5 {
    margin: 0;
    font-weight: 600;
    color: #2d3748;
  }

  .modern-table {
    margin-bottom: 0;
  }

  .modern-table thead {
    background: #f7fafc;
  }

  .modern-table th {
    font-weight: 600;
    color: #4a5568;
    border-bottom: 2px solid #e2e8f0;
    padding: 15px;
  }

  .modern-table td {
    padding: 15px;
    vertical-align: middle;
  }

  .product-thumb {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 8px;
  }

  .price-tag {
    background: #f0fdf4;
    color: #16a34a;
    padding: 5px 12px;
    border-radius: 6px;
    font-weight: 600;
  }

  .status-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
  }

  .status-pending {
    background: #fef3c7;
    color: #92400e;
  }

  .status-processing {
    background: #dbeafe;
    color: #1e40af;
  }

  .status-shipped {
    background: #e0e7ff;
    color: #4338ca;
  }

  .status-delivered {
    background: #d1fae5;
    color: #065f46;
  }

  .status-cancelled {
    background: #fee2e2;
    color: #991b1b;
  }

  .empty-state {
    text-align: center;
    padding: 60px 20px;
  }

  .empty-state i {
    opacity: 0.3;
  }
</style>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Order Status Chart
  const orderCtx = document.getElementById('orderChart').getContext('2d');
  new Chart(orderCtx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Orders',
        data: [{
          {
            $totalOrders
          }
        }, {
          {
            $totalOrders - 1
          }
        }, {
          {
            $totalOrders - 2
          }
        }, {
          {
            $totalOrders
          }
        }, {
          {
            $totalOrders + 1
          }
        }, {
          {
            $totalOrders
          }
        }],
        borderColor: '#667eea',
        backgroundColor: 'rgba(102, 126, 234, 0.1)',
        tension: 0.4,
        fill: true
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  // Pie Chart
  const pieCtx = document.getElementById('pieChart').getContext('2d');
  new Chart(pieCtx, {
    type: 'doughnut',
    data: {
      labels: ['Delivered', 'Pending', 'Processing'],
      datasets: [{
        data: [{
          {
            $deliveredOrders
          }
        }, {
          {
            $pendingOrders
          }
        }, {
          {
            $totalOrders - $deliveredOrders - $pendingOrders
          }
        }],
        backgroundColor: ['#4facfe', '#f5576c', '#43e97b']
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        legend: {
          position: 'bottom'
        }
      }
    }
  });
</script>
@endsection