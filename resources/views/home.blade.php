
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
  background-color: #09b83e;
  color: white;
  border-radius: 50px;
}

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
    color: #31d64a;
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
 

        

        <h1 class=" text-white fw-bolder mt-md-5 mb-5">Most Popular & Buying</h1>
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
            <div class="col-sm-6 col-md-4 mb-4">
                <div class="product-card">
                    <img src="{{ asset('assets/image/' . $product->image) }}" alt="{{ $product->name }}">
                    <div class="info">
                        <p class="price fs-1">${{ $product->price }}</p>
                        <p class="name text-white fs-2">{{ $product->name }}</p>
                        <p class="quantity text-white fs-4">Quantity: {{ $product->quantity }}</p>
                        <div class="btn-group">
                            <form action="{{ url('items', $product->id) }}" method="POST">
                                @csrf
                                <button class="btn  " style="color:  #09b83e; border:1px solid #09b83e;"  type="submit">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                                </button>
                            </form>
                            <a href="/singleProduct/{{ $product->id }}" style="background-color:  #09b83e;" class="btn text-white ">View Details</a>
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
