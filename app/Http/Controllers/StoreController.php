<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $newName = '';

        if($request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

        $request['image'] = $newName;
        $product = Product::create($request->all());
        return redirect('/toko');
    }
    public function store(request $request){
        $user = User::select('id', 'name');
        return view('user/produk_add', ['user'=>$user]);
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
        return view('user/product-list', ['barang' => $product]);
    }
    public function detail(request $request){
        $product = Product::get();
        return view('user/product-detail', ['barang' => $product]);
    }
}
