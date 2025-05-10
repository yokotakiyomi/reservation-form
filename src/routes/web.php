<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MypageController;

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/mypage', [MypageController::class, 'index'])->middleware('auth')->name('mypage');

Route::post('/favorites/{shop}', [MypageController::class, 'toggle'])->middleware('auth')->name('favorites.toggle');