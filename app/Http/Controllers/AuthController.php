<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        $user = User::get();
        return view('admin/home');
    }
    public function login(){
        return view('/login');
    }
    public function Authenticate(request $request){
        $request->validate([
            'email'=>['required'],
            'password'=>['required'],
        ]);
        $infoLogin=
        [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::guard('web')->attempt($infoLogin)) {
            return redirect('/home');
        }else {
            return redirect('/login');
        }
    }
    public function logout(request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/logout');
    }
    public function user(){
        return view('admin/user/user');
    }
}
