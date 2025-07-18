@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')
<div class="mypage">

    <div class="mypage__heading">
        <h2>{{ Auth::user()->name }}さん</h2>
    </div>

    <div class="mypage__body-row">
        <div class="reservation-status">
            <h4>予約状況</h4>
            @forelse($reservations as $reservation)
            <div class="reservation-card">
                <div class="reservation-header">
                    <img src="/img/clock.png" alt="Clock" width="20">
                    <span class="reservation-title">予約{{ $loop->iteration }}</span>
                    <form action="{{ route('reserve.cancel', $reservation->id) }}" method="POST" class="cancel-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="cancel-btn" onclick="return confirm('この予約をキャンセルしますか？')">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </form>
                </div>
                <div class="reservation-details">
                    <p>Shop: {{ $reservation->shop->shop_name }}</p>
                    <p>Date: {{ $reservation->reservation_date }}</p>
                    <p>Time: {{ $reservation->reservation_time }}</p>
                    <p>Number: {{ $reservation->reservation_number }}人</p>
                </div>
            </div>
            @empty
            <p>予約なし</p>
            @endforelse
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
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection