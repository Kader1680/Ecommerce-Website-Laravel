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
    font-size: 16px;
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
    font-size: 16px;
    font-weight: 500;
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

.product-card .username {
    font-size: 1rem;
    color: #6c757d;
    margin-bottom: 12px;
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



            /* Custom Pagination Styles */
            .page-link {
              color: #09b83e; /* Green text color */
              border: 1px solid #09b83e; /* Green border */
              margin: 0 4px; /* Spacing between buttons */
              transition: all 0.3s ease; /* Smooth transitions */
            }

            li a .page-link:hover {
              background-color: #09b83e; /* Green background on hover */
              color: white; /* White text on hover */
              border-color: #09b83e; /* Green border on hover */
            }

            .page-item.disabled .page-link {
              color: #6c757d; /* Gray text for disabled button */
              border-color: #e0e0e0; /* Light gray border for disabled button */
              background-color: #f8f9fa; /* Light gray background for disabled button */
            }

            .page-item.active .page-link {
              background-color: #09b83e; /* Green background for active button */
              border-color: #09b83e; /* Green border for active button */
              color: white; /* White text for active button */
            }



/* Filter Section Styling */
.filter-section {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.filter-section h4 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
}

.filter-section .form-check-label {
    font-size: 1rem;
    color: #555;
}

.filter-section .form-select {
    font-size: 1rem;
    padding: 8px;
    border-radius: 8px;
    border: 1px solid #e0e0e0;
    transition: border-color 0.3s;
}

.filter-section .form-select:focus {
    border-color: #0d6efd;
    outline: none;
}

.filter-section .btn-primary {
    background-color: #09b83e;
    border: none;
    font-size: 1rem;
    font-weight: 500;
    padding: 10px;
    border-radius: 8px;
    transition: background-color 0.3s;
}

.filter-section .btn-primary:hover {
    background-color: #2db241;
}
</style>

<div style="margin-top: 10rem" class="container">
    <!-- Search Section -->
    <div class="row mb-5 justify-content-center">
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
            <div class="filter-section">
                <form action="{{ route('products') }}" method="GET">
                    <h4>Filter by Price</h4>
                    <div class="form-check">
                        <input type="checkbox" name="under_price" value="50" class="form-check-input" onChange="this.form.submit()" {{ request()->filled('under_price') ? 'checked' : '' }}>
                        <label class="form-check-label">Under $50</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="over_price" value="50" class="form-check-input" onChange="this.form.submit()" {{ request()->filled('over_price') ? 'checked' : '' }}>
                        <label class="form-check-label">Over $50</label>
                    </div>
                    <hr>

                    <h4>Filter by Rating</h4>
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

            <!-- Other Filters (Category, Brand, Price Range, etc.) -->
            <div class="filter-section mt-4">
                <form action="{{ route('products') }}" method="GET">
                    <h4>Filters</h4>

                    <!-- Category Filter -->
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-select">
                            <option value="">All</option>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="home">Home & Living</option>
                            <option value="beauty">Beauty</option>
                            <option value="sports">Sports</option>
                        </select>
                    </div>

                    <!-- Brand Filter -->
                    <div class="mb-3">
                        <label class="form-label">Brand</label>
                        <select name="brand" class="form-select">
                            <option value="">All</option>
                            <option value="apple">Apple</option>
                            <option value="samsung">Samsung</option>
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                        </select>
                    </div>

                    <!-- Price Range Filter -->
                    <div class="mb-3">
                        <label class="form-label">Price Range</label>
                        <select name="price_range" class="form-select">
                            <option value="">All</option>
                            <option value="0-50">$0 - $50</option>
                            <option value="50-100">$50 - $100</option>
                            <option value="100-500">$100 - $500</option>
                            <option value="500+">$500+</option>
                        </select>
                    </div>

                    <!-- Rating Filter -->
                    <div class="mb-3">
                        <label class="form-label">Rating</label>
                        <select name="rating" class="form-select">
                            <option value="">All</option>
                            <option value="5">5 Stars</option>
                            <option value="4">4 Stars & Up</option>
                            <option value="3">3 Stars & Up</option>
                            <option value="2">2 Stars & Up</option>
                        </select>
                    </div>

                    <!-- Availability Filter -->
                    <div class="mb-3">
                        <label class="form-label">Availability</label>
                        <select name="availability" class="form-select">
                            <option value="">All</option>
                            <option value="in-stock">In Stock</option>
                            <option value="out-of-stock">Out of Stock</option>
                        </select>
                    </div>

                    <!-- Sort By Filter -->
                    <div class="mb-3">
                        <label class="form-label">Sort By</label>
                        <select name="sort_by" class="form-select">
                            <option value="popularity">Popularity</option>
                            <option value="newest">Newest First</option>
                            <option value="low-high">Price: Low to High</option>
                            <option value="high-low">Price: High to Low</option>
                        </select>
                    </div>

                    <!-- Apply Button -->
                    <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                </form>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="col-md-9">
            <div class="row">
                @foreach ($products as $product)
                    {{-- <div class="col-sm-6 col-md-4 mb-4">
                        <div class="product-card">
                            {{-- <img src="{{ asset('assets/image/' . $product->image) }}" alt="{{ $product->name }}"> --}}
<img src="" alt="">
                            <div class="info">
                                <p class="price">${{ $product->price }}</p>
                                <p class="name">{{ $product->name }}</p>
                                <p class="username">{{ $product->username }}</p>
                                {{-- @foreach ($allReview as $review)
                                    @if ($review->id_products == $product->id)
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <img style="width: 24px; height: 24px" src="{{ asset('assets/image/star.png') }}">
                                        @endfor
                                    @elseif ($review->id_products != $product->id)
                                        <p class="text-muted">( 0 ) Rating</p>
                                    @endif
                                @endforeach --}}
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
                    --}}

                <div class="card   col-sm-6 col-md-4 mb-4">
                <h3 class="card-header">Card header</h3>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <svg xmlns="https://goudronblanc.com/blog/wp-content/uploads/2022/12/veste-denim-nudie-jeans-500x500.png" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                </svg>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
                </div>




                @endforeach
            </div>
        </div>


<div class="container mt-5">

    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</div>



<div>
  <ul class="pagination pagination-lg">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>




        {{-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <!-- Previous Button -->
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true" style="padding: 1rem 2rem; color: #09b83e; border-color: #09b83e;">
                  Previous
                </a>
              </li>

              <!-- Page Numbers -->
              <li class="page-item">
                <a class="page-link" href="#" style="padding: 1rem 2rem; color: #09b83e; border-color: #09b83e;">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" style="padding: 1rem 2rem;  color: #09b83e; border-color: #09b83e;">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" style="padding: 1rem 2rem; color: #09b83e; border-color: #09b83e;">3</a>
              </li>

              <!-- Next Button -->
              <li class="page-item">
                <a class="page-link" href="#" style="padding: 1rem 2rem; color: #09b83e; border-color: #09b83e;">Next</a>
              </li>
            </ul>
          </nav> --}}

    </div>
</div>
@endsection

