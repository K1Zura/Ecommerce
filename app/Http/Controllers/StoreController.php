<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function toko(){
        return view('user/toko');
    }
    
}