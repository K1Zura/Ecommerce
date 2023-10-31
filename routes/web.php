<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;

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

// Route::group(['middleware'=> 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

// });
// Route::get('home', [AuthController::class, 'index']);
Route::middleware(['middleware'=>'auth'])->group(function () {
    Route::get('/home', [AuthController::class, 'index']);

    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/data-user', [UserController::class, 'data_user']);
    Route::get('/data-produk', [UserController::class, 'data_produk']);

    Route::get('/membership', [UserController::class, 'membership']);
    Route::get('/data-membership', [UserController::class, 'data_membership']);
    Route::get('/produk-membership', [UserController::class, 'produk_membership']);
});
Route::get('/', [UserController::class, 'user']);

Route::get('/shop', [ShopController::class, 'shop']);

Route::get('/toko', [StoreController::class, 'toko']);
Route::get('/product-add', [StoreController::class, 'product_add']);