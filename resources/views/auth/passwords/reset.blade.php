@extends('layouts.personal')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
      <section class="section-form" data-v-4c4b7857="" data-v-0569d440="">
        <form class="form" data-v-4c4b7857="" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form__head" data-v-4c4b7857="">
                <h3 class="form__title" data-v-4c4b7857="">Восстановление пароля <img src="{{ asset('img\4.fb6fb7d.png') }}" alt="waving" data-v-4c4b7857=""></h3>
            </div>
            <div class="form__fields" data-v-4c4b7857="">
                <div class="form__fields-item" data-v-4c4b7857="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="email" placeholder="E-mail" autocomplete="email" value="{{ $email ?? old('email') }}" data-v-4c4b7857="" name="email" id="validateEmail" autofocus>
                </div>
                <div class="form__fields-item" data-v-4c4b7857="">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="password" placeholder="Пароль" autocomplete="new-password" value="" data-v-4c4b7857="" name="password">
                </div>
                <div class="form__fields-item" data-v-4c4b7857=""><input type="password" placeholder="Пароль" autocomplete="new-password" value="" data-v-4c4b7857="" name="password_confirmation"></div>
                <button type="submit" class="btn variant-pink" data-v-1ede2ded="" data-v-4c4b7857="" id="submitButton">
                    <div class="btn-content" data-v-1ede2ded="">Сменить</div>
                </button>
            </div>
        </form>
      </section>
    </main>
</div>
@endsection
