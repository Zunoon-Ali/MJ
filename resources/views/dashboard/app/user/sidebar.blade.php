<div class="sidebar" style="background-color: #007bff;">
    <h2>My Account</h2>
    <h3></h3>
    <hr style="border-color: #57a8ff;">
    <ul>
        <li><a href="#">🏠 Dashboard Overview</a></li>
        <li><a href="#">🛍️ My Orders</a></li>
        <li><a href="#">❤️ Wishlist</a></li>
        <li><a href="#">⚙️ Account Settings</a></li>
        <li><a href="#">📧 Update Email/Password</a></li>
        <li><a href="#">📍 Shipping Addresses</a></li>
        <li><a href="#">📝 Leave a Review</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            style="color: #ff4d4d; font-weight: bold;">
            <span style="padding-right: 5px;">🚪</span> Logout
        </a>
        </li>
    </ul>
</div>