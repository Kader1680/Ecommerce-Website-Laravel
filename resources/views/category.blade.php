@extends('layouts.master')

@section('content')
<div class="container mt-24 p-4" style="margin-top: 19rem;">

  <!-- Heading -->
  <h1 class="text-center text-3xl font-bold text-gray-900 mb-8">
    Browse Categories
  </h1>

  <!-- Categories Grid -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

    @foreach ($allcategorie as $category)
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition-all hover:shadow-lg">
          <!-- Category Image -->
          <img 
            height="200"
            src="{{ asset('storage/images/' . $category->imageCat) }}" 
            alt="{{ $category->nameCat }}" 
            class="card-img-top object-cover w-100 h-48"
          >

          <!-- Category Name -->
          <div style="background-color: #09B83" class="card-body text-center p-4 ">
            <h3 class="card-title text-xl font-semibold text-gray-800 ">
              {{ $category->nameCat }}
            </h3>
          </div>
        </div>
      </div>
    @endforeach

  </div>
</div>
@endsection