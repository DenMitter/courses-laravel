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
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">

<body>
    <div data-server-rendered="true" id="__nuxt">
        <div id="__layout">
            <div class="is-form is-form-login" data-v-0569d440="">
                <header class="header" data-v-8481857c="" data-v-0569d440="">
                    <div class="wrapper" data-v-8481857c="">
                        <a href="{{ route('main.index') }}" class="header__logo nuxt-link-active" data-v-d4d79ed4="" data-v-8481857c="">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo" data-v-d4d79ed4="">
                        </a>
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
                                <a href="tel:0800336567" class="phone" data-v-f000587e="">
                                    <img src="{{ asset('img/ukraine.png') }}" alt="" class="flag" data-v-f000587e="">0 (800) 33-65-67
                                </a>
                                <a href="mailto:reg@wayup.in" target="_blank" data-v-f000587e="">reg@wayup.in</a>
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
