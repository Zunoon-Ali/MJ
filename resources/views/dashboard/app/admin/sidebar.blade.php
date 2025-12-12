<div class="sidebar">

    <h2>Admin Panel</h2>
    <hr style="border-color: #555;">
    <ul>
        {{-- Primary Management --}}
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('users.index') }}">Users</a></li>
        <li><a href="{{ route('products.index') }}">Products</a></li>
        <li><a href="{{ route('orders.index') }}">Orders</a></li>
        <li><a href="{{ route('reviews.index') }}">Product Reviews</a></li>

        <li>
            <hr style="border-color: #555; margin: 10px 0;">
        </li>

        {{-- Content Management --}}
        <li><a href="{{ route('home-content.index') }}">Home Content</a></li>
        <li><a href="{{ route('about-content.index') }}">About Content</a></li>
        <li><a href="{{ route('contact-content.index') }}">Contact Content</a></li>
        <li><a href="{{ route('contact-submissions.index') }}">Contact Submissions</a></li>

        <li>
            <hr style="border-color: #555; margin: 10px 0;">
        </li>

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