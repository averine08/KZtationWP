
@extends('layouts.master')
@section('body')
        <div class="carousel h-screen overflow-hidden">
            <div id="slide1" class="carousel-item relative w-full">
                <img src=" {{ asset('assets/slider_1.jpg') }}" class="w-full overflow-hidden object-top object-cover" />
                <div class="w-full h-screen absolute bottom-0 bg-black/30 inset-0">
                    <div class="flex flex-col w-full h-screen items-center justify-center">
                        <img src="{{ URL::asset('assets/logo_white.svg') }}" class="w-[20%]" alt="logo">
                        <h1 class="text-white">Trusted Kpop Store in The World</h1>
                        <button class="btn glass bg-pink m-2"><a href="{{ route('getAllProduct') }}" class="px-4">Shop Now</a></button>
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
                        <button class="btn glass bg-pink m-2"><a href="{{ route('getAllProduct') }}" class="px-4">Shop Now</a></button>
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
                        <button class="btn glass bg-pink m-2"><a href="{{ route('getAllProduct') }}" class="px-4">Shop Now</a></button>
                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide2" class="btn btn-circle  border-white text-white">❮</a>
                    <a href="#slide1" class="btn btn-circle  border-white text-white">❯</a>
                </div>
            </div>
        </div>

    </div>
    <a href="/artist">Go To Artist</a>
    <a href="{{ route('cart.view', ['id' => auth()->user()->id])}}">Cart</a>
</div>

        <div class="w-full flex items-center justify-center my-10 ">
            <img src="{{ URL::asset('assets/banner_1.svg') }}" class="w-[80%]" alt="logo">
        </div>

        <div class="flex flex-col mx-16 my-20">
            <h1 class="text-ungu text-2xl font-bold">TRENDING NOW</h1>
            <p class="text-ungu">Kpop best seller | <span class="text-pink-dark font-bold"> <a href="#" class="hover:text-ungu">View All</a></span></p>

            <div class="flex max-w-full my-4 flex-wrap justify-stretch">
                @foreach ($trendings as $item)
                <a href="{{ route('detail', $item->id) }}">
                     {{-- href="{{ route('allproduct') }}" --}}
                    <div class="flex flex-col w-[220px] rounded-md gap-0 p-4">
                        <img src="{{ URL::asset($item->ProductPhoto) }}" class="w-full rounded-lg" alt="logo">
                        <p id="artist-name" class="text-ungu text-sm leading-6">{{ $item->artist->artist_name }}</p>
                        <p class="text-lg font-semibold text-ungu leading-4">{{ $item->ProductName }}</p>
                        <p class="text-merah text-lg leading-6 font-semibold">Rp{{ $item->ProductPrice }}</p>
                    </div>
                </a>
                    
                @endforeach    
            </div>
        </div>

        <div class="flex flex-col mx-16 my-20">
            <h1 class="text-ungu text-2xl font-bold">Artist</h1>
            <p class="text-ungu">Get updated with your bias merge | <span class="text-pink-dark font-bold"> <a href="{{ route('getAllArtist') }}" class="hover:text-ungu">View All</a></span></p>

            <div class="flex max-w-full my-4 flex-wrap gap-4">

                @foreach ( $artists as $artist)
                    <a href="{{ route('product', $artist->id) }}">
                        <div class="flex flex-col w-[250px] rounded-md gap-0">
                            <div class="relative">
                                <img src="{{ URL::asset($artist->artist_photo) }}" class="w-full rounded-lg h-[160px] object-cover" alt="logo">
                                <div class="absolute w-full bg-gradient-to-t from-ungu to-ungu/0 rounded-lg h-2/3 bottom-0
                                ">
                                    <p id="artist-name" class="text-putih text-md font-semibold leading-6 px-2 text-center relative top-14">{{ $artist->artist_name }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                @endforeach
                
            </div>
        </div>


        <div class="flex flex-col mx-16 my-20">
            <h1 class="text-ungu text-2xl font-bold">NEW ALBUM</h1>
            <p class="text-ungu">Fresh updated Kpop star album</p>

            <div class="flex max-w-full my-4 flex-wrap justify-stretch">
                @foreach ($latest_album as $na )
                    <a href="{{ route('detail', $na->id) }}">
                        <div class="flex flex-col w-[220px] rounded-md gap-0 p-4">
                            <img src="{{ URL::asset($na->ProductPhoto) }}" class="w-full rounded-lg" alt="logo">
                            <p id="artist-name" class="text-ungu text-sm leading-6">$na->artist->artist_name</p>
                            <p class="text-lg font-semibold text-ungu leading-4">{{  $na->ProductName}}</p>
                            <p class="text-merah text-lg leading-6 font-semibold">Rp {{ $na->ProductPrice }}</p>
                        </div>
                    </a> 
                @endforeach
            </div>
        </div>
    

@endsection
