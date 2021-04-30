<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\StoreImageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Models\Product;

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

Route::get('store_image',[StoreImageController::Class,'index']);
Route::post('/store_image/insert_image',[StoreImageController::Class,'storeImg'])->name('store');

Route::get('product',[ProductController::Class,'index']);
Route::get('order/{id}',[ProductController::Class,'order'])->name('order');
Route::post('sentorder',[ProductController::Class,'sentorder'])->name('sentorder');

Route::post('bill',[OrderController::Class,'bill'])->name('bill');

Route::get('login',[UserAuthController::Class,'login']);
Route::get('register',[UserAuthController::Class,'register']);
Route::get('home',[UserAuthController::Class,'home']);
Route::post('create',[UserAuthController::Class,'create'])->name('auth.create');
Route::post('check',[UserAuthController::Class,'check'])->name('auth.check');

Route::get('/', function () {
    $products = Product::all();
    return view('welcome',compact('products'));
});

// Route::get('/product', function () {
//     return view('product');
// });

Route::get('/aboutus', function () {
    return view('aboutus');
});