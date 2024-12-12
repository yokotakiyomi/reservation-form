@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-form">
    <div class="login-form__content">
        <div class="login-form__heading">
            <h4>Login</h4>
        </div>
        <form action="/mypage" method="post">
            @csrf
            <div class="form__group">
                <label for="email">
                    <img src="/img/mail.png" alt="Mail" width="20" height="20">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                </label>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <label for="password">
                    <img src="/img/pass.png" alt="Password" width="20" height="20">
                    <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" />
                </label>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
    @endsection