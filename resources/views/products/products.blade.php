
@extends("layouts.master")
@section("content")

<div style="margin-top: 8rem" class="container">
       <div class="row">
            <h1 class=" text-center">All Product We Have</h1>
            @foreach ($products as $product)

            <div class="col-md-3">
                <div class="square-service-block">
                <a class="text-white">
                    <img width="100%" height="180rem" src="{{ url($product->image) }}" alt="">
                    <h3 class="ssb-title">{{ $product->name }}</h3>
                    <h4><a href="/products/{{  $product->id }}">detail</a></h4>
                    <p class="ssb-title">Price {{ $product->price }} $</p>
                    <p class="ssb-title">Deliver {{ $product->quantity }}</p>
                    <form action="{{ url('items', $product->id) }}" method="post">
                        @csrf
                        <input type="number" min="1">
                        <input type="submit" name="submit" placeholder="submit">
                    </form>
                </a>
                </div>
            </div>
            @endforeach

       </div>
</div>



@endsection



