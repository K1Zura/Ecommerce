<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('user/home');
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
