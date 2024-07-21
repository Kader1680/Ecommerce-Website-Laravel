
@extends("layouts.master")
@section("content")

<style>
    
    .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);
         
       }

       .search input{

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;


       }


       .search input:focus{

        box-shadow: none;
        border: 2px solid blue;


       }

       .search .fa-search{

        position: absolute;
        top: 20px;
        left: 16px;

       }

       .search button{

        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
        background: #0d6efd;

       }


       .sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}
.rating {
  --star-size: clamp(2rem, 5vw, 6rem);
  --star-clr-inactive: rgba(128, 128, 128, 0.7);
  --star-clr-active: rgb(245, 158, 11);
  --star-clr-hover: rgba(236, 201, 136, 0.2);
  --star-clip-path: polygon(
    50% 0%,
    61% 35%,
    98% 35%,
    68% 57%,
    79% 91%,
    50% 70%,
    21% 91%,
    32% 57%,
    2% 35%,
    39% 35%
  );
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

label {
  position: relative;
  cursor: pointer;
  width: var(--star-size);
  height: var(--star-size);
}
label::before {
  content: "";
  position: absolute;
  inset: 50%;
  border-radius: 50%;
  background-color: var(--star-clr-hover);
  transition: rotate 450ms ease-in-out, inset 300ms ease-in-out;
  clip-path: var(--star-clip-path);
}
label:hover::before {
  inset: -1rem;
  rotate: 45deg;
}
label::after {
  content: "";
  position: absolute;
  inset: 0;
  background-color: var(--star-clr-inactive);
  clip-path: var(--star-clip-path);
  transition: 300ms ease-in-out;
  scale: 0.75;
}
label:has(~ label:hover)::after,
label:has(~ label > :checked)::after,
label:has(:checked)::after,
label:hover::after {
  background-color: var(--star-clr-active);
  scale: 1;
}

label:hover ~ label::after {
  scale: 0.75;
}
label:active::before {
  inset: -2rem;
}




</style>
<div  class="container Products">



    {{-- <div class="row height d-flex justify-content-center align-items-center">

        <div class="col-md-8">

          <div class="search">
            <i class="fa fa-search mt-1 fs-4"></i>
            <input   value="{{ request()->input('query') }}" name="query"  type="text" class="form-control ps-4" placeholder="Have a question? Ask Now">
            <button type="submit" class="btn btn-primary fs-4">Search</button>
          
          </div>
          
        </div>
        
    </div>
    <br> --}}
 
    
    {{-- <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul> --}}

   
    <div class="checkout">
        <form action="{{ route("products") }}" method="GET">
            <h3>Price</h3>
            <div class=" d-flex ">
                <input value="50" name="under_price" style="width: 20px" type="checkbox" 
                
                onChange="this.form.submit()" {{ request()->filled('under_price') ? 'checked' : ''}}
                
                
                >
                <h5  class=" mt-3 ms-2"><label for="min_price"  >under 50 $</label></h5><br>
            </div>
            <div class=" d-flex ">
                <input style="width: 20px" type="checkbox" name="over_price" value="50"
                
                onChange="this.form.submit()" {{ request()->filled('over_price') ? 'checked' : ''}}
                >
                <h5 class=" mt-3 ms-2"><label for="max_price"  >over 50 $</label></h5><br>
            </div>
            <hr width="100px">
            <h3>Rating</h3>

            <div class=" d-flex ">
                <input style="width: 20px" type="checkbox" name="vehicle1" value="Bike">
                <h5 class=" mt-3 ms-2"><label for="vehicle1">Popular Rating</label></h5><br>
            </div>
            <div class=" d-flex ">
                <input style="width: 20px" type="checkbox" name="vehicle1" value="Bike">
                <h5 class=" mt-3 ms-2"><label for="vehicle1">Top Rating</label></h5><br>
            </div>
            <hr width="100px">
            <h3>Selling</h3>
            <div class=" d-flex ">
                <input style="width: 20px" type="checkbox" name="vehicle1" value="Bike">
                <h5 class=" mt-3 ms-2"><label for="vehicle1">Popular Selling</label></h5><br>
            </div>
            
            <hr width="100px">
            <input type="checkbox" name="vehicle3" value="Boat">
            <label for="vehicle2"> made in usa</label>

          </form>


    </div>


 
    <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-3 mb-5 ">
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
                            <div class="rating">
                                <label for="radio-1" aria-label="Rating 1"><input type="radio" name="rating" id="radio-1" class="sr-only"></label>
                                <label for="radio-2" aria-label="Rating 2"> <input type="radio" name="rating" id="radio-2" class="sr-only"></label>
                                <label for="radio-3" aria-label="Rating 3"><input type="radio" name="rating" id="radio-3" class="sr-only" checked></label>
                                <label for="radio-4" aria-label="Rating 4"><input type="radio" name="rating" id="radio-4" class="sr-only"></label>
                                <label for="radio-5" aria-label="Rating 5"><input type="radio" name="rating" id="radio-5" class="sr-only"></label>
                            </div>    
                        
                        </div>

                    </div>
                    <div class="separator clear-left mt-4 mb-3">
                        <form action="{{ url("items", $product->id) }}" method="post">
                            {{-- url('items', $product->id) --}}
                            @csrf

                            <div class=" d-md-flex">
                                <button class=" Cart  border-0" type="submit"><i class="fa-solid fa-cart-shopping"></i><span>add to cart</span></button>
                                <div class=" Cart bg-primary border-0"> <a style="font-size: 13px" href="/singleProduct/{{ $product->id }}" class="text-white text-decoration-none">View Details</a></div>
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



