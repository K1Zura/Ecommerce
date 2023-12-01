<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\UserProfileController;

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
    Route::get('/update-user/{id}', [UserController::class, 'update_user']);
    Route::put('/user-update/{id}', [UserController::class, 'user_update']);
    Route::delete('/user-delete/{id}', [UserController::class, 'delete']);
    Route::get('/data-produk', [UserController::class, 'data_produk']);
    Route::get('/detail-produk/{id}', [UserController::class, 'produk_detail']);
    Route::get('/update-produk/{id}', [UserController::class, 'produk_update']);
    Route::put('/update-produk-data/{id}', [UserController::class, 'produk_update_data']);
    Route::delete('/delete-produk/{id}', [UserController::class, 'delete_produk']);

    Route::get('/membership', [UserController::class, 'membership']);
    Route::get('/data-membership', [UserController::class, 'data_membership']);
    Route::get('/update-membership/{id}', [UserController::class, 'update_membership']);
    Route::put('/update/{id}', [UserController::class, 'membership_update']);
    Route::get('/produk-membership', [UserController::class, 'produk_membership']);
    Route::delete('/delete-membership/{id}', [UserController::class, 'delete_membership']);

    Route::get('/logout', [AuthController::class, 'logout']);
});


Route::middleware(['guest'])->group(function () {
    Route::get('/', [UserController::class, 'user']);

    Route::get('/shop', [ShopController::class, 'shop']);

    Route::get('/toko', [StoreController::class, 'toko'])->middleware('auth.user');
    Route::get('/product-add', [StoreController::class, 'product_add']);
    Route::post('/product-add', [StoreController::class, 'create']);
    Route::get('/product-add', [StoreController::class, 'store']);
    Route::get('/add-detail', [StoreController::class, 'product_detail']);
    Route::post('/add-detail', [StoreController::class, 'add_detail']);
    Route::get('/toko-add', [StoreController::class, 'toko_add']);
    Route::post('/toko-add', [StoreController::class, 'create_company']);
    Route::get('/product-list', [StoreController::class, 'daftar_produk']);
    Route::get('/product-detail/{id}', [StoreController::class, 'detail']);
    Route::get('/product-detail-user/{id}', [StoreController::class, 'detail_user']);
    Route::delete('/product-delete/{id}', [StoreController::class, 'delete'])->name('produk.hapus');
    Route::get('/product-update/{id}', [StoreController::class, 'update_index']);
    Route::put('/update/{id}', [StoreController::class, 'update']);

    Route::get('/comment', [StoreController::class, 'index']);
    Route::post('/comment-add/{id}', [StoreController::class, 'add']);

    Route::get('/contact', [StoreController::class, 'contact']);

    Route::get('/wishlist/add/{productId}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::get('/wishlist', [WishlistController::class, 'viewWishlist'])->name('wishlist.view')->middleware('auth.user');
    Route::get('/wishlist/remove/{productId}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');

    Route::get('/bag', [StoreController::class, 'bag'])->middleware('auth.user');
    Route::get('/add-to-bag/add/{productId}', [BagController::class, 'add'])->name('bag.add');

    Route::get('/checkout/{id}', [StoreController::class, 'checkout'])->middleware('auth.user');
    Route::post('/checkout-add/{id}', [StoreController::class, 'checkout_add']);

    Route::get('/profil/{id}', [UserProfileController::class, 'profil']);
    Route::put('/profil-add/{id}', [UserProfileController::class, 'profil_add']);

    Route::get('/confirm', [StoreController::class, 'confirm']);

    Route::get('/membership/{id}', [StoreController::class, 'membership']);
    Route::put('/membership-update/{id}', [StoreController::class, 'membership_update']);
});

Route::middleware(['checkRole:1'])->group(function () {
    Route::get('/home', [AuthController::class, 'index']);

    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/data-user', [UserController::class, 'data_user']);
    Route::get('/data-produk', [UserController::class, 'data_produk']);
    Route::get('/validate/{id}', [UserController::class, 'validateProduct']);

    Route::get('/membership', [UserController::class, 'membership']);
    Route::get('/data-membership', [UserController::class, 'data_membership']);
    Route::get('/produk-membership', [UserController::class, 'produk_membership']);

    Route::get('/logout', [AuthController::class, 'logout']);
});
// Route::middleware(['checkRole:2'])->group(function () {
//     Route::get('/', [UserController::class, 'user']);

//     Route::get('/shop', [ShopController::class, 'shop']);

//     Route::get('/toko', [StoreController::class, 'toko']);
//     Route::get('/product-add', [StoreController::class, 'product_add']);
//     Route::post('/product-add', [StoreController::class, 'create']);
//     Route::get('/product-add', [StoreController::class, 'store']);
//     Route::get('/toko-add', [StoreController::class, 'toko_add']);
//     Route::post('/toko-add', [StoreController::class, 'create_company']);
//     Route::get('product-list', [StoreController::class, 'daftar_produk']);
//     Route::get('product-detail', [StoreController::class, 'detail']);
// });

// Route::middleware(['middleware'=>'guest'])->group(function () {
    Route::get('/login-user', [UserController::class, 'login'])->name('login-user');
    Route::post('/auth-user', [UserController::class, 'authenticate'])->name('auth.user');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'create']);
// });
