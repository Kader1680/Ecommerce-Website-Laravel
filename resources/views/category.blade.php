


   @extends('layouts.master')

@section('content')
<div class="container mx-auto p-8 mt-24" style="margin-top: 19rem; color:red   ">

  <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">
    Browse Categories
  </h1>


  <!-- Categories Grid -->
  <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

    @foreach ($allcategorie as $category)
    <div class="relative group bg-white rounded-lg shadow-md hover:shadow-lg transition-transform hover:-translate-y-1 p-6">

      <!-- Category Image -->
      <img width="200"   src="{{ asset('storage/' . $category->imageCat) }}" alt="Category Image" class="object-cover w-full h-48 rounded-lg shadow-md">

      <h3>{{ $category->nameCat }}</h3>
      <!-- Category Info -->
      <div class="text-center">
       
       
      </div>
 
    </div>
    @endforeach

  </div>
</div>
@endsection
