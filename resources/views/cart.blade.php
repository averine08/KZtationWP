@extends('layouts.master')

@section('body')
    <div class= "w-full h-screen mt-20 flex items-center flex-col">
        <h1 class="py-10 font-semibold text-ungu text-2xl ">One step more to get your merch!</h1>
        <div class="w-1/2 px-10 flex">
            <div class="overflow-x-auto">
                <table class="table">
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
                            <td>
                                <p class="">100</p>
                            </td>
                            <td>Rp 100.000</td>

                        </tr>
                       
                    </tbody>

                </table>
            </div>

            

            </div>
        </div>
    </div>
@endsection
