<?php

namespace App\Http\Controllers;

use App\Models\company;
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
    public function create(Request $request) {
        $product = Product::create($request->all());
        return redirect('/toko');
    }
    
    public function toko_add() {
        return view('user/toko-add');
    }
    public function create_company(request $request){
        $company = company::create($request->all());
        return redirect('/toko');
    }
    public function daftar_produk(request $request){
        $product = Product::get();
        return view('user/product-list');
    }
}
