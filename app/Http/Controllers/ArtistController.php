<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
class ArtistController extends Controller
{
    public function get_all_artist() {
        $data = Artist::all();
        return view('artists', compact('data'));
        // return response()->json([
        //     "data" => $data
        // ]);
    }
    public function create_artist(Request $request) {
        $req = $request->all();
        $data = Artist::updateOrCreate($req, $req);
        return response()->json([
            "data" => $data
        ]);
    }
    public function delete_all_artist() {
        Artist::truncate();
        return response()->json([
            "status" => "success"
        ]);
    }
    public function find_one_artist($params_id) {
        $data = Artist::find($params_id);
        return response()->json([
            "data" => $data
        ]);
    }
    public function update_one_artist($params_id, Request $request) {
        $data = Artist::find($params_id);
        $data->update($request->all());
        return response()->json([
            "status" => "success"
        ]);
    }
    public function delete_one_artist($params_id) {
        $data = Artist::find($params_id);
        $data->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
}
