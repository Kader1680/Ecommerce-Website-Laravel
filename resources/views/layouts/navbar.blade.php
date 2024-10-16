<nav class="navbar position-fixed w-100 mb-5 pt-4 pb-4">
  <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
          <a class="fw-bolder text-decoration-none text-white" href="/">
              <h1><img width="50"   src="{{ asset('assets/image/zed.png') }}" alt=""></h1>
          </a>
      </div>
      <div class="push-left">
          <button id="menu-toggler" data-class="menu-active" class="hamburger">
              <span class="hamburger-line hamburger-line-top"></span>
              <span class="hamburger-line hamburger-line-middle"></span>
              <span class="hamburger-line hamburger-line-bottom"></span>
          </button>

          <!-- Menu -->
          <ul id="primary-menu" class="menu nav-menu d-flex align-items-center">
              <li class="list me-3"><a class="text-white bg-black" href="/">Home</a></li>
              <li class="list me-3"><a class="text-white" href="/products">Products</a></li>
              <li class="list me-3"><a class="text-white" href="/categories">Categories</a></li>

              <!-- Cart Icon -->
              <li class="list position-relative">
                  <a class="text-white" href="/items">
                      {{-- <img height="30" width="30" src="{{ URL('assets/image/cart.png') }}" alt="Cart"> --}}
                      Carts
                      <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill ">
                          <?php
                          use Illuminate\Support\Facades\DB;
                          use Illuminate\Support\Facades\Auth;
                          $user = Auth()->user();
                          $count = $user ? DB::table('carts')->where('user_id', $user->id)->count() : 0;
                          echo $count;
                          ?>
                      </span>
                  </a>
              </li>

              @php
              $user = Auth::user();
              @endphp
              @if($user)
                  <li class="list me-3"><a class="text-white" href="/profil">{{ $user->name }}</a></li>
                  <li class="list"><a class="text-white" href="/logout">Logout</a></li>
              @else
                  <li class="list"><a class="text-white" href="/login">Login</a></li>
              @endif
          </ul>
      </div>
  </div>
</nav>

<script>
$(document).ready(function() {
  // Toggle menu on click
  $("#menu-toggler").click(function() {
      toggleBodyClass("menu-active");
  });

  function toggleBodyClass(className) {
      document.body.classList.toggle(className);
  }
});
</script>

<style>
/* Navbar Styles */
.navbar {
  background: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
  backdrop-filter: blur(10px); /* Background blur effect */
}

.menu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.list {
  position: relative;
}

.hamburger {
  display: none; /* Hide hamburger button on larger screens */
}

.hamburger-line {
  display: block;
  width: 25px;
  height: 3px;
  background: white;
  margin: 4px 0;
  transition: 0.4s;
}

.count {
  font-size: 0.75rem;
  background-color: red; /* Red badge for cart count */
}

/* Responsive Styles */
@media (max-width: 768px) {
  .hamburger {
      display: block; /* Show hamburger button on mobile screens */
  }

  .nav-menu {
      display: none; /* Hide menu on mobile */
      flex-direction: column; /* Stack items vertically */
      position: absolute;
      background: rgba(0, 0, 0, 0.9);
      top: 60px; /* Adjust based on navbar height */
      right: 0;
      width: 100%; /* Full width */
      z-index: 1000; /* Ensure it appears above other content */
  }

  .nav-menu.menu-active {
      display: flex; /* Show menu when active */
  }
}
</style>
