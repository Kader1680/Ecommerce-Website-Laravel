
@extends("layouts.master")
@section("content")
<style>
.photo img{
    width: 100%
}
/* Product Card Styling */
.product-card {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.product-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.product-card .info {
    padding: 15px;
}

.product-card .price {
    font-size: 1.25rem;
    font-weight: bold;
    color: #0d6efd;
}

.product-card .quantity {
    font-size: 1rem;
    margin-bottom: 8px;
    color: #6c757d;
}

.product-card .btn-group {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.product-card .btn {
    flex: 1;
    font-size: 14px;
}
</style>
<div style="margin-top: 10rem" class="container">

    <div class="">
        @foreach ($products as $product)
        <div class="mt-5">
            <div class=" row">
                <div class="col-md-3 photo">
                    <img  src="{{ asset('assets/image/' . $product->image) }}" class="img-responsive" alt="a" />
                </div>
                <div class="col-md-5 info">
                    <div class="">
                        <div class="price">
                            <h1 class="fw-bold" style="font-size: 40px; color:#09b83f"><span class="">{{$product->name }} </span> </h1>
                            <p class=" text-white" style="width: 100%; font-size:18px" >{{$product->price }} $</p>
                            <p class=" text-white" style="width: 100%; font-size:18px" >{{$product->description }} </p>
                            <h4 class=" text-white" >Qauntiy    <span class="price-text-color font-bold " style="color: #09b83f"> (  {{$product->quantity }} ) </span>  </h4>

                            @foreach ($allReview as $review)
                            @if ($review->id_products == $product->id)
                                @for ($i = 0; $i < $review->rating; $i++)
                                    <img style="width: 24px; height: 24px" src="{{ asset('assets/image/star.png') }}">
                                @endfor  
                                <p class=" text-white bg-black-800 p-2" style="width: 100%; font-size:18px" >{{$review->review }} </p>

                            @elseif ($review->id_products != $product->id)
                            <p class=" text-white fs-2">( 0 ) Rating</p>
                            <p class=" text-white bg-black-800 p-2" style="width: 100%; font-size:18px" >No Review Display !</p>

                            
                            @endif
                          
                        @endforeach
                        </div>

                    </div>
                    <div class="separator d-flex gap-3">
                        <form action="{{ url("items", $product->id) }}" method="post">
                            {{-- url('items', $product->id) --}}
                            @csrf
                            <div class=" d-flex gap-3">
                                <button style="border: 2px solid #09b83f; color:#09b83f" class="Cart roudend-3 fs-5" type="submit"><span>add to cart</span></button>
                            </div>
                        </form>
                        <button style="background-color: #09b83f;" class="Cart text-white fs-5 font-bold  border-0" type="submit"><span> <a href="/payement">Order Now</a> </span></button>



                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>



    <h1 class=" fw-bolder mt-md-5 mt-mb-5 text-white">Recoumended Items</h1>


    <div class="col-md-9">
        <div class="row">
            @foreach ($homeProducts as $product)
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="product-card">
                        <img src="{{ asset('assets/image/' . $product->image) }}" alt="{{ $product->name }}">
                        <div class="info">
                            <p class="price">${{ $product->price }}</p>
                            <p class="name">{{ $product->name }}</p>
                            <p class="quantity">Quantity: {{ $product->quantity }}</p>
                            <div class="btn-group">
                                <form action="{{ url('items', $product->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                                    </button>
                                </form>
                                <a href="/singleProduct/{{ $product->id }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
     

</div>



@endsection



