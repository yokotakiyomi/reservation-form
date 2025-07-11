<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReserveController;

Route::get('/register', [RegisterController::class, 'create'])->name('register');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/mypage', [MypageController::class, 'index'])->middleware('auth')->name('mypage');

Route::post('/favorites/{shop}', [MypageController::class, 'toggle'])->middleware('auth')->name('favorites.toggle');

Route::get('/', [ShopController::class, 'index'])->name('shop.index');

Route::get('/detail/{id}', [ShopController::class, 'show'])->name('shops.detail');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::post('/reserve', [ReserveController::class, 'store'])->middleware('auth')->name('reserve.store');

Route::delete('/reserve/{id}', [ReserveController::class, 'destroy'])->middleware('auth')->name('reserve.cancel');
