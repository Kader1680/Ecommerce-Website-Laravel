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
    <div class="logo"><a href="/login"><img src="https://upload.wikimedia.org/wikipedia/commons/2/23/AS_sample_logo.png" alt="LOGO"></a></div>
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

        <div  class="count  text-white font-weight-bold rounded-3">
        <?php
            use Illuminate\Support\Facades\DB;
            $count = DB::table('carts')->count();
            echo $count;
        ?>
        </div>
        <li class=" list position-relative"><a class=" "  href="/items">Cart</a></li>
        <li class=" list "><a class=" "  href="/profil">Profil</a><i style="font-size: 16px" class="  ms-lg-3 fa-solid fa-arrow-down"></i></li>
      </ul>

      <div class="drop">
        <ul class=" list-unstyled">
            <li class="list"><a href="/logout"><i class="fa-solid fa-right-from-bracket ms-sm-2"></i> Logout</a></li>
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


const down = document.querySelector(".fa-arrow-down")
let dorp = document.querySelector(".drop")

down.addEventListener("click", ()=>{
    dorp.classList.toggle("none")
})

  </script>
