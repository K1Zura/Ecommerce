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

    public function profil_add(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect('/');
    }
}
