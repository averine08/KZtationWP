<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/test-page', function () {
    return view('tes', ['name' => 'Priscilla']);
});

Route::get('/loginpage', function(){
    return view('layouts/loginpage');
});

Route::get('/registerpage', function(){
    return view('layouts/registerpage');
});

Route::get('homepage', function(){
    return view('layouts/homepage');
});

Route::get('preview', function(){
    return view('layouts/previewpage');
});

Route::get('transactionhistory', function(){
    return view('layouts/transactionhistory');
});

Route::get('cart', function(){
    return view('layouts/cart');
});

Route::get('payment', function(){
    return view('layouts/payment');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
