<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

use App\Models\Area;
use App\Models\Genre;
use App\Models\Favorite;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // 全エリア・全ジャンルを取得
        $areas  = Area::all();
        $genres = Genre::all();

        // クエリを受け取ってビルド
        $query = Shop::with(['area', 'genre']);

        if ($request->filled('area')) {
            $query->where('area_id', $request->area);
        }
        if ($request->filled('genre')) {
            $query->where('genre_id', $request->genre);
        }
        if ($request->filled('keyword')) {
            $query->where('shop_name', 'like', '%' . $request->keyword . '%');
        }

        $shops = $query->get();

        // お気に入り判定
        $favoriteIds = Auth::check()
            ? Auth::user()->favorites->pluck('shop_id')->toArray()
            : [];

        foreach ($shops as $shop) {
            $shop->is_favorite = in_array($shop->id, $favoriteIds);
        }

        return view('shop_all', compact('shops', 'areas', 'genres'));
    }


    public function show($id)
    {
        $shop = Shop::with(['area', 'genre'])->findOrFail($id);
        return view('detail_shop', compact('shop'));
    }
}
