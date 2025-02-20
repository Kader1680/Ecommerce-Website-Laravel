@extends("layouts.master")

@section("content")
<main class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-lg" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-3 fw-bold">Welcome To ZED </h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input name="email" type="email" id="email" class="form-control" placeholder="Enter Your Email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input name="password" type="password" id="password" class="form-control" placeholder="Enter Password" required>
            </div>

            <button style="background-color: #09b83e; " type="submit" class="btn text-white fs-4 w-100 fw-bold">Login</button>
        </form>

        <div class="text-center mt-3">
            <small>Don't have an account? <a href="{{ route('register') }}" class="text-primary fw-semibold">Register</a></small>
        </div>
    </div>
</main>
@endsection
