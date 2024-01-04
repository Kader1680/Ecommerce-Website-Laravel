
@extends("layouts.master")
@section("content")

<div style="margin-top: 8rem" class="container">
       <div class="row">
            <h1 class=" text-center">All Product We Have</h1>
            @foreach ($products as $product)

            <div class="col-md-3">
                <div class="square-service-block">
                <a class="text-white" href="/products/{{  $product->id }}">
                    <img width="100%" height="180rem" src="{{ url($product->image) }}" alt="">
                    <h3 class="ssb-title">{{ $product->name }}</h3>
                    <p class="ssb-title">Price {{ $product->price }} $</p>
                    <p class="ssb-title">Quantity {{ $product->quantity }}</p>
                </a>
                </div>
            </div>
            @endforeach

       </div>
</div>



@endsection



