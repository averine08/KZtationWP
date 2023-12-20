{{--
<h1>This is cart</h1>
@if ($carts!=null)
        @foreach ($carts as $cart_data)
            <strong>{{ $cart_data->product_ID }}</strong>
            <strong>{{ $cart_data->product_quantity }}</strong>
        @endforeach
        
@else
    <p>No carts.</p>
@endif
testing pris --}}


@extends('layouts.master')

@section('body')
    <div class= "w-full h-screen flex items-center flex-col my-20">
        <h1 class="py-10 font-semibold text-ungu text-2xl ">One step more to get your merch!</h1>
        <div class="flex w-full">
            <div class=" px-10 flex flex-1">
                <div class="overflow-x-auto w-full">
                    <table class="table ">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="rounded-lg w-24 h-24">
                                                <img src="{{ asset('Assets/Album/Album_Jennie_Solo.jpg') }}" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold">Solo</div>
                                            <div class="text-sm opacity-50">Jennie</div>
                                        </div>
                                    </div>
                                </td>
                                <td class=" pt-5 ">
                                    <div class=" ">

                                        
                                     <div>
                                        <p class="pl-1">
                                            1
                                        </p>
                                     </div>
                                        
                                        
                                        <button class="btn btn-ghost px-0">
                                            <img src="{{ URL::asset('assets/icon_bin.png') }}" alt="">
                                        </button>
                                    </div>

                                </td>
                                <td>
                                    <div class="flex">
                                        <p class="text-end " style="color: #777777">
                                            Rp. 
                                        </p>
                                        <p class="text-end pl-1" style="color: #777777">
                                            Uang
                                        </p>
                                    </div>   
                                </td>

                            </tr>
                        
                        </tbody>

                    </table>
                </div>

            </div>

            <div>
                <div class=" flex flex-col m-10 rounded-lg border-pink-dark border-2 p-4" style="width : 400px">
                    <label class="form-control w-full my-5 mx-3">
                        <div class="label pt-0">
                          <span class="label-text font-semibold">Promo code</span>
                        </div>
                        <div class="flex justify-between ">
                            <div>
                                <input type="text" placeholder="Promo apply" class="input input-bordered w-full max-w-x h-10" />
                            </div>
                            <div>
                                <button class="btn bg-black text-white hover: btn-white hover:text-black mr-10"> Apply</button>
                            </div>
                           
                        </div>
                    </label> 
    
                    <label class="form-control w-full mt-3 mx-3">
                        <div class="label pt-0">
                            <span class="label-text font-semibold">Shipping</span>
                          </div>
    
                    </label>
                    
                    <div class="flex flex-col ">
                        <div class="flex justify-center">
                            <input type="" placeholder="Country" class="input input-bordered w-50 h-10 my-2 " />
                        </div>
                        <div class="flex justify-center">
                            <input type="" placeholder="City" class="input input-bordered w-50 h-10 my-2" />
                        </div>
                        <div class="flex justify-center">
                            <input type="" placeholder="Address" class="input input-bordered w-50 h-10 my-2" />
                        </div>
                        <div class="flex justify-center">
                            <input type="" placeholder="Postal Code" class="input input-bordered w-50 h-10 my-2" />
                        </div>
                       
                    </div>
    
                    <label class="form-control w-full mt-10 mx-3">
                        <div class="label pt-0">
                            <span class="label-text font-semibold">Payment Method</span>
                          </div>
    
                    </label>
    
                    <div class="flex justify-evenly my-4">
                        <div class="w-20">
                            <button class="btn bg-black text-white hover: btn-white hover:text-black mr-10">Matercard</button>
                        </div>
    
                        <div class="min-w-20 ml-4">
                            <button class="btn w-full bg-black text-white hover: btn-white hover:text-black mr-10">visa</button>
                        </div>
    
                        <div class="w-24">
                            <button class="btn w-full bg-black text-white hover: btn-white hover:text-black mr-10">Paypal</button>
                        </div>
                    </div>
    
    
                    <div class="flex">
                        <label class="form-control w-full mt-10 mx-3">
                            <div class="label pt-0">
                                <span class="label-text font-semibold text-2xl">TOTAL</span>
                              </div>
        
                        </label>
                        <div class="flex w-full mt-10 mx-3">
                            <span class="label-text font-semibold text-2xl">Rp. </span>
                            <span class="label-text font-semibold text-2xl pl-1">UANG</span>
                        </div>
                    </div>
    
                    <div class="flex justify-end mb-5 text-pink-regis">
                        <p class="text-sm ">
                            Tax and shipping included*
                        </p>
                    </div>
                   
                    
    
                </div>
                <div class="flex justify-center pt-5 min-w-24 min-h-10">
                    <a class="btn rounded-full w-1/2 h-full text-black bg-white hover:bg-white hover:text-black" href="">
                        <div class="join ">
                            <img src="{{ URL::asset('assets/icon_checkout.png') }}" alt="">
                            <p class="pl-1 self-center">CheckOut</p>
                        </div>
                    </a>
                </div>
            </div>
            
            

            
        </div>
    </div>
@endsection
