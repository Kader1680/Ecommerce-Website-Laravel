@extends("layouts.master")
@section("content")


<div class="container" style="margin-top: 12rem">

    <h1 class=" fw-bolder text-center">Information User</h1>
    <div class="row">
        <div class=" d-flex align-content-center justify-content-center bg-white col-sm-12 col-md-3">
            <img width="200" src="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" />
        </div>
        <div class="  pt-sm-5  col-sm-12 col-md-6">
            <ul>
                <li><h2>Full Name : {{ $userAuth->name }}</h2></li>
                <li><h2>Email : {{ $userAuth->email }}</h2></li>
                <li><h2>Phone : {{ $userAuth->phone }}</h2></li>
            </ul>

        </div>
    </div>
    <hr>

    <h1 class=" fw-bolder text-center">Number Products Buying</h1>


</div>
@endsection
