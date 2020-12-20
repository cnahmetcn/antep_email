@extends('layouts.auth')
@section('title','Kayıt Ol')
@section('content')
<div class="login-form">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label>Ad</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Şifre</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Şifre Tekrarı</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        </div>
        <div class="login-checkbox">
            <label>
                <input type="checkbox" name="aggree">Kabul ediyom
            </label>
        </div>
        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Kayıt Ol</button>
    </form>
    <div class="register-link">
        <p>
            Zaten Bir Hesabın Var Mı?
            <a href="{{route('login')}}">Giriş Yap</a>
        </p>
    </div>
</div>
@endsection
