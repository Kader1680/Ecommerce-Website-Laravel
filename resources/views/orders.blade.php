
@extends("layouts.master")
@section("content")


<div class="container text-white" style="margin-top: 19rem; color:white">
    <h2 class="mb-4">Orders List</h2>

    <table class="table text-white fs-3"  table-bordered">
        <thead class="thead">
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>Isabelle Daltore</td>
                    <td>{{ $order->total_price }}</td>
                    {{-- <td>${{ number_format($order->total_price, 2) }}</td> --}}
                    <td>
                        <span class="badge 
                            {{ $order->status == 'pending' ? 'badge-warning' : 
                               ($order->status == 'completed' ? 'badge-success' : 'badge-danger') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>

                    <td>confirm</td>

                    
                    {{-- <td>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-sm">View</a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
