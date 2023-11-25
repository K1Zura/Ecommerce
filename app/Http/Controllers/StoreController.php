<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\comment;
use App\Models\company;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

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
    public function detail(request $request, $id){
        $product = product::findOrFail($id);
        $comment = comment::get();
        return view('user/product-detail', ['barang' => $product], ['comment' => $comment]);
    }
    public function add(request $request, $id) {
        $product = product::findOrFail($id);
        $comment = comment::create($request->all());
        return redirect('/product-detail-user')->with('barang', $product);
    }
    public function detail_user(request $request, $id){
        $product = product::findOrFail($id);
        $comment = comment::get();
        return view('user/product-detail-user', ['barang' => $product], ['comment' => $comment]);
    }
    public function delete($id) {
        $deletedProduct = Product::find($id);

        $file = storage_path('app/public/photo/') . $deletedProduct->image;

        if (file_exists($file)) {
            unlink($file);
        }

        $deletedProduct->delete();
        return redirect('/product-list')->with('hapus', 'Product Has Been Removed');
    }
    public function update_index(request $request, $id){
        $product  = product::findOrFail($id);
        return view('user/product-update', ['barang' => $product]);
    }
    public function update(request $request, $id){
        $product = product::findOrFail($id);

        $product->name = $request->input('name');
        $product->kategori = $request->input('kategori');
        $product->deskripsi = $request->input('deskripsi');

        if ($request->hasFile('photo')){
            $file = storage_path('/app/public/photo/') .$product->image;
            if (file_exists($file)) {
                @unlink($file);
            }
            $file = $request->file('photo');
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
            $product->image = $newName;
        }

        $product->update();
        return redirect('/product-list');
    }
    public function contact(request $request){
        return view('user/contact');
    }

    public function checkout(request $request, $id){
        $product = product::findOrFail($id);
        $product = product::get();
        return view('user/checkout', ['barang' => $product]);
    }

    public function bag(request $request){
        $product = product::get();
        return view('user/cart', ['barang' => $product]);
    }
}
