<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('shop');
    }

    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shops.show', compact('shop'));
    }
}

