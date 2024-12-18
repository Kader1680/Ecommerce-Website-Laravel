@extends("layouts.master")
@section("content")

<style>
/* Custom Styling for Search Box */
.search {
    position: relative;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.search input {
    height: 50px;
    border: 2px solid #e0e0e0;
    padding-left: 50px;
    border-radius: 8px;
    transition: border-color 0.3s;
}

.search input:focus {
    outline: none;
    border-color: #0d6efd;
}

.search .fa-search {
    position: absolute;
    top: 50%;
    left: 16px;
    transform: translateY(-50%);
    font-size: 20px;
    color: #6c757d;
}

.search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 40px;
    width: 100px;
    background-color: #09b83e;
    color: white;
    border: none;
    border-radius: 8px;
    transition: background-color 0.3s;
}

.search button:hover {
    background-color: #2db241;
}

/* Star Rating Styling */
.rating {
    display: flex;
    gap: 0.3rem;
}

.rating label {
    cursor: pointer;
    width: 32px;
    height: 32px;
    background-color: #e0e0e0;
    clip-path: polygon(
        50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 
        50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%
    );
    transition: background-color 0.3s;
}

.rating input:checked ~ label,
.rating label:hover ~ label {
    background-color: #f59e0b;
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

<div style="margin-top: 15rem" class="container ">

    <!-- Search Section -->
    <div class="row mb-4 justify-content-center">
        <div class="col-md-8">
            <div class="search">
                <i class="fa fa-search"></i>
                <form method="POST" action="{{ route('products') }}">
                    @csrf
                    <input type="text" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search for products...">
                    <button type="submit" class="btn">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="row mb-5">
        <div class="col-md-3">
            <form action="{{ route('products') }}" method="GET" class="bg-light p-4 rounded">
                <h4 class="mb-3">Filter by Price</h4>
                <div class="form-check">
                    <input type="checkbox" name="under_price" value="50" class="form-check-input" onChange="this.form.submit()" {{ request()->filled('under_price') ? 'checked' : '' }}>
                    <label class="form-check-label">Under $50</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="over_price" value="50" class="form-check-input" onChange="this.form.submit()" {{ request()->filled('over_price') ? 'checked' : '' }}>
                    <label class="form-check-label">Over $50</label>
                </div>
                <hr>

                <h4 class="mb-3">Filter by Rating</h4>
                <div class="rating">
                    <input type="radio" id="rating-1" name="rating" value="1">
                    <label for="rating-1"></label>

                    <input type="radio" id="rating-2" name="rating" value="2">
                    <label for="rating-2"></label>

                    <input type="radio" id="rating-3" name="rating" value="3">
                    <label for="rating-3"></label>

                    <input type="radio" id="rating-4" name="rating" value="4">
                    <label for="rating-4"></label>

                    <input type="radio" id="rating-5" name="rating" value="5">
                    <label for="rating-5"></label>
                </div>
            </form>
        </div>

        <!-- Products Grid -->
        <div class="col-md-9">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="product-card">
                            <img src="{{ asset('assets/image/' . $product->image) }}" alt="{{ $product->name }}">
                            <div class="info">
                                <p class="price fs-1">${{ $product->price }}</p>
                                <p class="name text-white fs-2">{{ $product->name }}</p>
                                <p class="name text-primary fs-1 ">{{ $product->username }}</p>
                             
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
            </div>
        </div>
    </div>

</div>
@endsection
