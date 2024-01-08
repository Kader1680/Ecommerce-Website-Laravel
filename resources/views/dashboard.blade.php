@extends("layouts.master")
@section("content")


<div style="margin-top: 12rem">

    <h1>Dashboard Page</h1>
    {{ $userAuth->name }}
    {{ $userAuth->email }}
</div>
@endsection
