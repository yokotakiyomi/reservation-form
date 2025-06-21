@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')

<div class="done">
    <div class="done-content">
        <p>ご予約ありがとうございます</p>
        <a href="{{ route('mypage') }}">
            <button class="mypage" type="button">戻る</button>
        </a>
    </div>
</div>

@endsection