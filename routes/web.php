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

    Route::get('/logout', [AuthController::class, 'logout']);
});
Route::get('/', [UserController::class, 'user']);

Route::get('/shop', [ShopController::class, 'shop']);

Route::get('/toko', [StoreController::class, 'toko']);
Route::get('/product-add', [StoreController::class, 'product_add']);
Route::post('/product-add', [StoreController::class, 'create']);
Route::get('/toko-add', [StoreController::class, 'toko_add']);
Route::post('/toko-add', [StoreController::class, 'create_company']);
Route::get('product-list', [StoreController::class, 'daftar_produk']);

// Route::middleware(['middleware'=>'guest'])->group(function () {
    Route::get('/login-user', [UserController::class, 'login'])->name('login');
    Route::post('/auth', [UserController::class, 'authenticate'])->name('login');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'create']);
// });
