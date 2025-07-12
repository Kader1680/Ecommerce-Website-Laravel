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
                </tr>
            </thead>
            <tbody>


                @foreach ($orderLists  as $order)
                    <tr class="align-middle">
                        <td>{{ $order->id }}</td>
                        <td><strong>{{ $order->id_order }}</strong></td>
                        <td><strong>{{ $order->id_product }}</strong></td>
                        <td>${{ number_format($order->price, 2) }}</td>

                        <td>
                            <span class="badge
                                {{ $order->status == 'pending' ? 'bg-warning text-dark' :
                                   ($order->status == 'completed' ? 'bg-success' : 'bg-danger') }} px-3 py-2">
                                pending
                            </span>
                        </td>

                        <td>

    <a href="{{ route('stripe.checkout') }}">
                                        <button>Pay with Stripe</button>
                                    </a>

<form action="{{ route('orders.destroy', $order->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Cancel Order">
</form>


                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
