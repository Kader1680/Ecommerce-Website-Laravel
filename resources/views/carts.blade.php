@extends("layouts.master")

@section("content")
<div class="container mx-auto p-6 mt-20">

  @if (\Session::has('success'))
    <div class="success-msg">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
  @endif

  <div style="margin-top: 15rem" class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($carts as $cart)
    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
      <img  src="{{ asset('assets/image/' . $cart->image) }}"  alt="{{ $cart->name }}" class="w-full h-40 object-cover mb-4">
      <h3 class="text-lg font-bold">{{ $cart->name }}</h3>
      <p class="text-gray-500 text-sm my-2">
        Amet et esse do nostrud id irure cupidatat labore nulla irure laboris.
      </p>

      <div class="flex justify-between items-center mt-4">
        <p class="font-semibold">Quantity: {{ $cart->quantity }}</p>
        <p class="font-semibold">Price: ${{ $cart->price }}</p>
      </div>

      <div class="flex justify-between mt-4">
        <form method="POST" action="{{ url('/items/' . $cart->id) }}">
          @csrf
          @method("DELETE")
          <button class="bg-red-500 hover:bg-red-600 text-black px-4 py-2 rounded">
            Remove
          </button>
        </form>

        <a href="/payement" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
          Buy
        </a>
      </div>
    </div>
    @endforeach
  </div>

  <div class="mt-10 text-right">
    <?php
      $total = 0;
      foreach ($carts as $cart) {
        $total += $cart->price;
      }
    ?>
    <h2 class="text-xl font-bold">Total: ${{ $total }}</h2>
  </div>
</div>
@endsection

<script>
  document.querySelectorAll('form').forEach((form) => {
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const card = this.closest('.bg-white');
      card.classList.add('opacity-50', 'transition', 'duration-300');
      setTimeout(() => card.remove(), 300); // Remove item after animation
    });
  });
</script>
