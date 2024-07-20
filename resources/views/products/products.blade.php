
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



    <div class="row height d-flex justify-content-center align-items-center">

        <div class="col-md-8">

          <div class="search">
            <i class="fa fa-search mt-1 fs-4"></i>
            <input   value="{{ request()->input('query') }}" name="query"  type="text" class="form-control ps-4" placeholder="Have a question? Ask Now">
            <button type="submit" class="btn btn-primary fs-4">Search</button>
          
          </div>
          
        </div>
        
    </div>
    <br>
 
    
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul>

   
    <div class="row">
        @foreach ($products as $product)
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



