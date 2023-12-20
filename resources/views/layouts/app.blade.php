<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @vite('resources/css/app.css') --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        {{-- <div class="navbar fixed z-30 bg-ungu rounded-md w-[96%] top-4 p-0 ">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Item 1</a></li>
                        <li>
                            <a>Parent</a>
                            <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                            </ul>
                        </li>
                        <li><a>Item 3</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl ">
                    <img src="{{ URL::asset('assets/logo_white.svg') }}" class="w-[40%]" alt="logo">
                </a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a class="text-white text-base" href="{{ route('home') }}">Home</a></li>
                    <li><a class="text-white text-base" href="">Shop</a></li>
                    <li><a class="text-white text-base">FAQ</a></li>
                </ul>
            </div>
            <div class="navbar-end ">
                <ul class="menu menu-horizontal py-0 px-1 flex items-center">
                    <li class=" pe-2">
                        <a class="text-white text-base" href="#">
                            <img src="{{ URL::asset('assets/icon_search.png') }}" class="w-[25px]">
                        </a>
                    </li>
                    <li class=" pe-2">
                        <a class="text-white text-base" href="{{ route('cart') }}">
                            <img src="{{ URL::asset('assets/icon_cart.png') }}"  class="w-[25px]" alt="">
                        </a>
                    </li>
                    <li class=" pe-2">
                        <a class="text-white text-base" href="#">
                            <img src="{{ URL::asset('assets/icon_user.png') }}"  class="w-[25px]" alt="">
                        </a>
                    </li>
                    <li class=" pe-2 flex items-center">
                        <a class="btn text-white text-base" style="line-height: 1.75rem" href="{{ route('register') }}">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
      </div> --}}
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #4E6DA9">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ URL::asset('assets/logo_white.svg') }}" class="w-25"  alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
