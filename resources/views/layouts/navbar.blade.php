<style>
    /* Extra */
/* body {
  background: #ccc;
  color: #272727;
  font-size: 14px;
  margin: 0;
} */


</style>





<nav class="navbar position-fixed mb-5">
    <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/2/23/AS_sample_logo.png" alt="LOGO"></div>
    <div class="push-left">
      <button id="menu-toggler" data-class="menu-active" class="hamburger">
        <span class="hamburger-line hamburger-line-top"></span>
        <span class="hamburger-line hamburger-line-middle"></span>
        <span class="hamburger-line hamburger-line-bottom"></span>
      </button>

      <!--  Menu compatible with wp_nav_menu  -->
      <ul id="primary-menu" class="menu nav-menu">
        <li class=" list"><a class=" "  href="/home">Home</a></li>
        <li class=" list"><a class=" "  href="/products">Prodcuts</a></li>

        <li class=" list "><a class=" "  href="/categories">Categories</a></li>

        <div  class="count  text-white font-weight-bold rounded-3"><?php
            use Illuminate\Support\Facades\DB;
            $count = DB::table('carts')->count();
            echo $count;
            ?></div>
        <li class=" list position-relative"><a class=" "  href="/items">Cart</a></li>
        <li class=" list "><a class=" "  href="/profil">profil</a></li>
        <li class=" list "><a class=" "  href="/login">Logout</a></li>
      </ul>


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
