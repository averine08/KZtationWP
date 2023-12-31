@extends('layouts.master')

@section('body')
  <div class=" w-full mx-24 mt-40">
    <h1 class="text-ungu text-4xl font-bold">
        All Product
    </h1 >
    <div class="join pt-5">
        <p class="text-ungu">
            Album & Lightstick
        </p>
        
    </div>
  </div>

  <div class="w-full ml-24 my-10 flex items-center gap-3">
    <p>Filter : </p>
    <details class="dropdown">
    <summary class="m-1 btn">Price</summary>
  <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
    <li><a>Highest</a></li>
    <li><a>Lowest</a></li>
  </ul>
  </details>

  <details class="dropdown">
    <summary class="m-1 btn">Date</summary>
  <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
    <li><a>Latest</a></li>
    <li><a>Oldest</a></li>
  </ul>
  </details>

  </div>
  <div class="container ml-24 mt-20 grid grid-cols-4 content-evenly mb-10">
    @foreach($data as $pr)

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

  

@endsection