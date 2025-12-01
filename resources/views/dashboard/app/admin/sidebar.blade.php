<div class="sidebar">
    <h2>Admin Panel</h2>
    <hr style="border-color: #555;">
    <ul>
       <li><a href="#">🏠 Home</a></li>
       <li><a href="#">📦 Products</a></li>
       <li><a href="#">👤 Users</a></li>
       <li><a href="#">📝 Orders</a></li>
       <li><a href="#">✉️ Contact Messages</a></li>
       <li><a href="#">ℹ️ About Page Settings</a></li>
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