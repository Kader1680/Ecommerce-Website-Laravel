@extends('layouts.master')

 
@section('content')
<div class="flex items-center justify-center min-h-screen bg-green-50">
    <div class="bg-white shadow-xl rounded-2xl p-8 text-center">
        <h1 class="text-3xl font-bold text-green-600 mb-4"> Payment Successful</h1>
        <p class="text-lg text-gray-700 mb-6">Thank you for your purchase! Your order has been placed successfully.</p>
        <a href="{{ url('/') }}" class="inline-block px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Back to Home</a>
    </div>
</div>
@endsection
