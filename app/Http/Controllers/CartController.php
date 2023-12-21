<?php

namespace App\Http\Controllers;

use App\Models\PaymentHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PaymentDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
{
    $user = Auth::user();

    $paymentHeader = PaymentHeader::firstOrCreate(
        ['userID' => $user->id, 'status' => 'unpaid'],
        ['payment_method' => $request->input('payment_method')]
    );

    $paymentDetail = PaymentDetail::firstOrCreate(
        ['payment_header_ID' => $paymentHeader->id, 'product_ID' => $id],
        ['product_quantity' => 1]
    );
    $cartItems = session('carts', []);

    $cartItems[] = $paymentDetail->toArray();

    session()->put('carts', $cartItems);

    return redirect()->route('cart.view', ['id' => $user->id]);
}

    public function viewCart($id)
    {
        $paymentHeader = PaymentHeader::where("userID", $id)->get();
        $temp = $paymentHeader->first();

        if ($paymentHeader->count() != 0) {
            $carts = PaymentDetail::where("payment_header_ID", $temp->id)->get();
            return view('cart', ['carts' => $carts]);
        } else {
            return view('home');
        }
    }

    public function updatePaid(Request $request)
    {
        $unpaidOrder = PaymentHeader::where("userID", $request->id)->where("status", "unpaid")->first();

        if ($unpaidOrder) {
            $unpaidOrder->update(["status" => "Paid"]);
            session()->forget('carts');
            return view('payment', ['order' => $unpaidOrder]);
        } else {
            return redirect()->route('home');
        }
    }

    public function checkout()
{
    $cartItems = session('carts', []);

    $user = Auth::user();

    $paymentHeader = PaymentHeader::create([
        'userID' => $user->id,
        'payment_method' => 'VISA', 
        'status' => 'Paid', 
    ]);

    foreach ($cartItems as $cartItem) {
        PaymentDetail::create([
            'payment_header_ID' => $paymentHeader->id,
            'product_ID' => $cartItem['product_ID'],
            'product_quantity' => $cartItem['product_quantity'],
        ]);
    }

    session()->forget('carts');
    return view('payment', ['paymentHeader' => $paymentHeader]);
}
}
