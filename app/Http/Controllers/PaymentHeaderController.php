<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentHeader;
class PaymentHeaderController extends Controller
{
    public function get_all_payment() {
        $data = PaymentHeader::all();
        return response()->json([
            "data" => $data
        ]);
    }
    public function create_payment(Request $request) {
        $req = $request->all();
        $data = PaymentHeader::updateOrCreate($req, $req);
        return response()->json([
            "data" => $data
        ]);
    }
    public function delete_all_payment() {
        PaymentHeader::truncate();
        return response()->json([
            "status" => "success"
        ]);
    }
    public function find_one_payment($params_id) {
        $data = PaymentHeader::find($params_id);
        return response()->json([
            "data" => $data
        ]);
    }
    public function update_one_payment($params_id, Request $request) {
        $data = PaymentHeader::find($params_id);
        $data->update($request->all());
        return response()->json([
            "status" => "success"
        ]);
    }
    public function delete_one_payment($params_id) {
        $data = PaymentHeader::find($params_id);
        $data->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
}
