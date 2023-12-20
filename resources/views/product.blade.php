@extends('layouts.master')

@section('body')


  <div class="mt-40 content-start w-full ml-24">
    <h1 class="text-ungu text-4xl font-bold leading-4">
        ALBUM
    </h1 >
    <div class="join pt-5">
        <p class="pl-1 text-lg leading-3 text-ungu"    >
           {{$artist->artist_name}}'s Albums
        </p>

    </div>
  </div>

 
  <div class="container ml-24 mt-20 grid grid-cols-4 content-evenly">

    @foreach($albums as $pr)

    <a href="/product/{{ ($pr->id) }}/details" >
        <div class="card bg-base-100 shadow-xl image-full mb-9" style="width: 300px; height : 300px">
        <figure><img src="{{  asset($pr->ProductPhoto) }}" alt=""  /></figure>
        <div class="card-body items-center self-end">

            <div class="bg-black opacity-50 hover:opacity-100">
                <h2 class="card-title text-white text-xl">{{ ($pr->ProductName) }}</h2>
            </div>
         
          
        </div>
    </div> 
    </a>
    @endforeach
    
    

  </div>

  <div class="mt-40 content-start w-full ml-24">
    <h1 class="text-ungu text-4xl font-bold leading-4">
        LIGHTSTICK
    </h1 >
    <div class="join pt-5">
        <p class="pl-1 text-lg leading-3 text-ungu"    >
           {{$artist->artist_name}}'s Lightstick
        </p>

    </div>
  </div>
  
  <div class="container flex justify-center my-20 mx-auto ">
    {{-- @php
        echo $album->ProductName;
    @endphp --}}
    @foreach ( $lg as $ls )
    <a href="/product/{{ ($ls->id) }}/details">
        <div class="card bg-base-100 shadow-xl image-full mb-9 self-center" style="width: 620px; height : 800px">
            <figure><img src="{{  asset($ls->ProductPhoto) }}" alt="{{ $ls->ProductName }}" /></figure>
        </div>
    </a>
        
    @endforeach
    
  </div>

@endsection