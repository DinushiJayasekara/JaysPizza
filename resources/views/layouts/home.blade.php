<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body class="home-body">
    {{-- <nav class="flex items-center justify-between flex-wrap bg-black-500 p-6">
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
                    <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-400 border-gray-800 hover:border-gray-700 hover:text-gray-300 mt-4 lg:mt-0"
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
    </nav> --}}
    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>
