@extends("layouts.master")

@section("content")
<div style="margin-top: 12rem" class="container mx-auto p-5 mt-20 bg-white rounded-lg shadow-lg">

  <div class="row">
    <!-- Left Column: Cart Items -->
    <div class="col-md-8 border-end pe-4">
      <h2 class="mb-4 fw-bold text-dark">Your Cart</h2>

      @if ($carts->isEmpty())
      <div class="text-center py-5">
        <img src="{{ asset('assets/image/empty-cart.png') }}" width="150" class="mb-3" alt="Empty Cart">
        <h4 class="text-muted">Your cart is empty!</h4>
        <p class="text-muted">Looks like you haven't added anything to your cart yet.</p>
        <a href="{{ url('/') }}" class="btn btn-primary mt-3">Continue Shopping</a>
      </div>
      @else

      @foreach ($carts as $cart)
        <div class="d-flex align-items-center justify-content-between mb-4 p-3 rounded-lg shadow-sm bg-light">
          <!-- Product Image -->
          <img width="90" src="{{ asset('assets/image/' . $cart->image) }}" alt="{{ $cart->name }}" class="rounded-lg object-cover me-3 border">

          <!-- Product Details -->
          <div class="flex-grow-1">
            <h4 class="fw-bold text-dark">{{ $cart->name }}</h4>
            <p class="text-muted small mb-2">{{ $cart->description ?? 'No description available.' }}</p>
          </div>

          <!-- Price & Actions -->
          <div class="text-end d-flex flex-column align-items-end">
            <p class="fw-bold text-success fs-5 m-0">${{ $cart->price }}</p>

            <div class="d-flex gap-2 mt-2">
              <form method="POST" action="{{ url('/items/' . $cart->id) }}">
                @csrf
                @method("DELETE")
                <button class="btn btn-outline-danger px-3 py-1 rounded-lg fw-bold">🗑 Remove</button>
              </form>

              <form method="POST" action="{{ url('/items/' . $cart->id) }}">
                @csrf
                @method("DELETE")
                <button class="btn btn-outline-primary px-3 py-1 rounded-lg fw-bold">📥 Save for Later</button>
              </form>
            </div>
          </div>

        </div>

 <div class="col-md-4 ps-4">
      <h3 class="fw-bold mb-4 text-dark">Order Summary</h3>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Subtotal:</span>
        <span style="color: #09b83e" class="fw-bold fs-5">{{ $cart->price }}</span>
      </div>

      <form action="{{ route('items') }}" method="POST">
        @csrf
        <button style="background-color:  #09b83e" type="submit" class="w-100 btn text-white fw-bold fs-5 py-2 rounded-lg">
          Confirm Order
        </button>
      </form>

      <hr class="my-4">

      <h4 class="fw-bold mb-3 text-dark">Promotion</h4>
      <div class="border rounded-lg p-3 bg-light">
        <span class="fw-bold">ACCAGE0923</span> is applied <br>
        <small class="text-muted">Udemy coupon</small>
      </div>

      <form action="" method="post" class="mt-3">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter coupon code">
          <button style="background-color: #09b83e" type="submit" class="btn text-white fw-bold">Apply</button>
        </div>
      </form>
    </div>
      @endforeach



      @endif

    </div>

  </div>
</div>

@endsection
