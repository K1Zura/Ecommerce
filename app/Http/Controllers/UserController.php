<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user(request $request){
        $product = product::orderBy('created_at', 'desc')->get();
        return view('user/home', ['barang' => $product]);
    }
    public function login(){
        return view('user/login-user');
    }
    public function authenticate(request $request){
        $request->validate([
            'name'=>['required'],
            'password'=>['required'],
        ]);
        $infoLogin=[
            'name'=>$request->name,
            'password'=>$request->password,
        ];
        if (Auth::guard('user')->attempt($infoLogin)) {
            return redirect('/');
        } else {
            return redirect('/login-user');
        }
    }
    public function register(){
        return view('user/register');
    }
    public function create(request $request){
        $user = User::create($request->all());
        $existingUser = User::where('email', $request->email)->first();
    if ($existingUser) {
        return redirect('/login-user');
    }
    }

    public function logout()
{
    if (Auth::guard('user')->check()) {
        Auth::guard('user')->logout();
    }
    return redirect('/');
}

    public function data_user(request $request){
        $user = User::get();
        return view('admin/user/data-user', ['user' => $user]);
    }
    public function update_user($id){
        $user = User::findOrFail($id);
        return view('admin/user/update-user', ['user' => $user]);
    }
    public function user_update(request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/data-user');
    }
    public function delete($id){
        $deletedProduct = User::find($id);
        $deletedProduct->delete();
        return redirect('/data-user');
    }
    public function data_produk(request $request){
        $product = product::orderBy('id', 'desc')->paginate(6);
        return view('admin/user/data-produk', ['barang' => $product]);
    }
    public function produk_detail($id){
        $product = Product::findOrFail($id);
        return view('admin/user/detail-produk', ['barang' => $product]);
    }
    public function produk_update(request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return view('admin/user/update-produk', ['barang' => $product]);
    }
    public function produk_update_data(request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('/data-produk');
    }
    public function delete_produk($id){
        $deletedProduct = Product::find($id);

        $file = storage_path('app/public/photo/') . $deletedProduct->image;

        if (file_exists($file)) {
            unlink($file);
        }

        $deletedProduct->delete();
        return redirect('/data-produk');
    }
    public function validateProduct(request $request, $id)
    {
        // dd('/data-produk?page='.$request->page);
        $product = Product::findOrFail($id);
        $product->validated = true;
        $product->save();

        return redirect('/data-produk?page='.$request->page)->with('success', 'Product validated successfully.');
    }

    public function membership(){
        return view('admin/membership/membership');
    }
    public function data_membership(){
        $user = User::get();
        return view('admin/membership/data-membership', ['user' => $user]);
    }
    public function delete_membership($id){
        $deletedProduct = User::find($id);
        $deletedProduct->delete();
        return redirect('/data-membership');
    }
    public function produk_membership(){
        $product = product::where('user_id', 6)->orderBy('id', 'desc')->get();
        $user = User::get();
        return view('admin/membership/produk-membership', ['barang' => $product], ['user' => $user]);
    }
}
