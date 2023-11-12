<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user(){
        return view('user/home');
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

        return view('admin/user/data-user');
    }
    public function data_produk(){
        return view('admin/user/data-produk');
    }

    public function membership(){
        return view('admin/membership/membership');
    }
    public function data_membership(){
        return view('admin/membership/data-membership');
    }
    public function produk_membership(){
        return view('admin/membership/produk-membership');
    }
}
