<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    body {
        background: linear-gradient(45deg, hsl(185, 26%, 72%), hsl(224, 66%, 82%));
        font-family: 'Lato', sans-serif;
        color: #333;
    }
    .leftSide {
        display: grid;
        grid-template-columns: 30% 70%;
        padding: 20px;
        gap: 10px;
    }
    .left {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    .leftSide div {
        margin-bottom: 10px;
    }
    h2 {
        color: rgb(79, 126, 255);
    }
    h3 {
        font-weight: bold;
    }
    .card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 20px;
    }
    input {
        border: 2px solid rgb(79, 126, 255);
        border-radius: 4px;
    }
    button {
        background-color: rgb(34, 227, 82);
        border: 0;
        color: white;
        font-weight: bold;
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    button:hover {
        background-color: rgb(25, 180, 60);
    }
    .table thead {
        background-color: rgb(79, 126, 255);
        color: white;
    }
    @media (max-width: 600px) {
        .leftSide {
            grid-template-columns: 100%;
        }
    }
</style>

<div class="container">
    <div class="leftSide">
        <div class="left">
            <h4>Admin Dashboard</h4>
            <div><a href="#" class="btn btn-link">Dashboard</a></div>
            <div><a href="/" class="btn btn-link">Back To Home Page</a></div>
            <div><a href="#add" class="btn btn-link">Add Product</a></div>
            <div><a href="#delete" class="btn btn-link">Delete Product</a></div>
            <div><a href="#" class="btn btn-link">All Products</a></div>
            <div><a href="#" class="btn btn-link">All Users Info</a></div>
        </div>
        <div class="card">
            <h2>Welcome to Admin Dashboard</h2>
            <div class="d-flex justify-content-between">
                <div>
                    <h3>{{ $productscout }}</h3>
                    <p>Products</p>
                </div>
                <div>
                    <h3>{{ $userCount }}</h3>
                    <p>Visitors</p>
                </div>
                <div>
                    <h3>66</h3>
                    <p>Reviews</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center mt-5 mb-5">Add a New Product</h2>
    <div class="card">
        <form class="row p-4" action="" method="post">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" required>
                </div>
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <input type="text" class="form-control" id="productDescription" required>
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Product Price</label>
                    <input type="number" class="form-control" id="productPrice" min="0" required>
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="form-label">Product Category</label>
                    <input type="text" class="form-control" id="productCategory" required>
                </div>
                <div class="mb-3">
                    <label for="productQuantity" class="form-label">Product Quantity</label>
                    <input type="number" class="form-control" id="productQuantity" min="0" required>
                </div>
                <button type="submit" class="btn">Add New Product</button>
            </div>
        </form>
    </div>

    <h2 class="text-center">All Products</h2>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }} $</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h2 class="text-center">All Users & Clients</h2>
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
                <tr>
                    <td>{{ $us->name }}</td>
                    <td>{{ $us->email }}</td>
                    <td>{{ $us->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
