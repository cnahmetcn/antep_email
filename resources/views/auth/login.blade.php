@extends('layouts.auth')
@section('title','Giriş Yap')
@section('content')
<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Şifre</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="login-checkbox">
            <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Beni Hatırla
            </label>
            <label>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Şifremi Unuttum
                </a>
            @endif
            </label>
        </div>
        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Giriş Yap</button>
        <div class="social-login-content">
            <div class="social-button">
                <button class="au-btn au-btn--block au-btn--blue m-b-20">Facebook ile giriş yap</button>
                <button class="au-btn au-btn--block au-btn--blue2">Twitter ile giriş yap</button>
            </div>
        </div>
    </form>
    <div class="register-link">
        <p>
            Hesabın Yok Mu?
            <a href="{{route('register')}}">Buradan Kayıt Ol</a>
        </p>
    </div>
</div>

@endsection
