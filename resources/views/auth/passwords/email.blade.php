@extends('layouts.user')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
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
        <section class="section-form" data-v-0569d440="">
            <form class="form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form__head">
                    <h3 class="form__title">
                        Восстановление пароля
                        <img src="{{ asset('img\4.fb6fb7d.png') }}" alt="lock">
                    </h3>
                </div>
                {{-- <div class="form__fields"> --}}
                <div class="form__fields" data-v-1acd173a="">
                    <div class="form__fields-item" data-v-1acd173a="">
                        <input type="email" placeholder="E-mail" name="email" id="validateEmail" autocomplete="off" value="{{ old('email') }}" data-v-1acd173a="">
                    </div>
                    <button disabled="" type="submit" class="btn variant-pink disabled" data-v-1ede2ded="" data-v-1acd173a="" id="submitButton">
                        <div class="btn-content" data-v-1ede2ded="">Отправить</div>
                    </button>
                </div>
                <div class="form__footer"><a href="{{ route('login') }}">← Назад к авторизации</a></div>
            </form>
        </section>
    </main>
</div>
@endsection
