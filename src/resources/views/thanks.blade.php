@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')

<div class="thanks">
    <div class="thanks-content">
        <p>会員登録ありがとうございます</p>
        <a href="{{ route('login') }}">
            <button class="login" type="button">ログインする</button>
        </a>
    </div>
</div>

@endsection