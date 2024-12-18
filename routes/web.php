<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('/contact','contact');

Route::post('/contact',[UserController::class,'contact']);

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});


Route::view('/register','register');
Route::post('/register',[UserController::class,'register']);

use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/shop', function() {

    return view('shop', [
        'products' => Product::all()
    ]);
});

Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('/removecart/{id}',[ProductController::class,'removeCart']);
Route::get('/ordernow',[ProductController::class,'orderNow']);
Route::post('/orderplace',[ProductController::class,'orderPlace']);
Route::get('/myorders',[ProductController::class,'myOrders']);
Route::get('/admin',[ProductController::class,'allOrders']);
