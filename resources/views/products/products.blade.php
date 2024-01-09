
@extends("layouts.master")
@section("content")
<style>
@import url(https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
@media(max-width:767px){
    .Cart{
    width: 100%;
    padding: 1.5rem;


}
}
@media(min-width:768px){
    .Cart{
    width: 50%;
    padding: 1.5rem;
}
}
.Cart{
    background-color: rgba(75, 205, 132, 1);
}
.Products{
    margin-top: 16rem;
}
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;

}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
    height: 16rem;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}
.fa-cart-shopping{
    font-size: 16px;
}
.fa-circle-info{
    font-size: 16px;
}
</style>
<div  class="container Products">




    <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-3 mb-5">
            <div class="col-item">
                <div class="photo">
                    <img width="100" height="100px" src="{{ url("$product->image") }}" class="img-responsive" alt="a" />
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-6">
                            <h3  >{{$product->name }}</h3>
                            <h4 >Price :<span class="price-text-color">{{$product->price }} $</span> </h4>
                            <h4 >Qauntiy :<span class="price-text-color">{{$product->quantity }} </span></h4>
                        </div>
                        <div class="rating hidden-sm col-md-6 ">

                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="fa fa-star"></i>

                        </div>
                    </div>
                    <div class="separator clear-left mt-4 mb-3">
                        <form action="{{ url("items", $product->id) }}" method="post">
                            {{-- url('items', $product->id) --}}
                            @csrf

                            <div class=" d-md-flex">
                                <button class="btn Cart  border-0" type="submit"><i class="fa-solid fa-cart-shopping"></i><span>add to cart</span></button>
                                <button class="btn Cart bg-primary border-0" type="submit"><i class="fa-solid fa-circle-info"></i> <a style="font-size: 13px" href="/products/{{ $product->id }}" class="text-white text-decoration-none">More details</a></button>
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



