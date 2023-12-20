<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenggunaAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentHeaderController;
use App\Http\Controllers\PaymentDetailController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::view('/login', 'login');
// Route::view('/home', 'home');
Route::view('/register', 'register');
Route::post('/login', [UserAuth::class,'userlogin']);
Route::post('/register', [UserAuth::class,'userRegister']);
Route::get('/home', [UserAuth::class, 'home'])->name('home');
Route::get('/{artist_name}/products', [ProductController::class, 'artistProducts'])->name('products');
// Pengguna
Route::get('/user', [UserController::class, 'get_all_pengguna']);
Route::post('/user', [UserController::class, 'create_pengguna']);
Route::delete('/user', [UserController::class, 'delete_all_pengguna']);
Route::get('/user/{params_id}', [UserController::class, 'find_one_pengguna']);
Route::patch('/user/{params_id}', [UserController::class, 'update_one_pengguna']);
Route::delete('/user/{params_id}', [UserController::class, 'delete_one_pengguna']);

// Promo
Route::get('/promo', [PromoController::class, 'get_all_promo']);
Route::post('/promo', [PromoController::class, 'create_promo']);
Route::delete('/promo', [PromoController::class, 'delete_all_promo']);
Route::get('/promo/{params_id}', [PromoController::class, 'find_one_promo']);
Route::patch('/promo/{params_id}', [PromoController::class, 'update_one_promo']);
Route::delete('/promo/{params_id}', [PromoController::class, 'delete_one_promo']);

// Artist
Route::get('/artist', [ArtistController::class, 'get_all_artist']);
Route::post('/artist', [ArtistController::class, 'create_artist']);
Route::delete('/artist', [ArtistController::class, 'delete_all_artist']);
Route::get('/artist/{params_id}', [ArtistController::class, 'find_one_artist']);
Route::patch('/artist/{params_id}', [ArtistController::class, 'update_one_artist']);
Route::delete('/artist/{params_id}', [ArtistController::class, 'delete_one_artist']);

// Product
Route::get('/product', [ProductController::class, 'get_all_product']);
Route::post('/product', [ProductController::class, 'create_product']);
Route::delete('/product', [ProductController::class, 'delete_all_product']);
Route::get('/product/{params_id}', [ProductController::class, 'find_one_product']);
Route::patch('/product/{params_id}', [ProductController::class, 'update_one_product']);
Route::delete('/product/{params_id}', [ProductController::class, 'delete_one_product']);

// Payment
Route::get('/payment', [PaymentHeaderController::class, 'get_all_payment']);
Route::post('/payment', [PaymentHeaderController::class, 'create_payment']);
Route::delete('/payment', [PaymentHeaderController::class, 'delete_all_payment']);
Route::get('/payment/{params_id}', [PaymentHeaderController::class, 'find_one_payment']);
Route::patch('/payment/{params_id}', [PaymentHeaderController::class, 'update_one_payment']);
Route::delete('/payment/{params_id}', [PaymentHeaderController::class, 'delete_one_payment']);

// PaymentDetail
Route::get('/payment-detail', [PaymentDetailController::class, 'get_all_paymentdetail']);
Route::post('/payment-detail', [PaymentDetailController::class, 'create_paymentdetail']);
Route::delete('/payment-detail', [PaymentDetailController::class, 'delete_all_paymentdetail']);
Route::get('/payment-detail/{params_id}', [PaymentDetailController::class, 'find_one_paymentdetail']);
Route::patch('/payment-detail/{params_id}', [PaymentDetailController::class, 'update_one_paymentdetail']);
Route::delete('/payment-detail/{params_id}', [PaymentDetailController::class, 'delete_one_paymentdetail']);