@extends('layouts.user')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="wrapper" data-v-0569d440="">
    <main class="main" data-v-0569d440="">
      <section class="section-form" data-v-4c4b7857="" data-v-0569d440="">
        <form class="form" data-v-4c4b7857="" action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form__head" data-v-4c4b7857="">
            <h3 class="form__title" data-v-4c4b7857="">С возвращением <img src="img\icons\form\title-icons\2.png" alt="waving" data-v-4c4b7857=""></h3>
          </div>
          <div class="form__fields" data-v-4c4b7857="">
            <div class="form__fields-item" data-v-4c4b7857="">
                <input type="email" name="email" placeholder="E-mail" autocomplete="off" value="{{ old('email') }}" data-v-4c4b7857="" id="validateEmail">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form__fields-item" data-v-4c4b7857="">
                <input type="password" name="password" placeholder="Пароль" autocomplete="off" value="" data-v-4c4b7857="">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <a href="{{ route('password.request') }}" data-v-4c4b7857="">Забыли пароль?</a>
            </div>
            <button disabled="" type="submit" class="btn variant-pink disabled" data-v-1ede2ded="" data-v-4c4b7857="" id="submitButton">
                <div class="btn-content" data-v-1ede2ded="">Войти</div>
            </button>
          </div>
          <div class="form__footer" data-v-4c4b7857="">Нет аккаунта? <a href="{{ route('register') }}" data-v-4c4b7857="">Зарегистрироваться</a></div>
        </form>
      </section>
    </main>
</div>
@endsection
