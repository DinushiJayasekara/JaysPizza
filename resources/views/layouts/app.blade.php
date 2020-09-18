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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div>
            <nav class="flex items-center justify-between flex-wrap bg-black-500 p-6 shadow">
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow">
                        <a href="{{ url('/') }}">
                            <span class="font-semibold text-xl tracking-tight">Jay's Pizza</span>
                        </a>
                    </div>
                    <div>
                        <!-- Authentication Links -->
                        @guest
                            <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-600 border-gray-600 hover:border-gray-700 hover:text-gray-300 transition ease-in-out duration-500 hover:bg-gray-800 mt-4 lg:mt-0"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-600 border-gray-600 hover:border-gray-700 hover:text-gray-300 transition ease-in-out duration-500 hover:bg-gray-800 mt-4 lg:mt-0"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-gray-600 border-gray-600 hover:border-gray-700 hover:text-gray-300 transition ease-in-out duration-500 hover:bg-gray-800 mt-4 lg:mt-0"
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
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
