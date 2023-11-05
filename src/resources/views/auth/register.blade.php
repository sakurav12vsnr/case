@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="css/register.css">
<div class="register_container">
    <h2>会員登録</h2>
    <form action="/register" method="post">
        @csrf
        <div class="register_form__group-content">
            <div class="register_form__input-text">
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="名前" />
            </div>
            <div class="register_form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register_form__group-content">
            <div class="register_form__input-text">
                <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="メールアドレス" />
            </div>
            <div class="register_form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register_form__group-content">
            <div class="register_form__input-text">
                <input type="password" name="password" id="password" placeholder="パスワード" />
            </div>
            <div class="register_form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="register_from__group-content">
            <div class="register_form__input-text">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="確認用パスワード" />
            </div>
        </div>
        <div class="register_form__button">
            <button type="submit">会員登録</button>
        </div>
        <div class="login_info">
            <p class="login">アカウントをお持ちの方はこちらから</p>
            <a class="login_button" href="/login" style="text-decoration:none;">ログイン</a>
        </div>
    </form>
</div>
@endsection