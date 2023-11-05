@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="css/login.css">
<div class="login_container">
    <h2>ログイン</h2>
    <form action="/login" method="post">
        @csrf
        <div class="login_form__group-content">
            <div class="login_form__input-text">
                <input type="text" name="email" value="{{ old('email')}}" placeholder="メールアドレス" />
            </div>
            <div class="login_form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="login_form__group-content">
            <div class="login_form__input-text">
                <input type="password" name="password" placeholder="パスワード" />
            </div>
            <div class="login_form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="login_from__button">
            <button type="submit">ログイン</button>
        </div>
        <div class="register_info">
            <p class="register">アカウントをお持ちでない方はこちらから</p>
            <a class="register_button" href="/register" style="text-decoration:none;">会員登録</a>
        </div>
    </form>
</div>
@endsection