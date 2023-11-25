<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(request $request){
        $keyword = $request->keyword;
		$product = product::where('name', 'LIKE', '%'.$keyword.'%')
                            ->orWhereHas('user', function($query) use($keyword){
                                $query->where('name', 'LIKE', '%'.$keyword.'%');
                                })
							->paginate(6);
        return view('user/shop', ['barang' => $product]);
    }
}
