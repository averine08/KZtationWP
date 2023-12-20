<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
class PromoController extends Controller
{
    public function get_all_promo() {
        $data = Promo::all();
        return response()->json([
            "data" => $data
        ]);
    }
    public function create_promo(Request $request) {
        $req = $request->all();
        $data = Promo::updateOrCreate($req, $req);
        return response()->json([
            "data" => $data
        ]);
    }
    public function delete_all_promo() {
        Promo::truncate();
        return response()->json([
            "status" => "success"
        ]);
    }
    public function find_one_promo($params_id) {
        $data = Promo::find($params_id);
        return response()->json([
            "data" => $data
        ]);
    }
    public function update_one_promo($params_id, Request $request) {
        $data = Promo::find($params_id);
        $data->update($request->all());
        return response()->json([
            "status" => "success"
        ]);
    }
    public function delete_one_promo($params_id) {
        $data = Promo::find($params_id);
        $data->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
}
