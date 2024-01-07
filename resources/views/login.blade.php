@extends("layouts.master")
@section("content")
<main>
    <section class="section-login">
        <div class="section-main">
            <div class="section-login-1">
                <div class="section-login-1-main">

                    <h1 class="section-login-1-title">Gradie</h1>
                    <p class="section-login-1-text">Beautiful gradients in seconds.</p>
                    <div class="section-login-1-img">
                        <img src="https://rvs-gradie-signup-page.vercel.app/Assets/iPhone-Mockup.png" alt="">
                    </div>

                </div>
            </div>
            <div class="section-login-2">
                <div class="section-login-2-main">

                    <h1 class="section-login-2-title">Login</h1>
                    <form class="section-login-2-form">
                        <div class="login-form-1">
                            <label for="input-email">Email</label>
                            <input type="text" id="input-email" placeholder="john@gmail.com" required>
                        </div>
                        <div class="login-form-3">
                            <label for="input-password">Password</label>
                            <input type="password" id="input-password" placeholder="At least 4 characters" required>
                        </div>
                        <div class="login-form-5">
                            <p> <a href="#">Log In</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</main>

@endsection

