<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AttributeController;
use Illuminate\Support\Facades\Route;

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

#Login
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'register']);
Route::get('/forgotPassword', [LoginController::class, 'forgotPassword']);

Route::post('/singin', [LoginController::class, 'singIn']);
Route::post('/singup', [LoginController::class, 'singUp']);

#product
Route::get('/products', [ProductController::class, 'products']);
Route::get('/product-detail', [ProductController::class, 'productDetails']);
Route::get('/create-product', [ProductController::class, 'create']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);

Route::post('/choose-color', [ProductController::class, 'chooseVar']);
Route::post('/choose-size', [ProductController::class, 'chooseSize']);
Route::post('/store-product', [ProductController::class, 'store']);
Route::post('/update-product/{id}', [ProductController::class, 'update']);

#cart
Route::get('/cart', [CartController::class, 'cart']);

#checkout
Route::get('/checkout', [CheckoutController::class, 'show']);

Route::post('/pay', [CheckoutController::class, 'checkout'])->name('pay');

#attribute
Route::get('/create-attribute', [AttributeController::class,'create']);
Route::post('/store-attribute', [AttributeController::class, 'store']);
