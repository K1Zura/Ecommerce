<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function profil(){
        $user = User::get();
        return view('user/profil', ['user' => $user]);
    }

}
