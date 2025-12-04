<div class="sidebar">
    <h2>User Panel</h2>
    <hr>
    <ul>
        <li><a href="/dashboard/user">Dashboard</a></li>
        <li><a href="#">My Profile</a></li>
        <li><a href="#">My Orders</a></li>
        <li><a href="#">Order History</a></li>
        <li><a href="#">Wishlist</a></li>
        <li><a href="#">Addresses</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Settings</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <li class="logout-item">
            <a href="{{ route('logout') }}" class="logout-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
        </li>
    </ul>
</div>