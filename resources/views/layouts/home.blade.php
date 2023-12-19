@extends('layouts.master')
@section('body')
        <div class="carousel h-screen overflow-hidden">
            <div id="slide1" class="carousel-item relative w-full">
                {{-- <img src=" {{ asset('assets/slider_1.jpg') }}" class="w-full overflow-hidden object-top object-cover" /> --}}
                <div class="w-full h-screen absolute bottom-0 bg-black/30 inset-0">
                    <div class="flex flex-col w-full h-screen items-center justify-center">
                        <img src="{{ URL::asset('assets/logo_white.svg') }}" class="w-[20%]" alt="logo">
                        <h1 class="text-white">Trusted Kpop Store in The World</h1>
                        <button class="btn glass bg-pink m-2"><a href="#" class="px-4">Shop Now</a></button>
                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide3" class="btn btn-circle border-white text-white">❮</a>
                    <a href="#slide2" class="btn btn-circle  border-white text-white">❯</a>
                </div>
            </div>

            <div id="slide2" class="carousel-item relative w-full">
                <img src="{{ asset('assets/slider_3.jpg') }}" class="w-full overflow-hidden object-top object-cover" />
                <div class="w-full h-screen absolute bottom-0 bg-black/30 inset-0">
                    <div class="flex flex-col w-full h-screen items-center justify-center">
                        <img src="{{ URL::asset('assets/logo_white.svg') }}" class="w-[20%]" alt="logo">
                        <h1 class="text-white">Trusted Kpop Store in The World</h1>
                        <button class="btn glass bg-pink m-2"><a href="#" class="px-4">Shop Now</a></button>
                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide1" class="btn btn-circle  border-white text-white">❮</a>
                    <a href="#slide3" class="btn btn-circle  border-white text-white">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
                <img src="{{ asset('assets/slider_4.jpg') }}" class="w-full overflow-hidden object-top object-cover" />
                <div class="w-full h-screen absolute bottom-0 bg-black/30 inset-0">
                    <div class="flex flex-col w-full h-screen items-center justify-center">
                        <img src="{{ URL::asset('assets/logo_white.svg') }}" class="w-[20%]" alt="logo">
                        <h1 class="text-white">Trusted Kpop Store in The World</h1>
                        <button class="btn glass bg-pink m-2"><a href="#" class="px-4">Shop Now</a></button>
                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide2" class="btn btn-circle  border-white text-white">❮</a>
                    <a href="#slide1" class="btn btn-circle  border-white text-white">❯</a>
                </div>
            </div>
        </div>
        <div class="w-full flex items-center justify-center my-10 ">
            <img src="{{ URL::asset('assets/banner_1.svg') }}" class="w-[80%]" alt="logo">
        </div>

        <div class="flex flex-col mx-16">
            <h1 class="text-ungu text-2xl font-bold">TRENDING NOW</h1>
            <p class="text-ungu">Kpop best seller</p>
        </div>
    
@endsection
