@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class="register-form__content">
    <div class="register-form__heading">
        <h4>Registratiom</h4>
    </div>
    <form class="register-form" action="contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-name">
                <img src="/img/user.png" alt="user" width="20" height="20">
                <span class="form__label--item">Username</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group-mail">
            <img src="/img/mail.png" alt="mail" width="20" height="20">
            <span class="form__label--item">Email</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
</div>
<div class="form__group">
    <div class="form__group-password">
        <img src="/img/pass.png" alt="password" width="20" height="20">
        <span class="form__label--item">Password</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--textarea">
            <input type="text" name="Password">{{ old('password') }}
        </div>
    </div>
</div>
<div class="form__button">
    <button class="form__button-submit" type="submit">登録</button>
</div>
</form>
</div>
@endsection