@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="mypage">
    <div class="mypage__heading">
        <h2>{{ Auth::user()->name }}さん</h2>
    </div>
    <div class="reservation-status">
        <h4>予約状況</h4>
        <div class="reservation-details>
            <img src="/img/clock.png" alt="Clock" width="20"></div>
            <

    </div>
    <div class="favorite-shop">
        <h4>お気に入り店鋪</h4>
        <div class="favorite-shop__list"></div>
        <script>

        </script>
    </div>