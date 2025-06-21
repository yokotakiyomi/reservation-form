<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with(['area', 'genre'])->get();

        if (Auth::check()) {
            $favoriteShopIds = Auth::user()->favorites->pluck('shop_id')->toArray();
            foreach ($shops as $shop) {
                $shop->is_favorite = in_array($shop->id, $favoriteShopIds);
            }
        } else {
            foreach ($shops as $shop) {
                $shop->is_favorite = false;
            }
        }

        return view('shop_all', compact('shops'));
    }

    public function show($id)
    {
        $shop = Shop::with(['area', 'genre'])->findOrFail($id);
        return view('detail_shop', compact('shop'));
    }
}
