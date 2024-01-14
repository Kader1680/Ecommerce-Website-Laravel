
@extends("layouts.master")
@section("content")

<div class="container">
    <header style="margin-top: 10rem">

        <div class="home bg-white row p-3">
            <div class=" col-md-2">
                <ul class="cats list-unstyled">
                    <li><h5><a href="">Tools Office</a></h5></li>
                    <li><h5><a href="">Computer</a></h5></li>
                    <li><h5><a href="">Photography</a></h5></li>
                    <li><h5><a href="">Building</a></h5></li>
                    <li><h5><a href="">Clothes</a></h5></li>
                    <li><h5><a href="">Football & Sport</a></h5></li>
                    <li><h5><a href="">Men & Childrens</a></h5></li>
                    <li><h5><a href="">Men & Childrens</a></h5></li>
                </ul>
            </div>
            <img height="30%" class=" col-md-8"  width="50%" src="{{  URL("assets\image\banner.png") }}" alt="">
            <div class="right col-md-2">
                <div style="background-color: #E3F0FF" class="one mb-3 p-4 rounded-3">
                    <div>
                        <p>Hi, user let’s get stated</p>
                    </div>
                    <div>
                        <button class=" p-2 rounded-2 text-white border-0" style="background-color: #036bff">Join Now</button>
                        <button style="color: #036bff; border:1px solid #036bff" class=" p-2 rounded-2  bg-transparent">Log in</button>
                    </div>
                </div>
                <div class="two p-4 mb-3 text-white rounded-3"><h3>Get US $10 off with a new supplier</h3></div>
                <div class="three p-4 mb-3 text-white rounded-3"><h3>Send quotes with supplier preferences</h3></div>
            </div>
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










        {{-- <div>


            @foreach ( $homeProducts as $home )
            {{ $home->name }}
            @endforeach
        </div> --}}
    </header>


</div>
@endsection
