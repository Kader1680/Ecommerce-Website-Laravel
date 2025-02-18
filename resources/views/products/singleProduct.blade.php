@extends("layouts.master")
@section("content")

<style>
/* Product Card Styling */
.product-card {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    background-color: #fff;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.product-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 1px solid #e0e0e0;
}

.product-card .info {
    padding: 20px;
}

.product-card .price {
    font-size: 1.5rem;
    font-weight: bold;
    color: #31d64a;
    margin-bottom: 10px;
}

.product-card .name {
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
}

.product-card .quantity {
    font-size: 1rem;
    color: #6c757d;
    margin-bottom: 12px;
}

.product-card .btn-group {
    display: flex;
    gap: 10px;
    margin-top: 15px;
}

.product-card .btn {
    flex: 1;
    font-size: 14px;
    font-weight: 500;
    padding: 10px;
    border-radius: 8px;
    transition: all 0.3s;
}

.product-card .btn-cart {
    background-color: transparent;
    border: 1px solid #09b83e;
    color: #09b83e;
}

.product-card .btn-cart:hover {
    background-color: #09b83e;
    color: white;
}

.product-card .btn-details {
    background-color: #09b83e;
    color: white;
    border: none;
}

.product-card .btn-details:hover {
    background-color: #2db241;
}

/* Review Section Styling */
.review-section {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.review-section .user-review {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.review-section .user-review img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.review-section .user-review p {
    margin: 0;
    font-size: 14px;
    color: #555;
}

.review-section .user-review strong {
    color: #09b83e;
}

/* Recommended Items Section */
.recommended-section {
    margin-top: 30px;
}

.recommended-section h1 {
    font-size: 1.75rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 20px;
}
</style>

<div style="margin-top: 10rem" class="container">
    <!-- Product Details Section -->
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-12 mb-5">
                <div class="row align-items-center">
                    <!-- Product Image -->
                    <div class="col-md-4">
                        <img src="{{ asset('assets/image/' . $product->image) }}" class="img-fluid rounded-lg" alt="{{ $product->name }}">
                    </div>

                    <!-- Product Info -->
                    <div class="col-md-8">
                        <div class="info">
                            <h1 class="fw-bold" style="font-size: 2.5rem; color: #09b83e;">{{ $product->name }}</h1>
                            <p class="text-muted" style="font-size: 1.25rem;">${{ $product->price }}</p>
                            <p class="text-muted" style="font-size: 1rem;">{{ $product->description }}</p>
                            <h4 class="text-muted">Quantity: <span style="color: #09b83e;">{{ $product->quantity }}</span></h4>

                            <!-- Rating -->
                            <div class="rating mb-3">
                                @foreach ($allReview as $review)
                                    @if ($review->id_products == $product->id)
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <img style="width: 24px; height: 24px" src="{{ asset('assets/image/star.png') }}">
                                        @endfor
                                    @elseif ($review->id_products != $product->id)
                                        <p class="text-muted">( 0 ) Rating</p>
                                        <p class="text-muted">No Review Display!</p>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Buttons -->
                            <div class="btn-group">
                                <form action="{{ url('items', $product->id) }}" method="POST">
                                    @csrf
                                    
                                    <button class="btn btn-cart bg-white text-black" type="submit">
                                        <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                                    </button>
                                </form>
                                <a href="/payement" class=" bg-white text-black ms-3 btn btn-details">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Reviews Section -->
    <div class="review-section">
        <h1 class="fw-bold mb-4" style="color: #333;">Reviews & Comments</h1>
        @foreach ($users as $user)
            @foreach ($allReview as $review)
                <div class="user-review">
                    <img src="{{ asset('storage/' . $user->pics) }}" alt="Profile Picture">
                    <div>
                        <p><strong style="color: #09b83e;">{{ $user->name }}</strong></p>
                        <p>{{ $review->review }}</p>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>

    <!-- Recommended Items Section -->
    <div class="recommended-section">
        <h1 class="fw-bold mb-4" style="color: #333;">Recommended Items</h1>
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
                                    <button class="btn btn-cart" type="submit">
                                        <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                                    </button>
                                </form>
                                <a href="/singleProduct/{{ $product->id }}" class="btn btn-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection