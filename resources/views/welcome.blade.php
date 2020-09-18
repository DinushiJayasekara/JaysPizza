@extends('layouts.home')
@section('content')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-left links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Jay's Pizza
            </div>

            <div class="links">
                <a href="{{ route('menu') }}">Check out our Menu</a>
                |
                <a href="#">Place your Order</a>
            </div>
        </div>
    </div>
@endsection
