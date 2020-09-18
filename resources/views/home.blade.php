@extends('layouts.app')

@section('header')
    <nav class="flex items-center justify-between flex-wrap bg-black-500 p-6">
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
            </div>
            <div>
                <!-- Authentication Links -->
                @guest
                    <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-400 border-gray-800 hover:border-gray-700 hover:text-gray-300 mt-4 lg:mt-0"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-400 border-gray-800 hover:border-gray-700 hover:text-gray-300 mt-4 lg:mt-0"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-800 border-gray-800 hover:border-gray-700 hover:text-gray-300 transition ease-in-out duration-500 hover:bg-gray-900 mt-4 lg:mt-0"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
