<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(Request $request)
    {
        $keyword = $request->keyword;
        $products = product::where(function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%')
                    ->where('validated', 1);
            })
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(9);

        return view('user/shop', ['barang' => $products]);
    }

}
