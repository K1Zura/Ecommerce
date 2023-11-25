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

        // Check if the user is authenticated
        if (!$user) {
            return redirect()->route('login-user'); // Redirect to login page if not authenticated
        }
        if ($user->wishlist->contains($product)) {
            return redirect()->back()->with('error', 'Product is already in the wishlist.');
        }
        $user->wishlist()->attach($product);

        return redirect()->back()->with('success', 'Product add from wishlist.');;
    }
    public function viewWishlist()
    {
        $user = Auth::guard('user')->user();

        return view('user/wishlist', ['wishlist' => $user->wishlist]);
    }
    public function removeFromWishlist($productId)
    {
        $user = Auth::guard('user')->user();

        // Check if the user is authenticated
        if (!$user) {
            return redirect()->route('login-user'); // Redirect to login page if not authenticated
        }
        $user->wishlist()->detach($productId);

        return redirect()->back()->with('hapus', 'Product removed from wishlist.');
    }
}
