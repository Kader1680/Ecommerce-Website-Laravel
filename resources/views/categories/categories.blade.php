{{-- @include("layouts.navbar")

@section("content")
@foreach ($products as $p)

<div class="col-md-3">
    <div class="square-service-block">
    <a href="/categories/">
        <img width="100%" height="180rem" src="{{ url($p->image) }}" alt="">
        <h2 class="ssb-title">{{ $p->name }}</h2>
    </a>
    </div>
</div>
@endforeach
@endsection
 --}}


 @extends("layouts.master")

@section("content")
<div style="margin-top: 8rem" class="container">
       <div class="row">
            @foreach ($products as $p)
            <div class="col-md-3">
                <div class="square-service-block">
                <a class="text-white" href="/products/{{  $p->id }}">
                    <img width="100%" height="180rem" src="{{ url($p->image) }}" alt="">
                    <h3 class="ssb-title">{{ $p->name }}</h3>
                    <p class="ssb-title">Price {{ $p->price }} $</p>
                    <p class="ssb-title">Quantity {{ $p->quantity }}</p>
                </a>
                </div>
            </div>
            @endforeach

       </div>
</div>

@endsection
