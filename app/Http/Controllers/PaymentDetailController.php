<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentDetail;
class PaymentDetailController extends Controller
{
    public function get_all_paymentdetail() {
        $data = PaymentDetail::all();
        return response()->json([
            "data" => $data
        ]);
    }
    public function create_paymentdetail(Request $request) {
        $req = $request->all();
        $data = PaymentDetail::updateOrCreate($req, $req);
        return response()->json([
            "data" => $data
        ]);
    }
    public function delete_all_paymentdetail() {
        PaymentDetail::truncate();
        return response()->json([
            "status" => "success"
        ]);
    }
    public function find_one_paymentdetail($params_id) {
        $data = PaymentDetail::find($params_id);
        return response()->json([
            "data" => $data
        ]);
    }
    public function update_one_paymentdetail($params_id, Request $request) {
        $data = PaymentDetail::find($params_id);
        $data->update($request->all());
        return response()->json([
            "status" => "success"
        ]);
    }
    public function delete_one_paymentdetail($params_id) {
        $data = PaymentDetail::find($params_id);
        $data->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
}
