<footer id="down">
  <div class="container">
    <div class="row">
      <!-- Logo and About -->
      <div class="col-md-3 col-12 col-sm-12">
        <div class="footer_logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" />
          </a>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor dummy incididunt ut labore et dolore matem.
          </p>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-md-3 col-12 col-sm-12">
        <div class="quick-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>
            <li><a href="#">CBD Education</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <!-- Products -->
      <div class="col-md-3 col-12 col-sm-12">
        <div class="quick-links ser-links">
          <h3>Products</h3>
          <ul>
            <li><a href="#">Returns & Refunds</a></li>
            <li><a href="#">Lorem ipsum dummy here</a></li>
            <li><a href="#">Dummy here</a></li>
            <li><a href="#">Lorem ipsum</a></li>
          </ul>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md-3 col-12 col-sm-12">
        <div class="footer-text">
          <h3>Contact Us</h3>
          <ul class="ftr-list">
            <li>
              <a href="javascript:void(0)">
                <img src="{{ asset('images/footer-icon1.png') }}" alt="Address Icon" />
                <p>Lorem ipsum dolor sit ame ipsum</p>
              </a>
            </li>
            <li>
              <a href="mailto:Lorum@ipsum.com">
                <img src="{{ asset('images/footer-icon2.png') }}" alt="Email Icon" />
                <p>Lorum@ipsum.com</p>
              </a>
            </li>
            <li>
              <a href="tel:+(123)123-456-7890">
                <img src="{{ asset('images/footer-icon3.png') }}" alt="Phone Icon" />
                <p>+(123)123-456-7890</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Footer -->
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-lg-12 p-0">
        <div class="ftr-btm">
          <ul>
            <li>
              <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </li>
            <li>Copyright © {{ date('Y') }} Leaf Healz. All Rights Reserved.</li>
            <li>
              <a href="#"><img src="{{ asset('images/payment.png') }}" alt="Payment Methods" /></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Responsive Styles -->
<style>
  @media only screen and (min-width: 300px) and (max-width: 519px) {
    #down.row {
      margin: 166px 0 50px 0;
      padding: 300px 0 20px 0;
    }
    .quick-links {
      width: 90%;
      margin: 15px 0 0 auto;
      margin-bottom: 0;
    }
  }
</style>
