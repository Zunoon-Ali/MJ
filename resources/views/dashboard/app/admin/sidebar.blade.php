<div class="sidebar">
    <h2>Admin Panel</h2>
    <hr style="border-color: #555;">
    <ul>
        <li><a href="{{ route('home-content.index') }}">Home</a></li>
        <li><a href="{{ route('about-content.index') }}">About Page</a></li>
        <li><a href="{{ route('contact-content.index') }}">Contact Page</a></li>
        <li><a href="{{ route('products.index') }}">Products</a></li>
        <li><a href="{{ route('users.index') }}">Users</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Contact Messages</a></li>
        <li><a href="#">About Page Settings</a></li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="logout-link">
                Logout
            </a>
        </li>
    </ul>
</div>