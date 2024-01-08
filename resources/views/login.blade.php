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
                    <form method="POST" action=" {{ route("login") }} " class="section-login-2-form">
                        @csrf
                        <div class="login-form-1">
                            <label for="input-email">Email</label>
                            <input name="email" type="text" id="input-email" placeholder="john@gmail.com" required>
                        </div>
                        <div class="login-form-3">
                            <label for="input-password">Password</label>
                            <input name="password" type="password" id="input-password" placeholder="At least 4 characters" required>
                        </div>
                        <div class="login-form-submit-btn">
                            <button type="submit">
                                Login
                            </button>
                        </div>

                        {{-- <div class="login-form-5">
                            <p>  <input type="submit" name="submit" /> </p>
                        </div> --}}
                        <div class="  login-form-submit-btn">
                            <button class=" bg-white" type="submit">
                                <a href="/register">Register Now</a>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
</main>

@endsection


