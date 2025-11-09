<section class="header desktop">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-between row1">
      <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="hdr_logo hdr_logo1">
          <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo" />
          </a>
        </div>
      </div>

      <div class="col-lg-7 col-md-6 col-sm-12">
        <div class="nav stroke nav1">
          <ul id="menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>
            <li><a href="{{ url('/product') }}">Product</a></li>
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-5">
        <div class="hdr-right-btn hdr-right-btn1">
          <ul class="hdr-right-list">
            <li>
              <button class="search-btn" onclick="openSearch()">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </li>
            <!-- ✅ Account Page -->
            <li>
              <a href="{{ route('account') }}">
                <i class="fa-solid fa-user"></i>
              </a>
            </li>
            <!-- ✅ Cart Page -->
            <li>
              <a href="{{ route('cart') }}">
                <i class="fa-solid fa-cart-shopping"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== MOBILE HEADER ===================== -->
<section class="header mobile">
  <div class="container">
    <div class="mobile-header">
      <!-- Hamburger -->
      <div class="hamburger">
        <div class="ham-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <!-- Logo -->
      <div class="hdr_logo hdr_logo2">
        <a href="{{ url('/') }}">
          <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo" />
        </a>
      </div>

      <!-- ✅ Updated Right Buttons -->
      <div class="hdr-right-btn hdr-right-btn2">
        <ul class="hdr-right-list">
          <li>
            <button class="search-btn" onclick="openSearch()">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </li>
          <li>
            <a href="{{ route('account') }}">
              <i class="fa-solid fa-user"></i>
            </a>
          </li>
          <li>
            <a href="{{ route('cart') }}">
              <i class="fa-solid fa-cart-shopping"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Hidden Mobile Menu -->
    <div class="mobile-menu">
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/product') }}">Product</a></li>
        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
      </ul>
    </div>
  </div>
</section>

<!-- ===================== SEARCH OVERLAY ===================== -->
<div class="search-overlay" id="searchOverlay">
  <span class="close-btn" onclick="closeSearch()">✖</span>
  <div class="search-box">
    <input type="text" class="search-input" placeholder="Search..." />
    <button class="send-btn">Send</button>
  </div>
</div>

<!-- ===================== HEADER JS ===================== -->
<script>
  function openSearch() {
    document.getElementById("searchOverlay").classList.add("active");
  }

  function closeSearch() {
    document.getElementById("searchOverlay").classList.remove("active");
  }

  document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".ham-icon");
    const mobileMenu = document.querySelector(".mobile-menu");

    if (hamburger && mobileMenu) {
      hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        mobileMenu.classList.toggle("active");
      });
    }
  });
</script>

<!-- ===================== HEADER STYLES ===================== -->
<style>
  /* ===== Sticky Header ===== */
  .header.desktop,
  .header.mobile {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    background: rgba(0, 0, 0, 0.4);
    /* Slight transparent layer */
    backdrop-filter: blur(8px);
  }


  /* ===== Desktop Header ===== */
  .header.desktop {
    background: url("{{ asset('images/banner.jpg') }}") no-repeat center center/cover;
    /* opacity: 0.5; */
  }

  /* ===== Mobile Header ===== */
  @media (max-width: 786px) {
    .header.desktop {
      display: none;
    }

    .header.mobile {
      display: block;
      background: url("{{ asset('images/banner.jpg') }}") no-repeat center center/cover;
      height: 80px;
    }

    .mobile-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 80px;
      padding: 0 15px;
    }

    /* Hamburger Icon */
    .ham-icon {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 25px;
      height: 18px;
      cursor: pointer;
    }

    .ham-icon span {
      background: #fff;
      height: 3px;
      width: 100%;
      border-radius: 3px;
      transition: 0.3s;
    }

    .ham-icon.active span:nth-child(1) {
      transform: rotate(45deg) translateY(7px);
    }

    .ham-icon.active span:nth-child(2) {
      opacity: 0;
    }

    .ham-icon.active span:nth-child(3) {
      transform: rotate(-45deg) translateY(-7px);
    }

    .hdr_logo1 img {
      height: 60px;
      width: auto;
      display: block;
    }

    .hdr_logo2 img {
      height: 130px;
      width: auto;
      display: block;
    }

    /* Right Buttons */
    .hdr-right-list {
      display: flex;
      gap: 10px;
      align-items: center;
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .hdr-right-list i {
      color: #fff;
      font-size: 18px;
    }

    .search-btn {
      background: none;
      border: none;
      color: #fff;
    }

    /* Hidden Mobile Menu */
    .mobile-menu {
      position: fixed;
      top: 0px;
      left: 0;
      width: 100%;
      background: url("{{ asset('images/banner.jpg') }}") no-repeat center center/cover;
      color: #fff;
      transform: translateY(-100%);
      transition: transform 0.3s ease;
      z-index: 999;
    }

    .mobile-menu.active {
      transform: translateY(80px);
    }

    .mobile-menu ul {
      list-style: none;
      padding: 20px 15px;
      margin: 0;
    }

    .mobile-menu li {
      margin: 15px 0;
    }

    .mobile-menu a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      transition: color 0.2s;
    }

    .mobile-menu a:hover {
      color: #f9c74f;
    }

    ul.hdr-right-list {
      display: flex;
      align-items: center;
      justify-content: end;
      background: #fcf9e8;
      border-radius: 30px;
      padding: 7px 15px;
      width: fit-content;
      gap: 10px;
      justify-self: end;
    }
  }

  /* Hide Mobile Header on Desktop */
  @media (min-width: 787px) {
    .header.mobile {
      display: none;
    }
  }

  /* ===== Search Overlay ===== */
  .search-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.9);
    justify-content: center;
    align-items: center;
    flex-direction: column;
    z-index: 2000;
  }

  .search-overlay.active {
    display: flex;
  }

  .search-box {
    display: flex;
    gap: 10px;
  }

  .search-input {
    padding: 10px;
    font-size: 16px;
    width: 200px;
  }

  .send-btn {
    padding: 10px 15px;
    background: #f9c74f;
    border: none;
    cursor: pointer;
  }

  .close-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    color: white;
    font-size: 22px;
    cursor: pointer;
  }
</style>