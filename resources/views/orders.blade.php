@extends("layouts.master")
@section("content")

<div class="container text-white py-5" style="margin-top: 10rem;">
    <h2 class="mb-4 text-center fw-bold">Orders List   dd</h2>



    <div class="table-responsive">
        <table class="table table-dark table-striped text-white fs-4">
            <thead class="bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Products ID</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($orderLists as $order)


               

                  

                    <tr class="align-middle">

                         

                        <td>{{ $order->id }}</td>  ddd
                        <td><strong>{{ $order->id_order }}</strong></td>
                        <td><strong>{{ $order->id_product }}</strong></td>
                        <td>${{ number_format($order->total_price, 2) }}</td>
                        {{-- <td>
                            <span class="badge 
                                {{ $order->status == 'pending' ? 'bg-warning text-dark' : 
                                   ($order->status == 'completed' ? 'bg-success' : 'bg-danger') }} px-3 py-2">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td> --}}

                        <td>



                            <div class=" flex bg-white p-4 rounded-lg shadow-lg">
                                <form action="{{ route('orders', $order->id) }}" method="post">
                                    @csrf
                                    <h4 class="text-lg font-semibold mb-3 text-dark">Leave a Review</h4>

                                {{-- <div x-data="{ rating: 0 }" class="flex items-center space-x-2">
                                    <template x-for="star in 5">
                                        <button 
                                            @click="rating = star" 
                                            :class="rating >= star ? 'text-yellow-400' : 'text-gray-300'"
                                            class="text-2xl focus:outline-none">
                                            ★
                                        </button>
                                    </template>
                                </div> --}}

                                


                                <input  name="rating" type="number" min="1" max="5">

                                {{-- <input type="hidden" name="rating" x-model="rating"> --}}

                                <textarea name="review" rows="3"
                                    class="form-control mt-3 border rounded-lg focus:ring focus:ring-blue-300"
                                    placeholder="Write your review..."></textarea>

                                <button type="submit"
                                    class="btn btn-primary w-100 mt-3 fw-bold">
                                    Submit Review
                                </button>
                                </form>
                            </div>


                            {{-- <form action="{{ route('complete', $order->id) }}" method="post" class="d-flex align-items-center gap-2">
                                @csrf
                                @method('PUT')

                                {{-- @if ($order->status === "completed") --}}
                                    <!-- Review Form -->
                                    


                                {{-- @else --}}
                                    {{-- <button type="submit" class="btn btn-success fw-bold px-3">
                                         Confirm
                                    </button> --}}
                                {{-- @endif --}}
                            {{-- </form> --}}
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Alpine.js for Star Rating -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

@endsection
