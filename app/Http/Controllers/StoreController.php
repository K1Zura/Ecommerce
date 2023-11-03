<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function toko(){
        return view('user/toko');
    }
    public function product_add(){
        return view('user/produk_add');
    }
    public function create(request $request) {
        $product = product::create($request->all());
        return redirect('/toko');
    }
}
