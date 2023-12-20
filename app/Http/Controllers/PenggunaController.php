<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
class PenggunaController extends Controller
{
    public function get_all_pengguna() {
        $data = Pengguna::all();
        return response()->json([
            "data" => $data
        ]);
    }
    public function create_pengguna(Request $request) {
        $req = $request->except('_token');
        $data = Pengguna::updateOrCreate($req, $req);
        return response()->json([
            "data" => $data
        ]);
    }
    public function delete_all_pengguna() {
        Pengguna::truncate();
        return response()->json([
            "status" => "success"
        ]);
    }
    public function find_one_pengguna($params_id) {
        $data = Pengguna::find($params_id);
        return response()->json([
            "data" => $data
        ]);
    }
    public function update_one_pengguna($params_id, Request $request) {
        $data = Pengguna::find($params_id);
        $data->update($request->all());
        return response()->json([
            "status" => "success"
        ]);
    }
    public function delete_one_pengguna($params_id) {
        $data = Pengguna::find($params_id);
        $data->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
}
