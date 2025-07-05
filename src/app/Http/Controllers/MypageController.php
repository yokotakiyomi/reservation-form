<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Favorite;

class MypageController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $reservations = $user->reservations()->with('shop')->get();
        $favoriteShops = $user->favorites()
            ->with('shop.area', 'shop.genre')
            ->get()
            ->pluck('shop');

        return view('my_page', compact('reservations', 'favoriteShops'));
    }

    public function toggle(Shop $shop)
    {
        $user = Auth::user();

        $favorite = Favorite::where('user_id', $user->id)
            ->where('shop_id', $shop->id)
            ->first();

        if ($favorite) {
            $favorite->delete();
        } else {
            Favorite::create([
                'user_id' => $user->id,
                'shop_id' => $shop->id,
            ]);
        }

        return back();
    }
}
