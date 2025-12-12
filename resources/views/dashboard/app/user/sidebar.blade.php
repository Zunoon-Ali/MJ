<div class="sidebar">
    <h2><i class="fas fa-user-circle me-2"></i>User Panel</h2>
    <ul>
        <li>
            <a href="{{ route('user.dashboard') }}" class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.orders') }}" class="{{ request()->routeIs('user.orders*') ? 'active' : '' }}">
                <i class="fas fa-box"></i>
                <span>My Orders</span>
                @php
                $orderCount = \App\Models\Order::where('user_id', Auth::id())->count();
                @endphp
                @if($orderCount > 0)
                <span class="badge">{{ $orderCount }}</span>
                @endif
            </a>
        </li>
        <li>
            <a href="/product#products">
                <i class="fas fa-store"></i>
                <span>Browse Products</span>
            </a>
        </li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('logout') }}" class="logout-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>