<?php

namespace App\Http\Controllers;

use App\Models\PaymentHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PaymentDetail;
class CartController extends Controller
{
    public function addtoCart(Request $request, $id){
        $userID = auth()->user()->id;

        $paymentHeader = PaymentHeader::firstOrCreate(
            ['userID' => $userID, 'status' => 'unpaid'],
            ['payment_method' => $request->input('payment_method')]
        );
        // print_r($paymentHeader->id);
        PaymentDetail::firstOrCreate(
            ['payment_header_ID' => $paymentHeader->id, 'product_ID' => $id],
            ['product_quantity' => 1]
        );

        return redirect()->route('cart')->with('success', 'Item added to cart successfully');
    }
    public function view_cart($id) {
        $carts = PaymentDetail::where("payment_header_ID", $id)->get();
        return view('cart', ['carts' => $carts]);
    }
    
}
