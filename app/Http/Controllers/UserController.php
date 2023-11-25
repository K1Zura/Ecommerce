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
    public function user_update(request $request, $id){
        $user = User::findOrFail($id);
        return view('admin/user/user-update');
    }
    public function update(request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/');
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

    public function membership(){
        return view('admin/membership/membership');
    }
    public function data_membership(){
        $user = User::get();
        return view('admin/membership/data-membership', ['user' => $user]);
    }
    public function produk_membership(){
        $product = product::get();
        return view('admin/membership/produk-membership', ['barang' => $product]);
    }
}
