
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



