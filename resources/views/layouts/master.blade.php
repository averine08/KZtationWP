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
    <div class="navbar fixed z-30 bg-ungu rounded-md w-[96%] top-4 ">
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
                    <li><a class="text-white text-base">Home</a></li>
                    <li><a class="text-white text-base">Shop</a></li>
                    <li><a class="text-white text-base">FAQ</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <ul class="menu menu-horizontal px-1">
                    <li class=" pe-2">
                        <a class="text-white text-base" href="#">
                            <img src="{{ URL::asset('assets/icon_search.png') }}" alt="">
                        </a>
                    </li>
                    <li class=" pe-2">
                        <a class="text-white text-base" href="#">
                            <img src="{{ URL::asset('assets/icon_cart.png') }}" alt="">
                        </a>
                    </li>
                    <li class=" pe-2">
                        <a class="text-white text-base" href="#">
                            <img src="{{ URL::asset('assets/icon_user.png') }}" alt="">
                        </a>
                    </li>
                    <li class=" pe-2 flex items-center">
                        <a class="btn text-white text-base]" style="line-height: 1.75rem" href="#">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
      </div>
      <div class="overflow-hidden ">
        @yield('body')
        @yield('footer')
      </div>
</body>
</html>