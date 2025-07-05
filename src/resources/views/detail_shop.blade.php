@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail_shop.css') }}">
@endsection

@section('content')
<div class="detail_shop">
    <div class="detail_shop-container">
        <a href="{{ route('shop.index') }}"></a>
        <h2>{{ $shop->shop_name }}</h2>
        <img src="{{ $shop->image_url }}" alt="{{ $shop->shop_name }}">
        <p>#{{ $shop->area->area_name }} #{{ $shop->genre->genre_name }}</p>
        <p>{{ $shop->comment }}</p>
    </div>

    <div class="reserve-container">
        <form action="{{ route('reserve.store') }}" method="POST">
            @csrf
            <h3>予約</h3>
            <input type="hidden" name="shop_id" value="{{ $shop->id }}">

            <input type="date" name="reservation_date" required>
            <select name="reservation_time" required>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
                <option value="18:30">18:30</option>
                <option value="19:00">19:00</option>
                <option value="19:30">19:30</option>
                <option value="20:00">20:00</option>
                <option value="20:30">20:30</option>
            </select>
            <select name="reservation_number" required>
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}人</option>
                    @endfor
            </select>

            <div class="reservation-summary">
                <p>Shop: {{ $shop->shop_name }}</p>
                <p>Date: <span id="selected-date">-</span></p>
                <p>Time: <span id="selected-time">-</span></p>
                <p>Number: <span id="selected-number">-</span></p>
            </div>

            <button type="submit" class="submit-button">予約する</button>
        </form>
    </div>
</div>
@endsection