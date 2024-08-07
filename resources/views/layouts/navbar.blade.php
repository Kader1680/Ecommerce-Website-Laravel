
<nav class="navbar position-fixed mb-5 pt-5 pb-5">
    <div class="logo">
        <a class=" fw-bolder text-decoration-none" href="/">
        <h1> Brand</h1>
            {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/2/23/AS_sample_logo.png" alt="LOGO"> --}}
        </a>
    </div>
    <div class="push-left">
      <button id="menu-toggler" data-class="menu-active" class="hamburger">
        <span class="hamburger-line hamburger-line-top"></span>
        <span class="hamburger-line hamburger-line-middle"></span>
        <span class="hamburger-line hamburger-line-bottom"></span>
      </button>

      <!--  Menu compatible with wp_nav_menu  -->
      <ul id="primary-menu" class="menu nav-menu">
        <li class=" list"><a class=" "  href="/">Home</a></li>
        <li class=" list"><a class=" "  href="/products">Prodcuts</a></li>

        <li class=" list "><a class=" "  href="/categories">Categories</a></li>

        <div  class="count  text-white font-weight-bold">
        <?php
            use Illuminate\Support\Facades\DB;
            use Illuminate\Support\Facades\Auth;
            $user = Auth()->user();
            $count  = 0;
            if ($user) {
                $idAuth = $user->id;
                $count = DB::table('carts')->where('user_id', $idAuth)->count();
                echo $count;
            }else {
                echo $count;
            }
        ?>
        </div>
        <li class=" list position-relative">
          <a class=" "  href="/items">
          
            <img class="" height="30" width="30" src="{{ URL("assets\image\shopping-cart.png") }}" >

          </a>
        </li>
        @php
                  $user = Auth::user();
                
        @endphp
        @if($user)
        <li class=" list ">
              <a href="/profil">
                {{ $user->name }}
              </a>
        </li>
        <li class="list"><a href="logout">Logout</a></li>
        @else
        <li class="list"><a href="login"></i> login</a></li>
        @endif
       
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


const down = document.querySelector(".fa-arrow-down")
let dorp = document.querySelector(".drop")

down.addEventListener("click", ()=>{
    dorp.classList.toggle("none")
})

  </script>
