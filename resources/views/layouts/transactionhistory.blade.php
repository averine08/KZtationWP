@extends('layouts.master')

@section('body')
    
    <div class="container mb-20 mt-40 ml-24">
        <select class="select select-secondary w-50 max-w-xs">
            <option disabled selected>Select Month</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
          </select>
    </div>

    <div class="flex container border border-ungu rounded ml-24 bg-pink-back h-full mb-20 shadow-xl">
        <div class="my-3">
            <div class="flex my-8 ml-3 ">
                <div  class="ml-5">
                    <img src="{{ URL::asset('assets/album/Album_Twice_What is love.jpeg') }}" alt="" style="height : 100px; width : 100px">
                </div>
                <div class="flex flex-col ml-10 self-center">
                    <p class="text-ungu text-xl">
                        Twice Album What Is Love
                    </p>
                    <div class="flex">
                        <p class="text-xs text-ungu">
                            Qty : 
                        </p>
                        <p class="pl-1 text-xs text-ungu">
                            2
                        </p>
                    </div>
                    
                </div>
            </div>    
            <div class="flex my-8 ml-3 ">
                <div  class="ml-5">
                    <img src="{{ URL::asset('assets/album/Album_Twice_What is love.jpeg') }}" alt="" style="height : 100px; width : 100px">
                </div>
                <div class="flex flex-col ml-10 self-center">
                    <p class="text-ungu text-xl">
                        Twice Album What Is Love
                    </p>
                    <div class="flex">
                        <p class="text-xs text-ungu">
                            Qty : 
                        </p>
                        <p class="pl-1 text-xs text-ungu">
                            2
                        </p>
                    </div>
                    
                </div>
            </div>    
            <div class="flex my-8 ml-3 ">
                <div  class="ml-5">
                    <img src="{{ URL::asset('assets/album/Album_Twice_What is love.jpeg') }}" alt="" style="height : 100px; width : 100px">
                </div>
                <div class="flex flex-col ml-10 self-center">
                    <p class="text-ungu text-xl">
                        Twice Album What Is Love
                    </p>
                    <div class="flex">
                        <p class="text-xs text-ungu">
                            Qty : 
                        </p>
                        <p class="pl-1 text-xs text-ungu">
                            2
                        </p>
                    </div>
                    
                </div>
            </div>    
            <div class="flex my-8 ml-3 ">
                <div  class="ml-5">
                    <img src="{{ URL::asset('assets/album/Album_Twice_What is love.jpeg') }}" alt="" style="height : 100px; width : 100px">
                </div>
                <div class="flex flex-col ml-10 self-center">
                    <p class="text-ungu text-xl">
                        Twice Album What Is Love
                    </p>
                    <div class="flex">
                        <p class="text-xs text-ungu">
                            Qty : 
                        </p>
                        <p class="pl-1 text-xs text-ungu">
                            2
                        </p>
                    </div>
                    
                </div>
            </div>    
            
                    
               
        </div>
        
        

    </div>

@endsection