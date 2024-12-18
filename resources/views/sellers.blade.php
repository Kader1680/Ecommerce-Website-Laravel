@extends("layouts.master")
@section("content")

<style>
/* Seller Profile Styling */
.seller-profile {
    text-align: center;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.seller-profile img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin-bottom: 20px;
    border: 3px solid #0d6efd;
}

.seller-profile .rank {
    font-size: 1.5rem;
    color: #f59e0b;
    margin-top: 10px;
}

.seller-stats {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.seller-stats div {
    background: #ffffff;
    border: 1px solid #e0e0e0;
    padding: 15px;
    border-radius: 8px;
    width: 30%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Product Card for Seller */
.product-card {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    margin-bottom: 20px;
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
</style>

<div style="margin-top: 15rem" class="container">
    <!-- Seller Profile Section -->
    <div class="seller-profile">
        <img src="https://via.placeholder.com/150" alt="Seller Profile Picture">
        <h2>John Doe</h2>
        <p><i class="fa fa-map-marker-alt"></i> New York, USA</p>
        <p class="rank"><i class="fa fa-star"></i> Rank: 4.8/5</p>
    </div>

    <!-- Seller Stats -->
    <div class="seller-stats row">
        <div class="col-md-4 text-center">
            <h4>Total Products</h4>
            <p>25</p>
        </div>
        <div class="col-md-4 text-center">
            <h4>Total Sales</h4>
            <p>1,240</p>
        </div>
        <div class="col-md-4 text-center">
            <h4>Total Earnings</h4>
            <p>$15,670.00</p>
        </div>
    </div>

    <!-- Seller Products Section -->
    <div class="row mt-5">
        <h3 class="mb-4">Products by John Doe</h3>
      
        <!-- Example Product Cards -->
        @for ($i = 0; $i < 6; $i++)
            <div class="col-sm-6 col-md-4 mb-4">
                <div class="product-card">
                    <img src="data:image/jpeg;base64,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" alt="Product Image">
                    <div class="info">
                        <h5 class="text-white full_name">Vector Adyyson</h5>
                        <p class="price username">@victor123</p>
                        <p class="price text-white">Products Store  <span class="price fw-bolder">(8)</span></p>
                        <p class="price text-white">Products Sell <span class="price fw-bolder">(2)</span></p>
                        <p class="price text-white">Raiting <span class="price fw-bolder"> 4 / 5</span></p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    @foreach ($sellers as $s)
    <p>
        <h1 class=" text-white">{{ $s->first_name }}</h1>
        <h1 class=" text-white">{{ $s->last_name }}</h1>
        
    </p>
    @endforeach
</div>
@endsection
