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
        $paymentDetail = PaymentDetail::firstOrCreate(
            ['payment_header_ID' => $paymentHeader->id, 'product_ID' => $id],
            ['product_quantity' => 1]
        );
        // return view('cart', ['carts' => $paymentDetail]);
        return redirect()->route('cart.view', ['id' => auth()->user()->id])->with('carts', $paymentDetail);
    }
    public function view_cart($id) {
        $paymentHeader = PaymentHeader::where("userID", $id)->get();
        $temp = PaymentHeader::where("userID", $id)->get()->first();
        if ($paymentHeader->count() != 0) {
            $carts = PaymentDetail::where("payment_header_ID", $temp->id)->get();
            return view('cart', ['carts' => $carts]);
            // return response()->json([
            //     $carts
            // ]);
        }
    }
    public function update_paid(Request $request) {
        $data = PaymentHeader::where("userID", $request->id)->where("status", "unpaid")->get()->first();
        $data->update(["status" => "Paid"]);
        // return response()->json([
        //     "data" => $data,
        //     "request" => $request->all()
        // ]);
        return view('payment');
    }
    
}
