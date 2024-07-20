
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

{{-- 
          <form method="GET" action="{{ route('products') }}">
            <div class="form-group">
                <label for="min_price">Min Price:</label>
                <input type="number" name="min_price" id="min_price" class="form-control" value="{{ request('min_price') }}">
            </div>
            <div class="form-group">
                <label for="max_price">Max Price:</label>
                <input type="number" name="max_price" id="max_price" class="form-control" value="{{ request('max_price') }}">
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" step="0.1" name="rating" id="rating" class="form-control" value="{{ request('rating') }}">
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
            <button type="submit" class="btn btn-secondary" name="price_filter" value="under_50">Under $50</button>
            <button type="submit" class="btn btn-secondary" name="price_filter" value="over_50">Over $50</button>
        </form> --}}
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



