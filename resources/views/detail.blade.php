@extends('layouts.master')

@section('body')
        <div class="container mt-40 ml-48 content-start w-full ">
            <div class="w-full flex mb-20">
                <div>
                    <div class="card bg-base-100 shadow-xl image-full self-center" style="width: 450px; height : 450px">
                        <figure><img src="{{ asset($product -> ProductPhoto) }}" alt="" /></figure>
                    </div>
                    <a href="{{$product->ProductLinkYoutube}}">
                        <div class="w-full flex items-center justify-center mb-10 ">
                           <div class="join">
                            <img src="{{ URL::asset('assets/logo_youtube.png') }}" alt="" style="width: 170px;height: 128px">
                            <div class="join join-vertical self-center">
                                <div class="join">
                                    <p class=" text-2xl">Listen to</p>
                                    <p class=" text-2xl font-bold pl-2">{{$product -> artist -> artist_name}}</p>
                                </div>
                                <p>On Youtube</p>
                            </div>
                           </div>
                        </div>
                    </a>

                    <div class="flex flex-col">
                        <div class="join mb-1">
                            <p>01. </p>
                            <p class="pl-2">Intro : Floating</p>
                        </div>
                        <div class="join mb-1">
                            <p>01. </p>
                            <p class="pl-2">紫陽花のような戀 (Hydrangea Love)</p>
                        </div>
                        <div class="join mb-1">
                            <p>01. </p>
                            <p class="pl-2">Sugar Rush Ride (Japanese Ver.)</p>
                        </div>
                        <div class="join mb-1">
                            <p>01. </p>
                            <p class="pl-2">君じゃない誰かの愛し方 (Ring)</p>
                        </div>
                    </div>
                </div>
                    <div class="ml-24 w-full" style="">
                        <h1 class="text-4xl">{{$product->ProductName}}</h1>
                        <h2 class="text-2xl">{{$artist->artist_name}}</h2>

                            <div class="">
                                <div class="collapse ">
                                    <input type="checkbox" /> 
                                    <div class="collapse-title text-xl font-medium px-0 flex">
                                      
                                        <p>
                                            Album Information
                                        </p>

                                        <img class="pb-1"    src="{{ URL::asset('assets/icon_dropdown.svg') }}" alt="">
                                    </div>
                                    <div class="collapse-content px-0"> 
                                        <div class="join join-vertical pb-1 w-full">
                                            <div class="join">
                                                <p class="font-bold text-base">ARTIST :</p>
                                                <p class="pl-1 text-base">{{$product->ProductName}}</p>
                                            </div>
                                            <div class="join">
                                                <p class="font-bold text-base">RELEASE DATE :</p>
                                                <p class="pl-1 text-base">{{$product->ProductReleaseDate}}</p>
                                            </div>
                                            <div class="join">
                                                <p class="font-bold text-base">LABEL :</p>
                                                <p class="pl-1 text-base">{{$product->ProductManufacturer}}</p>
                                            </div>
                                            <div class="join">
                                                <p class="font-bold text-base">MANUFACTURER :</p>
                                                <p class="pl-1 text-base">{{$product->ProductManufacturer}}</p>
                                            </div>
                                            <div class="join">
                                                <p class="font-bold text-base">REGION OF ORIGIN :</p>
                                                <p class="pl-1 text-base">{{$product->ProductRegion}}</p>
                                            </div>
                                    </div>
                                  </div>
                            </div>
                           
                        </div>  
                        <a class="btn rounded-full bg-pink-regis border-pink-regis " href="">
                            <div class="join  text-white hover:text-black">
                                <img src="{{ URL::asset('assets/icon_addcart.svg') }}" alt="">
                                <p class="pl-1 self-center">Add to Cart</p>
                            </div>
                        </a>

                    </div>
            </div>
        </div>

@endsection