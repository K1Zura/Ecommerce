<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BagController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $user = Auth::guard('user')->user();
        return view('user/bag', ['bag' => $user->bag]);
    }

    public function add($productId)
    {
        $user = Auth::guard('user')->user();
        $user->load('bag');
        $product = Product::find($productId);
        if (!$user) {
            return redirect()->route('login-user');
        }
        if ($user->bags && $user->bags->contains($product)) {
            return redirect()->back()->with('error', 'Product is already in the bag.');
        }
        $user->bag()->attach($product);
        return redirect()->back()->with('success', 'Product added to bag.');
    }

}

