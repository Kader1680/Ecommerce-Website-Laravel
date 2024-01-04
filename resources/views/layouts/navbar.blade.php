<style>
    /* Extra */
body {
  background: #ccc;
  color: #272727;
  font-size: 14px;
  margin: 0;
}

.logo {
  max-width: 200px;
}

.navbar {
  align-items: center;
  background: #fff;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  display: flex;
  flex-direction: row;
  font-family: sans-serif;
  padding: 10px 50px;
}

.push-left {
  margin-left: auto;
}

/* Menu */
.hamburger {
  background: transparent;
  border: none;
  cursor: pointer;
  display: none;
  outline: none;
  height: 30px;
  position: relative;
  width: 30px;
  z-index: 1000;
}
@media screen and (max-width: 768px) {
  .hamburger {
    display: inline-block;
  }
}
.hamburger-line {
  background: #272727;
  height: 3px;
  position: absolute;
  left: 0;
  transition: all 0.2s ease-out;
  width: 100%;
}
.hamburger:hover .hamburger-line {
  background: #777;
}
.hamburger-line-top {
  top: 3px;
}
.menu-active .hamburger-line-top {
  top: 50%;
  transform: rotate(45deg) translatey(-50%);
}
.hamburger-line-middle {
  top: 50%;
  transform: translatey(-50%);
}
.menu-active .hamburger-line-middle {
  left: 50%;
  opacity: 0;
  width: 0;
}
.hamburger-line-bottom {
  bottom: 3px;
}
.menu-active .hamburger-line-bottom {
  bottom: 50%;
  transform: rotate(-45deg) translatey(50%);
}

.nav-menu {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
  transition: all 0.25s ease-in;
}
@media screen and (max-width: 768px) {
  .nav-menu {
    background: #fff;
    flex-direction: column;
    justify-content: center;
    opacity: 0;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    transform: translatey(-100%);
    text-align: center;
  }
  .menu-active .nav-menu {
    transform: translatey(0%);
    opacity: 1;
  }
}
.nav-menu .menu-item a {
  color: #444444;
  display: block;
  line-height: 30px;
  margin: 0px 10px;
  text-decoration: none;
  text-transform: uppercase;
}
.nav-menu .menu-item a:hover {
  color: #777777;
  text-decoration: underline;
}
@media screen and (max-width: 768px) {
  .nav-menu .menu-item a {
    font-size: 20px;
    margin: 8px;
  }
}

.sub-nav {
  border: 1px solid #ccc;
  display: none;
  position: absolute;
  background-color: #7c1313;
  padding: 5px 5px;
  list-style: none;
  width: 230px;
}
@media screen and (max-width: 768px) {
  .sub-nav {
    position: relative;
    width: 100%;
    display: none;
    background-color: rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
  }
}

.nav__link:hover + .sub-nav {
  display: block;
}

.sub-nav:hover {
  display: block;
}
</style>


<nav class="navbar">
    <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/2/23/AS_sample_logo.png" alt="LOGO"></div>
    <div class="push-left">
      <button id="menu-toggler" data-class="menu-active" class="hamburger">
        <span class="hamburger-line hamburger-line-top"></span>
        <span class="hamburger-line hamburger-line-middle"></span>
        <span class="hamburger-line hamburger-line-bottom"></span>
      </button>

      <!--  Menu compatible with wp_nav_menu  -->
      <ul id="primary-menu" class="menu nav-menu">
        <li class="menu-item current-menu-item"><a class="nav__link"  href="/">Home</a></li>
        {{-- <li class="menu-item dropdown"><a class="nav__link"  href="#">About</a>
           <ul class="sub-nav" >
            <li><a class="sub-nav__link" href="#">link 1</a></li>
            <li><a class="sub-nav__link" href="#">link 2</a></li>
            <li><a class="sub-nav__link" href="#">link 3 - long link - long link - long link</a></li>
          </ul>

        </li> --}}
        <li class="menu-item "><a class="nav__link"  href="categories">Categories</a></li>
        <li class="menu-item "><a class="nav__link"  href="#">Prodcuts</a></li>
        <li class="menu-item "><a class="nav__link"  href="#">Blog</a></li>
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
