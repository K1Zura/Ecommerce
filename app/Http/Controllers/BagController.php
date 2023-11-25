<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagController extends Controller
{
    public function index()
    {
        $bag = auth('user')->user()->bag;
        return view('user/bag', ['bag' => $bag->bag]);
    }

    public function add(Product $product)
    {
        $user = auth('user')->user();

        if ($user->bag()->where('product_id', $product->id)->exists()) {
            return redirect()->back()->with('info', 'Product already in the bag.');
        }

        $user->bag()->create([
            'product_id' => $product->id,
            'quantity' => 1,
        ]);

        return redirect()->route('bag.index')->with('success', 'Product added to the bag successfully.');
    }
}
