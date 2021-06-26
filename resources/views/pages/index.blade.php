@extends('layout.app')


@section('content')
{{-- <h1></h1> --}}
{{-- <p>This is my first laravel application that I am trying really hard to build...However I really dont know when the fuck I would be able to o this in my fucking life</p> --}}
<div class="p-5 mt-4 row align-items-md-stretch d-flex justify-content-center align-items-center">
    <div class="col-md-6">
      <div class="h-100 p-5 text-white bg-dark rounded-3">
        <h2>{{ $title }}</h2>
        <p>Welcome to Laravel . Login and Sign up below</p>
        <a href="/login" class="btn btn-outline-light ml-5" type="button">Login</a>
        <a href="/register" class="btn btn-outline-light ml-5" type="button">SignUP</a>
      </div>
    </div>
@endsection    