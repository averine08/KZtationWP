<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Session;

class PenggunaAuth extends Controller
{
    //
    public function userlogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = Pengguna::where('email','=',$request->email)->first();
        // dd($credentials);
        if ($user) {
            if(Hash::check($request->password, $user->password))
            // $request->session()->put('loginId', $user->id);
            Auth::login($user);
            return redirect('/home');
        }
        else{
            return back()->with(['login' => 'Please input the right data']);
        }
    }
    public function home (){
        return view('home');
    }
}
