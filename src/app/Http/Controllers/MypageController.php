<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mypage;

class MypageController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $reservations = $user->reservations()->with('shop')->get();

        $favorites = $user->favorites()->with('shop')->get();

        return view('mypage.index', compact('user', 'reservations', 'favorites'));
    }

    public function toggle(Shop $shop)
    {
        $user = Auth::user();

        if ($user->favorites()->where('shop_id', $shop->id)->exists()) {
            $user->favorites()->detach($shop->id);
        } else {
            $user->favorites()->attach($shop->id);
        }

        return back();
    }

}

