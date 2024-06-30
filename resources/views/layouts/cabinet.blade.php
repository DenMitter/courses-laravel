<!doctype html>
<html data-n-head-ssr="" lang="ru" data-n-head="%7B%22lang%22:%7B%22ssr%22:%22ru%22%7D%7D">

<head>
    <title>Особистий кабінет | {{ config('app.name', 'Laravel') }}</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
    <meta data-n-head="ssr" data-hid="description" name="description" content="">
    <meta data-n-head="ssr" property="og:title" content="">
    <meta data-n-head="ssr" property="og:description" content="">
    <meta data-n-head="ssr" property="og:type" content="article">
    <meta data-n-head="ssr" property="og:image" content="#">
    <meta data-n-head="ssr" name="theme-color" content="#fff">
    <meta data-n-head="ssr" name="msapplication-navbutton-color" content="#fff">
    <meta data-n-head="ssr" name="apple-mobile-web-app-status-bar-style" content="#fff">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="favicon.png">
    <link data-n-head="ssr" rel="shortcut icon" href="favicon.png">
    <link data-n-head="ssr" href="https://mc.yandex.ru/metrika/tag.js" rel="preload" as="script">
    <script data-n-head="ssr" src="img\svg-sprite\svg-sprite.js"></script>
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
<body>
    <div data-v-5dff1a2e="" data-v-20e9b6b4="" class="tooltip-small" style="width: auto; font-size: 12px; --bottom: 5px; --offset: 0px; top: 74px; left: 1600.48px;">Выйти</div>

    <div data-server-rendered="true" id="__nuxt">
        <div id="__layout">
            <div class="full-layout" data-v-0569d440="">
                <header id="header" class="header" data-v-0c73b5eb="">
                    <div class="wrapper" data-v-0c73b5eb="">
                        <nav class="header-wrapper" data-v-0c73b5eb="">
                            <div class="header__item" data-v-0c73b5eb="">
                                <a href="/" aria-current="page" class="header__logo nuxt-link-exact-active nuxt-link-active" data-v-d4d79ed4="" data-v-0c73b5eb="">
                                    <img src="{{ asset('img/logo.png') }}" alt="Logo" data-v-d4d79ed4="">
                                </a>
                            </div> 
                            <div class="header__item" data-v-a6e8bbba="" data-v-0c73b5eb="">
                                <div class="header__user-menu_wrapper" data-v-1c23ee03="" data-v-a6e8bbba="">
                                    <a href="/" aria-current="page" class="header__text nuxt-link-exact-active nuxt-link-active" data-v-1c23ee03="">{{ auth()->user()->name }}</a> 
                                    <div class="header__user-menu" data-v-1c23ee03="">
                                        <div class="avatar-wrapper" data-v-1c23ee03="">
                                            <a href="/" aria-current="page" class="button avatar nuxt-link-exact-active nuxt-link-active" data-v-1c23ee03="">
                                                <img src="{{ asset('img/default-photo.png') }}" alt="" data-v-1c23ee03="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
                @yield('content')

                <footer class="footer" data-v-f000587e="" data-v-0569d440="">
                    <div class="footer-item years" data-v-f000587e="">2024 - 2024 © {{ config('app.name', 'Laravel') }}</div>
                    <a href="https://wayup.in/offerta" class="footer-item" data-v-f000587e="">Договор оферты</a>
                    <div class="footer-item help" style="z-index:2;" data-v-f000587e="">
                        <img src="{{ asset('img/icons/footer/help.svg') }}" alt="" data-v-f000587e="">
                        <div class="footer-item__label" data-v-f000587e="">Нужна помощь</div>
                        <div class="footer-item__tooltip" data-v-f000587e="">
                            <div class="tooltip-content" data-v-f000587e="">
                                <a href="tel:{{ env('RETURN_PHONE') }}" class="phone" data-v-f000587e="">
                                    <img src="{{ asset('img/ukraine.png') }}" alt="" class="flag" data-v-f000587e="">{{ env('RETURN_PHONE') }}
                                </a>
                                <a href="mailto:{{ env('RETURN_EMAIL') }}" target="_blank" data-v-f000587e="">{{ env('RETURN_EMAIL') }}</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <div data-v-1fd4ee6a="" data-v-0569d440=""></div>
            </div>
        </div>
    </div>
    <script data-n-head="ssr" src="js\svg-connect.js" data-body="true"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
