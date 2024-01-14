@extends("layouts.master")
@section("content")


<div class="container" style="margin-top: 12rem">
    <div class="row">
        <div  style="border: 1.5px solid #4f7eff" class="col-md-6 bg-white p-5">
            <h1 style="color: #4f7eff" class=" fw-bolder">Information User</h1>
            <div  class=" rounded-circle d-flex align-content-center justify-content-center bg-white col-sm-12 col-md-3">
                <img width="100" height="100" src="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" />
            </div>
            <div class="">
                <h2>Full Name : {{ $userAuth->name }}</h2>
                <h2>Email : {{ $userAuth->email }}</h2>
                <h2>Phone : {{ $userAuth->phone }}</h2>
            </div>
        </div>
        <div style="border: 1.5px solid #4f7eff" class="col-md-4 bg-white ms-md-3 p-5">
            <h1 style="color: #4f7eff" class=" fw-bolder">Other Information</h1>
            <h3 class=" mt-4">Number Product you buying <span style="color: #4f7eff"> ({{ $products }})</span></h3>
            <h3>Memeber Since : <span style="color: #4f7eff">{{ $userAuth->created_at}} </span></h3>
        </div>
    </div>



</div>
@endsection
