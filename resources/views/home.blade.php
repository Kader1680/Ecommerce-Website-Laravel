
@extends("layouts.master")
@section("content")
<style>
    section{
        background-color: #E3F0FF;
        width: fit-content;
        padding: 10px;
        border-radius: 10px;
    }
    .cat {
  cursor: pointer;
  border: none;
  outline:none;
  padding: 5px;
  width: 100px;
  font-size: 15px;
  background-color: #036bff;
  color: white;
  border-radius: 50px;
}
</style>
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
            <img height="30%" class=" col-md-8"  width="50%" src="{{  URL("assets\image\home.png") }}" alt="">
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

        <h1 class=" fw-bolder mt-md-5 mt-mb-5">Recommended Good Product</h1>

        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col-sm-3 mb-5">
                <div class="col-item">
                    <div class="photo">
                        <img width="100" height="100px" src="{{ asset('assets/image/' . $product->image) }}" class="img-responsive" alt="a" />
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
                            <form action="{{ url("product", $product->id) }}" method="post">
                                {{-- url('items', $product->id) --}}
                                @csrf

                                <div class=" d-md-flex">
                                    <button class=" Cart  border-0" type="submit"><i class="fa-solid fa-cart-shopping"></i><span>add to cart</span></button>
                                    <button class="      Cart bg-primary border-0" type="submit"><i class="fa-solid fa-circle-info"></i> <a style="font-size: 13px" href="/product/{{ $product->id }}" class="text-white text-decoration-none">More details</a></button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <h1 class=" fw-bolder mt-md-5 mt-mb-5">Clothes & T-Shirt</h1>
        <section>
                <form action="" method="get">
                    <button id="btn" name="all" value="all" class="cat">All</button>
                    <button id="btn" onChange="this.form.submit()"  {{ request()->filled('Computer') ? 'checked' : ''}} name="Computer" value="Computer" class="cat">Computer</button>
                    <button id="btn" onChange="this.form.submit()" {{ request()->filled('Building') ? 'checked' : ''}} name="Building" value="Building" class="cat">Building</button>
                    <button id="btn" onChange="this.form.submit()" {{ request()->filled('Photography') ? 'checked' : ''}} name="Photography" value="Photography" class="cat">Photography</button>
                    <button id="btn" onChange="this.form.submit()" {{ request()->filled('Tools') ? 'checked' : ''}} name="Tools" value="Tools" class="cat">Tools</button>
                    <button id="btn"  onChange="this.form.submit()" {{ request()->filled('Men') ? 'checked' : ''}} name="Men"  value="Men" class="cat">Men</button>
                    <button id="btn" onChange="this.form.submit()" {{ request()->filled('Sport') ? 'checked' : ''}} name="Sport" value="Sport" class="cat">Sport</button>
                    <button id="btn" onChange="this.form.submit()" {{ request()->filled('Classic') ? 'checked' : ''}} name="Classic" value="Classic" class="cat">Classic</button>
                    <button id="btn" onChange="this.form.submit()" {{ request()->filled('Childrens') ? 'checked' : ''}} name="Childrens" value="Childrens" class="cat">Childrens</button>
                </form>
        </section>


        
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col-sm-3 mb-5">
                <div class="col-item">
                    <div class="photo">
                        <img width="100" height="100px" src="{{ asset('assets/image/' . $product->image) }}" class="img-responsive" alt="a" />
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
                            <form action="{{ url("product", $product->id) }}" method="post">
                                {{-- url('items', $product->id) --}}
                                @csrf

                                <div class=" d-md-flex">
                                    <button class=" Cart  border-0" type="submit"><i class="fa-solid fa-cart-shopping"></i><span>add to cart</span></button>
                                    <button class="      Cart bg-primary border-0" type="submit"><i class="fa-solid fa-circle-info"></i> <a style="font-size: 13px" href="/product/{{ $product->id }}" class="text-white text-decoration-none">More details</a></button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach





        {{-- <div>


            @foreach ( $homeProducts as $home )
            {{ $home->name }}
            @endforeach
        </div> --}}
    </header>


    <script>

        var btn = document.getElementById('#change');
        btn.addEventListener('onclick', function(event) {
            event.preventDefault();
        }
       
    </script>
</div>
@endsection
