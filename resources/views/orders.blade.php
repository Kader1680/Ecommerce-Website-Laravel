@extends("layouts.master")

@section("content")

<div class="container text-white py-5" style="margin-top: 10rem;">
    <h2 class="mb-4 text-center fw-bold">Orders List</h2>

    <div class="table-responsive">
        <table class="table table-dark table-striped text-white fs-5">
            <thead class="bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Product ID</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                    {{-- <th>Make Reviews</th> --}}
                </tr>
            </thead>
            <tbody>
                
                
                @foreach ($orderLists  as $order)
                    <tr class="align-middle">
                        <td>{{ $order->id }}</td>
                        <td><strong>{{ $order->id_order }}</strong></td>
                        <td><strong>{{ $order->id_product }}</strong></td>
                        <td>${{ number_format($order->total_price, 2) }}</td>

                        <td>
                            <span class="badge 
                                {{ $order->status == 'pending' ? 'bg-warning text-dark' : 
                                   ($order->status == 'completed' ? 'bg-success' : 'bg-danger') }} px-3 py-2">
                                pending
                            </span>
                        </td>

                        <td>
                            <form action="" method="POST">
                                @csrf
                                <select style="background-color: #09b83e" name="action" class="form-select   text-white border-0 px-3 py-2" style="width: 150px;">
                                  
                                    <option selected value="buy">Buy Now</option>
                                    <option value="cancel">Cancel Order</option>
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm mt-2 w-100">Apply</button>
                            </form>
                        </td>

                        {{-- <td>
                            <div class="bg-white p-3 rounded-lg shadow-lg">
                                <form action="{{ route('orders', $order->id) }}" method="post">
                                    @csrf
                                    <h4 class="text-dark fw-bold mb-3">Leave a Review</h4>

                                    <div class="mb-2">
                                        <input name="rating" type="number" min="1" max="5" class="form-control mb-2" placeholder="Rate (1-5)">
                                    </div>
                                    <textarea name="review" rows="3" class="form-control border rounded-lg focus:ring focus:ring-blue-300" placeholder="Write your review..."></textarea>

                                    <button style="background-color: #09b83e" type="submit" class="btn w-100 mt-3 fw-bold text-white">
                                        Submit Review
                                    </button>
                                </form>
                            </div>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
