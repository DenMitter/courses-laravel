<!doctype html>
<html data-n-head-ssr="" lang="ru" data-n-head="%7B%22lang%22:%7B%22ssr%22:%22ru%22%7D%7D">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
    <meta data-n-head="ssr" name="format-detection" content="telephone=no">
    <meta data-n-head="ssr" data-hid="description" name="description"
        content="Освітня платформа твого майбутнього. Технологічне навчання. Від людей до людей.">
    <meta data-n-head="ssr" data-hid="og:site_name" property="og:site_name" content="FAVORITE ENGLISH">
    <meta data-n-head="ssr" data-hid="og:title" property="og:title" content="Про платформу FAVORITE ENGLISH">
    <meta data-n-head="ssr" data-hid="og:description" property="og:description"
        content="Освітня платформа твого майбутнього. Технологічне навчання. Від людей до людей.">
    <meta data-n-head="ssr" data-hid="og:image" property="og:image"
        content="https://FAVORITE ENGLISH.in/img/og/FAVORITE ENGLISH.jpg">
    <meta data-n-head="ssr" data-hid="og:type" property="og:type" content="website">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/course.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
</head>

<body>
    <div data-v-5dff1a2e="" data-v-20e9b6b4="" class="tooltip-small" style="width: auto; font-size: 12px; --bottom: 5px; --offset: 0px; top: 74px; left: 1600.48px;">Выйти</div>

    <div data-server-rendered="true" id="__nuxt">
        <div id="__layout">
            <div class="layout-wrapper" data-v-07410990="">
                <header class="header" data-v-f758cc66="" data-v-07410990="">
                    <nav id="nav" class="nav" data-v-f758cc66="">
                        <div class="container-fluid" data-v-f758cc66="">
                            <div class="nav__box d-flex" data-v-f758cc66="">
                                <a href="{{ route('main.index') }}" aria-current="page"
                                    class="nuxt-link-exact-active nuxt-link-active nav__logo" data-v-f758cc66="">
                                    <img src="{{ asset('img/logo.png') }}" alt="" data-v-f758cc66="">
                                </a>
                                <ul class="nav-menu" data-v-da47e56e="" data-v-f758cc66="">
                                    <li data-v-da47e56e="">
                                        <a href="{{ route('main.index') }}" aria-current="page" class="nuxt-link-exact-active nuxt-link-active" data-v-da47e56e="">Головна</a>
                                    </li>
                                    {{-- <li data-v-da47e56e="">
                                        <a href="{{ route('main.webinars') }}" active-class="nuxt-link-exact-active" data-v-da47e56e="">Події</a>
                                    </li> --}}
                                    <li data-v-da47e56e="">
                                        <a href="{{ route('main.blog') }}" active-class="nuxt-link-exact-active" data-v-da47e56e="">Журнал</a>
                                    </li>
                                    <li data-v-da47e56e="">
                                        <a href="{{ route('main.about') }}" active-class="nuxt-link-exact-active" data-v-da47e56e="">Про платформу</a>
                                    </li>
                                    <li data-v-da47e56e="">
                                        <a href="{{ route('main.contacts') }}" active-class="nuxt-link-exact-active" data-v-da47e56e="">Контакти</a>
                                    </li>
                                </ul>
                                <div class="right-side" data-v-f758cc66="">
                                    <div class="nav__info d-flex" data-v-f758cc66="">
                                        @auth
                                            <div class="header__user-menu_wrapper" data-v-20e9b6b4="" data-v-f758cc66="">
                                                <a href="{{ route('user.main.index') }}" class="nav__name" data-v-20e9b6b4="">{{ auth()->user()->name }}</a>
                                                <div class="header__user-menu" data-v-20e9b6b4="">
                                                    <div class="menu-wrapper" data-v-20e9b6b4="">
                                                        <ul class="slide-menu" data-v-20e9b6b4="">
                                                            <li class="button" data-v-20e9b6b4="" data-tooltip="Вийти" style="position: relative; cursor: pointer;">
                                                                <form action="{{ route('logout') }}" method="post" class="d-flex" style="align-items: center;">
                                                                    @csrf
                                                                    <button type="submit" data-v-0c1d1295="" data-v-f758cc66="">
                                                                        <img src="{{ asset('/img/header/exit.svg') }}" alt="" data-v-20e9b6b4="">
                                                                    </button>
                                                                </form>
                                                            </li>
                                                            <li class="sepearator" data-v-20e9b6b4=""></li>
                                                            <a href="https://my.wayup.in/profile/settings" class="button" data-v-20e9b6b4="" data-tooltip="Редагувати профіль" style="position: relative; cursor: pointer;">
                                                                <img src="{{ asset('/img/header/edit.svg') }}" alt="" data-v-20e9b6b4="">
                                                            </a>
                                                            <a href="https://my.wayup.in/partner" class="button" data-v-20e9b6b4="" data-tooltip="Партнерська програма" style="position: relative; cursor: pointer;">
                                                                <svg viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" data-v-20e9b6b4="" class=""><path d="M10.263.5a.61.61 0 00-.487.239l-.11.085a6.269 6.269 0 00-6.32 1.514 6.058 6.058 0 00-1.55 2.543c-.3.968-.357 1.999-.166 2.996-.021.02-.042.039-.062.06L.595 8.9a1.968 1.968 0 00-.44.65 2.016 2.016 0 00.44 2.203 2.04 2.04 0 001.827.555 2.038 2.038 0 001.936 1.604c.013.498.212.991.595 1.372.383.38.883.578 1.384.59.013.498.213.993.596 1.373.367.359.847.568 1.353.59a2.053 2.053 0 001.395-.471l.546.54a2.057 2.057 0 002.893 0c.382-.379.58-.87.598-1.366a2.03 2.03 0 001.969-1.956 2.037 2.037 0 001.92-1.649c.32.058.65.038.963-.06.312-.097.598-.268.834-.5.188-.184.338-.405.44-.65a2.018 2.018 0 000-1.554 1.969 1.969 0 00-.44-.65l-.899-.89.184-.708a5.921 5.921 0 00-.525-4.287 5.97 5.97 0 00-5.257-3.13H11.37A3.956 3.956 0 0011.173.5h-.91zm3.062 4.776l3.002 2.978.004.002 2.173 2.157a.74.74 0 01.223.535.757.757 0 01-.763.757c-.2 0-.394-.08-.54-.222l-1.649-1.635a.64.64 0 00-.898 0l-.018.016a.615.615 0 00-.186.446.63.63 0 00.186.446l1.286 1.275c.3.295.3.776 0 1.073a.77.77 0 01-.999.07.64.64 0 00-.835.06.625.625 0 00-.051.829.752.752 0 01-.067.996.77.77 0 01-1.011.062.64.64 0 00-.842.048.625.625 0 00-.054.833.763.763 0 01-.066 1.013.783.783 0 01-.547.224c-.204 0-.4-.08-.547-.224l-.54-.536.196-.196a1.97 1.97 0 00.441-.65 2.018 2.018 0 000-1.554A2.037 2.037 0 009.4 12.837a2.004 2.004 0 00-.595-1.372 2.037 2.037 0 00-1.384-.59 2.003 2.003 0 00-.596-1.372 2.071 2.071 0 00-.848-.504 2.027 2.027 0 00-.978-.05 2.004 2.004 0 00-.553-1.013 2.068 2.068 0 00-.745-.47c-.278-.101-.574-.14-.868-.113a4.938 4.938 0 01.224-2.237A4.82 4.82 0 014.243 3.23 5.043 5.043 0 016.14 2.052a4.931 4.931 0 012.205-.23L6.53 3.195a2.167 2.167 0 00-.576.649A2.231 2.231 0 005.73 5.55a2.244 2.244 0 001.85 1.637 2.21 2.21 0 001.63-.423l1.967-1.487h2.147l.001-.001zM7.269 4.23l3.235-2.446h.669c.061 0 .122.002.184.005h1.55a4.73 4.73 0 014.166 2.47 4.604 4.604 0 01.409 3.334l-.004.013-3.445-3.428a.615.615 0 00-.44-.188H10.97a.612.612 0 00-.368.124L8.47 5.727a.988.988 0 01-1.537-.517.93.93 0 01.093-.71.894.894 0 01.242-.27zm.551 11.065l.013-.012.97-.964.012-.01a.773.773 0 011.069.01.737.737 0 01.223.536.757.757 0 01-.223.536l-.973.963a.773.773 0 01-.54.222.773.773 0 01-.703-.462.756.756 0 01.151-.819h.001zm.096-1.879l-.012.012-.971.964-.013.011a.772.772 0 01-1.067-.012.738.738 0 01-.223-.53.756.756 0 01.214-.532l.009-.009.971-.964.009-.009a.773.773 0 01.537-.213.773.773 0 01.698.462.756.756 0 01-.152.82zm-1.99-1.952l-.973.964-.009.01a.772.772 0 01-1.07-.01.738.738 0 01-.224-.535.757.757 0 01.223-.536l.971-.963a.773.773 0 01.54-.222.773.773 0 01.706.463.756.756 0 01-.156.822l-.009.007zM3.545 9.9l-.97.964a.772.772 0 01-.541.222.772.772 0 01-.707-.467.757.757 0 01.166-.827l.973-.964a.773.773 0 011.08 0 .738.738 0 01.223.536.757.757 0 01-.224.536z" fill="currentColor" data-v-20e9b6b4=""></path></svg>
                                                            </a>

                                                            @can('view', auth()->user())
                                                                <a href="{{ route('admin.main.index') }}" class="button" data-v-20e9b6b4="" data-tooltip="Адмін панель" style="position: relative; cursor: pointer;">
                                                                    <img src="{{ asset('/img/header/settings.svg') }}" alt="" data-v-20e9b6b4="">
                                                                </a>
                                                            @endcan
                                                            {{-- @if (auth()->user()->role == 1 || auth()->user()->role == 2)
                                                                <a href="{{ route('admin.main.index') }}" class="button" data-v-20e9b6b4="" data-tooltip="Адмін панель" style="position: relative; cursor: pointer;">
                                                                    <img src="{{ asset('/img/header/settings.svg') }}" alt="" data-v-20e9b6b4="">
                                                                </a>
                                                            @endif --}}
                                                            <li class="button fake" data-v-20e9b6b4=""></li>
                                                        </ul>
                                                    </div>
                                                    <div class="avatar-wrapper" data-v-20e9b6b4="">
                                                        <a href="{{ route('user.main.index') }}" class="button avatar" data-v-20e9b6b4="">
                                                            <img src="{{ asset('/img/default-photo.png') }}" alt="" data-v-20e9b6b4="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="d-flex" data-v-f758cc66="" style="gap: 5px">
                                                <button type="button" class="btn variant-blue text-small"
                                                    data-v-0c1d1295="" data-v-f758cc66="">
                                                    <div class="btn-content" data-v-0c1d1295="">
                                                        {{ auth()->user()->name }}</div>
                                                </button>
                                                @if (auth()->user()->role == 1)
                                                    <a href="{{ route('admin.main.index') }}" type="button"
                                                        class="btn variant-blue text-small" data-v-0c1d1295=""
                                                        data-v-f758cc66="">
                                                        <div class="btn-content" data-v-0c1d1295="">Адмін панель</div>
                                                    </a>
                                                @endif
                                                <form action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn variant-blue-outline text-small"
                                                        data-v-0c1d1295="" data-v-f758cc66="">
                                                        <div class="btn-content" data-v-0c1d1295="">
                                                            <img src="{{ asset('img/logout.svg') }}" alt="">
                                                        </div>
                                                    </button>
                                                </form>
                                            </div> --}}
                                        @endauth
                                        @guest
                                            <div class="d-flex" data-v-f758cc66="" style="gap: 5px">
                                                <button type="button" class="btn variant-blue text-small modal-btn"
                                                    data-v-0c1d1295="" data-v-f758cc66="" data-modal-btn="auth">
                                                    <div class="btn-content" data-v-0c1d1295="">Мій аккаунт</div>
                                                </button>
                                                <button type="button"
                                                    class="btn variant-blue-outline text-small modal-btn"
                                                    data-v-0c1d1295="" data-v-f758cc66="" data-modal-btn="register">
                                                    <div class="btn-content" data-v-0c1d1295="">Реєстрація</div>
                                                </button>
                                            </div>
                                        @endguest
                                        <div class="menu" data-v-f758cc66="">
                                            <a class="button" data-v-f758cc66=""><span data-v-f758cc66=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                @yield('content')
                <footer id="footer" class="footer" data-v-a5475f70="" data-v-07410990="">
                    <div class="container" data-v-a5475f70="">
                        <div class="footer__box d-flex" data-v-a5475f70="">
                            <div class="footer__col" data-v-a5475f70="">
                                <a href="{{ route('main.index') }}" class="nuxt-link-active footer__logo" data-v-a5475f70=""><img src="{{ asset('img/footer-logo.png') }}" alt="" data-v-a5475f70=""></a>
                                <div class="footer__socials d-flex" data-v-a5475f70="">
                                        <a href="https://www.instagram.com/FAVORITE ENGLISH.in.official" target="_blank" class="footer__link"><img src="{{ asset('img/icon-insta.svg') }}" alt=""></a>
                                        <a href="https://www.youtube.com/c/FAVORITE ENGLISHin" target="_blank" class="footer__link"><img src="{{ asset('img/icon-youtube.svg') }}" alt=""></a>
                                        <a href="tg://resolve?domain=freelanceFAVORITE ENGLISH" target="_blank" class="footer__link"><img src="{{ asset('img/icon-tg.svg') }}" alt=""></a>
                                        <a href="https://www.facebook.com/FAVORITE ENGLISH.in" target="_blank" class="footer__link"><img src="{{ asset('img/icon-fb.svg') }}" alt=""></a>
                                    </div>
                                <div class="footer__copyright" data-v-a5475f70="">2024 - 2024 © {{ config('app.name', 'Laravel') }}</div>
                                <a href="offerta.html" class="footer__oferta" data-v-a5475f70="">Договір оферти</a>
                            </div>
                            <div class="footer__col" data-v-a5475f70="">
                                <div class="footer__title">Основне</div>
                                <ul class="footer__menu">
                                    <li><a href="{{ route('main.index') }}" class="nuxt-link-active">Головна</a></li>
                                    {{-- <li><a href="{{ route('main.webinars') }}">Події</a></li> --}}
                                    <li><a href="{{ route('main.blog') }}">Журнал</a></li>
                                    <li><a href="{{ route('main.about') }}" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">Про платформу</a></li>
                                    <li><a href="{{ route('main.contacts') }}">Контакти</a></li>
                                </ul>
                            </div>
                            <div class="footer__col footer__subscribe" data-v-7b679a4e="" data-v-a5475f70="">
                                <div class="footer__title" data-v-7b679a4e="">Підписка на новини</div>
                                <div class="footer__ask" data-v-7b679a4e="">Дозволь нам надсилати тобі повідомлення про безкоштовні події</div>
                                <form action="{{ route('main.index.subscribe') }}" class="footer__form" data-v-7b679a4e="" method="POST">
                                    @method('POST')
                                    @csrf
                                    <div class="form-group" data-v-7b679a4e="" data-v-7b679a4e="">
                                        <input name="email" type="email" placeholder="E-mail" autocomplete="off" value="" class="form__field" data-v-7b679a4e="">
                                        <button type="submit"  class="footer__btn footer__btn_step" data-v-7b679a4e="">
                                            <img src="{{ asset('img/subscribe-arrow-right.svg') }}" alt="" data-v-7b679a4e="">
                                        </button>
                                    </div>
                                    <div class="form__policy" data-v-7b679a4e="" data-v-7b679a4e="">
                                        Натискаючи на цю кнопку, 
                                        я даю згоду на обробку своїх <a href="/offerta#user" target="_blank" data-v-7b679a4e="">персональних даних</a> 
                                        і погоджуюсь з <a href="/offerta" target="_blank" data-v-7b679a4e="">договором оферти</a>
                                    </div>
                                </form>
                            </div>
                            <div class="footer__col" data-v-a5475f70="">
                                <div class="tooltip-content" data-v-f000587e="">
                                    <a href="tel:{{ env('RETURN_PHONE') }}" class="phone" data-v-f000587e="">
                                        <img src="{{ asset('img/ukraine.png') }}" alt="" class="flag" data-v-f000587e="">{{ env('RETURN_PHONE') }}
                                    </a>
                                    <a href="mailto:{{ env('RETURN_EMAIL') }}" target="_blank" data-v-f000587e="">{{ env('RETURN_EMAIL') }}</a>
                                </div>
                                <div data-v-a5475f70="">
                                    <div class="footer__title">Студентам</div>
                                    <ul class="footer__menu">
                                        <li><a href="{{ route('user.main.index') }}">Навчання</a></li>
                                        <li><a href="rassrochka.html">Безвідсоткова розстрочка</a></li>
                                        <li><a href="{{ route('user.main.index') }}">Партнерська програма</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>  
                <div data-v-11104d6a="" data-v-07410990=""></div>
                <div id="modals-root" data-v-07410990=""></div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modals">
        <div class="modal-overlay">
            <div class="modal" data-modal="auth">
                <div class="modal-header">
                    <h3 class="modal-title">Увійти</h3>
                </div>
                <div class="content-wrapper">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="email" name="email" class="modal-input" placeholder="E-mail" style="margin-bottom: 20px" id="validateEmail" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="password" name="password" class="modal-input" placeholder="Пароль" style="margin-bottom: 20px">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button data-v-0c1d1295="" data-v-8c9ccc04="" class="btn variant-blue disabled popup-btn modal__submit-button" disabled="" type="submit">
                                <div data-v-0c1d1295="" class="btn-content">
                                  <svg data-v-8c9ccc04="" data-v-0c1d1295="" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg" width="25" class=""><path data-v-8c9ccc04="" data-v-0c1d1295="" d="M4 12.5h16M13 5.5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </div>
                            </button>
                            <a href="#">
                                <div data-v-8c9ccc04="" class="reset-password-btn modal-btn" data-modal-btn="resetPassword">Не пам'ятаю пароль</div>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal" data-modal="register">
                <div class="modal-header">
                    <h3 class="modal-title">Зареєструватися</h3>
                </div>
                <div class="content-wrapper">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="text" name="name" class="modal-input" placeholder="Ім'я" style="margin-bottom: 20px" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="email" name="email" class="modal-input" placeholder="E-mail" style="margin-bottom: 20px" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="password" name="password" class="modal-input" placeholder="Пароль" style="margin-bottom: 20px" value="{{ old('password') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="password" name="password_confirmation" class="modal-input" placeholder="Підтвердження паролю" style="margin-bottom: 20px" value="{{ old('password_confirmation') }}">
                            <button data-v-0c1d1295="" data-v-8c9ccc04="" class="btn variant-blue popup-btn modal__submit-button" type="submit">
                                <div data-v-0c1d1295="" class="btn-content">
                                  <svg data-v-8c9ccc04="" data-v-0c1d1295="" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg" width="25" class=""><path data-v-8c9ccc04="" data-v-0c1d1295="" d="M4 12.5h16M13 5.5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal" data-modal="resetPassword">
                <div class="modal-header">
                    <h3 class="modal-title">Відновлення паролю</h3>
                </div>
                <div class="content-wrapper">
                    <div class="content">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <input type="email" name="email" class="modal-input" placeholder="E-mail" style="margin-bottom: 20px" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button data-v-0c1d1295="" data-v-8c9ccc04="" class="btn variant-blue popup-btn modal__submit-button" type="submit">
                                <div data-v-0c1d1295="" class="btn-content">
                                  <svg data-v-8c9ccc04="" data-v-0c1d1295="" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg" width="25" class=""><path data-v-8c9ccc04="" data-v-0c1d1295="" d="M4 12.5h16M13 5.5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/inputmask.extensions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/inputmask.bindings.min.js"></script>
</body>

</html>
