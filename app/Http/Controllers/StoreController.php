<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function toko(){
        return view('user/toko');
    }
    public function product_add(request $request){
        return view('user/produk_add');
    }
}
