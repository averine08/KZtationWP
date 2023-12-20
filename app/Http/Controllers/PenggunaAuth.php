<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Js;
use Illuminate\Http\RedirectResponse;

use Session;

class PenggunaAuth extends Controller
{
    //

    public function userRegister(Request $request){
        $credentials = $request->validate([

        ]);
    }

    public function userlogin(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('penggunas')->attempt($credentials)) {
            $sessionId = session()->getId();
            return redirect()->intended('/home')->with(['sessionId' => $sessionId]);
        }
        else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        // if (Auth::guard('penggunas')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
        //     if (auth()->check()) {
        //         $sessionId = session()->getId();
        //         return redirect()->intended('/home')->with(['sessionId' => $sessionId]);
        //     }
        //     else {
        //         return back()->withErrors(['email' => 'Invalid credentials']);
        //     }
        // }
        // else {
        //     $emailError = Auth::guard('penggunas')->validate(['email' => $credentials['email']]);
        //     $passwordError = Auth::guard('penggunas')->validate(['password' => $credentials['password']]);
        //     $errors = [];
        //     if ($emailError) {
        //         $errors['email'] = 'Invalid email';
        //     }
        //     if ($passwordError) {
        //         $errors['password'] = 'Invalid password';
        //     }
        //     return back()->withErrors($errors);
        // }
    }
    public function home()
    {
        return view('home');
    }
}
