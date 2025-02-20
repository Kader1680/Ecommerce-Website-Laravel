@extends("layouts.master")

@section("content")
<main style="margin-top: 5rem" class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-lg" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-3 fw-bold">Create an Account</h2>

        <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Full Name</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="John Doe" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input name="email" type="email" id="email" class="form-control" placeholder="john@gmail.com" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label fw-semibold">Phone Number</label>
                <input name="phone" type="tel" id="phone" class="form-control" placeholder="+1234567890" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input name="password" type="password" id="password" class="form-control" placeholder="At least 4 characters" required>
            </div>

            <button style="background-color: #09b83e; "  type="submit" class="text-white btn fs-4 w-100 fw-bold">Submit </button>
        </form>

        <div class="text-center mt-3">
            <small>Already have an account? <a href="{{ route('login') }}" class="text-primary fw-semibold">Log In</a></small>
        </div>
    </div>
</main>
@endsection
