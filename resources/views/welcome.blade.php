@extends('layouts.home')
@section('content')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-left links ml-5">
                @auth
                    <a href="{{ url('/home') }}">View All Orders</a>
                @else
                    <a href="{{ route('login') }}">
                        Login 
                        <br>
                        <small class="ml-4">[Only For Employees]</small>
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        @if (session()->has('msg')) {
            <div class="alert alert-light alert-dismissible fade show mx-5 my-3" role="alert">
                <strong>Yay!</strong> {{ session('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <div class="content">
            <div class="title m-b-md">
                Jay's Pizza
            </div>

            <div class="links">
                <a href="{{ route('menu') }}">Check out our Menu</a>
                |
                <a href="{{ route('orders.create') }}">Place your Order</a>
            </div>
        </div>
    </div>
@endsection
