<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function get_all_product()
    {
        $data = Product::all();

        return view('viewallproduct', compact('data'));
    }

    public function get_products_by_id($artistId)
    {   
    $data = Product::where('artist_id', $artistId)()->get();
    
    // return response()->json([
    //     "data" => $data
    // ]);
    return view('detail', compact($data));
    }

    



    public function create_product(Request $request)
    {
        $req = $request->all();
        $data = Product::updateOrCreate($req, $req);
        return response()->json([
            "data" => $data
        ]);
    }
    public function delete_all_product()
    {
        Product::truncate();
        return response()->json([
            "status" => "success"
        ]);
    }
    public function find_one_product($params_id)
    {
        $data = Product::find($params_id);
        return response()->json([
            "data" => $data
        ]);
    }
    public function update_one_product($params_id, Request $request)
    {
        $data = Product::find($params_id);
        $data->update($request->all());
        return response()->json([
            "status" => "success"
        ]);
    }
    public function delete_one_product($params_id)
    {
        $data = Product::find($params_id);
        $data->delete();
        return response()->json([
            "status" => "success"
        ]);
    }


    public function artistProducts($artistId)
    {
        $artist = Artist::find($artistId);
        // $artist = Artist::where('id', $artistId)
        // ->where('productCat', 1)
        // ->first();
        // if ($artist === null) {
        //     // Handle the case where the artist is not found (e.g., redirect or show an error page)
        //     return redirect()->route('artist');
        // }
        
        $albums = $artist->products->where('ProductCat', 1);
        $lightstick = $artist->products->where('ProductCat', 2);
        return view('product', ['artist' => $artist, 'albums' => $albums, 'lg' =>$lightstick]);
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        $artist = Artist::find($product->artist_id);
        
        return view('detail', ['product' => $product, 'artist' => $artist]);
    }
}
