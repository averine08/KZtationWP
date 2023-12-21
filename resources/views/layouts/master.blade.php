<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>KZtation</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <title>KZtation</title>
</head>
<body class="flex justify-center flex-col items-center">
    <div class="navbar fixed z-30 bg-ungu rounded-md w-[96%] top-4 p-0 ">
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
                    <li><a class="text-white text-base" href="{{ route('getAllProduct') }}">Shop</a></li>
                    <li><a class="text-white text-base">FAQ</a></li>
                </ul>
            </div>
            <div class="navbar-end mr-4">
                <ul class="menu menu-horizontal py-0 px-1 flex items-center">
                    <li class=" pe-2">
                        <a class="text-white text-base" href="#">
                            <img src="{{ URL::asset('assets/icon_search.png') }}" class="w-[25px]">
                        </a>
                    </li>

                    @guest
                        <li class=" pe-2">
                            <a class="text-white text-base" href="{{ route('login') }}">
                                <img src="{{ URL::asset('assets/icon_cart.png') }}"  class="w-[25px]" alt="">
                            </a>
                        </li>
                            <li class=" pe-2 flex items-center">
                                <a class="btn text-white text-base" style="line-height: 1.75rem" href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                        @else
                            <li class=" pe-2">
                                <a class="text-white text-base" href="{{ route('cart') }}">
                                    <img src="{{ URL::asset('assets/icon_cart.png') }}"  class="w-[25px]" alt="">
                                </a>
                            </li>
                            <div class="dropdown dropdown-hover ">
                                <div tabindex="0" role="button" class="btn m-1 border-white">
                                    <img src="{{ asset('Assets/icon_user.svg') }}" class="w-8"> 
                                    <p class="text-white">{{ Auth::user()->name }}</p>
                                    <img src="{{ asset('Assets/icon_dropdown.svg') }}" alt=""> 
                                </div>
                                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-pink-dark rounded-box w-full">
                                    <li class="w-full">                                    
                                        <a class="text-white text-center" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    <li class="w-full">                                    
                                        <a class="text-white text-left leading-6" href="{{ route('home') }}">Transaction History</a>
                                    </li>
                                
                                </ul>
                            </div>
                        @endguest
                </ul>
            </div>
      </div>
      <div class="overflow-hidden w-full ">
        @yield('body')
        <div class="w-full bg-ungu flex items-center justify-between">
            <img src="{{ URL::asset('assets/logo_white.svg') }}" class="w-[20%] p-16" alt="logo">
            <div>
                <p class="text-putih"> ©  All Right reserved</p>
            </div>
            <div class="p-16 flex flex-col gap-5">
                <a href="{{ route('home') }}" class="text-putih" >Home</a>
                <a href="" class="text-putih">Shop</a>
                <a href="" class="text-putih">FAQ</a>
                
            </div>
        </div>
      </div>
</body>
</html>