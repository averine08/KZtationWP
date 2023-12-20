<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuth extends Controller
{
    //
    public function userRegister(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'phonenumber' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'postalcode' => 'required|string'
        ]);
        $credentials['role'] = 'customer';
        $user = User::create($credentials);
        return redirect()->route('login');
    }
    public function userlogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $sessionId = session()->getId();
            return redirect()->intended('/home')->with(['sessionId' => $sessionId]);
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function userlogout()
    {
        Auth::logout();

        $welcomeMessage = "Welcome back, guest!";

        return redirect()->route('home')->with('welcomeMessage', $welcomeMessage);
    }
    public function home()
    {
        $user = Auth::user();

        if (Auth::check()) {
            $welcomeMessage = "Welcome back, " . $user->name . "!";
        } else {
            $welcomeMessage = "Welcome back, guest!";
        }
        return view('home', ['welcomeMessage' => $welcomeMessage]);
    }
}
