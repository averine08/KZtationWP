@extends('layouts.master')

@section('body')


  <div class="mt-40 content-start w-full ml-24">
    <h1 class="text-ungu text-4xl font-bold">
        Artist
    </h1 >

    
    <p class="text-ungu">
        Kpop Artist
    </p>
  </div>

  <div class="container ml-24 mt-20 grid grid-cols-4 content-evenly">
    @foreach ($data as $ar)
    <a href="{{ route('product',$ar->id) }}" >
        <div class="card bg-base-100 shadow-xl image-full mb-9" style="width: 350px; height : 300px">
        <figure><img src="{{ asset($ar->artist_photo) }}" alt="" /></figure>
        <div class="card-body items-center self-end">

            <div class="bg-black opacity-50 hover:opacity-100">
                <h2 class="card-title text-white text-3xl">{{ ($ar->artist_name) }}</h2>
            </div>
         
          
        </div>
    </div> 
    </a>
    @endforeach
    

  </div>
  
@endsection