<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function addToWishlist($productId){
        $user = Auth::guard('user')->user();
        $product = product::find($productId);

        if (!$user) {
            return redirect()->route('login-user');
        }
        if ($user->wishlist->contains($product)) {
            return redirect()->back()->with('error', 'Product is already in the wishlist.');
        }
        $user->wishlist()->attach($product);
        return redirect()->back()->with('success', 'Product add to wishlist.');;
    }
    public function viewWishlist()
    {
        $user = Auth::guard('user')->user();

        return view('user/wishlist', ['wishlist' => $user->wishlist]);
    }
    public function removeFromWishlist($productId)
    {
        $user = Auth::guard('user')->user();
        if (!$user) {
            return redirect()->route('login-user');
        }
        $user->wishlist()->detach($productId);

        return redirect()->back()->with('hapus', 'Product removed from wishlist.');
    }
}
