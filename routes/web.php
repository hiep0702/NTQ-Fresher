<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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

// Route::get('/', [DemoController::class, 'show'])->name('demo.show');


#Login
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'register']);
Route::get('/forgotPassword', [LoginController::class, 'forgotPassword']);

#product
Route::get('/products', [ProductController::class, 'products']);
Route::get('/productDetail', [ProductController::class, 'productDetails']);
Route::post('/choose-color', [ProductController::class, 'chooseVar']);

#cart
Route::get('/cart', [CartController::class, 'cart']);

#checkout
Route::get('/checkout', [CheckoutController::class, 'show']);