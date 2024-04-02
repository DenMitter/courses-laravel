@extends('layouts.personal')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    {{ __('Register') }}
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
    <section class="section-form" data-v-1acd173a="" data-v-0569d440="">
        <h2 class="section-form__title" data-v-1acd173a=""><span data-v-1acd173a="">476 081</span> уже зарегистрировались</h2>
        <form class="form" data-v-1acd173a="" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form__head" data-v-1acd173a="">
                <h3 class="form__title" data-v-1acd173a="">Почнем? <img src="{{ asset('img\4.fb6fb7d.png') }}" alt="clapping" data-v-1acd173a=""></h3>
            </div>
            <div class="form__fields" data-v-1acd173a="">
                <div class="form__fields-item" data-v-1acd173a="">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                    <input type="text" placeholder="Имя" autocomplete="off" value="" data-v-1acd173a="" name="name">
                </div>
                <div class="form__fields-item" data-v-1acd173a="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="email" placeholder="E-mail" autocomplete="off" value="" data-v-1acd173a="" name="email">
                </div>
                <div class="form__fields-item" data-v-1acd173a="">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="tel" autocomplete="tel" maxlength="25" placeholder="Телефон" data-v-16012ebc="" name="phone">
                </div>
                <div class="form__fields-item form__fields-item_password" data-v-1acd173a="">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="password" placeholder="Пароль" autocomplete="off" value="" data-v-1acd173a="" name="password">
                    <button type="button" tabindex="-1" class="show-password" data-v-1acd173a="">Показать</button>
                </div>
                <div class="form__fields-item form__fields-item_password" data-v-1acd173a="">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="password" placeholder="Подтвердить пароль" autocomplete="off" value="" data-v-1acd173a="" name="password_confirmation">
                    <button type="button" tabindex="-1" class="show-password" data-v-1acd173a="">Показать</button>
                </div>
                <label for="confirmation" class="checkbox" data-v-1acd173a="">
                    <input type="checkbox" data-v-1acd173a="" id="checkbox">
                    <span class="checkbox_check" data-v-1acd173a=""></span>
                    <p data-v-1acd173a="">Я соглашаюсь с 
                        <a href="https://wayup.in/offerta#personal" target="_blank" data-v-1acd173a="">политикой обработки данных</a> и 
                        <a href="https://wayup.in/offerta" target="_blank" data-v-1acd173a="">договором оферты</a>
                    </p>
                </label>
                <button type="submit" class="btn variant-pink" data-v-1ede2ded="" data-v-1acd173a="" id="submitButton">
                    <div class="btn-content" data-v-1ede2ded="">Создать аккаунт</div>
                </button>
            </div>
            <div class="form__footer" data-v-1acd173a="">Уже есть аккаунт? <a href="{{ route('login') }}" data-v-1acd173a="">Войти</a></div>
        </form>
    </section>
    </main>
</div>
@endsection
