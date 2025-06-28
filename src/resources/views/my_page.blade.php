@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')
<div class="mypage">
    <div class="mypage__heading">
        <h2>{{ Auth::user()->name }}さん</h2>
    </div>

    <div class="mypage__body">
        <div class="reservation-status">
            <h4>予約状況</h4>
            <div class="reservation-details">
                <img src="/img/clock.png" alt="Clock" width="20">
                <p>Shop: {{ $reservations[0]->shop->shop_name ?? '予約なし' }}</p>
                <p>Date: {{ $reservations[0]->date ?? '-' }}</p>
                <p>Time: {{ $reservations[0]->time ?? '-' }}</p>
                <p>Number: {{ $reservations[0]->number ?? '-' }}人</p>
            </div>
        </div>

        <div class="favorite-shop">
            <h4>お気に入り店舗</h4>
            <div class="favorite-shop__list">
                @foreach($favoriteShops as $shop)
                <div class="shop-card">
                    <img src="{{ $shop->image_url }}" alt="{{ $shop->shop_name }}" width="200">
                    <h5>{{ $shop->shop_name }}</h5>
                    <p>#{{ $shop->area->area_name }} #{{ $shop->genre->genre_name }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('shops.detail', ['id' => $shop->id]) }}" class="btn btn-primary btn-sm">詳しくみる</a>
                        <form action="{{ route('favorites.toggle', ['shop' => $shop->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="favorite-button">♥</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endsection