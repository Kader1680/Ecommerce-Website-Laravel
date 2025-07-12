@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-red-50">
    <div class="bg-white shadow-xl rounded-2xl p-8 text-center">
        <h1 class="text-3xl font-bold text-red-600 mb-4">❌ Payment Cancelled</h1>
        <p class="text-lg text-gray-700 mb-6">Your payment was not completed. You can try again anytime.</p>
        <a href="{{ url('/') }}" class="inline-block px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Back to Shop</a>
    </div>
</div>
@endsection
