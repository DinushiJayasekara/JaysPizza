@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex justify-center mt-10">

        <div class="px-6 py-4 bg-purple-200 rounded-lg w-full max-w-sm">

            <div class="font-bold text-xl mb-4 text-center">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <label for="username" class="block text-gray-700 mb-2">Username</label>
                    <input id="username" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
                    @error('username')
                    <span class="text-red-500 text-xs italic" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div>
                    <label for="name" class="block text-gray-700 mb-2 mt-3">{{ __('Name') }}</label>
                    <input id="name" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                    @error('name')
                    <span class="text-red-500 text-xs italic" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-gray-700 mb-2 mt-3">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email">
                    @error('email')
                    <span class="text-red-500 text-xs italic" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-gray-700 mb-2 mt-3">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                        name="password" autocomplete="new-password">
                    @error('password')
                    <span class="text-red-500 text-xs italic" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block text-gray-700 mb-2 mt-3">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="password_confirmation" autocomplete="new-password">
                </div>

                <div class="mb-0 text-center">
                    <button type="submit"
                        class="px-3 py-2 rounded-full text-sm uppercase bg-gray-600 text-white transition duration-500 ease-in-out hover:bg-gray-700 transform hover:scale-105">
                        Sign Up
                    </button>
                </div>

                <div class="mb-0 mt-3 text-center">
                    <a class="ml-2 inline-block align-baseline text-sm text-blue-500 hover:text-blue-800 text-xs"
                        href="{{ route('login') }}">
                        Already have an account?
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
