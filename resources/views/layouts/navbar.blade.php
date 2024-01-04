<div class="container">
    <header class="site-header">
        <div class="header__content--flow">
            <section class="header-content--left">
                <a href="#" class="brand-logo">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.098.649A12.037 12.037 0 0 0 1.088 7h3.525C5.305 4.302 6.541 2.065 8.098.65ZM6.544 7C7.359 3.45 9.014.832 11 .166V7H6.544Zm-2.33 2H.378A12.022 12.022 0 0 0 0 12c0 1.403.24 2.749.683 4h3.703A20.558 20.558 0 0 1 4 12c0-1.032.074-2.037.214-3Zm2.127 7A23.07 23.07 0 0 1 6 12c0-1.036.066-2.041.189-3H11v7H6.341Zm-1.44 2H1.605a12.037 12.037 0 0 0 6.493 5.351c-1.36-1.237-2.475-3.1-3.197-5.35ZM11 23.834C9.205 23.232 7.681 21.037 6.803 18H11v5.834Zm4.902-.483a12.037 12.037 0 0 0 6.493-5.35h-3.296c-.722 2.25-1.837 4.113-3.197 5.35ZM17.197 18c-.878 3.037-2.402 5.232-4.197 5.834V18h4.197Zm2.417-2h3.703A11.98 11.98 0 0 0 24 12c0-1.036-.131-2.041-.378-3h-3.836c.14.963.214 1.968.214 3 0 1.396-.135 2.74-.386 4Zm-1.803-7c.123.959.189 1.964.189 3 0 1.403-.12 2.749-.341 4H13V9h4.811Zm-.355-2H13V.166C14.986.832 16.641 3.45 17.456 7Zm1.931 0c-.692-2.698-1.928-4.935-3.485-6.351A12.037 12.037 0 0 1 22.912 7h-3.525Z" />
                    </svg>
                    <span class="logo-text">LOGO</span>
                </a>
                <button class="nav-toggle">
                    <span class="toggle--icon"></span>
                </button>
            </section>
            <section class="header-content--right">
                <nav class="header-nav" role="navigation">
                    <ul class="nav__list" aria-expanded="false">
                        <li class="list-item">
                            <a class="nav__link" href="/">Home</a>
                        </li>
                        <li class="list-item">
                            <a class="nav__link" href="categories">Category</a>
                        </li>
                        <li class="list-item">
                            <a class="nav__link" href="#">Products</a>
                        </li>
                        <li class="list-item">
                            <a class="nav__link" href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
            </section>
        </div>
    </header>
</div>

<script>
    const container = document.querySelector(".container");
const primaryNav = document.querySelector(".nav__list");
const toggleButton = document.querySelector(".nav-toggle");

toggleButton.addEventListener("click", () => {
    const isExpanded = primaryNav.getAttribute("aria-expanded");
    primaryNav.setAttribute(
        "aria-expanded",
        isExpanded === "false" ? "true" : "false"
    );
});

container.addEventListener("click", (e) => {
    if (!primaryNav.contains(e.target) && !toggleButton.contains(e.target)) {
        primaryNav.setAttribute("aria-expanded", "false");
    }
});

</script>
