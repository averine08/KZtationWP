<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trendings = Product::take(5)->get();
        $artists = Artist::take(5)->get();
        $latest_album = Product::all()->where('ProductCat',1)->take(5);

        return view('home', compact('trendings', 'artists','latest_album'));
    }
}
