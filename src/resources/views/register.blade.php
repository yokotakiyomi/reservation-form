@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="register-form">
    <div class="register-form__content">
        <div class="register-form__heading">
            <h4>Registration</h4>
        </div>
        <form class="register-form__text" action="{{ route('register') }}" method="post">
            @csrf
            <div class="form__group">
                <label for="name">
                    <img src="/img/user.png" alt="User" width="20" height="20">
                    <input type="text" name="name" placeholder="User" value="{{ old('name') }}">
                </label>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
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
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection