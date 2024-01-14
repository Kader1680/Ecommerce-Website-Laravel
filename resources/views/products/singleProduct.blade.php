
@extends("layouts.master")
@section("content")
<style>
.photo img{
    width: 100%
}
</style>
<div style="margin-top: 10rem" class="container">




    <div class="">
        @foreach ($products as $product)
        <div class="mt-5">
            <div class=" row">
                <div class="col-md-3 photo">
                    <img  src="{{ url("$product->image") }}" class="img-responsive" alt="a" />
                </div>
                <div class="col-md-5 info">
                    <div class="">
                        <div class="price">
                            <h1 class="fw-bold" style="font-size: 40px"><span class="price-text-color">{{$product->name }} </span> </h1>
                            <p class="" style="width: 100%^; font-size:18px" >{{$product->price }} $</p>
                            <p class="" style="width: 100%^; font-size:18px" >{{$product->description }} </p>
                            <h4 >Qauntiy (  <span class="price-text-color">{{$product->quantity }} </span>)</h4>
                        </div>

                    </div>
                    <div class="separator">
                        <form action="{{ url("items", $product->id) }}" method="post">
                            {{-- url('items', $product->id) --}}
                            @csrf
                            <div class="">
                                <button class="Cart  border-0" type="submit"><i class="fa-solid fa-cart-shopping"></i><span>add to cart</span></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>



    <h1 class=" fw-bolder mt-md-5 mt-mb-5">Recoumended Items</h1>

    <div class="row mt-4">
        @foreach ($homeProducts as $product)
        <div class="col-sm-3 mb-5">
            <div class="col-item">
                <div class="photo">
                    <img width="100" height="100px" src="{{ url("$product->image") }}" class="img-responsive" alt="a" />
                </div>
                <div class="info">
                    <div class="">
                        <div class="price">
                            <h3 class="fw-bold" style="font-size: 22px"><span class="price-text-color">{{$product->price }} $</span> </h3>
                            <p class="" style="width: 100%^; font-size:18px" >{{$product->name }}</h3>
                            <h4 >Qauntiy :<span class="price-text-color">{{$product->quantity }} </span></h4>
                        </div>

                    </div>
                    <div class="separator clear-left mt-4 mb-3">
                        <form action="{{ url("items", $product->id) }}" method="post">
                            {{-- url('items', $product->id) --}}
                            @csrf

                            <div class=" d-md-flex">
                                <button class=" Cart  border-0" type="submit"><i class="fa-solid fa-cart-shopping"></i><span>add to cart</span></button>
                                <button class="      Cart bg-primary border-0" type="submit"><i class="fa-solid fa-circle-info"></i> <a style="font-size: 13px" href="/products/{{ $product->id }}" class="text-white text-decoration-none">More details</a></button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>



@endsection



