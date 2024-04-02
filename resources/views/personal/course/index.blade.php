@extends('layouts.cabinet')

@section('content')

    {{-- <div data-v-1fd4ee6a="" class="vue-notification-group" style="width: 324px; top: 0px; right: 0px;">
        <span>
            <div data-id="2" class="vue-notification-wrapper" style="transition: all 300ms ease 0s;">
                <div data-v-1fd4ee6a="" class="notify-body success">
                    <div data-v-1fd4ee6a="" class="close">
                        <a data-v-1fd4ee6a="" class="close-button">
                            <svg data-v-1fd4ee6a="" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path data-v-1fd4ee6a="" d="M1 1L10 10M10 1L1 10" stroke="black"></path></svg>
                        </a>
                    </div>
                    <a data-v-1fd4ee6a="" class="title">Регистрация успешна!</a>
                    <div data-v-1fd4ee6a="" class="text">
                        Твое обучение стартует <b>18 марта в 19:00 (киев)</b>. 
                        Изучи информацию на этой странице, чтобы быть во всеоружии
                    </div>
                </div>
            </div>
        </span>
    </div> --}}
    
  <style
        ::-webkit-input-placeholder {
            color: inherit;
            opacity: 1;
            -webkit-transition: all .4s ease;
            transition: all .4s ease
        }

        :-moz-placeholder,
        ::-moz-placeholder {
            color: inherit;
            opacity: 1;
            -moz-transition: all .4s ease;
            transition: all .4s ease
        }

        :-ms-input-placeholder {
            color: inherit;
            opacity: 1;
            -ms-transition: all .4s ease;
            transition: all .4s ease
        }

        :focus::-webkit-input-placeholder {
            opacity: 0
        }

        :focus:-moz-placeholder,
        :focus::-moz-placeholder {
            opacity: 0
        }

        :focus:-ms-input-placeholder {
            opacity: 0
        }

        html {
            overflow-x: hidden;
            font-size: 1rem;
            background-color: #f0f1f6
        }

        body {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: .81rem;
            color: #000;
            line-height: 1.35em;
            letter-spacing: .02em;
            min-width: 320px;
            position: relative
        }

        blockquote,
        body,
        code,
        dd,
        div,
        dl,
        dt,
        fieldset,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        input,
        li,
        p,
        pre,
        td,
        textarea,
        th,
        ul {
            margin: 0;
            padding: 0
        }

        textarea {
            resize: none
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        abbr,
        button,
        fieldset,
        img,
        input,
        textarea {
            border: none
        }

        address,
        caption,
        cite,
        code,
        dfn,
        em,
        strong,
        th,
        var {
            font-style: normal;
            font-weight: 400
        }

        ul li {
            list-style: none;
            color: inherit
        }

        caption,
        th {
            text-align: left
        }

        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            font-weight: inherit;
            color: inherit
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        main,
        menu,
        nav,
        section {
            display: block
        }

        main {
            margin-top: 3.2rem
        }

        img {
            max-width: 100%;
            height: auto
        }

        a,
        button,
        svg {
            transition: all .3s ease
        }

        a,
        a:active,
        a:focus,
        a:hover,
        button,
        button:active,
        button:focus,
        button:hover,
        input,
        input:active,
        input:focus,
        textarea,
        textarea:active,
        textarea:focus {
            text-decoration: none;
            outline: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-tap-highlight-color: transparent
        }

        .container,
        .wrapper {
            position: relative
        }

        a {
            color: inherit
        }

        :after,
        :before,
        a,
        aside,
        button,
        div,
        footer,
        form,
        header,
        input,
        li,
        main,
        nav,
        p,
        section,
        span,
        textarea,
        ul {
            box-sizing: border-box
        }

        input:not([type=checkbox]):not([type=radio]),
        select,
        textarea {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important
        }

        input:invalid {
            box-shadow: none
        }

        input {
            border-radius: 0
        }

        button {
            padding: 0;
            background: none;
            font-family: "Montserrat"
        }

        button:enabled {
            cursor: pointer
        }

        svg {
            display: block
        }

        .blue_b {
            background-color: #247cff
        }

        .red_b {
            background-color: #ff4b4b
        }

        .violet_b {
            background-color: #7a4bff
        }

        .aqua_b {
            background-color: #00d1c5
        }

        .orange_b {
            background-color: #ff8310
        }

        .green_b {
            background-color: #37c87a
        }

        .white_b {
            background-color: #fff
        }

        .pink_b {
            background-color: #fe337c
        }

        .icon_b {
            background-color: #b8b8cc
        }

        .blue_c {
            color: #247cff
        }

        .red_c {
            color: #ff4b4b
        }

        .violet_c {
            color: #7a4bff
        }

        .aqua_c {
            color: #00d1c5
        }

        .orange_c {
            color: #ff8310
        }

        .green_c {
            color: #37c87a
        }

        .white_c {
            color: #fff
        }

        .pink_c {
            color: #fe337c
        }

        .icon_c {
            color: #b8b8cc;
            fill: #b8b8cc
        }

        .add_c {
            color: #6e7494
        }

        .fwb {
            font-weight: 600
        }

        .fwn {
            font-weight: 500
        }

        .ts_9 {
            font-size: 9px
        }

        .ts_11 {
            font-size: 11px
        }

        .ts_12 {
            font-size: .75rem
        }

        .ts_13 {
            font-size: .81rem
        }

        .ts_14 {
            font-size: .875rem
        }

        .ts_17 {
            font-size: 1.06rem
        }

        .ts_18 {
            font-size: 1.125rem
        }

        .ts_24 {
            font-size: 1.5rem
        }

        .ts_30 {
            font-size: 1.875rem
        }

        .mt_80 {
            margin-top: 5rem
        }

        .mt_70 {
            margin-top: 3.5rem
        }

        .mb_50 {
            margin-bottom: 3.125rem
        }

        .mb_40 {
            margin-bottom: 2.5rem
        }

        .mb_30 {
            margin-bottom: 1.4rem
        }

        .mb_10 {
            margin-bottom: 10px
        }

        .df {
            display: flex
        }

        h1,
        h2,
        h3,
        h4 {
            font-weight: 600;
            line-height: 1.23em
        }

        h5 {
            font-weight: 500
        }

        .wrapper {
            max-width: 1520px;
            margin: 0 auto;
            padding-left: 28px;
            padding-right: 28px
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .fadeIn {
            animation-name: fadeIn
        }

        @keyframes fadeOut {
            0% {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .fadeOut {
            animation-name: fadeOut
        }

        .label {
            color: #fff;
            text-transform: uppercase;
            line-height: 21px;
            white-space: nowrap;
            padding: 0 12px;
            font-weight: 700;
            display: inline-block;
            border-radius: 3px
        }

        .graphics {
            width: 104px;
            height: 104px;
            background-size: 55px 55px;
            flex-shrink: 0
        }

        .graphics-hands {
            background: #f5dfea url(/_nuxt/img/hands.20cdccf.svg) no-repeat 50%/111px
        }

        .graphics-vector {
            background: #e1f6f5 url(/_nuxt/img/graphic-design.e49a4f8.svg) no-repeat 50%/104px
        }

        .graphics-beach {
            background: #dfecf8 url(/_nuxt/img/beach.eb7c9d5.svg) no-repeat 50%/102px
        }

        .graphics-bulb {
            background: #e6def9 url(/_nuxt/img/idea.60ff0fb.svg) no-repeat 50%/93px
        }

        .graphics-ticket {
            background: #f9f1de url(/_nuxt/img/ticket.2a240cf.svg) no-repeat 50%/96px
        }

        .graphics-paint {
            background: #e1f6e6 url(/_nuxt/img/graphics.f077e94.svg) no-repeat 50%/96px
        }

        .graphics-wallet {
            background: #f6e7e1 url(/_nuxt/img/deposit.fd84963.svg) no-repeat 50%/96px
        }

        .graphics-cannon {
            background: #f8f2df url(/_nuxt/img/fuse.fb113b0.svg) no-repeat 50%/96px
        }

        .graphics-gun {
            background: #ffeaea url(/_nuxt/img/marathon.a7c102c.svg) no-repeat 50%/96px
        }

        .achieve-icon {
            width: 74px;
            height: 74px;
            border-radius: 50%;
            background-color: #fff;
            position: relative;
            z-index: 1
        }

        .achieve-icon:after {
            content: "";
            border-radius: 50%;
            width: 66px;
            height: 66px;
            display: block;
            position: absolute;
            top: 4px;
            left: 4px;
            z-index: -1;
            background-color: #f0f1f6;
            opacity: 0;
            transition: opacity .3s
        }

        .achieve-icon span {
            display: block;
            width: 100%;
            height: 100%
        }

        .achieve-icon.burger span {
            background: url(/_nuxt/img/burger.82c3cb1.svg) no-repeat 50%
        }

        .achieve-icon.burger-knife span {
            background: url(/_nuxt/img/knife.7b673b2.svg) no-repeat 50%, url(/_nuxt/img/burger.82c3cb1.svg) no-repeat 50%
        }

        .achieve-icon.ruler span {
            background: url(/_nuxt/img/ruler.5175e8b.svg) no-repeat 50%
        }

        .achieve-icon.ruler-knife span {
            background: url(/_nuxt/img/knife.7b673b2.svg) no-repeat 50%, url(/_nuxt/img/ruler.5175e8b.svg) no-repeat 50%
        }

        .achieve-icon.folder span {
            background: url(/_nuxt/img/folder.d5b46ee.svg) no-repeat 50%
        }

        .achieve-icon.folder-knife span {
            background: url(/_nuxt/img/knife.7b673b2.svg) no-repeat 50%, url(/_nuxt/img/folder.d5b46ee.svg) no-repeat 50%
        }

        .achieve-icon.knife span {
            background: url(/_nuxt/img/knife.7b673b2.svg) no-repeat 50%
        }

        .simple-title a:hover {
            color: #247cff
        }

        .challenge {
            background-color: #fff;
            position: relative;
            padding: 20px;
            align-items: center
        }

        .challenge-icon {
            flex-shrink: 0;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            border: 1px solid #e3e4e9;
            margin-right: 16px;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: 50%
        }

        .challenge-icon.xmas {
            background-image: url(/_nuxt/img/christmas.f223034.svg)
        }

        .challenge:not(:last-child) {
            margin-bottom: 15px
        }

        .section-wrap {
            justify-content: space-between
        }

        .section-wrap .sort {
            margin-left: auto
        }

        .to-page {
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .card {
            max-width: 515px;
            background-color: #fff;
            padding: 27px;
            transition: all .4s ease;
            position: relative;
            border-radius: 10px
        }

        .card:hover {
            box-shadow: 0 4px 10px rgba(220, 221, 228, .47843)
        }

        .card:hover .to-favour {
            opacity: 1
        }

        .card:hover .card-link {
            transform: translateX(3px)
        }

        .card-top {
            margin-bottom: 27px
        }

        .card-line,
        .card-top {
            justify-content: space-between;
            align-items: center
        }

        .card-text {
            line-height: 1.5em;
            margin: 12px 0 27px;
            max-width: 342px
        }

        .card-link {
            -ms-flex-negative: 0;
            margin-right: 5px;
            flex-shrink: 0;
            margin-left: 5px;
            display: block;
            width: 23px;
            height: 13px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMTUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgNy41aDIzbTAgMEwxNi41IDFNMjMgNy41TDE2LjUgMTQiIHN0cm9rZT0iIzAwMCIvPjwvc3ZnPg==) no-repeat 50%/cover
        }

        .card .details span:not(:last-child) {
            margin-right: 12px
        }

        .card .to-favour {
            opacity: 0
        }

        .to-favour {
            transition: opacity .4s ease;
            cursor: pointer;
            position: relative;
            z-index: 2
        }

        .to-favour:hover svg {
            fill: #ffc940
        }

        .to-favour.added {
            opacity: 1
        }

        .to-favour.added svg {
            fill: #ffc940
        }

        .card-long {
            max-width: 100%
        }

        .card-long .card-top {
            margin-bottom: 21px
        }

        .card-long .card-content {
            flex-direction: column;
            flex-grow: 1
        }

        .card-long .card-line {
            margin-top: auto
        }

        .card-long .card-text {
            max-width: 680px;
            margin-top: 21px
        }

        .card-long .graphics {
            margin-right: 23px
        }

        .sort {
            align-items: center;
            text-align: right
        }

        {{-- .sort__icons>span {
            width: 16px
        } --}}

        .sort__icons>span:first-child {
            margin-right: 9px;
            /* height: 10px */
        }

        .sort__icons>span:first-child:after,
        .sort__icons>span:first-child:before {
            content: "";
            display: block;
            width: 100%;
            height: 4px;
            border: 1px solid #6e7494
        }

        .sort__icons>span:first-child:after {
            margin-top: 2px
        }

        .sort__icons>span:last-child {
            position: relative;
            height: 9px
        }

        .sort__icons>span:last-child span,
        .sort__icons>span:last-child span:after,
        .sort__icons>span:last-child span:before {
            height: 1px;
            background-color: #b8b8cc
        }

        .sort__icons>span:last-child span {
            display: block;
            width: 100%
        }

        .sort__icons>span:last-child span:after,
        .sort__icons>span:last-child span:before {
            content: "";
            display: block;
            width: 100%;
            position: absolute
        }

        .sort__icons>span:last-child span:before {
            top: 4px
        }

        .sort__icons>span:last-child span:after {
            bottom: 0
        }

        .sort__field {
            padding: 0 18px;
            right: -4px;
            position: relative;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEiIGhlaWdodD0iNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMSAuNWw0LjUgNCA0LjUtNCIgc3Ryb2tlPSIjNkU3NDk0Ii8+PC9zdmc+) no-repeat top 7px right/11px 6px
        }

        .sort__dropdown {
            display: block;
            position: absolute;
            right: 0;
            top: 30px;
            background-color: #fff;
            box-shadow: 7px 7px 0 rgba(220, 221, 228, .58);
            width: 290px;
            padding: 23px;
            animation: fadeIn .3s linear forwards;
            z-index: 5
        }

        .sort__input {
            background: none;
            text-align: right;
            cursor: pointer;
            min-width: 250px;
            transition: all .5s ease;
            caret-color: transparent
        }

        .sort__option {
            white-space: nowrap;
            cursor: pointer
        }

        .sort__option.active {
            font-weight: 600;
            pointer-events: none
        }

        .sort__option:hover {
            color: #585d77
        }

        .sort__option:not(:last-child) {
            margin-bottom: 8px
        }

        .support-hide {
            position: absolute;
            height: 0;
            overflow: hidden;
            white-space: pre
        }

        .back-link,
        .best__btn,
        .drop-icon,
        .edit-icon,
        .exit-icon,
        .sorting-button {
            transition: all .3s ease;
            cursor: pointer
        }

        .back-link:hover,
        .best__btn:hover,
        .drop-icon:hover,
        .edit-icon:hover,
        .exit-icon:hover,
        .sorting-button:hover {
            opacity: .7
        }

        .sorting-button {
            position: relative;
            display: inline-flex;
            align-items: center
        }

        .sorting-button.riseup .sort-icon {
            transform: scaleY(-1)
        }

        .sort-icon {
            transition: all .3s ease;
            display: block;
            height: 22px;
            width: 15px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iMTUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTUgLjc1djEyLjVtMCAwbDQtNG0tNCA0bC00LTQiIHN0cm9rZT0iIzAwMCIgc3Ryb2tlLXdpZHRoPSIyIi8+PC9zdmc+) no-repeat 100%/8px 12px
        }

        .back-link {
            width: 55px;
            height: 55px;
            display: block;
            transform: scaleX(-1);
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMTUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgNy41aDIzbTAgMEwxNi41IDFNMjMgNy41TDE2LjUgMTQiIHN0cm9rZT0iIzAwMCIvPjwvc3ZnPg==) no-repeat 50%/18px 11px;
            margin-right: 26px
        }

        .back-link:hover {
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMTUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgNy41aDIzbTAgMEwxNi41IDFNMjMgNy41TDE2LjUgMTQiIHN0cm9rZT0iIzAwMCIvPjwvc3ZnPg==) no-repeat 50%/18px 11px #e2e5f8;
            border-radius: 100px
        }

        .edit-icon svg {
            fill: none;
            stroke: #6e7494;
            stroke-width: 1.5px
        }

        .exit-icon svg {
            fill: #6e7494
        }

        .contour-btn {
            display: inline-block;
            border: 1px solid #fe337c;
            text-align: center;
            line-height: 59px
        }

        .contour-btn:hover {
            background: #fe337c;
            color: #fff
        }

        .btn-open {
            display: block;
            width: 27px;
            height: 27px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTciIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgOWgxN004LjUuNVYxNyIgc3Ryb2tlPSIjMDAwIi8+PC9zdmc+) no-repeat 50%/17px;
            margin-left: auto;
            transition: all .3s ease .5s;
            cursor: pointer;
            transform: rotate(45deg)
        }

        .btn-open:hover {
            opacity: .7
        }

        .search {
            position: relative;
            max-width: 600px;
            width: 100%
        }

        .search__input {
            height: 53px;
            width: 100%;
            background-color: #fff;
            font-family: inherit;
            font-size: 100%;
            padding: 0 45px 0 29px
        }

        .search__input::-moz-placeholder {
            color: #909090
        }

        .search__input:-ms-input-placeholder {
            color: #909090
        }

        .search__input::placeholder {
            color: #909090
        }

        .search__btn {
            background: transparent url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkiIGhlaWdodD0iMTkiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTE4Ljc4NCAxNy43MzlsLTQuNjM3LTQuNjM3YTcuOTYgNy45NiAwIDAwMS44NDctNS4xMDVDMTUuOTk0IDMuNTg3IDEyLjQwNiAwIDcuOTk3IDAgMy41ODcgMCAwIDMuNTg3IDAgNy45OTdzMy41ODcgNy45OTcgNy45OTcgNy45OTdhNy45NiA3Ljk2IDAgMDA1LjEwNS0xLjg0N2w0LjYzNyA0LjYzN2EuNzM2LjczNiAwIDAwMS4wNDUgMCAuNzM4LjczOCAwIDAwMC0xLjA0NXpNMS40NzcgNy45OTdhNi41MjcgNi41MjcgMCAwMTYuNTItNi41MiA2LjUyNyA2LjUyNyAwIDAxNi41MiA2LjUyIDYuNTI2IDYuNTI2IDAgMDEtNi41MiA2LjUyIDYuNTI3IDYuNTI3IDAgMDEtNi41Mi02LjUyeiIgZmlsbD0iIzM4NUJENyIvPjwvc3ZnPg==) no-repeat 50%;
            position: absolute;
            width: 53px;
            height: 53px;
            top: 0;
            right: 0;
            display: flex
        }

        .search__btn:hover {
            opacity: .7
        }

        input[type=text]::-ms-clear,
        input[type=text]::-ms-reveal {
            display: none;
            width: 0;
            height: 0
        }

        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-decoration,
        input[type=search]::-webkit-search-results-button,
        input[type=search]::-webkit-search-results-decoration {
            display: none
        }

        .to-edit {
            position: absolute;
            border-radius: 50%;
            width: 55px;
            height: 55px;
            background-color: #fff;
            box-shadow: 4px 4px 0 rgba(220, 221, 228, .58);
            display: flex
        }

        .to-edit:hover {
            box-shadow: 2px 2px 0 rgba(220, 221, 228, .48)
        }

        .to-edit svg {
            fill: none;
            margin: auto;
            stroke-width: 1.5px;
            stroke: #6e7494
        }

        .main-page .to-edit {
            display: none;
            right: -140px;
            top: -17px
        }

        .main-page .main {
            position: relative
        }

        .full-cost .to-edit,
        .low-cost .to-edit,
        .single-lesson .to-edit {
            right: 94px;
            top: 67px
        }

        .dropmenu,
        .notice-list {
            opacity: 0;
            box-shadow: 7px 7px 0 rgba(220, 221, 228, .58);
            transition: opacity .2s linear, top .2s linear, visibility .2s linear;
            pointer-events: none;
            visibility: hidden;
            top: 69px;
            display: block;
            z-index: 5;
            position: absolute;
            background-color: #fff;
            color: #6e7494
        }

        .dropmenu.is-show,
        .notice-list.is-show {
            visibility: visible;
            opacity: 1;
            top: 79px;
            pointer-events: auto
        }

        .notice-list {
            width: 332px;
            padding: 15px 15px 8px;
            right: 5%
        }

        .dropmenu {
            width: 155px;
            padding: 3px 15px;
            right: 0
        }

        .hamburger {
            margin: 0 7px 0 18px;
            display: none;
            height: 12px;
            width: 17px;
            position: relative;
            overflow: hidden;
            top: 0;
            right: 0;
            background: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjNmU3NDk0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzODQgMzg0Ij48cGF0aCBkPSJNMCAyNzcuMzMzaDM4NFYzMjBIMHptMC0xMDYuNjY2aDM4NHY0Mi42NjdIMHpNMCA2NGgzODR2NDIuNjY3SDB6Ii8+PC9zdmc+) no-repeat 50%/cover
        }

        .logo {
            align-items: center
        }

        .logo img {
            width: 92px
        }

        .logo__text {
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: .1em;
            max-width: 52px;
            margin-left: 13px
        }

        .menu,
        .nav,
        .user,
        .user-data {
            align-items: center
        }

        .menu {
            flex-basis: 900px;
            justify-content: center
        }

        .menu li:not(:last-child) {
            margin-right: 28px
        }

        .menu li.is-active {
            color: #247cff
        }

        .user-data {
            margin-left: auto;
            flex-shrink: 0
        }

        .notice {
            margin-right: 50px
        }

        .notice__icon {
            position: relative;
            cursor: pointer
        }

        .notice__icon:hover svg {
            fill: #6e7494
        }

        .notice__icon.is-notify:after {
            content: "";
            display: block;
            width: 8px;
            height: 8px;
            border: 1px solid #fff;
            border-radius: 50%;
            background-color: #ff4b4b;
            position: absolute;
            top: 1px;
            right: 2px
        }

        .notice svg {
            width: 24px;
            height: 24px
        }

        .user__pic {
            -o-object-fit: cover;
            object-fit: cover;
            display: block;
            border-radius: 50%;
            width: 47px;
            height: 47px;
            margin-left: 16px
        }

        .drop {
            margin-left: 10px
        }

        .drop__icon {
            transition: all .3s ease;
            cursor: pointer;
            width: 16px;
            height: 16px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEiIGhlaWdodD0iNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMSAuNWw0LjUgNCA0LjUtNCIgc3Ryb2tlPSIjNkU3NDk0Ii8+PC9zdmc+) no-repeat 50%/11px 6px
        }

        .drop__icon:hover {
            opacity: .7
        }

        .sidebar {
            flex-basis: 340px
        }

        .sidebar .achieves__list {
            margin-bottom: 40px
        }

        .profile {
            padding: 35px;
            border-radius: 20px
        }

        .profile__pic {
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 262px;
            border-radius: 10px
        }

        .profile__name {
            margin: 30px 0 7px
        }

        .profile__btns {
            margin: 30px 0
        }

        .profile__btn {
            display: block;
            line-height: 43px;
            flex-basis: 100%;
            padding: 0 15px;
            text-align: center;
            border-radius: 10px
        }

        .profile__btn_cash {
            background-color: #e4ffed;
            margin-right: 11px
        }

        .profile__btn_cash:hover {
            background-color: #d5ffe3
        }

        .profile__btn_score {
            background-color: #eaeeff
        }

        .profile__btn_score:hover {
            background-color: #dbe2ff
        }

        .profile__action {
            align-items: center
        }

        .profile__action .edit-icon {
            margin-right: 12px;
            margin-top: -2px
        }

        .all-content {
            padding-top: 5px;
            padding-bottom: 10px;
            position: relative
        }

        .main {
            margin-right: 70px;
            flex-basis: 1054px;
            max-width: 1054px
        }

        @media screen and (max-width:1110px) {
            .main {
                max-width: calc(100vw - 56px) !important
            }
        }

        @media screen and (max-width:992px) {
            .main {
                max-width: calc(100vw - 40px) !important
            }
        }

        @media screen and (max-width:480px) {
            .main {
                max-width: calc(100vw - 30px) !important
            }
        }

        .basics .courses {
            justify-content: space-between;
            flex-wrap: wrap;
            margin-left: -14px;
            margin-right: -14px
        }

        .basics .courses__item {
            width: calc(50% - 28px);
            margin: 14px
        }

        .achieves .points-details {
            margin-top: 10px;
            display: block
        }

        .achieves__item {
            flex-shrink: 0
        }

        .achieves__item .achieve-icon,
        .achieves__item:last-child a {
            width: 63px;
            height: 63px
        }

        .achieves__item:not(:last-child) {
            margin-right: 6px
        }

        .achieves__item:last-child a {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            color: #6e7494;
            border-radius: 50%;
            border: 4px solid #fff
        }

        .achieves__item:last-child a:hover {
            background-color: transparent
        }

        .achieves__btn {
            width: 100%
        }

        .achieves .challenges__list {
            margin: 32px 0
        }

        .my-achieves__wrap {
            justify-content: space-between;
            align-items: flex-start
        }

        .descr {
            background-color: #fff;
            border-radius: 60px;
            flex-basis: 495px;
            padding: 53px 40px 37px;
            margin-right: 28px;
            min-height: 350px
        }

        .descr .achieve-score {
            margin-left: 15px
        }

        .achieve {
            display: none;
            animation: fadeIn .3s linear forwards;
            transition: all .4s ease;
            max-height: 0
        }

        .achieve.visible {
            display: block;
            max-height: 1000px
        }

        .achieve .achieve-icon {
            border: 1px solid #f0f1f6;
            width: 82px;
            height: 82px;
            margin-right: 20px;
            flex-shrink: 0
        }

        .achieve .achieve-icon span {
            background-size: 40px
        }

        .achieve-top {
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f0f1f6;
            padding-bottom: 28px;
            margin-bottom: 28px
        }

        .achieve-date {
            display: block;
            padding-left: 18px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iOSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMCAzLjVsNCA0IDctNyIgc3Ryb2tlPSIjNkU3NDk0Ii8+PC9zdmc+) no-repeat 0;
            margin-top: 8px
        }

        .task__top {
            font-size: 15px;
            margin-bottom: 18px
        }

        .task__text {
            margin-bottom: 25px
        }

        .users-details {
            align-items: center
        }

        .users-details svg {
            fill: #6e7494;
            margin-right: 6px
        }

        .contents {
            flex-basis: 514px
        }

        .contents .achieve-icon {
            cursor: pointer
        }

        .contents .achieve-icon:hover:after {
            opacity: 1
        }

        .contents__wrap {
            align-items: center;
            justify-content: space-between;
            margin-bottom: 40px
        }

        .contents__list {
            flex-wrap: wrap;
            margin-left: -7px;
            margin-right: -7px
        }

        .contents__list li {
            display: flex;
            justify-content: center;
            flex-basis: 74px;
            margin: 7px;
            width: calc(16.66667% - 14px)
        }

        .contents__list li.active .achieve-icon:after {
            opacity: 1
        }

        .contents__list li:last-child {
            height: 74px
        }

        .contents__list li:last-child a {
            display: flex;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center
        }

        .contents__list li:last-child a:hover span,
        .contents__list li:last-child a:hover span:after,
        .contents__list li:last-child a:hover span:before {
            background-color: #b8b8cc
        }

        .contents__list li:last-child a span {
            position: relative
        }

        .contents__list li:last-child a span:after,
        .contents__list li:last-child a span:before {
            position: absolute;
            content: ""
        }

        .contents__list li:last-child a span:before {
            left: -8px
        }

        .contents__list li:last-child a span:after {
            right: -8px
        }

        .contents__list li:last-child a span,
        .contents__list li:last-child a span:after,
        .contents__list li:last-child a span:before {
            transition: all .3s ease;
            border-radius: 50%;
            background-color: #6e7494;
            width: 5px;
            height: 5px;
            display: block
        }

        .tab-content {
            box-sizing: border-box;
            background-color: #fff;
            overflow-y: hidden;
            max-height: 800px;
            transition: all .4s linear;
            position: relative;
            opacity: 1;
            transform: translate(0);
            scrollbar-color: #e3e3eb #fff;
            scrollbar-width: thin
        }

        .tab-content::-webkit-scrollbar {
            width: 7px
        }

        .tab-content::-webkit-scrollbar-track {
            background-color: #fff;
            border-radius: 10px
        }

        .tab-content::-webkit-scrollbar-thumb {
            background: #e3e3eb;
            border-radius: 10px
        }

        .tab-content .contour-btn {
            width: 100%;
            max-width: 272px;
            margin-top: 28px
        }

        .tab-item {
            background-color: #fff;
            position: relative;
            align-items: center;
            padding: 21px 38px;
            border-bottom: 1px solid #f0f1f6;
            transition: all .5s ease;
            z-index: 1
        }

        .tab.close .tab-item {
            border-color: transparent
        }

        .tab.close .tab-content {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            transform: translateY(-50%)
        }

        .tab.close .btn-open {
            transform: rotate(0)
        }

        .new-challenges .challenge {
            padding: 0
        }

        .new-challenges .challenge.close .tab-content {
            padding: 0 38px
        }

        .new-challenges .challenge .tab-content {
            padding: 30px 38px 38px
        }

        .new-challenges .challenge-icon {
            margin-right: 22px
        }

        .new-challenges .challenge-include span:not(.users-details) {
            display: block
        }

        .new-challenges .challenge-block,
        .new-challenges .challenge-btns,
        .new-challenges .challenge-details,
        .new-challenges .challenge-include {
            align-items: center
        }

        .new-challenges .challenge-block {
            margin-right: 10px
        }

        .new-challenges .challenge-details {
            flex-basis: 252px;
            justify-content: space-between;
            margin-left: auto
        }

        .new-challenges .challenge-text {
            max-width: 410px;
            line-height: 1.22em
        }

        .new-challenges .challenge-btns {
            flex-basis: 90px;
            justify-content: space-between;
            margin-left: 5%
        }

        .new-challenges__btn {
            max-width: 305px;
            width: 100%;
            margin-top: 43px
        }

        .new-challenges .section-wrap {
            align-items: center
        }

        .card-title {
            margin-bottom: 21px
        }

        .description {
            margin-bottom: 130px
        }

        .description .section-head {
            align-items: center
        }

        .description__btn {
            display: block;
            text-align: center;
            width: 100%;
            line-height: 87px
        }

        .description__btn:hover {
            background-color: #0060f0
        }

        .description__btn:active {
            box-shadow: inset 1px -2px 5px rgba(0, 0, 0, .3)
        }

        .description__bottom {
            align-items: center
        }

        .description__bottom.changed .achieves-score {
            margin: 0 39px 0 auto;
            flex-grow: 0
        }

        .description__bottom .achieves {
            align-items: center;
            flex-shrink: 0
        }

        .description__bottom .achieves__item:not(:last-child) {
            margin-right: 18px
        }

        .description__bottom .achieves-score {
            margin: 0 15px 0 26px;
            flex-grow: 1;
            white-space: nowrap
        }

        .description__bottom .achieves__score span,
        .description__bottom .exp span {
            padding-right: 6px
        }

        .description__bottom .exp {
            flex-basis: 134px
        }

        .descr-card {
            padding: 35px;
            max-width: 100%
        }

        .descr-card:hover {
            box-shadow: none
        }

        .descr-card .graphics {
            width: 260px;
            height: 260px;
            background-size: 46%;
            border-radius: 15px
        }

        .descr-card .card-content {
            margin-left: 4%;
            margin-right: 10%
        }

        .descr-card .card-title {
            margin-top: 27px
        }

        .descr-card .card-text {
            max-width: none
        }

        .descr-card .details {
            margin: 27px 0;
            align-items: center
        }

        .descr-card .details__author {
            align-items: center
        }

        .descr-card .details__author img {
            -o-object-fit: cover;
            object-fit: cover;
            width: 37px;
            height: 37px;
            flex-shrink: 0;
            margin-right: 14px;
            border-radius: 7px
        }

        .descr-card .details span:not(:last-child) {
            margin-right: 4%
        }

        .specific,
        .specific__list {
            align-items: center;
            justify-content: space-between
        }

        .specific {
            padding: 2rem 0
        }

        .specific__list {
            flex-grow: 1;
            padding: 40px 80px;
            border-radius: 30px;
            background: #e7e9f3
        }

        .specific span {
            display: block;
            margin-bottom: 11px
        }

        .specific .achieve-icon {
            margin-bottom: 7px
        }

        .specific .exp {
            margin-left: 7.5%;
            text-align: center
        }

        .program__list {
            counter-reset: step-number
        }

        .program__details span {
            display: block
        }

        .program__details span:not(:last-child) {
            margin-right: 4%
        }

        .step.completed .tab-content,
        .step.completed .tab-item {
            background-color: #effff4
        }

        .step-include {
            padding: 33px 40px 33px 50px
        }

        .step .tab-title {
            font-weight: 400
        }

        .step .tab-content {
            padding: 30px 112px 26px 90px
        }

        .step .tab-item:before {
            counter-increment: step-number;
            content: counter(step-number);
            font-size: inherit;
            margin-right: 34px
        }

        .step.close .tab-content {
            padding: 0 0 0 90px
        }

        .step .amount {
            margin-left: auto;
            white-space: nowrap
        }

        .about .card-photo {
            width: 260px;
            height: 260px;
            border-radius: 15px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .about .card-sub {
            margin: 12px 0
        }

        .about .card-list {
            margin: 27px 0
        }

        .about .card-list li:not(:last-child) {
            margin-right: 16px
        }

        .about .card-list a {
            display: block
        }

        .about .card-list a:hover div {
            box-shadow: 0 4px 10px rgba(220, 221, 228, .48)
        }

        .about .card-list .graphics {
            display: block;
            width: 49px;
            height: 49px;
            background-size: 50%
        }

        .skills li {
            display: flex;
            align-items: center
        }

        .skills li:before {
            width: 10px;
            height: 2px;
            background-color: #000;
            content: "";
            display: block;
            margin-right: 14px
        }

        .skills li:not(:last-child) {
            margin-bottom: 9px
        }

        .aside-menu {
            margin-top: 158px
        }

        .aside-menu li:not(:last-child) {
            margin-bottom: 30px
        }

        .aside-menu a:hover {
            color: #000
        }

        .table {
            counter-reset: student-number -1;
            display: table;
            width: 100%
        }

        .table-row:not(:last-child) .table-cell {
            border-bottom: 1px solid #eaeeff
        }

        .table-head,
        .table-row {
            display: table-row;
            position: relative
        }

        .table-head .table-cell {
            padding-top: 28px;
            padding-bottom: 28px;
            border-bottom: 1px solid #eaeeff
        }

        .table-head .cell-first:before {
            opacity: 0;
            position: absolute
        }

        .table-cell {
            display: table-cell;
            padding: 14px 0;
            vertical-align: middle;
            text-align: center;
            justify-content: center
        }

        .cell-first {
            width: 7.2%;
            padding-left: 2%
        }

        .cell-first:before {
            counter-increment: student-number;
            content: counter(student-number)
        }

        .cell-second {
            width: 34.3%;
            padding-left: 1.5%;
            text-align: left
        }

        .cell-second .student {
            align-items: center;
            padding-right: 18px;
            min-height: 15px
        }

        .cell-second .student.member {
            background: url(/_nuxt/img/users.f6b5485.svg) no-repeat 100%/15px
        }

        .cell-second .student img {
            flex-shrink: 0;
            -o-object-fit: cover;
            object-fit: cover;
            width: 41px;
            height: 41px;
            margin-right: 19px
        }

        .cell-third {
            width: 15%
        }

        .cell-fourth {
            width: 12.5%
        }

        .cell-fiveth {
            width: 13%
        }

        .cell-sixth {
            width: 18%;
            padding-right: 3.3%
        }

        .webpage__next,
        .webpage__number,
        .webpage__prev {
            min-width: 41px;
            line-height: 41px;
            display: block;
            text-align: center
        }

        .webpage__number {
            border: 1px solid #385bd7
        }

        .webpage__number:hover {
            background-color: #247cff;
            color: #fff
        }

        .webpage__break {
            position: relative;
            bottom: -1px;
            padding: 0 10px
        }

        .webpage__next,
        .webpage__prev {
            width: 41px;
            height: 41px;
            opacity: .6;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMTUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgNy41aDIzbTAgMEwxNi41IDFNMjMgNy41TDE2LjUgMTQiIHN0cm9rZT0iIzAwMCIvPjwvc3ZnPg==) no-repeat 100%/23px 13px
        }

        .webpage__next:hover,
        .webpage__prev:hover {
            opacity: .8
        }

        .webpage__next.arrow-off,
        .webpage__prev.arrow-off {
            opacity: .3
        }

        .webpage__next.arrow-off:hover,
        .webpage__prev.arrow-off:hover {
            cursor: default
        }

        .webpage__prev {
            transform: scaleX(-1)
        }

        .timer {
            display: inline-flex
        }

        .timer span {
            display: block;
            text-align: center
        }

        .timer-wrap {
            flex-basis: 394px;
            justify-content: center;
            padding-right: 25px
        }

        .timer-number {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 2px
        }

        .timer-separator {
            padding: 0 11px
        }

        .best__block {
            padding: 48px 45px
        }

        .sort-btns {
            align-items: center;
            margin-bottom: 40px
        }

        .sort-btn {
            cursor: pointer;
            line-height: 22px
        }

        .sort-btn:not(:last-child) {
            margin-right: 40px
        }

        .gallery {
            flex-wrap: wrap;
            margin: 0 -1px
        }

        .gallery__item {
            margin: 2px;
            width: calc(33.33333% - 4px);
            position: relative;
            cursor: pointer
        }

        .gallery__item:after {
            transition: all .3s ease;
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            background: rgba(0, 0, 0, .5) url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkiIGhlaWdodD0iMTkiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTE4Ljc4NCAxNy43MzlsLTQuNjM3LTQuNjM3YTcuOTYgNy45NiAwIDAwMS44NDctNS4xMDVDMTUuOTk0IDMuNTg3IDEyLjQwNiAwIDcuOTk3IDAgMy41ODcgMCAwIDMuNTg3IDAgNy45OTdzMy41ODcgNy45OTcgNy45OTcgNy45OTdhNy45NiA3Ljk2IDAgMDA1LjEwNS0xLjg0N2w0LjYzNyA0LjYzN2EuNzM2LjczNiAwIDAwMS4wNDUgMCAuNzM4LjczOCAwIDAwMC0xLjA0NXpNMS40NzcgNy45OTdhNi41MjcgNi41MjcgMCAwMTYuNTItNi41MiA2LjUyNyA2LjUyNyAwIDAxNi41MiA2LjUyIDYuNTI2IDYuNTI2IDAgMDEtNi41MiA2LjUyIDYuNTI3IDYuNTI3IDAgMDEtNi41Mi02LjUyeiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==) no-repeat 50%/30px;
            opacity: 0
        }

        .gallery__item:hover:after {
            opacity: 1
        }

        .gallery__item img {
            display: block;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 195px
        }

        .full-cost .description__btn {
            width: 65%
        }

        .full-cost .step .tab-title {
            margin-right: 10px
        }

        .full-cost .step .btn-open {
            margin-left: 0
        }

        .full-cost .step .amount {
            margin-right: 6.5%
        }

        .full-cost .tab-content ul {
            counter-reset: lesson-number
        }

        .full-cost .tab-content li {
            display: flex;
            align-items: baseline
        }

        .full-cost .tab-content li:before {
            transition: all .3s ease;
            margin-right: 9px;
            counter-increment: lesson-number;
            content: counter(lesson-number)
        }

        .full-cost .tab-content li:not(:last-child) {
            margin-bottom: 15px
        }

        .full-cost .tab-content li.active,
        .full-cost .tab-content li.active:hover {
            color: #247cff
        }

        .full-cost .tab-content li:hover {
            color: #6e7494
        }

        .payment .features {
            padding: 0 20px
        }

        .payment .features span:first-child {
            margin-right: 0;
            justify-content: center
        }

        .features {
            padding: 0 10px;
            width: 35%;
            background-color: #ebeffd;
            justify-content: center;
            text-align: center
        }

        .features span {
            display: flex;
            align-items: center
        }

        .features span:first-child {
            margin-right: 28px
        }

        .features svg {
            margin-right: 9px;
            fill: none;
            stroke: #6e7494;
            flex-shrink: 0
        }

        .team .sort__field {
            right: unset
        }

        .team .section-wrap {
            margin-top: 93px;
            flex-wrap: wrap
        }

        .team__block {
            padding: 47px
        }

        .team__list {
            flex-wrap: wrap;
            margin: 0 -9px 27px
        }

        .team__link {
            display: inline-block;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iMTEiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEgOS43NWw4LjUtOC41bTAgMEg0bTUuNSAwdjQuNSIgc3Ryb2tlPSIjMzg1QkQ3Ii8+PC9zdmc+) no-repeat 100%/9px;
            padding-right: 22px
        }

        .team__link:hover {
            opacity: .7
        }

        .team__item {
            position: relative;
            flex-basis: 90.5px;
            margin: 9px;
            width: calc(11.10833% - 18px)
        }

        .team__item:hover a {
            opacity: 1
        }

        .team__item img {
            width: 91px;
            height: 91px;
            -o-object-fit: cover;
            object-fit: cover;
            display: block
        }

        .team__item a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            background-color: rgba(0, 0, 0, .7);
            opacity: 0
        }

        .team__item svg {
            fill: #fff;
            margin: auto
        }

        .grid-view {
            position: relative
        }

        .lines-view .lesson-name {
            max-width: 150px
        }

        .lines-view .drop-icon {
            display: block;
            width: 20px;
            height: 20px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEiIGhlaWdodD0iNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMSAuNWw0LjUgNCA0LjUtNCIgc3Ryb2tlPSIjNkU3NDk0Ii8+PC9zdmc+) no-repeat 0/16px 9px
        }

        .lines-view .table-head,
        .lines-view .table-row {
            display: flex;
            align-items: center
        }

        .lines-view .table-cell {
            display: block;
            padding-top: 27px;
            padding-bottom: 27px
        }

        .lines-view .tab.close .tab-content {
            transform: translateY(10%)
        }

        .lines-view .table-head .table-cell,
        .lines-view .table-row:not(:last-child) .table-cell {
            border: none
        }

        .lines-view .tab:not(:last-child) {
            border-bottom: 1px solid #eaeeff
        }

        .lines-view .tab-item {
            padding: 0
        }

        .lines-view .btn-open {
            margin-left: 0;
            transform: rotate(0) scaleY(-1)
        }

        .lines-view .full-work {
            position: static;
            height: 0;
            padding-bottom: 60.5%
        }

        .lines-view .full-work__wrap {
            position: absolute;
            top: 0;
            left: 0
        }

        .lines-view .cell-second {
            width: 31.6%
        }

        .lines-view .cell-third {
            width: 19.6%
        }

        .lines-view .cell-third img {
            display: block;
            -o-object-fit: cover;
            object-fit: cover;
            height: 52px;
            width: 47%;
            margin: 0 auto
        }

        .lines-view .cell-fourth {
            width: 19%;
            text-align: left
        }

        .lines-view .cell-fiveth {
            width: 13.8%
        }

        .lines-view .cell-sixth {
            width: 8.8%
        }

        .lines {
            position: relative;
            margin-bottom: 10.25rem;
            padding: 0
        }

        .lines .pagination {
            position: absolute;
            bottom: -100px;
            left: 0
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                transform: scale3d(.3, .3, .3)
            }

            50% {
                opacity: 1
            }
        }

        @keyframes zoomOut {
            0% {
                opacity: 1
            }

            50% {
                opacity: 0;
                transform: scale3d(.3, .3, .3)
            }

            to {
                opacity: 0
            }
        }

        .zoomOut {
            animation-name: zoomOut;
            visibility: hidden
        }

        .zoomIn {
            animation-name: zoomIn;
            visibility: visible
        }

        .full-work,
        .full-work__wrap {
            scrollbar-color: #e3e3eb #fff;
            scrollbar-width: thin
        }

        .full-work::-webkit-scrollbar,
        .full-work__wrap::-webkit-scrollbar {
            width: 7px
        }

        .full-work::-webkit-scrollbar-track,
        .full-work__wrap::-webkit-scrollbar-track {
            background-color: #fff;
            border-radius: 10px
        }

        .full-work::-webkit-scrollbar-thumb,
        .full-work__wrap::-webkit-scrollbar-thumb {
            background: #e3e3eb;
            border-radius: 10px
        }

        .full-work {
            transition: all .5s ease;
            position: absolute;
            background-color: #fff;
            animation-duration: 1s;
            animation-fill-mode: both;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform-origin: center
        }

        .full-work__wrap {
            width: 100%;
            height: 100%;
            overflow-y: scroll
        }

        .full-work img {
            height: auto;
            width: 100%;
            display: block
        }

        .full-work .close-btn {
            position: absolute;
            z-index: 2;
            right: 20px;
            top: 20px;
            border-radius: 50%;
            color: #6e7494;
            box-shadow: 2px 2px 0 rgba(220, 221, 228, .58);
            background-color: #fff;
            width: 24px;
            line-height: 24px;
            text-align: center;
            cursor: pointer;
            transition: all .3s ease
        }

        .full-work .close-btn:hover {
            box-shadow: 1px 1px 0 rgba(220, 221, 228, .7)
        }

        .mentor {
            align-items: center;
            position: relative
        }

        .mentor__photo {
            width: 150px;
            height: 150px;
            -o-object-fit: cover;
            object-fit: cover;
            display: block
        }

        .mentor__about {
            margin-left: 5%;
            flex-basis: 368px
        }

        .mentor__about span {
            display: block;
            margin-bottom: 7px
        }

        .mentor__list {
            flex-basis: 344px
        }

        .mentor__list li {
            margin-bottom: 15px
        }

        .mentor__link svg {
            transition: all .3s ease;
            fill: #247cff
        }

        .mentor__link:hover svg {
            fill: #6e7494
        }

        .single-lesson .descr-card .card-text {
            margin-bottom: 0
        }

        .video-block {
            margin-top: 42px
        }

        .video {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .video__ratio {
            padding-top: 62.3%;
            height: 0;
            overflow: hidden;
            background-color: #555
        }

        .video iframe {
            border: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            min-height: 100%;
            top: 0;
            left: 0
        }

        .invert-btn {
            color: #fff;
            background: #fe337c;
            font-family: "Montserrat";
            display: block;
            border: none;
            text-align: center;
            line-height: 65px;
            width: 100%;
            transition: all .3s ease
        }

        .invert-btn:hover {
            transition: all .3s ease;
            background: #ff196c
        }

        .checkbox {
            display: flex;
            align-items: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .checkbox input {
            display: none
        }

        .checkbox input:checked~.checkbox_check {
            background: #385bd7 url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOSIgaGVpZ2h0PSI2IiB2aWV3Qm94PSIwIDAgOSA2IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNMy41ODI4NSA0LjE3NDkyTDcuNzk1ODUgMEw4LjQ0NDM5IDAuNjQyMTU1TDMuNTgyODUgNS40NTkyM0wwLjY2NjAxNiAyLjU2OTA4TDEuMzE0MSAxLjkyNjkyTDMuNTgyODUgNC4xNzQ5MloiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=) no-repeat center 9px;
            border: 1px solid #385bd7;
            background-size: 10px
        }

        .checkbox_check {
            display: block;
            flex-shrink: 0;
            width: 25px;
            height: 25px;
            border: 1px solid rgba(110, 116, 148, .3);
            border-radius: 2px
        }

        .is-form .main {
            margin-right: 0
        }

        .is-form .header {
            padding-top: 60px;
            background: transparent
        }

        .is-form .header__logo {
            margin-right: 0
        }

        .is-form .header__logo img {
            display: block;
            margin: 0 auto
        }

        .is-form .section-form__title {
            text-align: center;
            font-weight: 500;
            z-index: 1;
            position: relative;
            margin-bottom: 2.5rem;
            font-size: 1.063rem
        }

        .is-form .section-form__title span {
            color: #385bd7;
            font-size: 1.5rem
        }

        .is-form .section-form .form {
            padding: 50px;
            box-sizing: border-box;
            background: #fff;
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            position: relative;
            border-radius: 30px
        }

        .is-form .section-form .form__title {
            font-weight: 600;
            justify-content: center;
            font-size: 1.7rem;
            margin-bottom: 50px
        }

        .is-form .section-form .form__title img {
            display: inline-block;
            width: 30px;
            height: 30px;
            vertical-align: top;
            margin-top: 1px
        }

        .is-form .section-form .form__fields-item {
            width: 100%
        }

        .is-form .section-form .form__fields-item input {
            width: 100%;
            padding: 23px 30px;
            border: 1px solid rgba(110, 116, 148, .3);
            border-radius: 5px;
            box-sizing: border-box;
            color: #000
        }

        .is-form .section-form .form__fields-item input::-moz-placeholder {
            color: #6e7494
        }

        .is-form .section-form .form__fields-item input:-ms-input-placeholder {
            color: #6e7494
        }

        .is-form .section-form .form__fields-item input::placeholder {
            color: #6e7494
        }

        .is-form .section-form .form__fields-item input:focus {
            box-shadow: inset 0 0 0 1px #c4c6d3;
            border: 1px solid rgba(110, 116, 148, .3)
        }

        .is-form .section-form .form__fields-item input.valid {
            border-color: #11b84a
        }

        .is-form .section-form .form__fields-item input.invalid {
            border-color: #ff5f5f;
            color: #ff5f5f
        }

        .is-form .section-form .form__fields-item a {
            display: block;
            color: #385bd7;
            text-align: left;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            margin-top: .938rem;
            font-size: .688rem
        }

        .is-form .section-form .form__fields-item a:hover {
            color: #09299a
        }

        .is-form .section-form .form__fields-item_phone {
            position: relative
        }

        .is-form .section-form .form__fields-item_phone input {
            padding-left: 70px
        }

        .is-form .section-form .form__fields-item_password {
            position: relative
        }

        .is-form .section-form .form__fields-item_password input {
            padding-right: 100px
        }

        .is-form .section-form .form__fields-item:not(:last-child) {
            margin-bottom: 18px
        }

        .is-form .section-form .form__fields-item .show-password {
            position: absolute;
            top: 50%;
            right: 30px;
            transform: translateY(-50%);
            margin-top: 0;
            color: #385bd7
        }

        .is-form .section-form .form__fields-item .show-password:hover {
            color: #09299a
        }

        .is-form .section-form .form-country {
            position: absolute;
            top: 50%;
            left: 35px;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center
        }

        .is-form .section-form .form-country span {
            margin-left: 5px;
            cursor: pointer
        }

        .is-form .section-form .form .checkbox p {
            font-size: .688rem;
            margin-left: 15px;
            text-align: left
        }

        .is-form .section-form .form .checkbox p a {
            color: #385bd7
        }

        .is-form .section-form .form .checkbox p a:hover {
            color: #09299a
        }

        .is-form .section-form .form .btn {
            margin-top: 30px;
            font-size: .913rem;
            border-radius: 5px
        }

        .is-form .section-form .form__footer {
            color: #6e7494;
            margin-top: 30px;
            font-size: .813rem
        }

        .is-form .section-form .form__footer a:not(.btn) {
            color: #385bd7
        }

        .is-form .section-form .form__footer a:not(.btn):hover {
            color: #09299a
        }

        .is-form-register .section-form {
            padding-top: 130px
        }

        .is-form-register .section-form .form:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 115px;
            background: linear-gradient(0deg, #eaeeff, #f0f1f6);
            top: -115px;
            left: 0;
            z-index: -1
        }

        .is-form-confirm .section-form .form__footer {
            display: flex;
            font-size: .688rem;
            justify-content: space-between;
            margin-top: 25px
        }

        .is-form-confirm .section-form .form__fields-item div {
            display: flex;
            margin: 0 -15px
        }

        .is-form-confirm .section-form .form__fields-item input {
            padding: 5px;
            height: 58px;
            text-align: center;
            color: #000;
            font-size: .813rem;
            width: calc(20% - 15px);
            margin: 0 15px
        }

        .is-form-confirm .section-form .form__go-back {
            display: block;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            margin: 50px auto 0;
            color: #385bd7
        }

        .is-form-confirm .section-form .form__go-back:hover {
            color: #09299a
        }

        .is-form-confirm .section-form .form__go-back img {
            margin-right: 10px
        }

        .is-form-recovery-2 .section-form .form {
            padding: 70px
        }

        .is-form-recovery-2 .section-form .form__footer .btn {
            max-width: 490px;
            margin: 0 auto
        }

        .page-error {
            max-width: 625px;
            width: 100%;
            margin: 0 auto;
            padding: 93px 0;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .page-error__number {
            font-size: 18rem;
            font-weight: 600;
            color: #385bd7;
            display: block;
            text-align: center;
            line-height: 1.22em
        }

        .page-error__desc {
            font-weight: 600;
            font-size: 1.5rem;
            text-align: center;
            color: #000;
            line-height: 1.425em
        }

        .page-error__desc img {
            display: inline-block;
            width: 30px;
            height: 30px;
            vertical-align: top;
            margin-top: 1px
        }

        .page-error .btn {
            display: block;
            margin: 70px auto 0;
            max-width: 240px;
            width: 100%
        }

        .edit__box:not(:last-child) {
            margin-bottom: 4rem
        }

        .edit__form {
            display: flex;
            justify-content: space-between;
            padding: 40px;
            border-radius: 30px;
            background: #fff;
            margin-top: 51px
        }

        .edit__box_personal .fields__input:first-child {
            margin-right: unset
        }

        .edit__box_personal .fields__item {
            margin: 0 -23px
        }

        .edit__box_personal .fields__input {
            margin: 0 23px;
            width: calc(50% - 46px)
        }

        .edit__box_address .fields {
            max-width: 100%
        }

        .edit__box_address .fields__item {
            margin: 0 -23px
        }

        .edit__box_address .fields__input {
            width: calc(33.33333% - 46px);
            margin: 0 23px
        }

        .edit__box_address .fields__input:first-child {
            margin-right: 0
        }

        .edit__box_address .fields__input:not(:last-child) {
            padding-right: 20px
        }

        .avatar__overlay-btn {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .71);
            opacity: 0;
            visibility: hidden;
            transition: .3s ease;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .fields {
            max-width: 658px;
            width: 100%
        }

        .fields__item {
            display: flex;
            flex-wrap: wrap
        }

        .fields__item:not(:last-child) {
            margin-bottom: 30px
        }

        .fields__input {
            max-width: 306px;
            width: 100%
        }

        .fields__input:first-child {
            margin-right: 46px
        }

        .fields__input_email {
            max-width: 306px
        }

        .fields__input_date {
            position: relative
        }

        .fields__input_date div input {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-weight: 500;
            border: 1px solid #6e7494;
            width: 180px;
            padding: 18px 55px 18px 20px;
            background-size: 13px
        }

        .fields__input_full-tel input {
            padding-left: 37px;
            background-size: 25px
        }

        .fields__datepicker-input {
            display: inline-block;
            position: relative
        }

        .fields__datepicker-input input {
            background: none;
            color: #000;
            font-size: 30px;
            position: relative;
            -webkit-user-select: text !important;
            -moz-user-select: text !important;
            -ms-user-select: text !important;
            user-select: text !important
        }

        .fields__datepicker-arrow {
            width: 25px;
            height: 25px;
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .fields__datepicker-wrap {
            position: absolute;
            z-index: 1;
            top: calc(100% + 10px);
            opacity: 0;
            visibility: hidden;
            transition: .3s ease
        }

        .fields__datepicker-wrap.active {
            opacity: 1;
            visibility: visible
        }

        .fields__datepicker-wrap .datepicker {
            width: 100%;
            max-width: 350px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 5px 10px 0 rgba(0, 0, 0, .1);
            padding: 1rem;
            position: relative
        }

        .fields__datepicker-wrap .datepicker:before {
            content: "";
            display: block;
            position: absolute;
            top: -8px;
            left: 10px;
            width: 0;
            height: 0;
            border-color: transparent transparent #fff;
            border-style: solid;
            border-width: 0 8px 8px
        }

        .fields__datepicker-wrap .datepicker-top {
            margin-bottom: 1rem
        }

        .fields__datepicker-wrap .btn-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 1rem;
            margin-top: -.5rem
        }

        .fields__datepicker-wrap .tag {
            margin-right: .5rem;
            margin-top: .5rem;
            border: 0;
            background-color: red;
            border-radius: 10px;
            padding: .5em .75em;
            font-weight: 600
        }

        .fields__datepicker-wrap .month-selector {
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .fields__datepicker-wrap .arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 0;
            background-color: #fff;
            border-radius: 12px;
            width: 2.5rem;
            height: 2.5rem;
            box-shadow: 0 0 2px 0 rgba(0, 0, 0, .25), 0 0 10px 0 rgba(0, 0, 0, .15)
        }

        .fields__datepicker-wrap .month-name {
            font-weight: 600
        }

        .fields__datepicker-wrap .datepicker-calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-row-gap: 1rem
        }

        .fields__datepicker-wrap .date,
        .fields__datepicker-wrap .day {
            justify-self: center
        }

        .fields__datepicker-wrap .day {
            color: #247cff;
            font-size: .875em;
            font-weight: 500;
            justify-self: center
        }

        .fields__datepicker-wrap .date {
            padding: 0;
            width: 2.25rem;
            height: 2.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            font-weight: 600;
            border: 2px solid transparent;
            background-color: transparent;
            cursor: pointer
        }

        .fields__datepicker-wrap .date:focus,
        .fields__datepicker-wrap .select-date {
            outline: 0;
            color: #247cff;
            border: 2px solid #247cff
        }

        .fields__datepicker-wrap .faded {
            color: rgba(0, 0, 0, .5)
        }

        .fields__datepicker-wrap .current-day {
            color: #fff;
            border-color: #247cff;
            background-color: #247cff
        }

        .fields__datepicker-wrap .current-day:focus {
            background-color: rgba(36, 124, 255, .2);
            border: 2px solid transparent
        }

        .fields__radio-wrap {
            display: flex
        }

        .fields__radio-wrap .fields__label:first-child {
            margin-right: 15px
        }

        .fields__checkmark {
            transition: .3s ease;
            border-radius: 5px
        }

        .fields__radio:checked+.fields__checkmark {
            background: #eaeeff;
            border: 1px solid #385bd7;
            color: #385bd7
        }

        .fields__checkmark {
            width: 59px;
            height: 59px;
            border: 1px solid #6e7494;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            font-size: 1.063rem;
            color: #6e7494;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .fields__title {
            display: block;
            font-size: .813rem;
            line-height: 1.178em;
            margin-bottom: 12px
        }

        .fields__label {
            display: block;
            position: relative;
            border-radius: 3px
        }

        .fields__label input {
            font-weight: 700;
            font-size: 1.125rem;
            line-height: 1.375em;
            width: 100%;
            border-bottom: 1px solid transparent;
            transition: .3s ease;
            padding-right: 25px
        }

        .fields__label input::-moz-placeholder {
            color: #6e7494;
            font-weight: 500
        }

        .fields__label input:-ms-input-placeholder {
            color: #6e7494;
            font-weight: 500
        }

        .fields__label input::placeholder {
            color: #6e7494;
            font-weight: 500
        }

        .fields__label input[type=email]:focus,
        .fields__label input[type=tel]:focus,
        .fields__label input[type=text]:not(#editDate):focus {
            border-bottom: 1px solid #d3d7e9
        }

        .fields__label input[type=tel] {
            padding-right: 0
        }

        .fields__btn {
            color: #385bd7;
            line-height: .928em;
            font-size: .688rem;
            position: absolute;
            bottom: -24px;
            left: 0
        }

        .fields__btn:hover {
            color: #09299a
        }

        .fields__edit {
            position: absolute;
            bottom: 3px;
            right: 0;
            cursor: pointer
        }

        .is-data-editing {
            padding-bottom: 160px
        }

        .is-data-editing .aside-menu {
            margin-top: 245px
        }

        @keyframes skeleton-loader {
            0% {
                left: -350px
            }

            to {
                left: 100%
            }
        }

        .is-frame .main__line {
            overflow: hidden;
            background: #dfe1e9;
            height: 34px;
            width: 100%;
            position: relative
        }

        .is-frame .main__line:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(90deg, #dfe1e9 0, #000 20%, #dfe1e9 40%, #dfe1e9);
            background-repeat: no-repeat;
            background-size: 100%;
            animation: skeleton-loader 3s linear infinite;
            opacity: .08
        }

        .is-frame .thin__line {
            overflow: hidden;
            background: #dfe1e9;
            height: 21px;
            width: 100%;
            position: relative
        }

        .is-frame .thin__line:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(90deg, #dfe1e9 0, #000 20%, #dfe1e9 40%, #dfe1e9);
            background-repeat: no-repeat;
            background-size: 220px 95px;
            animation: skeleton-loader 3s linear infinite;
            opacity: .08
        }

        .is-frame .line_34 {
            max-width: 34px
        }

        .is-frame .line_34_height {
            height: 34px
        }

        .is-frame .line_43 {
            max-width: 43px
        }

        .is-frame .line_43_height {
            height: 43px
        }

        .is-frame .line_45 {
            max-width: 45px
        }

        .is-frame .line_45_height {
            height: 45px
        }

        .is-frame .line_52 {
            max-width: 52px
        }

        .is-frame .line_52_height {
            height: 52px
        }

        .is-frame .line_60 {
            max-width: 60px
        }

        .is-frame .line_60_height {
            height: 60px
        }

        .is-frame .line_87 {
            max-width: 87px
        }

        .is-frame .line_87_height {
            height: 87px
        }

        .is-frame .line_70 {
            max-width: 70px
        }

        .is-frame .line_80 {
            max-width: 80px
        }

        .is-frame .line_90 {
            max-width: 90px
        }

        .is-frame .line_97 {
            max-width: 97px
        }

        .is-frame .line_105 {
            max-width: 105px
        }

        .is-frame .line_111 {
            max-width: 111px
        }

        .is-frame .line_130 {
            max-width: 130px
        }

        .is-frame .line_140 {
            max-width: 140px
        }

        .is-frame .line_156 {
            max-width: 156px
        }

        .is-frame .line_169 {
            max-width: 169px
        }

        .is-frame .line_173 {
            max-width: 173px
        }

        .is-frame .line_180 {
            max-width: 180px
        }

        .is-frame .line_182 {
            max-width: 182px
        }

        .is-frame .line_200 {
            max-width: 200px
        }

        .is-frame .line_205 {
            max-width: 205px
        }

        .is-frame .line_255 {
            max-width: 255px
        }

        .is-frame .line_262 {
            max-width: 262px
        }

        .is-frame .line_272 {
            max-width: 272px
        }

        .is-frame .line_274 {
            max-width: 274px
        }

        .is-frame .line_314 {
            max-width: 314px
        }

        .is-frame .line_318 {
            max-width: 318px
        }

        .is-frame .line_346 {
            max-width: 346px
        }

        .is-frame .line_380 {
            max-width: 380px
        }

        .is-frame .line_407 {
            max-width: 407px
        }

        .is-frame .line_425 {
            max-width: 425px
        }

        .is-frame .line_433 {
            max-width: 433px
        }

        .is-frame .line_449 {
            max-width: 449px
        }

        .is-frame .line_604 {
            max-width: 604px
        }

        .is-frame .line_612 {
            max-width: 612px
        }

        .is-frame .line_711 {
            max-width: 711px
        }

        .is-frame .square {
            overflow: hidden;
            position: relative
        }

        .is-frame .square_34 {
            width: 34px;
            height: 34px;
            background: #dfe1e9
        }

        .is-frame .square_38 {
            width: 38px;
            height: 38px;
            background: #dfe1e9
        }

        .is-frame .square_49 {
            width: 49px;
            height: 49px;
            background: #dfe1e9
        }

        .is-frame .square_174 {
            width: 174px;
            height: 174px;
            background: #dfe1e9
        }

        .is-frame .square_195 {
            width: 195px
        }

        .is-frame .square_195,
        .is-frame .square_195_height {
            height: 195px;
            background: #dfe1e9
        }

        .is-frame .square_262 {
            width: 262px;
            height: 262px;
            background: #dfe1e9
        }

        .is-frame .square_295 {
            width: 295px;
            height: 295px;
            background: #dfe1e9
        }

        .is-frame .square_327 {
            width: 327px;
            height: 327px;
            background: #dfe1e9
        }

        .is-frame .square:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(90deg, #dfe1e9 0, #000 20%, #dfe1e9 40%, #dfe1e9);
            background-repeat: no-repeat;
            background-size: 250% 100%;
            animation: skeleton-loader 3s linear infinite;
            opacity: .08
        }

        .is-frame .circle {
            overflow: hidden;
            position: relative
        }

        .is-frame .circle_63 {
            background: #ced0d8;
            width: 63px;
            height: 63px;
            border-radius: 50%
        }

        .is-frame .circle_74 {
            background: #ced0d8;
            width: 74px;
            height: 74px;
            border-radius: 50%
        }

        .is-frame .circle:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(90deg, #ced0d8 0, #000 20%, #dfe1e9 40%, #ced0d8);
            background-repeat: no-repeat;
            background-size: 150px 100px;
            animation: skeleton-loader 3s linear infinite;
            opacity: .08
        }

        .is-frame .low-cost .description__bottom {
            justify-content: space-between
        }

        .is-frame .low-cost .description__bottom .exp {
            margin-right: 65px;
            flex-basis: 173px;
            display: flex;
            justify-content: flex-end
        }

        .is-frame .low-cost .table-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ced0d8;
            padding: 28px 45px
        }

        .is-frame .low-cost .table-head_left {
            max-width: 319px;
            width: 100%
        }

        .is-frame .low-cost .table-head_right {
            max-width: 525px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .is-frame .low-cost .table-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 28px 45px
        }

        .is-frame .low-cost .table-row_left {
            max-width: 319px;
            width: 100%
        }

        .is-frame .low-cost .table-row_right {
            max-width: 525px;
            width: 100%
        }

        .is-frame .low-cost .to-edit {
            overflow: hidden;
            background: #ced0d8;
            box-shadow: none
        }

        .is-frame .low-cost .to-edit:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(90deg, #ced0d8 0, #000 20%, #dfe1e9 40%, #ced0d8);
            background-repeat: no-repeat;
            background-size: 150px 100px;
            animation: skeleton-loader 2s linear infinite;
            opacity: .08
        }

        .is-frame .low-cost .descr-card {
            background: #ced0d8
        }

        .is-frame .low-cost .descr-card .card-title {
            height: 67px
        }

        .is-frame .low-cost .descr-card .details .thin__line {
            margin-left: 15px
        }

        .is-frame .low-cost .descr-card .square {
            flex-shrink: 0
        }

        .is-frame .low-cost .descr-card .card-content {
            width: 100%
        }

        .is-frame .low-cost .program__list .step .tab-item {
            border-bottom: 0;
            background: #ced0d8;
            justify-content: space-between
        }

        .is-frame .low-cost .program__list .step .tab-item:before {
            display: none
        }

        .is-frame .low-cost .program__list .tab-content {
            background: #ced0d8
        }

        .is-frame .low-cost .program__list .tab-content .main__line:not(:last-child) {
            height: 48px
        }

        .is-frame .low-cost .skills li:before {
            display: none
        }

        .is-frame .low-cost .table {
            background: #ced0d8
        }

        .is-frame .low-cost .best__block {
            background: #ced0d8;
            margin-bottom: 0;
            padding: 50px 45px
        }

        .is-frame .low-cost .best__block .pagination {
            position: static
        }

        .is-frame .low-cost .best__block .gallery__item {
            cursor: default;
            pointer-events: none
        }

        .is-frame .low-cost .best__block .gallery__item:after {
            display: none
        }

        .is-frame .main-page .to-edit {
            overflow: hidden;
            background: #ced0d8;
            box-shadow: none
        }

        .is-frame .main-page .to-edit:after {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(90deg, #ced0d8 0, #000 20%, #dfe1e9 40%, #ced0d8);
            background-repeat: no-repeat;
            background-size: 150px 100px;
            animation: skeleton-loader 2s linear infinite;
            opacity: .08
        }

        .is-frame .main-page .achieves__line_bottom {
            height: 59px
        }

        .is-frame .main-page .profile {
            background: #ced0d8;
            min-height: 530px
        }

        .is-frame .main-page .challenge {
            padding: 0;
            background: transparent
        }

        .is-frame .main-page .challenge .main__line {
            height: 103px
        }

        .is-frame .main-page .courses__item {
            background: #ced0d8
        }

        .is-frame .main-page .courses__item:hover {
            box-shadow: none
        }

        .is-frame .main-page .courses__item .card-bottom__line {
            margin-top: 61px
        }

        .is-frame .main-page .card-long .square_174 {
            margin-right: 38px
        }

        .is-frame .sidebar .square_34 {
            margin-left: auto
        }

        .header {
            background: #fff
        }

        .header .menu {
            display: none
        }

        .header .is-notify {
            cursor: pointer
        }

        .header .is-notify img {
            display: block
        }

        .header-wrapper {
            padding: 0;
            justify-content: space-between
        }

        .header-wrapper,
        .header__item {
            display: flex;
            align-items: center
        }

        .header__item {
            font-size: 13px;
            line-height: 19px;
            letter-spacing: .02em;
            padding: 0 6px 0 35px
        }

        .header__item .dropmenu.is-show {
            visibility: hidden;
            opacity: 0
        }

        .header__logo img {
            display: block
        }

        .header__bell {
            margin-right: 42px
        }

        .header__text {
            margin-right: 18px
        }

        .header__img {
            z-index: 1;
            position: relative;
            cursor: pointer
        }

        .header__img .is-click:before {
            display: block;
            position: absolute;
            top: 0;
            left: 20px;
            width: 45px;
            height: 60px;
            background: #fff;
            z-index: -1
        }

        .header__img .is-click img {
            border-radius: 50%;
            z-index: 1;
            width: 55px;
            height: 55px
        }

        .user-menu {
            position: relative;
            width: 55px
        }

        .user-menu__list {
            border: 1px solid #dee7f5;
            border-left: none
        }

        .user-menu:hover .is-click:before {
            opacity: 0;
            transition-delay: .3s
        }

        .user-menu .is-click {
            z-index: 2;
            position: relative
        }

        .user-menu__list {
            background: #fff;
            padding-right: 55px;
            position: absolute;
            border-radius: 100px;
            top: 0;
            display: flex;
            left: 0;
            transition: .3s ease;
            margin: 0 -5px
        }

        .user-menu__list li {
            margin: -1 5px;
            color: #385bd7
        }

        .user-menu__list li a {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%
        }

        .user-menu__list li:nth-child(2) a {
            background: #eaeeff
        }

        .user-menu__list li:nth-child(3) a {
            background: #ffd8e6
        }

        .notice-list {
            max-width: 90%
        }

        .section-head {
            align-items: center
        }

        .lesson__item:not(:last-child) {
            margin-bottom: 4rem
        }

        .lesson__box {
            background: #fff;
            padding: 40px;
            border-radius: 30px;
            line-height: 1.5em;
            overflow: hidden
        }

        .lesson__box_current {
            padding: 26px 63px 24px 48px;
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative
        }

        .lesson__box_current:after,
        .lesson__box_current:before {
            content: "";
            display: block;
            position: absolute;
            background: hsla(0, 0%, 100%, .5)
        }

        .lesson__box_current:before {
            top: -9px;
            left: 21px;
            height: 9px;
            width: calc(100% - 42px)
        }

        .lesson__box_current:after {
            top: -16px;
            left: 37px;
            height: 16px;
            width: calc(100% - 72px)
        }

        .lesson__box .lesson__name {
            display: flex;
            align-items: center
        }

        .lesson__box .lesson__name h3 {
            font-size: .938rem;
            line-height: 1.2em;
            margin-right: 87px
        }

        .lesson__box .lesson__name span {
            font-size: .813rem;
            line-height: 1.2em;
            font-weight: 500
        }

        .lesson__head {
            margin-bottom: 22px
        }

        .lesson__date {
            font-size: 1.063rem;
            line-height: 1.434em;
            color: #6e7494;
            margin-bottom: 20px
        }

        .lesson__heading {
            font-size: 1.875rem;
            line-height: 1.2em
        }

        .lesson__desc {
            font-size: .813rem;
            line-height: 1.6em;
            width: 80%
        }

        .lesson__video {
            margin: 20px 0;
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 15px
        }

        .lesson__video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-width: 0;
            outline-width: 0
        }

        .lesson__mentor {
            justify-content: space-between
        }

        .lesson__mentor,
        .lesson__mentor-box,
        .lesson__mentor-name {
            display: flex;
            align-items: center
        }

        .lesson__mentor-name span {
            margin-left: 14px;
            color: #6e7494
        }

        .lesson__mentor-time {
            color: #6e7494;
            margin-left: 28px
        }

        .lesson__name {
            display: flex
        }

        .lesson__name h3 {
            margin-right: 87px;
            font-size: .938rem;
            line-height: 1.2em
        }

        .lesson__name span {
            font-size: .813rem;
            line-height: 1.178rem;
            white-space: nowrap
        }

        .lesson__open-btn {
            position: absolute;
            right: 45px;
            top: 20px
        }

        .lesson__open-btn img {
            display: block
        }

        .lesson__accord-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 39px
        }

        .lesson__accord-numbers {
            display: flex;
            flex-wrap: wrap;
            font-size: .813rem;
            color: #6e7494
        }

        .lesson__accord-numbers li:not(:last-child) {
            margin-right: 42px
        }

        .lesson__accord-list {
            background: #fff
        }

        .lesson__accord-item.active .lesson__accord-content {
            display: block
        }

        .lesson__accord-item.active .lesson__accord-open {
            transform: rotate(45deg)
        }

        .lesson__accord-heading {
            cursor: pointer;
            padding: 26px 63px 24px 48px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f0f1f7;
            position: relative
        }

        .lesson__accord-open {
            position: absolute;
            right: 45px;
            top: 27px
        }

        .lesson__accord-open img {
            display: block
        }

        .lesson__accord-content {
            display: none;
            padding: 24px 54px 27px
        }

        .lesson__accord-content ol {
            padding: 0;
            margin: 0;
            list-style-type: none;
            counter-reset: my-counter
        }

        .lesson__accord-content ol li {
            position: relative;
            padding-left: 24px
        }

        .lesson__accord-content .lock,
        .lesson__accord-content .time {
            pointer-events: none
        }

        .lesson__accord-content ol li:hover:not(.lock):not(.target) {
            color: #385bd7
        }

        .lesson__accord-content ol li:hover:not(.current) {
            color: #ff7ead
        }

        .lesson__accord-content ol li:not(:last-child) {
            margin-bottom: 13px
        }

        .lesson__accord-content ol li.done:after {
            content: "";
            display: block;
            position: absolute;
            top: 2px;
            left: 0;
            width: 13px;
            height: 13px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIuMzMyMDMgN0w1LjgzMjAzIDEwLjVMMTEuNjY1NCAzLjUiIHN0cm9rZT0iYmxhY2siIHN0cm9rZS13aWR0aD0iMS4yIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==)
        }

        .lesson__accord-content ol li.current {
            color: #385bd7
        }

        .lesson__accord-content ol li.target {
            color: #fe337c
        }

        .lesson__accord-content ol li.lock,
        .lesson__accord-content ol li.time {
            color: #6e7494
        }

        .lesson__accord-content ol li.lock:after {
            content: "";
            display: block;
            position: absolute;
            top: 2px;
            left: 0;
            width: 13px;
            height: 13px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEiIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxMSAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTguMzMzMzMgNC4yMDg5OEgxLjkxNjY3QzEuNDEwNDEgNC4yMDg5OCAxIDQuNjE5MzkgMSA1LjEyNTY1VjguNzkyMzJDMSA5LjI5ODU4IDEuNDEwNDEgOS43MDg5OSAxLjkxNjY3IDkuNzA4OTlIOC4zMzMzM0M4LjgzOTU5IDkuNzA4OTkgOS4yNSA5LjI5ODU4IDkuMjUgOC43OTIzMlY1LjEyNTY1QzkuMjUgNC42MTkzOSA4LjgzOTU5IDQuMjA4OTggOC4zMzMzMyA0LjIwODk4WiIgc3Ryb2tlPSIjNkU3NDk0IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTIuMzc1IDIuMzc1QzIuMzc1IDIuMDEwMzMgMi41MTk4NyAxLjY2MDU5IDIuNzc3NzMgMS40MDI3M0MzLjAzNTU5IDEuMTQ0ODcgMy4zODUzMyAxIDMuNzUgMUg2LjVDNi44NjQ2NyAxIDcuMjE0NDEgMS4xNDQ4NyA3LjQ3MjI3IDEuNDAyNzNDNy43MzAxMyAxLjY2MDU5IDcuODc1IDIuMDEwMzMgNy44NzUgMi4zNzVWNC4yMDgzM0gyLjM3NVYyLjM3NVoiIHN0cm9rZT0iIzZFNzQ5NCIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=);
            background-repeat: no-repeat;
            background-position: 50%
        }

        .lesson__accord-content ol li.current:after {
            content: "";
            display: block;
            position: absolute;
            top: 2px;
            left: 0;
            width: 13px;
            height: 13px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTMiIGhlaWdodD0iMTMiIHZpZXdCb3g9IjAgMCAxMyAxMyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMuMjUgMi4xNjYwMlYxMC44MzI3IiBzdHJva2U9IiMzODVCRDciIHN0cm9rZS13aWR0aD0iMS4yIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTEwLjgzMzMgNi41TDMuMjUgMTAuODMzMyIgc3Ryb2tlPSIjMzg1QkQ3IiBzdHJva2Utd2lkdGg9IjEuMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik0xMC44MzMzIDYuNDk5MzVMMy4yNSAyLjE2NjAyIiBzdHJva2U9IiMzODVCRDciIHN0cm9rZS13aWR0aD0iMS4yIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==)
        }

        .lesson__accord-content ol li.target:after {
            content: "";
            display: block;
            position: absolute;
            top: 2px;
            left: 0;
            width: 13px;
            height: 13px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iMTEiIHZpZXdCb3g9IjAgMCAxMCAxMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEuMTY2MDIgNy4xMjVIOC42NzYyMkM4Ljc3OTE1IDcuMTI0OTYgOC44Nzk5MyA3LjA5NTYgOC45NjY3NyA3LjA0MDM1QzkuMDUzNjEgNi45ODUxMSA5LjEyMjkxIDYuOTA2MjYgOS4xNjY1NiA2LjgxMzA1QzkuMjEwMjEgNi43MTk4NCA5LjIyNjQgNi42MTYxMiA5LjIxMzI0IDYuNTE0MDVDOS4yMDAwNyA2LjQxMTk3IDkuMTU4MDkgNi4zMTU3NSA5LjA5MjIyIDYuMjM2NjdMNy4xMjQzNSAzLjg3NUw5LjA5MjIyIDEuNTEzMzNDOS4xNTgwOSAxLjQzNDI1IDkuMjAwMDcgMS4zMzgwMyA5LjIxMzI0IDEuMjM1OTVDOS4yMjY0IDEuMTMzODggOS4yMTAyMSAxLjAzMDE2IDkuMTY2NTYgMC45MzY5NDlDOS4xMjI5MSAwLjg0MzczOSA5LjA1MzYxIDAuNzY0ODk0IDguOTY2NzcgMC43MDk2NDdDOC44Nzk5MyAwLjY1NDQgOC43NzkxNSAwLjYyNTAzOSA4LjY3NjIyIDAuNjI1SDEuMTY2MDJWMTAuMzc1IiBzdHJva2U9IiNGRTMzN0MiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K);
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: contain
        }

        .lesson__accord-content ol li.time:after {
            content: "";
            display: block;
            position: absolute;
            top: 2px;
            left: 0;
            width: 13px;
            height: 13px;
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTMiIGhlaWdodD0iMTMiIHZpZXdCb3g9IjAgMCAxMyAxMyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTYuNTAwNjUgMTEuOTE3M0M5LjQ5MjE5IDExLjkxNzMgMTEuOTE3MyA5LjQ5MjE5IDExLjkxNzMgNi41MDA2NUMxMS45MTczIDMuNTA5MTEgOS40OTIxOSAxLjA4Mzk4IDYuNTAwNjUgMS4wODM5OEMzLjUwOTExIDEuMDgzOTggMS4wODM5OCAzLjUwOTExIDEuMDgzOTggNi41MDA2NUMxLjA4Mzk4IDkuNDkyMTkgMy41MDkxMSAxMS45MTczIDYuNTAwNjUgMTEuOTE3M1oiIHN0cm9rZT0iIzZFNzQ5NCIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik04LjEyNSA4LjY2NjY3TDYuODE3NDIgNy4zNTkwOEM2LjYxNDI0IDcuMTU1OTcgNi41MDAwNiA2Ljg4MDQ2IDYuNSA2LjU5MzE3VjMuMjUiIHN0cm9rZT0iIzZFNzQ5NCIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo=)
        }

        .lesson__accord-content li:before {
            margin-right: 16px;
            content: counter(my-counter);
            counter-increment: my-counter
        }

        .lesson__tabs-head ul {
            display: flex;
            flex-wrap: wrap;
            font-weight: 600
        }

        .lesson__tabs-head ul li {
            color: #6e7494
        }

        .lesson__tabs-head ul li.active {
            color: #000
        }

        .lesson__tabs-head ul li:not(:last-child) {
            margin-right: 51px
        }

        .lesson__tabs-head ul li a {
            font-size: 1.875rem;
            line-height: 1.2em
        }

        .lesson__tabs-content {
            background: #fff;
            padding: 40px;
            margin-top: 51px;
            border-radius: 30px
        }

        .lesson__tabs-item {
            display: none
        }

        .lesson__tabs-item.active {
            display: block
        }

        .lesson__tabs-info {
            font-size: .813rem;
            line-height: 1.4em
        }

        .lesson__tabs-info a {
            color: #385bd7
        }

        .lesson__tabs-info a:hover {
            color: #09299a
        }

        .lesson__tabs-files {
            margin-top: 28px;
            color: #385bd7
        }

        .lesson__tabs-files li:not(:last-child) {
            margin-bottom: 10px
        }

        .lesson__tabs-files li:hover {
            color: #09299a
        }

        .lesson__tabs-files a {
            display: flex;
            align-items: center;
            border-radius: 3px
        }

        .lesson__tabs-files a:hover {
            background: #f4f6ff
        }

        .lesson__tabs-files a:active {
            background: #eff1fd
        }

        .lesson__tabs-files a img {
            margin-right: 15px
        }

        .lesson__title {
            font-size: 1.875rem;
            margin-bottom: 51px
        }

        .lesson__homework {
            display: flex;
            align-items: center;
            margin-bottom: 51px
        }

        .lesson__homework-list {
            display: flex
        }

        .lesson__homework-list li img {
            display: block;
            max-width: 47px;
            width: 100%;
            max-height: 47px;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 3px
        }

        .lesson__homework-list li:not(:last-child) {
            margin-right: 15px
        }

        .lesson__data-list {
            display: flex;
            margin-left: 20px;
            color: #6e7494;
            font-size: 1.063rem;
            letter-spacing: .02em
        }

        .lesson__data-list li:not(:last-child) {
            margin-right: 42px
        }

        .lesson__data-list span {
            color: #385bd7
        }

        .lesson__form {
            border: 1px solid rgba(110, 116, 148, .3);
            padding: 30px 21px 21px 30px;
            border-radius: 20px
        }

        .lesson__form_result {
            border: 1px solid rgba(17, 184, 74, .5);
            padding: 35px
        }

        .lesson__form_thanks {
            border: 1px solid rgba(17, 184, 74, .5);
            background: rgba(228, 255, 237, .25);
            padding: 67px 35px
        }

        .lesson__form_error {
            border: 1px solid #fe3355;
            background: #fbf2f7;
            padding: 67px 35px
        }

        .lesson__textarea {
            width: 100%;
            height: 118px;
            padding-right: 9px;
            margin-bottom: 10px;
            font-size: .813rem
        }

        .lesson__textarea::-moz-placeholder {
            color: #6e7494
        }

        .lesson__textarea:-ms-input-placeholder {
            color: #6e7494
        }

        .lesson__textarea::placeholder {
            color: #6e7494
        }

        .lesson__form-instruments {
            display: flex;
            justify-content: space-between
        }

        .lesson__form-instruments ul {
            display: flex;
            align-items: center
        }

        .lesson__form-instruments ul li:not(:last-child) {
            margin-right: 22px
        }

        .lesson__form-instruments ul li img,
        .lesson__submit-btn img {
            display: block
        }

        .lesson__letters {
            margin-bottom: 30px
        }

        .lesson__letters-item {
            display: flex
        }

        .lesson__letters-item:not(:last-child) {
            margin-bottom: 20px
        }

        .lesson__letters-message {
            position: relative
        }

        .lesson__letters-text {
            padding: 20px 30px;
            margin-bottom: 15px;
            border-radius: 0 10px 10px 10px
        }

        .user-letter .lesson__letters-text {
            border-radius: 10px 0 10px 10px
        }

        .lesson__letters-date {
            font-size: .688rem;
            color: #6e7494
        }

        .lesson__letters-photo {
            max-width: 47px;
            min-width: 47px;
            width: 100%
        }

        .lesson__letters-photo img {
            display: block;
            width: 100%;
            border-radius: 5px
        }

        .lesson__form-title {
            font-size: .938rem
        }

        .lesson__numbers-radio {
            margin-top: 24px;
            display: flex;
            flex-wrap: wrap
        }

        .lesson__numbers-radio .fields__label:not(:last-child) {
            margin-right: 15px
        }

        .lesson__numbers-radio .fields__checkmark {
            width: 41px;
            height: 41px;
            color: #000
        }

        .lesson__description_red {
            padding: 35px;
            background: rgba(245, 223, 234, .4);
            border-radius: 10px
        }

        .lesson__description_no-task .lesson__btn {
            margin-top: 28px
        }

        .lesson__description-wrap {
            font-weight: 600;
            font-size: .938rem;
            line-height: 1.4em
        }

        .lesson__btn {
            color: #fe337c;
            border: 1px solid #fe337c;
            background: none;
            padding: 20px 93px;
            display: inline-block;
            font-size: .813rem;
            text-align: center;
            font-family: "Montserrat", sans-serif;
            border-radius: 10px
        }

        .lesson__btn:hover,
        .lesson__btn_done {
            background: #fe337c;
            color: #fff
        }

        .lesson__btn_done:hover {
            background: #ff196c
        }

        .lesson__quiz {
            background: #fff;
            border-radius: 30px;
            padding: 40px
        }

        .lesson__quiz .lesson__btn-wrap {
            padding-top: 40px;
            border-top: 1px solid #f0f1f7
        }

        .lesson__quiz .lesson__description-wrap {
            margin-bottom: 28px
        }

        .lesson__check {
            padding-bottom: 40px
        }

        .lesson__label-check {
            display: flex;
            align-items: center;
            padding: 14px 14px 8px 0;
            cursor: pointer
        }

        .lesson__label-check:hover {
            color: #385bd6
        }

        .lesson__label-check .checkbox_check {
            margin-right: 15px
        }

        .lesson__btn-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .lesson__quant {
            font-size: 1rem;
            color: #6e7494;
            padding: 18px 22px;
            background: #eaeeff;
            min-width: 106px;
            text-align: center;
            border-radius: 10px
        }

        .lesson__check-photo {
            margin-bottom: 38px
        }

        .lesson__check-photo img {
            display: block;
            width: 100%;
            max-width: 321px
        }

        .lesson__quiz-result .lesson__quant {
            display: inline-block;
            padding: 13px 20px
        }

        .lesson__quiz-result .lesson__quant span {
            font-size: 1.875rem;
            font-weight: 500;
            line-height: 1.2em
        }

        .lesson__quiz-result.great .lesson__quant {
            background: #e4ffed
        }

        .lesson__quiz-result.great .lesson__quant span,
        .lesson__quiz-result.great .lesson__quiz-honor span {
            color: #11b84a
        }

        .lesson__quiz-result.good .lesson__quant {
            background: #fff6d6
        }

        .lesson__quiz-result.good .lesson__quant span,
        .lesson__quiz-result.good .lesson__quiz-honor span {
            color: #ffc940
        }

        .lesson__quiz-result.bad .lesson__quant {
            background: #ffd8e6
        }

        .lesson__quiz-result.bad .lesson__quant span,
        .lesson__quiz-result.bad .lesson__quiz-honor span {
            color: #fe337c
        }

        .lesson__quiz-honor {
            font-size: .813rem;
            font-weight: 500
        }

        .lesson__quiz-honor span {
            font-size: 1.125rem;
            display: block;
            margin: 28px 0 10px;
            font-weight: 600
        }

        .lesson__item_result .checkbox,
        .lesson__item_result .radio__btn {
            pointer-events: none
        }

        .lesson__quiz_top {
            padding-top: 48px
        }

        .lesson__quiz-title {
            font-size: 1.125rem;
            line-height: 1.2em;
            margin-bottom: 28px
        }

        .lesson__check-img {
            max-width: 250px;
            width: 100%
        }

        .checkmark,
        .lesson__check-img img {
            display: block
        }

        .checkmark {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            opacity: .2;
            border: 1px solid #6e7494;
            box-sizing: border-box;
            margin-right: 20px;
            flex-shrink: 0
        }

        .not-prop {
            background: rgba(245, 223, 234, .5)
        }

        .section-payment {
            padding-top: 100px;
            padding-bottom: 190px
        }

        .section-payment .wrapper {
            max-width: 1346px
        }

        .payment {
            display: flex;
            justify-content: space-between
        }

        .payment__form {
            background: #fff;
            padding: 90px 100px 90px 90px;
            max-width: 963px;
            width: 100%;
            margin-right: 30px
        }

        .payment__form__content .payment-check {
            display: flex;
            align-items: center;
            font-size: 1.063rem
        }

        .payment__form__content .payment-check .tooltip_mobile {
            display: none
        }

        .payment__form__content .payment-check>span:not(.tooltip_mobile) {
            line-height: 1.438rem
        }

        .payment__form__content .payment-check i {
            position: relative;
            margin-left: 15px
        }

        .payment__form__content .payment-check i:hover span {
            opacity: 1;
            visibility: visible;
            transition: all .2s ease
        }

        .payment__form__content .payment-check i span {
            position: absolute;
            left: 25px;
            background: #f0f1f7;
            padding: 10px 25px;
            top: 50%;
            transform: translateY(-50%);
            width: -moz-max-content;
            width: max-content;
            font-weight: 500;
            font-size: .688rem;
            font-style: normal;
            max-width: 425px;
            visibility: hidden;
            opacity: 0;
            transition: all .2s ease;
            line-height: 1.138rem
        }

        .payment__form__content .payment-check:not(:last-child) {
            margin-bottom: 20px
        }

        .payment__form__bottom {
            display: flex;
            align-items: center;
            margin-top: 50px
        }

        .payment__subtitle {
            margin-bottom: 25px;
            font-weight: 500;
            font-size: 1.063rem;
            line-height: 1.338em;
            letter-spacing: .02em;
            color: #6e7494
        }

        .payment__title {
            margin-bottom: 50px;
            font-weight: 600;
            font-size: 1.875rem;
            line-height: 1.26em;
            color: #000
        }

        .payment__stepline {
            margin-bottom: 70px
        }

        .payment__stepline,
        .payment__stepline__item,
        .payment__stepline__item span {
            display: flex;
            align-items: center
        }

        .payment__stepline__item span {
            justify-content: center;
            font-weight: 500;
            font-size: 1.063rem;
            line-height: 1.338em;
            width: 50px;
            height: 50px;
            border: 1px solid #6e7494;
            box-sizing: border-box;
            margin-right: 20px;
            color: #6e7494
        }

        .payment__stepline__item p {
            color: #6e7494;
            font-weight: 500;
            font-size: .813rem;
            line-height: 1.188em;
            letter-spacing: .02em
        }

        .payment__stepline__item_current span {
            border-color: #000;
            color: #000
        }

        .payment__stepline__item_current p {
            color: #000
        }

        .payment__stepline__item_success span {
            border-color: #11b84a;
            color: #11b84a
        }

        .payment__stepline__item_success p {
            color: #11b84a
        }

        .payment__stepline__item:not(:last-child) {
            margin-right: 45px
        }

        .payment__input {
            max-width: 250px;
            width: 100%;
            font-weight: 500;
            font-size: 1.063rem;
            line-height: 1.338em;
            letter-spacing: .02em;
            border: 0;
            border-bottom: 1px solid transparent;
            transition: all .2s ease
        }

        .payment__input_phone {
            padding-left: 37px
        }

        .payment__input::-moz-placeholder {
            font-weight: 500;
            font-size: 1.063rem;
            line-height: 1.338em;
            letter-spacing: .02em;
            color: #000
        }

        .payment__input:-ms-input-placeholder {
            font-weight: 500;
            font-size: 1.063rem;
            line-height: 1.338em;
            letter-spacing: .02em;
            color: #000
        }

        .payment__input::placeholder {
            font-weight: 500;
            font-size: 1.063rem;
            line-height: 1.338em;
            letter-spacing: .02em;
            color: #000
        }

        .payment__input:hover {
            transition: all .2s ease;
            border-color: #9fa6ce
        }

        .payment__input:focus {
            transition: all .2s ease;
            border-color: #000
        }

        .payment__input-wrapper {
            display: flex;
            width: 100%
        }

        .payment__input-wrapper:not(:first-child) {
            margin-top: 25px
        }

        .payment__label {
            margin-right: 60px;
            min-width: 80px;
            display: block;
            font-weight: 500;
            font-size: 1.063rem;
            line-height: 1.338em;
            letter-spacing: .02em
        }

        .payment__offer {
            display: flex;
            align-items: center;
            margin-top: 70px;
            margin-bottom: 50px
        }

        .payment__offer__discount {
            background: #eaeeff;
            padding: 20px 25px;
            font-weight: 500;
            font-size: .813rem;
            line-height: 1.588em;
            letter-spacing: .02em
        }

        .payment__offer__discount span {
            color: #fe337c
        }

        .payment__offer__promocode {
            margin-left: 40px;
            font-size: .813rem;
            line-height: 19px;
            line-height: 1.588em;
            letter-spacing: .02em;
            color: #385bd7;
            border-bottom: 1px dashed #385bd7
        }

        .payment__offer__promocode:hover {
            color: #09299a
        }

        .payment__total {
            margin-left: 35px;
            font-weight: 600;
            font-size: 1.875rem;
            line-height: 1.25em;
            color: #fe337c
        }

        .payment__info {
            max-width: 263px;
            padding-top: 125px
        }

        .payment__info__title {
            font-weight: 600;
            font-size: 1.125rem;
            line-height: 1.455em;
            margin-top: 41px
        }

        .payment__info__title:first-child {
            margin-top: 0;
            margin-bottom: 25px
        }

        .payment__slider {
            display: flex;
            height: 47px
        }

        .payment__slider__arrows {
            height: 47px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-left: 25px
        }

        .payment__slider__item img {
            height: 100%
        }

        .payment__slider__item:not(:last-child) {
            margin-right: 15px
        }

        .payment__slider-wrapper {
            display: flex;
            align-items: center
        }

        .payment__btn {
            max-width: 240px
        }

        .payment__tabs-head {
            display: flex;
            align-items: center;
            margin-bottom: 30px
        }

        .payment__tabs-head a {
            font-weight: 600;
            font-size: 1.125rem;
            line-height: 1.375em;
            color: #6e7494
        }

        .payment__tabs-head a.active {
            color: #000
        }

        .payment__tabs-head a:not(:last-child) {
            margin-right: 50px
        }

        .payment__tabs-label {
            max-width: 490px
        }

        .payment__tabs-label input[type=radio] {
            display: none
        }

        .payment__tabs-label input[type=radio]:checked~label {
            background: rgba(228, 255, 237, .25);
            border-color: #11b84a;
            transition: all .2s ease
        }

        .payment__tabs-label__img {
            height: 36px;
            width: 36px;
            margin-right: 8px;
            display: flex;
            align-items: center
        }

        .payment__tabs-label label:not(.fields__label) {
            transition: all .2s ease;
            width: 100%;
            display: flex;
            align-items: center;
            cursor: pointer;
            border: 1px solid rgba(110, 116, 148, .3);
            box-sizing: border-box;
            padding: 15px 25px
        }

        .payment__tabs-label label:not(.fields__label)>span {
            font-size: .813rem
        }

        .payment__tabs-label:not(:last-child) {
            margin-bottom: 25px
        }

        .payment__tabs-label__additional {
            display: none;
            margin-top: 25px
        }

        .payment__tabs-label__additional.open {
            display: block
        }

        .payment__additional-title {
            font-size: .813rem;
            margin-bottom: 15px;
            display: block
        }

        .payment__additional-labels {
            display: flex
        }

        .payment__additional-labels label:not(:last-child) {
            margin-right: 15px
        }

        .payment__additional-info {
            margin-top: 18px;
            display: flex;
            align-items: center
        }

        .payment__additional-info span {
            font-size: .813rem
        }

        .payment__additional-info b {
            font-size: 1.125rem;
            margin-left: 7px;
            font-weight: 600
        }

        .payment__agreement {
            margin-left: 20px;
            max-width: 350px;
            font-size: .813rem
        }

        .payment__agreement a {
            color: #385bd7
        }

        .payment__agreement a:hover {
            color: #09299a
        }

        .payment_back {
            color: #385bd7;
            margin-top: 50px;
            display: flex;
            align-items: center;
            width: -moz-max-content;
            width: max-content
        }

        .payment_back img {
            margin-right: 10px
        }

        .payment_back:hover {
            color: #09299a
        }

        .payment__message_success .payment__message-title {
            color: #11b84a
        }

        .payment__message_error .payment__message-title {
            color: #ffc940
        }

        .payment__message_error .payment__contacts {
            margin-top: 50px
        }

        .payment__message-title {
            font-size: 1.5rem;
            line-height: 1.213em;
            margin-bottom: 17px
        }

        .payment__message-text {
            font-size: 1.063rem;
            line-height: 1.555em;
            margin-bottom: 40px
        }

        .payment__message-info {
            background: #eaeeff;
            padding: 35px;
            max-width: 555px;
            width: 100%;
            margin-bottom: 70px
        }

        .payment__message-info p {
            font-size: .813rem;
            line-height: 1.488em;
            margin-bottom: 25px
        }

        .payment__message-info .btn {
            font-size: .813rem;
            max-width: 325px;
            width: 100%;
            padding: 20px 5px
        }

        .payment__message-btns {
            display: flex;
            align-items: center
        }

        .payment__message-btns .invert-btn {
            width: 100%;
            max-width: 265px;
            margin-right: 25px
        }

        .payment__message-btns .to-call-btn {
            max-width: 235px;
            width: 100%;
            padding: 20px 15px
        }

        .payment__contacts-title {
            font-size: 1.5rem;
            margin-bottom: 20px
        }

        .payment__contacts-links {
            display: flex;
            align-items: center
        }

        .payment__contacts-links a {
            font-size: 1.063rem;
            color: #000;
            display: block
        }

        .payment__contacts-links a:not(:last-child) {
            margin-right: 30px
        }

        .payment__contacts-links a:hover {
            color: #464646
        }

        .radio__btn input[type=radio]:checked+.checkmark {
            border: 10px solid #385bd7;
            opacity: 1
        }

        html.is-overflow {
            overflow: hidden
        }

        .modal {
            color: #000;
            position: absolute;
            left: 50%;
            top: 50%;
            width: 100%;
            max-width: 845px;
            padding: 90px;
            box-sizing: border-box;
            background: #fff;
            transform: translate(-50%, -50%)
        }

        .modal-wrapper {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 99999;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .71);
            overflow: auto
        }

        .modal-wrapper_open {
            display: block
        }

        .modal__title {
            font-size: 1.5rem;
            line-height: 1.24em;
            margin-bottom: 15px
        }

        .modal__subtitle {
            font-size: 1.063rem;
            line-height: 1.3em;
            letter-spacing: .02em;
            color: #6e7494
        }

        .modal__form {
            margin: 45px 0;
            display: flex;
            align-items: center
        }

        .modal__form .form__fields {
            max-width: 400px;
            width: 100%;
            margin-right: 25px
        }

        .modal__form .form__fields-item {
            position: relative
        }

        .modal__form .form__fields-item_phone input {
            padding-left: 70px
        }

        .modal__form input {
            border-radius: 0;
            width: 100%;
            padding: 20px 30px;
            border: 1px solid rgba(110, 116, 148, .3);
            box-sizing: border-box;
            color: #000;
            font-size: .813rem;
            letter-spacing: .02em
        }

        .modal__form input::-moz-placeholder {
            color: #6e7494
        }

        .modal__form input:-ms-input-placeholder {
            color: #6e7494
        }

        .modal__form input::placeholder {
            color: #6e7494
        }

        .modal__form .form-country {
            position: absolute;
            top: 50%;
            left: 35px;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center
        }

        .modal__form .form-country span {
            margin-left: 5px;
            cursor: pointer
        }

        .modal__contacts-title {
            font-size: 1.125rem;
            margin-bottom: 15px;
            line-height: 1.275em
        }

        .modal__contacts-links {
            display: flex;
            align-items: center;
            margin: 0 -15px;
            overflow: hidden
        }

        .modal__contacts-links a {
            font-size: .813rem;
            display: block;
            margin: 0 15px
        }

        .modal__contacts-links a:hover {
            color: #464646
        }

        .call-btn {
            position: fixed;
            left: 30px;
            bottom: 30px;
            width: 70px;
            height: 70px;
            background: #385bd7;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box
        }

        @media screen and (max-width:1400px) {
            .payment__form {
                padding: 90px
            }

            .main-page .to-edit {
                display: flex
            }

            .menu {
                flex-basis: 750px
            }

            .sidebar {
                display: none !important
            }
        }

        @media screen and (max-width:1270px) {
            .payment__contacts-links a {
                font-size: .8rem
            }

            .payment__form {
                padding: 40px 25px
            }

            .payment__stepline__item span {
                flex-shrink: 0
            }

            .payment__stepline__item:not(:last-child) {
                margin-right: 20px
            }

            .payment__offer {
                flex-direction: column;
                align-items: flex-start
            }

            .payment__offer__promocode {
                margin-left: 0;
                margin-top: 10px
            }

            .main-page .to-edit {
                right: -75px
            }

            .is-frame .low-cost .table-head_left,
            .is-frame .low-cost .table-row_left {
                margin-right: 10px
            }

            .is-frame .low-cost .table-head_right .thin__line:not(:last-child) {
                margin-right: 5px
            }

            .lesson__data-list {
                flex-wrap: wrap
            }

            .lesson__data-list li:first-child {
                width: 100%;
                margin-right: 0;
                margin-bottom: 5px
            }

            .lesson__numbers-radio {
                margin: 15px -7px 0
            }

            .lesson__numbers-radio .fields__label,
            .lesson__numbers-radio .fields__label:not(:last-child) {
                margin: 7px
            }
        }

        @media screen and (max-width:992px) {
            .header__item .dropmenu.is-show {
                visibility: visible;
                opacity: 1
            }

            .header__item {
                padding: 0
            }

            .call-btn {
                left: 20px
            }

            .modal {
                width: calc(100% - 20px)
            }

            .payment__contacts-links a {
                font-size: 1.063rem
            }

            .payment {
                flex-direction: column
            }

            .payment__form {
                margin-right: 0
            }

            .payment__info {
                padding-top: 40px;
                max-width: 320px
            }

            .page-error .btn {
                margin-top: 28px
            }

            .page-error {
                padding: 37px 0
            }

            .is-form-register .section-form {
                padding-top: 52px;
                padding-bottom: 60px
            }

            .wrapper {
                padding-left: 20px;
                padding-right: 20px;
                margin: 0 auto
            }

            .back-link {
                margin-right: 10px
            }

            .main-page .to-edit {
                width: 40px;
                height: 40px;
                right: 0;
                top: -50px
            }

            .full-cost .to-edit,
            .low-cost .to-edit,
            .single-lesson .to-edit {
                right: 20px
            }

            .hamburger {
                display: block
            }

            .logo img {
                width: 80px
            }

            .logo__text {
                font-size: 8px;
                margin-left: 8px
            }

            .header__nav {
                display: none
            }

            .header .menu {
                flex-basis: auto;
                opacity: 0;
                box-shadow: 7px 7px 0 rgba(220, 221, 228, .58);
                transition: opacity .2s linear, top .2s linear, visibility .2s linear;
                pointer-events: none;
                visibility: hidden;
                top: 69px;
                display: block;
                z-index: 5;
                position: absolute;
                background-color: #fff;
                color: #6e7494;
                right: 10px;
                padding: 12px
            }

            .menu.is-show {
                visibility: visible;
                opacity: 1;
                top: 79px;
                pointer-events: auto
            }

            .main {
                margin-right: 0;
                width: 100%
            }

            .my-achieves__wrap {
                flex-direction: column;
                align-items: center
            }

            .descr {
                width: 100%;
                max-width: 495px;
                margin: 0 0 30px;
                min-height: 290px
            }

            .contents,
            .descr {
                flex-basis: auto
            }

            .contents__list {
                margin: 0 auto;
                max-width: 530px
            }

            .new-challenges .challenge-include {
                flex-wrap: wrap;
                padding-right: 110px
            }

            .new-challenges .challenge-details {
                flex-basis: 100%;
                order: 1;
                justify-content: flex-start;
                margin-left: 80px
            }

            .new-challenges .challenge-details>span {
                margin-right: 12px
            }

            .new-challenges .challenge-text {
                margin-right: 10px;
                flex-shrink: 2
            }

            .new-challenges .challenge-btns {
                flex-basis: auto;
                width: 70px;
                position: absolute;
                right: 38px
            }

            .description__bottom.changed .timer-wrap {
                margin-bottom: 0
            }

            .timer-wrap {
                padding: 0;
                flex-basis: 270px
            }

            .edit__box_personal .edit__form {
                flex-direction: column
            }

            .edit__form {
                padding: 25px
            }

            .fields__btn {
                bottom: -15px
            }
        }

        @media screen and (max-width:840px) {
            .is-frame .about .descr-card .square_327 {
                width: 40%;
                height: auto
            }

            .graphics,
            .is-frame .low-cost .descr-card .square_295,
            .is-frame .main-page .card-long .square {
                display: none
            }

            .specific__list {
                display: block
            }

            .specific__item {
                margin-bottom: 20px
            }

            .about .card-photo {
                width: 40%;
                height: 40%
            }

            .about .card-list {
                flex-wrap: wrap
            }

            .about .card-list li {
                margin-bottom: 12px
            }

            .gallery__item {
                width: calc(50% - 4px)
            }

            .lines-view .cell-third img {
                width: 60%
            }
        }

        @media screen and (max-width:768px) {
            .call-btn {
                width: 50px;
                height: 50px
            }

            .payment__form__content .payment-check i span {
                max-width: 300px;
                left: 50%;
                transform: translate(-50%, -50%)
            }

            .payment__form {
                padding: 25px 15px
            }

            .payment__subtitle {
                margin-bottom: 15px
            }

            .payment__title {
                margin-bottom: 30px
            }

            .payment__stepline {
                margin-bottom: 42px
            }

            .payment__input-wrapper:not(:first-child) {
                margin-top: 15px
            }

            .payment__offer {
                margin-top: 42px;
                margin-bottom: 30px
            }

            .radio-label {
                box-sizing: border-box
            }

            .section-payment {
                padding-top: 60px;
                padding-bottom: 114px
            }

            .header__text {
                display: none
            }

            .notice {
                margin-right: 20px
            }

            .user__name {
                display: none
            }

            .basics .courses {
                justify-content: center
            }

            .basics .courses__item {
                width: calc(100% - 28px)
            }

            .edit__box_personal .fields__input {
                margin: 0 23px;
                width: calc(100% - 46px)
            }

            .edit__box_personal .fields__item {
                flex-wrap: nowrap
            }

            .edit__box_personal .fields__input {
                width: calc(50% - 35px)
            }

            .lesson__box,
            .lesson__tabs-content {
                padding: 25px
            }

            .lesson__quiz .lesson__description {
                padding-top: 25px
            }

            .lesson__check {
                padding: 0 25px 40px
            }

            .lesson__item:not(:last-child) {
                margin-bottom: 3rem
            }

            .lesson__title {
                margin-bottom: 25px
            }

            .lesson__tabs-content {
                margin-top: 25px
            }

            .lesson__homework {
                margin-bottom: 25px
            }

            .lesson__description_red,
            .lesson__form_result,
            .lesson__form_thanks {
                padding: 20px
            }

            .lesson__accord-heading {
                padding: 26px 60px 24px 25px
            }

            .lesson__description_done,
            .lesson__description_no-task {
                padding: 0
            }

            .lesson__form {
                padding: 20px
            }

            .lesson__tabs-head ul li:not(:last-child) {
                margin-right: 30px
            }

            .lesson__accord-head {
                margin-bottom: 25px
            }

            .lesson__homework-list li:not(:last-child) {
                margin-right: 10px
            }

            .lesson__letters-text {
                padding: 15px 20px;
                margin-bottom: 8px
            }

            .lesson__quiz_top {
                padding-top: 25px
            }

            .lesson__label-check {
                padding: 7px
            }

            .lesson__letters-photo {
                flex-shrink: 0
            }

            .lesson__letters-text {
                word-break: break-word
            }

            .lesson__box_current {
                padding: 26px 60px 24px 25px
            }

            .lesson__box_current .lesson__name {
                align-items: flex-start
            }

            .lesson__accord-open,
            .lesson__open-btn {
                right: 25px
            }
        }

        @media screen and (max-width:710px) {
            .modal {
                padding: 40px
            }

            .payment__message_error .payment__message-text br {
                display: none
            }

            .payment__contacts-links {
                flex-wrap: wrap;
                margin: -7.5px
            }

            .payment__contacts-links a {
                margin: 7.5px;
                width: calc(50% - 15px)
            }

            .payment__contacts-links a:not(:last-child) {
                margin-right: 7.5px
            }

            .is-frame .low-cost .description__bottom {
                justify-content: flex-start
            }

            .is-frame .low-cost .program__list .thin__line:not(:last-child) {
                margin-right: 10px
            }

            .is-frame .about .descr-card .square_327 {
                width: 100%;
                max-width: 309px;
                height: 309px;
                margin-bottom: 10px
            }

            .is-frame .low-cost .descr-card .card-content {
                max-width: 309px
            }

            .is-frame .low-cost .descr-card .card-content .skills {
                margin-top: 12px
            }

            .is-frame .section-wrap .main__line.line_45.line_34_height,
            .is-frame .section-wrap .main__line.line_205 {
                margin-top: 20px;
                margin-left: auto
            }

            .page-error__number {
                font-size: 13.5rem
            }

            .is-form .section-form .form {
                padding: 70px
            }

            .section-wrap {
                flex-direction: column
            }

            .section-wrap .sort {
                margin-top: 20px
            }

            .logo {
                flex-direction: column;
                align-items: flex-start
            }

            .logo__text {
                margin: 3px 0 0;
                max-width: none;
                font-size: 7px
            }

            .contents__list {
                max-width: 450px
            }

            .description__bottom {
                flex-wrap: wrap
            }

            .description__bottom .achieves-score {
                flex-grow: 0
            }

            .about .card-photo {
                width: 100%;
                max-width: 309px
            }

            .about .card-content {
                display: flex;
                flex-direction: column;
                margin-left: 0
            }

            .about .descr-card {
                flex-direction: column;
                align-items: center
            }

            .about .card-list {
                order: 1
            }

            .table-head {
                font-size: 13px
            }

            .timer-wrap {
                width: 100%;
                flex-basis: auto;
                margin-bottom: 20px;
                justify-content: flex-start
            }

            .payment .features span:first-child {
                width: 100%
            }

            .features {
                flex-direction: column;
                align-items: center
            }

            .features span {
                width: 100px
            }

            .features span:first-child {
                margin: 0 0 10px
            }

            .features svg {
                margin-right: 3px
            }

            .team .section-wrap {
                flex-direction: row
            }

            .team .section-wrap .card-title {
                max-width: 300px
            }

            .team .section-wrap .sort {
                margin-top: 0
            }

            .team__block {
                padding: 47px 35px
            }

            .mentor {
                flex-wrap: wrap
            }

            .mentor__about {
                flex-basis: auto
            }

            .mentor__list {
                margin-top: 20px;
                flex-basis: 60%;
                display: flex;
                flex-wrap: wrap;
                order: 1
            }

            .mentor__list li:nth-child(odd) {
                margin-right: 15px;
                flex-basis: calc(50% - 15px)
            }

            .mentor__list li {
                flex-basis: 50%
            }

            .mentor__link {
                margin-left: auto
            }

            .edit__box_address .fields__input {
                width: calc(100% - 46px)
            }

            .fields__title {
                margin-bottom: 6px
            }

            .edit__box_address .fields__input,
            .edit__box_personal .fields__input {
                margin-bottom: 20px
            }

            .fields__item:not(:last-child) {
                margin-bottom: 0
            }

            .edit__box_personal .fields__item {
                flex-direction: column
            }

            .edit__box_personal .fields__input {
                width: unset;
                max-width: calc(100% - 46px);
                width: 100%
            }
        }

        @media screen and (max-width:610px) {
            .modal__form {
                flex-direction: column
            }

            .modal__form .form__fields {
                margin-right: 0;
                margin-bottom: 20px;
                max-width: 100%
            }

            .modal__contacts-links {
                flex-wrap: wrap;
                margin: -5px
            }

            .modal__contacts-links a {
                margin: 5px;
                width: calc(50% - 10px)
            }

            .payment__message-btns {
                flex-direction: column;
                align-items: flex-start
            }

            .payment__message-btns .invert-btn {
                margin-right: 0
            }

            .payment__message-btns .to-call-btn {
                max-width: 265px;
                margin-top: 10px
            }

            .payment__message-info {
                margin-bottom: 50px;
                padding: 20px
            }

            .payment__message-info p {
                margin-bottom: 10px
            }

            .payment__tabs-label {
                max-width: 100%
            }

            .payment__agreement {
                margin-left: 0;
                order: -1;
                margin-top: 15px
            }

            .payment__tabs-label__additional {
                overflow: hidden
            }

            .payment__additional-labels {
                flex-wrap: wrap;
                margin: -4px
            }

            .payment__additional-labels label {
                margin: 4px
            }

            .payment__additional-labels label:not(:last-child) {
                margin-right: 4px
            }

            .payment__tabs-head a:not(:last-child) {
                margin-right: 25px
            }

            .payment__tabs-label:not(:last-child) {
                margin-bottom: 15px
            }

            .payment__tabs-label__additional {
                margin-top: 15px
            }

            .payment__form__content .payment-check i {
                display: none
            }

            .payment__form__content .payment-check .tooltip_mobile {
                display: block;
                background: #f0f1f7;
                padding: 5px 10px;
                font-weight: 500;
                font-size: .688rem;
                font-style: normal;
                max-width: 100%;
                transition: all .2s ease;
                margin-top: 10px;
                line-height: 1.1rem
            }

            .payment__stepline {
                flex-direction: column;
                align-items: flex-start
            }

            .payment__stepline__item:not(:last-child) {
                margin-right: 0;
                margin-bottom: 15px
            }

            .payment__title {
                font-size: 1.5rem;
                line-height: 1.2em
            }

            .payment__label {
                margin: 0
            }

            .payment__offer__discount {
                padding: 13px
            }

            .payment__input {
                padding: 0 0 5px;
                border-bottom: 1px solid #9fa6ce;
                margin-top: 5px;
                font-size: 13px;
                max-width: 100%
            }

            .payment__input::-moz-placeholder {
                font-size: 13px
            }

            .payment__input:-ms-input-placeholder {
                font-size: 13px
            }

            .payment__input::placeholder {
                font-size: 13px
            }

            .payment__input_phone {
                padding-left: 37px
            }

            .payment__input-wrapper:not(:first-child) {
                margin-top: 30px
            }

            .payment__input-wrapper {
                flex-direction: column
            }

            .payment__form__bottom {
                flex-direction: column-reverse;
                align-items: flex-start;
                margin-top: 25px
            }

            .payment__total {
                margin-left: 0;
                margin-bottom: 20px
            }

            .payment__info__title {
                margin-top: 20px
            }

            .page-error__desc img {
                vertical-align: bottom;
                margin-top: 0
            }

            .is-form .section-form .form {
                padding: 60px 30px
            }

            .card {
                padding: 25px
            }

            .descr {
                padding: 30px
            }

            .contents__list {
                max-width: 355px
            }

            .new-challenges .challenge-icon {
                display: none
            }

            .new-challenges .challenge-details {
                margin: 10px 0 0
            }

            .step-include {
                padding: 30px
            }

            .step .tab-content {
                padding: 30px 40px 26px 50px
            }

            .step .tab-item:before {
                margin-right: 12px
            }

            .step.close .tab-content {
                padding: 0 0 0 50px
            }

            .table-head .sort-icon {
                width: 15px
            }

            .best__block {
                padding: 25px
            }

            .team__list {
                margin: 0 -5px 27px
            }

            .team__item {
                flex-basis: 65px;
                margin: 5px;
                width: calc(11.10833% - 10px)
            }

            .team__item img {
                width: 70px;
                height: 70px
            }

            .lines-view .cell-third img {
                width: 80%
            }

            .lines {
                padding: 0
            }

            .mentor__list {
                flex-basis: 80%
            }

            .lesson__homework {
                flex-direction: column;
                align-items: flex-start
            }

            .lesson__data-list {
                margin-left: 0;
                margin-top: 10px
            }

            .lesson__accord-content {
                padding-left: 35px
            }

            .lesson__textarea {
                height: 90px
            }

            .lesson__accord-content {
                display: none;
                padding: 20px 42px 24px 25px
            }

            .lesson__accord-content ol li:not(:last-child) {
                margin-bottom: 10px
            }
        }

        @media screen and (max-width:544px) {

            .is-frame .low-cost .table-head,
            .is-frame .low-cost .table-row {
                padding-left: 4%;
                padding-right: 4%
            }

            .is-frame .low-cost .description__bottom .exp {
                flex-basis: 100%;
                margin-right: 0;
                justify-content: flex-start
            }

            .is-form-confirm .section-form .form__fields-item div {
                margin: 0 -5px
            }

            .is-form-confirm .section-form .form__fields-item input {
                width: calc(20% - 5px);
                margin: 0 5px
            }

            .achieve .achieve-icon {
                width: 62px;
                height: 62px
            }

            .achieve .achieve-icon span {
                background-size: 30px
            }

            .description__bottom.changed .timer-wrap {
                flex-basis: auto;
                margin-bottom: 25px
            }

            .description__bottom.changed .achieves-score {
                margin-left: 0
            }

            .description__bottom .achieves {
                width: 100%;
                margin-bottom: 25px
            }

            .description__bottom .achieves-score {
                margin-left: 0
            }

            .table-head {
                font-size: 11px
            }

            .cell-second {
                width: 30%;
                padding-left: 1%
            }

            .cell-third {
                width: 15%
            }

            .cell-fiveth,
            .cell-fourth {
                width: 18%
            }

            .cell-sixth {
                width: 18%;
                padding-right: 2%
            }

            .cell-second .student img {
                display: none
            }

            .pagination li:first-child {
                margin-right: 2px
            }

            .pagination li:last-child {
                margin-left: 2px
            }

            .pagination li {
                margin: 3px
            }

            .pagination li:nth-child(5),
            .pagination li:nth-child(6) {
                display: none
            }

            .webpage__next,
            .webpage__number,
            .webpage__prev {
                min-width: 30px;
                line-height: 30px
            }

            .webpage__next,
            .webpage__prev {
                width: 30px
            }

            .gallery {
                justify-content: center
            }

            .gallery__item {
                width: calc(83.33333% - 4px)
            }

            .team .section-wrap {
                flex-direction: column
            }

            .team .section-wrap .sort {
                margin-top: 20px
            }

            .lines-view .cell-third img {
                width: 100%
            }

            .lines-view .cell-second {
                width: 30%;
                padding-left: 1%
            }

            .lines-view .cell-third {
                width: 18%
            }

            .lines-view .cell-fourth {
                width: 23%;
                padding-left: 10px
            }

            .lines-view .cell-fiveth {
                width: 13%
            }

            .lines-view .cell-sixth {
                width: 7%;
                padding-right: 0
            }

            .mentor__list {
                flex-basis: 100%
            }

            .mentor__link {
                position: absolute;
                right: 0;
                top: 0
            }

            .mentor__link svg {
                width: 24px;
                height: 18px
            }

            .edit__form {
                margin-top: 20px
            }

            .edit__box:not(:last-child) {
                margin-bottom: 40px
            }
        }

        @media screen and (max-width:480px) {
            .call-btn {
                left: 15px
            }

            .modal {
                padding: 30px 20px
            }

            .modal__form {
                margin: 30px 0
            }

            .payment__form__bottom .payment__btn {
                max-width: 100%
            }

            .payment__tabs-label label:not(.fields__label) {
                padding: 10px 20px
            }

            .is-frame .low-cost .table-head_left,
            .is-frame .low-cost .table-row_left {
                max-width: 30%
            }

            .is-frame .low-cost .descr-card .details {
                flex-wrap: nowrap
            }

            .is-frame .about .descr-card .square_327 {
                height: 248px
            }

            .page-error__number {
                font-size: 10.5rem
            }

            .is-form-confirm .section-form .form__footer {
                flex-direction: column;
                align-items: center
            }

            .is-form .section-form .form__fields-item input {
                font-size: 12px
            }

            .is-form .section-form .form__footer div {
                margin-bottom: 5px
            }

            .is-form .section-form .form {
                padding: 45px 15px
            }

            .wrapper {
                padding-left: 15px;
                padding-right: 15px
            }

            .contents__list {
                max-width: 270px
            }

            .new-challenges .challenge-include {
                padding: 50px 20px 20px
            }

            .new-challenges .challenge-btns {
                right: 20px;
                top: 15px
            }

            .descr-card .details {
                flex-wrap: wrap
            }

            .descr-card .details__author {
                width: 100%;
                margin-bottom: 12px
            }

            .descr-card .details span:not(.details__author) {
                width: 45%;
                margin-bottom: 5px
            }

            .step-include {
                padding: 55px 40px 30px 30px
            }

            .step .btn-open {
                position: absolute;
                top: 15px;
                right: 15px
            }

            .table-head {
                font-size: 9px
            }

            .sort-btns {
                flex-direction: column;
                align-items: flex-start
            }

            .sort-btn:not(:last-child) {
                margin: 0 0 15px
            }

            .gallery__item {
                width: calc(100% - 4px)
            }

            .full-cost .step .tab-title {
                flex-basis: 100%;
                margin-right: 0
            }

            .full-cost .step .amount {
                margin: 12px 0 0;
                width: 100%
            }

            .full-cost .step-include {
                flex-wrap: wrap;
                padding-left: 47px
            }

            .full-cost .step-include:before {
                position: absolute;
                left: 30px;
                top: 59px
            }

            .payment .features {
                padding: 10px
            }

            .features span {
                width: 85px
            }

            .mentor__photo {
                width: 120px;
                height: 120px
            }

            .mentor__about {
                flex-basis: 100%;
                margin: 15px 0 0
            }

            .lesson__quiz .lesson__btn-wrap {
                flex-direction: column-reverse;
                align-items: flex-start
            }

            .lesson__quiz .lesson__btn-wrap .lesson__quant {
                margin-bottom: 10px
            }

            .lesson__btn {
                padding: 20px;
                width: 100%
            }
        }

        @media screen and (max-width:380px) {
            .is-form-confirm .section-form .form__fields-item input {
                height: 45px
            }

            .card-link {
                margin: 0 -10px 0 5px
            }

            .achieve .achieve-icon {
                display: none
            }

            .lines-view .btn-open {
                position: absolute;
                right: 10px;
                top: 10px
            }

            .lines-view .cell-fourth {
                width: 23%
            }

            .lines-view .cell-fiveth {
                width: 17%;
                margin-left: 5px;
                position: relative;
                right: -8px
            }

            .lines-view .cell-sixth {
                width: 0
            }

            .mentor__list {
                flex-direction: column
            }

            .mentor__list li,
            .mentor__list li:nth-child(odd) {
                flex-basis: 100%
            }

            .lesson__numbers-radio .fields__checkmark {
                width: 30px;
                height: 30px
            }

            .lesson__numbers-radio .fields__label,
            .lesson__numbers-radio .fields__label:not(:last-child) {
                margin: 5px
            }

            .lesson__numbers-radio {
                margin: 15px -5px 0
            }

            .lesson__data-list li {
                margin-bottom: 5px
            }

            .lesson__box,
            .lesson__tabs-content {
                padding: 15px
            }

            .lesson__accord-heading {
                padding: 15px 40px 15px 15px
            }

            .lesson__accord-open {
                right: 15px;
                top: 15px
            }

            .lesson__name h3 {
                margin-right: 20px
            }

            .lesson__accord-content ol li.current:after,
            .lesson__accord-content ol li.done:after {
                top: 0
            }

            .lesson__name h3 {
                max-width: 190px
            }

            .lesson__letters-text {
                padding: 10px
            }

            .lesson__box_current {
                padding: 15px 40px 15px 15px
            }

            .lesson__open-btn {
                right: 10px;
                top: 10px
            }

            .lesson__form {
                padding: 10px
            }

            .lesson__check {
                padding: 0 0 40px
            }

            .lesson__accord-numbers li:not(:last-child),
            .lesson__box .lesson__name h3 {
                margin-right: 20px
            }

            .lesson__data-list {
                font-size: .95rem
            }

            .lesson__description_red,
            .lesson__form_result,
            .lesson__form_thanks {
                padding: 15px
            }

            .lesson__tabs-head ul li a {
                font-size: 1.5rem
            }

            .lesson__tabs-head ul li:not(:last-child) {
                margin-right: 20px
            }
        }

        @media screen and (max-height:450px) {
            .modal {
                top: 0;
                transform: translateX(-50%)
            }
        }

        .lesson__letters-text strong {
            font-weight: 700
        }

        .lesson__letters-text em {
            font-style: italic
        }

        .lesson__letters-text a {
            text-decoration: underline
        }

        .mentor-letter .lesson__letters-text a {
            color: #385bd7
        }

        main {
            margin-top: 20px
        }

        svg {
            flex-shrink: 0;
            transition: none
        }

        .section-head {
            margin-bottom: 24px
        }

        .noscroll,
        .overflow-hidden {
            overflow: hidden
        }

        .position-relative {
            position: relative
        }

        .centered {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .nowrap {
            white-space: nowrap
        }

        .d-flex {
            display: flex
        }

        .flex-col {
            flex-direction: column
        }

        .align-center {
            align-items: center
        }

        .justify-between {
            justify-content: space-between
        }

        .justify-end {
            justify-content: flex-end
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .flex-grow {
            flex-grow: 1
        }

        .w-100 {
            width: 100%
        }

        .h-100 {
            height: 100%
        }

        .rotate-45 {
            transform: rotate(45deg)
        }

        .rotate-180 {
            transform: rotate(180deg)
        }

        .v-hidden {
            opacity: 0;
            visibility: hidden
        }

        .display-none {
            display: none
        }

        .visible {
            opacity: 1 !important;
            visibility: visible !important
        }

        .block-md,
        .block-sm,
        .flex-md,
        .flex-sm,
        .inline-md,
        .inline-sm {
            display: none !important
        }

        .welcome-block[data-v-47bd3922] {
            padding: 15px 30px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(91.02deg, #fff 2.91%, #fff9e3 85.14%);
        }

        .welcome-block .image-wrapper[data-v-47bd3922] {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            flex-shrink: 0;
        }

        .welcome-block .image-wrapper img[data-v-47bd3922] {
            width: 100px;
            height: 100px;
            -o-object-fit: contain;
            object-fit: contain;
            flex-shrink: 0;
        }

        .welcome-block .image-wrapper[data-v-47bd3922]:before {
            content: "";
            display: block;
            position: absolute;
            width: 80px;
            height: 80px;
            background: rgba(255, 131, 32, .18);
            filter: blur(25px);
        }

        .welcome-block h3[data-v-47bd3922] {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 11px;
            max-width: 666px;
        }

        .welcome-block p[data-v-47bd3922] {
            font-weight: 500;
            font-size: 13px;
            max-width: 666px;
        }

        @media(min-width:576px) {
            .welcome-block .image-wrapper[data-v-47bd3922] {
                margin-right: 35px;
                margin-bottom: 0;
            }
            .welcome-block[data-v-47bd3922] {
                flex-direction: row;
            }
            .flex-sm {
                display: flex !important
            }

            .inline-sm {
                display: inline-block !important
            }

            .block-sm {
                display: block !important
            }

            main {
                margin-top: 3.2rem
            }

            .section-head {
                margin-bottom: 3.125rem
            }
        }

        @media(min-width:768px) {
            .flex-md {
                display: flex !important
            }

            .inline-md {
                display: inline-block !important
            }

            .block-md {
                display: block !important
            }
        }

        .text-gray {
            color: #6e7494
        }

        .text-blue {
            color: #385bd7
        }

        .text-small {
            font-size: 11px;
            line-height: 135%
        }

        .text-big {
            font-weight: 500;
            font-size: 17px;
            line-height: 135%
        }

        .rotate {
            animation: rotate 2s linear 0s infinite normal none running;
            -webkit-animation: rotate 2s linear 0s infinite normal none running
        }

        .rotate- {
            animation: rotate 2s linear 0s infinite reverse none running;
            -webkit-animation: rotate 2s linear 0s infinite reverse none running
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @media(pointer:coarse) {
            .touch-helper {
                margin: -20px;
                padding: 20px
            }
        }

        .tooltip {
            display: block !important;
            z-index: 10000
        }

        .tooltip .tooltip-inner {
            background: #fff;
            color: #000;
            padding: 30px;
            border: 1px solid #f0f1f7;
            border-radius: 10px;
            font-size: 13px;
            box-shadow: 10px 10px 40px 0 rgba(175, 179, 199, .1843137255)
        }

        .tooltip[x-placement^=top] {
            margin-bottom: 5px
        }

        .tooltip[x-placement^=bottom] {
            margin-top: 5px
        }

        .tooltip[x-placement^=right] {
            margin-left: 5px
        }

        .tooltip[x-placement^=left] {
            margin-right: 5px
        }

        .tooltip.popover .popover-inner {
            background: #f9f9f9;
            color: #000;
            padding: 24px;
            border-radius: 5px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, .1)
        }

        .tooltip.popover .popover-arrow {
            border-color: #f9f9f9
        }

        .tooltip[aria-hidden=true] {
            visibility: hidden;
            opacity: 0;
            transition: opacity .15s, visibility .15s
        }

        .tooltip[aria-hidden=false] {
            visibility: visible;
            opacity: 1;
            transition: opacity .15s
        }

        .block-wrapper {
            background-color: #fff;
            border-radius: 20px;
            overflow: hidden
        }

        .block-margin,
        .block-wrapper {
            margin-bottom: 4rem
        }

        .block-padding {
            padding: 25px
        }

        .portrait-square {
            border-radius: 7px;
            width: 37px;
            height: 37px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .portrait-small-radius {
            border-radius: 7px;
            overflow: hidden
        }

        @media(min-width:576px) {
            .block-padding {
                padding: 35px
            }

            .block-wrapper {
                border-radius: 30px
            }
        }

        .popup-wrapper {
            position: fixed;
            background: #fff;
            border-radius: 30px;
            box-shadow: 10px 10px 40px rgba(175, 179, 199, .25);
            z-index: 1000
        }

        .lesson-no-access {
            padding: 67px 50px 58px;
            margin: 20px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            font-size: 17px
        }

        .lesson-no-access__content {
            position: relative;
            display: flex;
            align-items: center;
            flex-direction: column;
            z-index: 10
        }

        .lesson-no-access .title {
            font-weight: 600;
            font-size: 18px;
            margin: 25px 0 13px
        }

        .lesson-no-access .back1 {
            width: 90%;
            height: 125%;
            top: -5%;
            left: 5%
        }

        .lesson-no-access .back1,
        .lesson-no-access .back2 {
            position: absolute;
            border-radius: 89px;
            transform: rotate(-7.5deg)
        }

        .lesson-no-access .back2 {
            width: 70%;
            height: 100%;
            top: 10%;
            left: 15%
        }

        @media(min-width:480px) {
            .lesson-no-access {
                margin: 30px 0
            }
        }

        .skeleton {
            position: relative;
            overflow: hidden;
            background-color: #f2f2f2;
            border-radius: 10px
        }

        .skeleton:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 0;
            background: linear-gradient(90deg, transparent, #d8d8d8, transparent);
            animation: skeleton-loader 1.75s linear infinite
        }

        @keyframes skeleton-loader {
            0% {
                transform: translateX(-100%)
            }

            to {
                transform: translateX(100%)
            }
        }

        .nuxt-progress {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            width: 0;
            opacity: 1;
            transition: width .1s, opacity .4s;
            background-color: #237cfe;
            z-index: 999999
        }

        .nuxt-progress.nuxt-progress-notransition {
            transition: none
        }

        .nuxt-progress-failed {
            background-color: red
        }

        .header[data-v-0c73b5eb] {
            position: sticky;
            width: 100%;
            top: 0;
            z-index: 100
        }

        .header[data-v-0c73b5eb],
        .header .wrapper[data-v-0c73b5eb] {
            transition: .3s ease-in-out
        }

        .header .wrapper[data-v-0c73b5eb] {
            padding-top: 20px;
            padding-bottom: 20px
        }

        .header-scroll[data-v-0c73b5eb] {
            box-shadow: 0 5px 14px rgba(220, 221, 228, .2117647059)
        }

        .header-scroll .wrapper[data-v-0c73b5eb] {
            padding-top: 10px;
            padding-bottom: 10px
        }

        .header__item[data-v-0c73b5eb] {
            padding-left: 0
        }

        .promo-bar-enter[data-v-d8092a34],
        .promo-bar-leave-to[data-v-d8092a34] {
            opacity: 0;
            padding: 0 45px !important;
            max-height: 0 !important
        }

        .promo-bar[data-v-d8092a34] {
            display: flex;
            align-items: center;
            justify-content: center;
            max-height: 56px;
            width: 100%;
            padding: 5px;
            font-size: 13px;
            cursor: pointer;
            white-space: nowrap;
            transition: .5s ease;
            overflow: hidden
        }

        .promo-bar .image[data-v-d8092a34] {
            width: 36px;
            height: 36px;
            min-width: 36px;
            min-height: 36px;
            margin-right: 10px
        }

        .promo-bar .image img[data-v-d8092a34] {
            width: 100%;
            height: 100%;
            -o-object-fit: contain;
            object-fit: contain
        }

        .promo-bar .title[data-v-d8092a34] {
            font-weight: 600;
            font-size: 13px;
            margin-right: 48px
        }

        .promo-bar .timer-text[data-v-d8092a34] {
            display: none
        }

        .promo-bar .timer[data-v-d8092a34] {
            display: none;
            margin: 0 48px 0 19px;
            min-width: 140px
        }

        .promo-bar .promo-btn[data-v-d8092a34] {
            border-radius: 5px;
            padding: 9px 19px;
            color: #fff;
            display: none
        }

        .promo-bar .close-btn[data-v-d8092a34] {
            position: absolute;
            right: 10px;
            flex-shrink: 0;
            padding: 10px
        }

        @media(min-width:576px) {
            .promo-bar[data-v-d8092a34] {
                justify-content: center;
                padding: 8px 45px
            }

            .promo-bar .image[data-v-d8092a34] {
                width: 38px;
                height: 38px;
                margin-right: 21px !important
            }
        }

        @media(min-width:768px) {
            .title[data-v-d8092a34] {
                font-size: 17px !important
            }

            .promo-btn[data-v-d8092a34] {
                display: block !important
            }
        }

        @media(min-width:1200px) {
            .timer-text[data-v-d8092a34] {
                display: block !important
            }

            .timer[data-v-d8092a34] {
                display: flex !important
            }
        }

        .header__logo[data-v-d4d79ed4] {
            margin-right: 10px !important
        }

        .main-site-link[data-v-1ed1e1d4] {
            position: relative;
            border-radius: 100px;
            display: flex;
            align-items: center;
            margin-right: 10px;
            padding: 4px 10px;
            overflow: hidden;
            white-space: nowrap;
            transition: all .2s ease
        }

        .main-site-link img[data-v-1ed1e1d4] {
            margin-right: 7px;
            flex-shrink: 0
        }

        .main-site-link span[data-v-1ed1e1d4] {
            transition: all .2s ease;
            opacity: 0;
            visibility: hidden;
            max-width: 0
        }

        @media screen and (min-width:500px) {
            .main-site-link[data-v-1ed1e1d4]:hover {
                background-color: #f2f5ff
            }

            .main-site-link:hover span[data-v-1ed1e1d4] {
                opacity: 1;
                visibility: visible;
                max-width: 300px
            }
        }

        .notice[data-v-a6e8bbba] {
            padding-left: 11rem
        }

        .header__user-menu_wrapper[data-v-1c23ee03] {
            display: flex;
            align-items: center
        }

        .header__user-menu[data-v-1c23ee03] {
            height: 43px;
            position: relative;
            z-index: 300
        }

        .header__user-menu *[data-v-1c23ee03] {
            box-sizing: content-box
        }

        .header__user-menu.open .slide-menu[data-v-1c23ee03],
        .header__user-menu:hover .slide-menu[data-v-1c23ee03] {
            transform: translateX(0)
        }

        .header__user-menu .avatar-wrapper[data-v-1c23ee03] {
            z-index: 1
        }

        .header__user-menu .button[data-v-1c23ee03] {
            box-sizing: border-box;
            position: relative;
            width: 43px;
            height: 43px;
            border-radius: 100px;
            overflow: hidden;
            cursor: pointer;
            z-index: 10;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #dee7f5;
            transition: .2s ease;
            color: #6e7494
        }

        .header__user-menu .button[data-v-1c23ee03]:hover {
            background-color: #ebedfe
        }

        .header__user-menu .button.fake[data-v-1c23ee03] {
            border-color: transparent
        }

        .header__user-menu .button img[data-v-1c23ee03] {
            -o-object-fit: contain;
            object-fit: contain;
            height: 15px
        }

        .header__user-menu .button.avatar[data-v-1c23ee03] {
            border: none;
            transition: .3s ease;
            background-color: #dee7f5
        }

        .header__user-menu .button.avatar img[data-v-1c23ee03] {
            position: absolute;
            transition: .3s ease;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
            height: 100%
        }

        .menu-wrapper[data-v-1c23ee03] {
            -webkit-mask-image: -webkit-radial-gradient(#fff, #000);
            mask-image: -webkit-radial-gradient(#fff, #000);
            height: 100%;
            right: 1px;
            overflow: hidden;
            width: 100vw;
            pointer-events: none
        }

        .menu-wrapper[data-v-1c23ee03],
        .slide-menu[data-v-1c23ee03] {
            position: absolute;
            top: 0;
            border-radius: 100px
        }

        .slide-menu[data-v-1c23ee03] {
            pointer-events: all;
            transition: .4s ease;
            transform: translateX(calc(100% - 42px));
            display: flex;
            align-items: center;
            height: calc(100% - 2px);
            right: -1px;
            border-top: 1px solid #dee7f5;
            border-bottom: 1px solid #dee7f5;
            background: #fff
        }

        .slide-menu[data-v-1c23ee03]>:not(:last-child) {
            margin-right: 10px
        }

        .sepearator[data-v-1c23ee03] {
            height: 80%;
            border-right: 2px solid #dee7f5
        }

        @keyframes disable-pointer-events-data-v-1c23ee03 {

            0%,
            99% {
                pointer-events: none
            }

            to {
                pointer-events: all
            }
        }

        @media(min-width:576px) {
            .header__user-menu[data-v-1c23ee03] {
                height: 53px
            }

            .header__user-menu .button[data-v-1c23ee03] {
                width: 53px;
                height: 53px
            }

            .slide-menu[data-v-1c23ee03] {
                transform: translateX(calc(100% - 52px))
            }
        }

        @media(pointer:coarse) {

            .header__user-menu .avatar[data-v-1c23ee03],
            .header__user-menu .button[data-v-1c23ee03] {
                pointer-events: none
            }

            .header__user-menu.open .avatar[data-v-1c23ee03],
            .header__user-menu.open .button[data-v-1c23ee03],
            .header__user-menu:hover .avatar[data-v-1c23ee03],
            .header__user-menu:hover .button[data-v-1c23ee03] {
                animation: disable-pointer-events-data-v-1c23ee03 .5s forwards
            }
        }

        .tooltip-enter[data-v-2d775942],
        .tooltip-leave-to[data-v-2d775942] {
            opacity: 0;
            transform: translateY(10px) translateX(-50%) !important
        }

        .tooltip-small[data-v-2d775942] {
            pointer-events: none;
            position: absolute;
            font-size: 12px;
            line-height: 17px !important;
            background: #fff !important;
            color: #000 !important;
            box-shadow: 10px 7px 30px rgba(175, 179, 199, .33);
            border-radius: 5px;
            padding: 9px 19px;
            z-index: 9999;
            transition: .2s ease;
            text-align: center;
            transform: translateX(-50%);
            max-width: calc(100vw - 20px)
        }

        .tooltip-small[data-v-2d775942]:before {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
            z-index: 1;
            border: 5px solid #fff;
            border-top: 0 solid #fff;
            border-left-color: transparent !important;
            border-right-color: transparent !important;
            border-top-color: transparent !important;
            top: -5px;
            left: calc(50% - 10px - var(--offset));
            margin: 0 5px
        }

        .program-wrapper[data-v-db41e95e] {
            margin-bottom: 4rem
        }

        .main-title span[data-v-db41e95e] {
            display: none
        }

        @media(min-width:576px) {
            .main-title span[data-v-db41e95e] {
                display: inline
            }
        }

        .block-wrapper[data-v-0d2d9f8c] {
            margin-bottom: 16px
        }

        .image-wrapper[data-v-daa191d4] {
            border-radius: 15px;
            margin-right: 30px;
            margin-bottom: 20px;
            height: 120px;
            width: 100%;
            flex-shrink: 0;
            background: var(--bg);
            background-size: 60px, 100%;
            transition: all .3s ease-in-out
        }

        .discount[data-v-daa191d4] {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #fe337c;
            box-shadow: 0 4px 20px rgba(254, 51, 124, .28);
            border-radius: 20px;
            color: #fff;
            width: 63px;
            height: 63px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem
        }

        .course-title[data-v-daa191d4] {
            font-size: 25px;
            margin-bottom: 20px;
            margin-top: 15px
        }

        @media(min-width:576px) {
            .image-wrapper[data-v-daa191d4] {
                height: 260px;
                background-size: 30%, 100%
            }

            .discount[data-v-daa191d4] {
                top: -20px;
                right: -20px
            }

            .course-title[data-v-daa191d4] {
                margin-bottom: 21px;
                margin-top: 27px
            }
        }

        @media(min-width:768px) {
            .course-content[data-v-daa191d4] {
                flex-direction: row
            }

            .course-content:not(.access) .course-title[data-v-daa191d4] {
                font-size: 30px
            }

            .course-content .image-wrapper[data-v-daa191d4] {
                width: 260px;
                margin-bottom: 0;
                background-size: 46%, 100%
            }

            .course-content .image-wrapper.image-small[data-v-daa191d4] {
                height: 156px;
                width: 156px
            }
        }

        @media(min-width:1200px) {
            .course-content[data-v-daa191d4] {
                max-width: 90%
            }
        }

        .tag[data-v-ce44f04c] {
            display: inline-block;
            border-radius: 3px;
            text-transform: uppercase;
            white-space: nowrap;
            padding: 0 12px;
            font-size: 9px;
            font-weight: 700;
            color: #fff;
            line-height: 21px
        }

        .telegram-links__wrapper[data-v-7ceea6bc] {
            transition: all .3s ease-in-out;
            overflow: auto;
            margin: 0 -25px -8px;
            padding-bottom: 8px
        }

        .telegram-links__wrapper[data-v-7ceea6bc]::-webkit-scrollbar {
            height: 0
        }

        .certificate-btn[data-v-7ceea6bc] {
            margin-right: 14px
        }

        .certificate-btn span[data-v-7ceea6bc] {
            margin-left: 10px
        }

        .certificate-btn[data-v-7ceea6bc]:last-child {
            margin-right: 25px
        }

        .certificate-btn[data-v-7ceea6bc]:first-child {
            margin-left: 25px
        }

        .telegram-link[data-v-7ceea6bc] {
            padding: 16px 30px;
            background-color: #eaeeff;
            color: #385bd7;
            border-radius: 10px;
            white-space: nowrap;
            margin-right: 14px
        }

        .telegram-link.certificate-disabled[data-v-7ceea6bc] {
            cursor: pointer;
            color: #6e7494;
            background: #f0f1f6
        }

        .telegram-link.certificate-disabled[data-v-7ceea6bc]:hover {
            color: #6e7494;
            background: #f0f1f6
        }

        .telegram-link[data-v-7ceea6bc]:last-child {
            margin-right: 25px
        }

        .telegram-link[data-v-7ceea6bc]:first-child {
            margin-left: 25px
        }

        .telegram-link svg[data-v-7ceea6bc] {
            transition: none
        }

        .telegram-link span[data-v-7ceea6bc] {
            margin-left: 10px
        }

        .telegram-link[data-v-7ceea6bc]:hover {
            background-color: #385bd7;
            color: #fff
        }

        @media(min-width:768px) {
            .telegram-links__wrapper[data-v-7ceea6bc] {
                margin: 0 -48px 0 0;
                padding-bottom: 0
            }

            .certificate-btn[data-v-7ceea6bc]:first-child,
            .telegram-link[data-v-7ceea6bc]:first-child {
                margin-left: 0
            }
        }

        @media(min-width:576px) {
            .telegram-links__wrapper[data-v-7ceea6bc] {
                margin: 0 -48px
            }

            .telegram-links__wrapper .certificate-btn[data-v-7ceea6bc]:last-child,
            .telegram-links__wrapper .telegram-link[data-v-7ceea6bc]:last-child {
                margin-right: 48px
            }

            .telegram-links__wrapper .certificate-btn[data-v-7ceea6bc]:first-child,
            .telegram-links__wrapper .telegram-link[data-v-7ceea6bc]:first-child {
                margin-left: 48px
            }
        }

        .fade-enter-active[data-v-3e016585],
        .fade-leave-active[data-v-3e016585] {
            transition-duration: .2s;
            transition-timing-function: ease
        }

        .fade-enter[data-v-3e016585],
        .fade-leave-active[data-v-3e016585] {
            opacity: 0
        }

        .certificate-modal[data-v-3e016585] {
            background: #fff;
            border-radius: 30px;
            width: calc(100vw - 20px)
        }

        @media(min-width:670px) {
            .certificate-modal[data-v-3e016585] {
                width: 650px
            }
        }

        .certificate-modal[data-v-3e016585] h3 {
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;
            text-align: center
        }

        .close-btn[data-v-3e016585] {
            z-index: 100;
            position: absolute;
            top: 10px;
            right: 10px
        }

        @media(min-width:576px) {
            .close-btn[data-v-3e016585] {
                top: 17px;
                right: 21px
            }
        }

        .course-button[data-v-74d46a74] {
            position: relative;
            background-color: #385bd7;
            color: #fff;
            flex-grow: 1;
            padding: 33px 25px;
            overflow: hidden;
            transition: all .3s ease-in-out
        }

        .course-button[data-v-74d46a74]:hover {
            background-color: #2a50d3
        }

        .course-button__centered-icon[data-v-74d46a74] {
            position: absolute
        }

        .payment-details-wrapper[data-v-74d46a74] {
            width: 35%
        }

        .payment-details[data-v-74d46a74] {
            background-color: #ebeffd;
            color: #6e7494;
            text-align: center;
            padding: 10px
        }

        .payment-details svg[data-v-74d46a74] {
            margin-right: 9px;
            fill: none;
            stroke: #6e7494;
            flex-shrink: 0
        }

        .payment-details img[data-v-74d46a74] {
            margin-right: 9px
        }

        .payment-details span[data-v-74d46a74] {
            margin: 0 10px;
            flex-grow: 1
        }

        .error[data-v-74d46a74] {
            color: #fe337c;
            cursor: default
        }

        .error[data-v-74d46a74],
        .error[data-v-74d46a74]:hover {
            background-color: #ffd8e6
        }

        .success[data-v-74d46a74],
        .success[data-v-74d46a74]:hover {
            background-color: #11b84a
        }

        @media(min-width:768px) {
            .payment-details[data-v-74d46a74] {
                flex-wrap: nowrap
            }
        }

        .first-lesson-block[data-v-5b7d6275] {
            padding: 15px 30px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(91.02deg, #fff 2.91%, #e7f5f5 85.14%)
        }

        @media(min-width:576px) {
            .first-lesson-block[data-v-5b7d6275] {
                flex-direction: row
            }
        }

        .first-lesson-block .image-wrapper[data-v-5b7d6275] {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            flex-shrink: 0
        }

        @media(min-width:576px) {
            .first-lesson-block .image-wrapper[data-v-5b7d6275] {
                margin-right: 35px;
                margin-bottom: 0
            }
        }

        .first-lesson-block .image-wrapper[data-v-5b7d6275]:before {
            content: "";
            display: block;
            position: absolute;
            width: 80px;
            height: 80px;
            background: rgba(118, 131, 137, .36);
            filter: blur(25px)
        }

        .first-lesson-block .image-wrapper img[data-v-5b7d6275] {
            width: 100px;
            height: 100px;
            -o-object-fit: contain;
            object-fit: contain;
            flex-shrink: 0
        }

        .first-lesson-block h3[data-v-5b7d6275] {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 11px;
            max-width: 666px
        }

        .first-lesson-block p[data-v-5b7d6275] {
            font-weight: 500;
            font-size: 13px;
            max-width: 666px
        }

        .block-wrapper[data-v-53105e2c] {
            background-color: #e7e9f6;
            padding-top: 40px;
            padding-bottom: 40px;
            overflow: visible;
            margin: 0
        }

        .to-lesson-btn[data-v-53105e2c] {
            padding: 13px 19px;
            font-size: 13px
        }

        .to-lesson-btn svg[data-v-53105e2c] {
            margin-right: 11px
        }

        .timer-wrapper[data-v-53105e2c] {
            display: flex
        }

        .timer-label[data-v-53105e2c] {
            font-size: 18px;
            font-weight: 600
        }

        .timer-label img[data-v-53105e2c] {
            margin-right: 10px
        }

        .points-text[data-v-53105e2c] {
            font-size: 1rem
        }

        .points-text .student-points[data-v-53105e2c] {
            color: #385bd7
        }

        .points-text svg[data-v-53105e2c] {
            color: #385bd7;
            width: 1.5rem;
            height: 1.5rem
        }

        @media(min-width:576px) {
            .block-wrapper[data-v-53105e2c] {
                padding: 30px 48px
            }
        }

        .info-progress-course[data-v-53105e2c] {
            padding: 30px 20px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            grid-gap: 30px;
            gap: 30px;
            flex-direction: column
        }

        @media(min-width:768px) {
            .info-progress-course[data-v-53105e2c] {
                padding: 30px 40px;
                flex-direction: row;
                grid-gap: 15px;
                gap: 15px
            }
        }

        .info-progress-course .lesson-completed__points[data-v-53105e2c],
        .info-progress-course .timer-label[data-v-53105e2c] {
            flex-shrink: 0
        }

        .timer .number[data-v-53105e2c] {
            font-size: 18px;
            margin-bottom: 2px
        }

        .timer .timer-label[data-v-53105e2c] {
            flex-shrink: 0
        }

        .timer-wrapper[data-v-53105e2c] {
            flex-direction: column;
            align-items: center
        }

        .lesson-completed__points[data-v-53105e2c] {
            display: inline-flex;
            align-items: center;
            padding: 13px 19px;
            background-color: #fff7ea;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            cursor: auto !important
        }

        .lesson-completed__points[data-v-53105e2c]:before {
            content: "";
            display: block;
            background: url(/img/icons/lesson-points-icon.svg) no-repeat 50%/contain;
            width: 15px;
            height: 14px;
            margin-right: 6px
        }

        .lesson-completed__points span[data-v-53105e2c] {
            font-size: 13px;
            line-height: 1.35em;
            letter-spacing: .02em;
            color: #ee8100
        }

        .lesson-completed__all-number-points[data-v-53105e2c] {
            margin-left: 6px
        }

        .progress[data-v-53105e2c] {
            width: 216px !important;
            margin-top: 16px
        }

        .timer[data-v-65f94cf1] {
            display: flex;
            align-items: center;
            text-align: center
        }

        .timer .separator[data-v-65f94cf1] {
            margin: 0 10px
        }

        .timer .number[data-v-65f94cf1] {
            font-size: 1.1rem;
            font-weight: 600
        }

        .timer .timer-label[data-v-65f94cf1] {
            font-weight: 500
        }

        .progress[data-v-4538add2] {
            display: flex;
            align-items: center;
            width: 100%;
            position: relative
        }

        .progress .bar[data-v-4538add2] {
            height: 5px;
            background-color: rgba(0, 0, 0, .06);
            flex-grow: 1;
            border-radius: 100px;
            overflow: hidden
        }

        .progress .bar .fill[data-v-4538add2] {
            background-color: #11b84a;
            height: 100%;
            border-radius: 100px
        }

        .progress .counter[data-v-4538add2] {
            color: #11b84a;
            margin-left: 12px;
            font-weight: 600
        }

        .btn[data-v-1ede2ded] {
            transition: .2s ease;
            padding: 21px 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: -moz-fit-content;
            width: fit-content;
            flex-shrink: 0;
            flex-grow: 0;
            height: -moz-fit-content;
            height: fit-content;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .btn.inline[data-v-1ede2ded] {
            display: inline-flex
        }

        .btn.disabled[data-v-1ede2ded] {
            cursor: default !important
        }

        .btn svg[data-v-1ede2ded] {
            transition: none
        }

        .btn.variant-blue[data-v-1ede2ded] {
            background-color: #385bd7;
            color: #fff
        }

        .btn.variant-blue[data-v-1ede2ded]:hover:not(:disabled) {
            background-color: #2a50d3
        }

        .btn.variant-blue[data-v-1ede2ded]:active {
            outline: 1px solid rgba(42, 80, 211, .48);
            background-color: #2a50d3;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, .09)
        }

        .btn.variant-blue:not(.pending).disabled[data-v-1ede2ded] {
            background-color: #eaeeff;
            color: #a1a9c9
        }

        .btn.variant-outline[data-v-1ede2ded] {
            background-color: #fff;
            color: #000
        }

        .btn.variant-outline[data-v-1ede2ded]:hover:not(:disabled) {
            background-color: #000;
            color: #fff
        }

        .btn.variant-light-blue[data-v-1ede2ded] {
            color: #385bd7;
            background-color: #eaeeff
        }

        .btn.variant-light-blue[data-v-1ede2ded]:active,
        .btn.variant-light-blue[data-v-1ede2ded]:hover:not(:disabled) {
            background-color: #385bd7;
            color: #fff
        }

        .btn.variant-light-blue[data-v-1ede2ded]:active {
            box-shadow: inset 0 0 20px rgba(0, 0, 0, .09)
        }

        .btn.variant-light-blue:not(.pending).disabled[data-v-1ede2ded] {
            background: #f0f1f7;
            color: #6e7494
        }

        .btn.variant-light-green[data-v-1ede2ded] {
            color: #11b84a;
            background-color: #e4ffed
        }

        .btn.variant-light-green[data-v-1ede2ded]:hover:not(:disabled) {
            color: #e4ffed;
            background-color: #11b84a
        }

        .btn.variant-pink[data-v-1ede2ded] {
            color: #fff;
            background-color: #fe337c
        }

        .btn.variant-pink[data-v-1ede2ded]:hover:not(:disabled) {
            color: #fff;
            background-color: #ff196c
        }

        .btn.variant-pink:not(.pending).disabled[data-v-1ede2ded] {
            color: #fff;
            background-color: #ff7ead
        }

        .btn.variant-pink[data-v-1ede2ded]:focus {
            box-shadow: 0 0 0 2px #ffb5cf
        }

        .btn.variant-black[data-v-1ede2ded] {
            color: #fff;
            background-color: #000
        }

        .btn.variant-black[data-v-1ede2ded]:hover:not(:disabled) {
            background-color: #1f1f1f;
            color: #fff
        }

        .btn.variant-black:not(.pending).disabled[data-v-1ede2ded] {
            background: #6c6c6c;
            color: #fff
        }

        .btn.variant-green[data-v-1ede2ded] {
            color: #fff;
            background-color: #11b84a
        }

        .btn.variant-green[data-v-1ede2ded]:hover:not(:disabled) {
            background-color: #0aa63e;
            color: #fff
        }

        .btn.variant-green:not(.pending).disabled[data-v-1ede2ded] {
            background: #57ce7f;
            color: #fff
        }

        .btn:not(.pending).disabled[data-v-1ede2ded] {
            cursor: default !important
        }

        .btn .btn-content[data-v-1ede2ded] {
            visibility: visible;
            opacity: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity .2s, visibility .2s
        }

        .hide[data-v-1ede2ded] {
            visibility: hidden !important;
            opacity: 0 !important
        }

        .preloader[data-v-1ede2ded] {
            position: absolute;
            transition: all .1s ease-in-out;
            animation: rotate-data-v-1ede2ded 1s linear 0s infinite normal none running
        }

        @keyframes rotate-data-v-1ede2ded {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        .challenge-block[data-v-3bcae566] {
            background: #ffe4ba;
            padding: 35px 25px;
            border-radius: 30px;
            display: flex;
            overflow: hidden;
            flex-direction: column;
            align-items: flex-start;
            position: relative
        }

        .percent-wrapper[data-v-3bcae566] {
            position: absolute;
            right: 70px;
            top: 70px
        }

        .text-wrapper[data-v-3bcae566] {
            position: relative;
            z-index: 1;
            flex-grow: 1
        }

        .text-wrapper .text[data-v-3bcae566] {
            max-width: 385px
        }

        .time-left[data-v-3bcae566] {
            color: #876a3e;
            margin-bottom: 10px
        }

        .fireworks[data-v-3bcae566] {
            width: 100px;
            height: 100px;
            flex-shrink: 0;
            margin-bottom: 40px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .fireworks[data-v-3bcae566],
        .fireworks img[data-v-3bcae566] {
            position: relative;
            z-index: 1
        }

        .fireworks[data-v-3bcae566]:before {
            content: "";
            display: block;
            position: absolute;
            top: 65%;
            left: 55%;
            width: 1px;
            height: 1px;
            border-radius: 999px;
            background: rgba(150, 92, 3, .3);
            box-shadow: 0 0 40px 40px rgba(150, 92, 3, .3)
        }

        @media(min-width:450px) {
            .challenge-block[data-v-3bcae566] {
                padding: 40px 60px
            }

            .fireworks[data-v-3bcae566] {
                width: 120px;
                height: 120px
            }

            .percent-wrapper[data-v-3bcae566] {
                right: 90px;
                top: 90px
            }
        }

        @media(min-width:730px) {
            .challenge-block[data-v-3bcae566] {
                flex-direction: row;
                align-items: center;
                padding: 40px
            }

            .percent-wrapper[data-v-3bcae566] {
                position: relative;
                margin-right: 70px;
                right: 0;
                top: 0
            }

            .text-wrapper[data-v-3bcae566] {
                margin-right: 50px;
                margin-left: 30px
            }

            .fireworks[data-v-3bcae566] {
                margin-bottom: 0
            }
        }

        @media(min-width:800px) {
            .challenge-block[data-v-3bcae566] {
                padding: 41px 55px
            }
        }

        @media(min-width:850px) {
            .percent-wrapper[data-v-3bcae566] {
                margin-right: 100px
            }

            .text-wrapper[data-v-3bcae566] {
                margin-left: 55px;
                margin-right: 80px
            }
        }

        .title-wrapper[data-v-57d8512c] {
            display: flex;
            background-color: #ffd798;
            margin-bottom: 14px;
            padding: 5px 10px;
            width: -moz-fit-content;
            width: fit-content;
            border-radius: 5px;
            white-space: nowrap
        }

        .title-wrapper[data-v-57d8512c]:not(:last-child) {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            padding: 5px 0 5px 10px
        }

        .title-wrapper .icon[data-v-57d8512c] {
            margin-right: 9px;
            width: 21px;
            height: 21px;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            flex-shrink: 0;
            display: none
        }

        .title-wrapper .icon.fail[data-v-57d8512c] {
            background: #f13f3f;
            box-shadow: 0 0 17px rgba(184, 17, 17, .44)
        }

        .title-wrapper .icon.partial[data-v-57d8512c] {
            background: #ff7f23;
            box-shadow: 0 0 17px rgba(255, 122, 0, .44)
        }

        .title-wrapper .icon.success[data-v-57d8512c] {
            background: #11b84a;
            box-shadow: 0 0 17px rgba(17, 184, 74, .44)
        }

        .title-wrapper h4[data-v-57d8512c] {
            font-weight: 600;
            font-size: 18px;
            line-height: 22px
        }

        .info[data-v-57d8512c] {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffd798;
            margin-bottom: 14px;
            width: 32px;
            border-bottom-right-radius: 5px;
            border-top-right-radius: 5px
        }

        @media(min-width:400px) {
            .info[data-v-57d8512c] {
                border-radius: 5px;
                margin-left: 9px
            }

            .title-wrapper[data-v-57d8512c]:not(:last-child) {
                border-bottom-right-radius: 5px;
                border-top-right-radius: 5px;
                padding: 5px 10px
            }

            .icon[data-v-57d8512c] {
                display: flex !important
            }
        }

        .percent-wrapper[data-v-4a57771d] {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .percent-wrapper .shadow[data-v-4a57771d] {
            position: absolute;
            width: 1px;
            height: 1px;
            border-radius: 999px;
            background: var(--shadow-color);
            box-shadow: 0 0 118px 118px var(--shadow-color)
        }

        .percent-wrapper .dot[data-v-4a57771d] {
            position: absolute;
            border-radius: 999px;
            background: hsla(0, 0%, 100%, .15)
        }

        .percent-wrapper .dot.first[data-v-4a57771d] {
            left: -38px;
            top: 56px;
            width: 4px;
            height: 4px
        }

        .percent-wrapper .dot.second[data-v-4a57771d] {
            left: 67px;
            bottom: 5px;
            width: 7px;
            height: 7px
        }

        .percent-wrapper .dot.third[data-v-4a57771d] {
            left: -76px;
            bottom: 67px;
            width: 12px;
            height: 12px
        }

        .percent-wrapper .percent[data-v-4a57771d] {
            font-size: 17px;
            position: absolute
        }

        .percent-wrapper .icon[data-v-4a57771d] {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            z-index: 1;
            box-shadow: 0 0 15px 3px var(--shadow-color)
        }

        .percent-wrapper .icon img[data-v-4a57771d] {
            width: 15px;
            height: 15px;
            -o-object-fit: contain;
            object-fit: contain
        }

        .percent-wrapper .circle[data-v-4a57771d] {
            position: absolute !important;
            transition: all .2s ease
        }

        .percent-wrapper .circle.second[data-v-4a57771d] {
            animation: pulse-data-v-4a57771d 5s infinite alternate;
            animation-timing-function: ease-in-out;
            animation-delay: -1.5s
        }

        .percent-wrapper .circle.third[data-v-4a57771d] {
            animation: pulse-data-v-4a57771d 5s infinite alternate;
            animation-timing-function: ease-in-out;
            animation-delay: -3.5s
        }

        .percent-wrapper .circle.four[data-v-4a57771d] {
            animation: pulse-data-v-4a57771d 5s infinite alternate;
            animation-timing-function: ease-in-out
        }

        @keyframes pulse-data-v-4a57771d {
            0% {
                opacity: 1;
                transform: scale(1.05)
            }

            to {
                opacity: .5;
                transform: scale(.95)
            }
        }

        .pie-wrapper[data-v-2630fb91] {
            width: var(--size);
            height: var(--size);
            position: relative
        }

        .pie-wrapper[data-v-2630fb91]:nth-child(3n+1) {
            clear: both
        }

        .pie-wrapper .pie[data-v-2630fb91] {
            clip: rect(0, var(--size), var(--size), calc(var(--size)/2))
        }

        .pie-wrapper .pie[data-v-2630fb91],
        .pie-wrapper .pie .half-circle[data-v-2630fb91] {
            width: 100%;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0
        }

        .pie-wrapper .pie .half-circle[data-v-2630fb91] {
            border: var(--thickness) solid #3498db;
            border-radius: 50%;
            clip: rect(0, calc(var(--size)/2), var(--size), 0)
        }

        .pie-wrapper .bg[data-v-2630fb91] {
            width: 100%;
            height: 100%;
            border: var(--thickness) solid var(--background);
            border-radius: 50%
        }

        .pie-wrapper .pie .half-circle[data-v-2630fb91] {
            border-color: var(--color)
        }

        .pie-wrapper .pie .left-side[data-v-2630fb91] {
            transform: rotate(calc(var(--progress)*3.6deg))
        }

        .pie-wrapper .pie.first-half .right-side[data-v-2630fb91] {
            display: none
        }

        .pie-wrapper .pie[data-v-2630fb91]:not(.first-half) {
            clip: rect(auto, auto, auto, auto)
        }

        .pie-wrapper .pie:not(.first-half) .right-side[data-v-2630fb91] {
            transform: rotate(180deg)
        }

        .icon-enter[data-v-6570bffa],
        .icon-leave-to[data-v-6570bffa] {
            opacity: 0
        }

        .program .program-header[data-v-6570bffa] {
            margin-top: -15px;
            line-height: 25px;
            transition: all .33s ease-in-out;
            margin-bottom: 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-right: 25px;
            height: 20px
        }

        .program .program-header ul[data-v-6570bffa] {
            display: flex;
            flex-wrap: wrap;
            color: #6e7494
        }

        .program .program-header ul li[data-v-6570bffa] {
            margin-right: 20px
        }

        .program .sprint-wrapper[data-v-6570bffa] {
            transition: all .33s ease-in-out;
            position: relative
        }

        .program .sprint-wrapper .sprint-content[data-v-6570bffa] {
            transition: all .33s ease-in-out;
            background: #fff
        }

        .program .sprint-wrapper .sprint-content .sprint-header[data-v-6570bffa] {
            transition: all .33s ease-in-out;
            display: flex;
            align-items: center;
            padding: 15px 25px;
            border-top: 1px solid #f0f1f7;
            cursor: pointer;
            justify-content: space-between
        }

        .program .sprint-wrapper .sprint-content .sprint-header .sprint-title[data-v-6570bffa] {
            width: 200px;
            margin-right: 20px
        }

        .program .sprint-wrapper .sprint-content .sprint-header .lessons-counter[data-v-6570bffa] {
            flex-grow: 1;
            white-space: nowrap;
            margin-right: 20px;
            display: none
        }

        .program .sprint-wrapper .sprint-content .sprint-header .sprint-btn[data-v-6570bffa] {
            width: 25px;
            height: 25px
        }

        .program .sprint-wrapper .sprint-content .sprint-header .sprint-btn .icon[data-v-6570bffa] {
            transition: all .33s ease-in-out;
            position: absolute;
            width: 25px;
            height: 25px
        }

        .program .sprint-wrapper .sprint-content .sprint-header .sprint-btn .icon img[data-v-6570bffa] {
            transition: transform .3s ease
        }

        .program .sprint-wrapper:last-child .sprint-content[data-v-6570bffa] {
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px
        }

        .program .sprint-wrapper:last-child .sprint-content .lessons[data-v-6570bffa] {
            border-bottom: none
        }

        .program .sprint-wrapper .lessons[data-v-6570bffa] {
            overflow: hidden;
            transition: all .33s ease-in-out
        }

        .program .sprint-wrapper .lessons .lesson.disabled[data-v-6570bffa] {
            pointer-events: none
        }

        .program .sprint-wrapper .lessons .lesson[data-v-6570bffa]:hover {
            color: #385bd7
        }

        .program .sprint-wrapper .lessons .lesson.lock[data-v-6570bffa],
        .program .sprint-wrapper .lessons .lesson.time[data-v-6570bffa] {
            color: #6e7494
        }

        .program .sprint-wrapper .lessons .lesson.lock[data-v-6570bffa]:hover,
        .program .sprint-wrapper .lessons .lesson.time[data-v-6570bffa]:hover {
            color: #000
        }

        .program .sprint-wrapper .lessons .lesson.current[data-v-6570bffa],
        .program .sprint-wrapper .lessons .lesson.current[data-v-6570bffa]:hover {
            color: #385bd7 !important
        }

        .program .sprint-header .lessons-counter.current[data-v-6570bffa],
        .program .sprint-header .lessons-counter.current[data-v-6570bffa]:hover {
            color: #385bd7 !important
        }

        .program .sprint-wrapper .lessons ul[data-v-6570bffa] {
            padding: 25px;
            border-top: 1px solid #f0f1f7
        }

        .program .sprint-wrapper .lessons .lesson-icon[data-v-6570bffa] {
            width: 15px;
            margin-right: 10px;
            flex-shrink: 0;
            transition: none
        }

        .program .sprint-wrapper .lessons .lesson-index[data-v-6570bffa] {
            width: 15px;
            margin-right: 10px;
            flex-shrink: 0
        }

        .program .sprint-wrapper .lessons .lesson-date[data-v-6570bffa] {
            white-space: nowrap;
            width: 95px;
            display: none;
            flex-shrink: 0
        }

        .program .sprint-wrapper .lessons .lesson-date-time[data-v-6570bffa] {
            color: #6e7494;
            margin-top: 5px;
            font-size: 11px
        }

        .program .sprint-wrapper .lessons li[data-v-6570bffa]:not(:last-child) {
            margin-bottom: 13px
        }

        .first-sprint .sprint-content[data-v-6570bffa] {
            border-top-right-radius: 20px;
            border-top-left-radius: 20px
        }

        .first-sprint .sprint-header[data-v-6570bffa] {
            border-top: none !important
        }

        .collapsed .sprint-content[data-v-6570bffa] {
            border-radius: 20px;
            cursor: pointer
        }

        .collapsed .program-header[data-v-6570bffa] {
            height: 0;
            margin-bottom: 0 !important;
            visibility: hidden;
            opacity: 0
        }

        @media(min-width:576px) {

            .lesson-date[data-v-6570bffa],
            .lessons-counter[data-v-6570bffa] {
                display: block !important
            }

            .lesson-date-time[data-v-6570bffa] {
                display: none
            }

            .program-header[data-v-6570bffa] {
                padding-right: 35px !important;
                margin-bottom: 35px !important
            }

            .program-header ul li[data-v-6570bffa] {
                margin-right: 42px !important
            }

            .lessons ul[data-v-6570bffa],
            .sprint-header[data-v-6570bffa] {
                padding: 24px 35px !important
            }

            .collapsed .sprint-content[data-v-6570bffa] {
                border-radius: 30px
            }

            .first-sprint .sprint-content[data-v-6570bffa] {
                border-top-right-radius: 30px;
                border-top-left-radius: 30px
            }

            .sprint-wrapper:last-child .sprint-content[data-v-6570bffa] {
                border-bottom-right-radius: 30px !important;
                border-bottom-left-radius: 30px !important
            }
        }

        @media(min-width:768px) {
            .sprint-title[data-v-6570bffa] {
                width: 400px !important
            }
        }

        .telegram-link[data-v-79303ab9] {
            margin-top: 10px;
            color: #385bd7;
            display: flex;
            align-items: center
        }

        .telegram-link img[data-v-79303ab9] {
            margin-left: 10px
        }

        .info-block[data-v-411d2a74] {
            margin-top: 20px;
            overflow: auto;
            align-items: stretch
        }

        .info-block[data-v-411d2a74]::-webkit-scrollbar {
            height: 0
        }

        .mentor-info__details[data-v-411d2a74] {
            white-space: nowrap;
            display: flex;
            align-items: center
        }

        .mentor-info__details div[data-v-411d2a74]:not(:last-child) {
            margin-right: 15px
        }

        .mentor-info-wrapper[data-v-411d2a74] {
            display: flex;
            flex-direction: column
        }

        .mentor-avatar[data-v-411d2a74] {
            width: 100px;
            height: 100px;
            border-radius: 15px;
            margin-right: 20px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .mentor-name[data-v-411d2a74] {
            font-size: 1.3rem;
            margin-bottom: 7px
        }

        .telegram-link-wrap[data-v-411d2a74] {
            padding-right: 15px
        }

        .telegram-link[data-v-411d2a74] {
            color: #385bd7
        }

        .telegram-link svg[data-v-411d2a74] {
            width: 25px;
            height: 25px
        }

        .telegram-link[data-v-411d2a74]:hover {
            color: #2a50d3
        }

        @media(min-width:576px) {
            .info-block[data-v-411d2a74] {
                background-color: #f6f8fd;
                border-radius: 15px;
                padding: 26px 26px 26px 35px;
                margin-top: 20px;
                flex-direction: row-reverse;
                overflow: hidden;
                margin-right: 0
            }

            .info-block[data-v-411d2a74]::-webkit-scrollbar {
                height: 0
            }

            .mentor-info__details[data-v-411d2a74] {
                white-space: normal;
                display: flex;
                display: block
            }

            .mentor-info__details div[data-v-411d2a74]:not(:last-child) {
                margin-bottom: 15px;
                margin-right: 0
            }

            .telegram-link-wrap[data-v-411d2a74] {
                padding: 0 14px 0 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-left: 1px solid #d1daeb
            }

            .telegram-link-wrap .telegram-link[data-v-411d2a74] {
                margin-right: 0
            }

            .telegram-link-wrap svg[data-v-411d2a74] {
                width: 40px;
                height: 40px
            }

            .mentor-avatar[data-v-411d2a74] {
                margin-right: 30px;
                width: 156px;
                height: 156px
            }
        }

        @media(min-width:768px) {
            .mentor-info-wrapper[data-v-411d2a74] {
                justify-content: space-between;
                align-items: center;
                flex-direction: row
            }

            .mentor-info-wrapper .telegram-link-wrap[data-v-411d2a74] {
                margin-left: 20px
            }

            .mentor-info-wrapper .info-block[data-v-411d2a74] {
                margin-top: 0
            }
        }

        @media(min-width:992px) {
            .telegram-link-wrap[data-v-411d2a74] {
                margin-left: 60px !important
            }
        }

        .students-block[data-v-7892b93c] {
            border-top: 1px solid #f0f1f7;
            padding-top: 35px;
            margin-top: 35px
        }

        .students-block .team-name[data-v-7892b93c] {
            font-size: 1rem
        }

        .students-block .team-name__count[data-v-7892b93c] {
            color: #6e7494
        }

        @media(min-width:576px) {
            .students-block[data-v-7892b93c] {
                margin-top: 35px
            }
        }

        .view-type-selector[data-v-3a3bbf99] {
            display: flex;
            align-items: center;
            color: #6e7494
        }

        .view-type-selector svg[data-v-3a3bbf99] {
            cursor: pointer
        }

        .view-type-selector button[data-v-3a3bbf99]:first-child {
            margin-right: 8px
        }

        .students_cards[data-v-4447964c] {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(54px, 1fr));
            grid-gap: 7px;
            gap: 7px;
            padding: 35px 0 25px
        }

        .students_cards .avatar-wrapper[data-v-4447964c] {
            display: grid;
            align-items: center;
            justify-items: center;
            place-items: center
        }

        .students_cards .avatar-wrapper img[data-v-4447964c] {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .students_cards .avatar-wrapper:hover .telegram-link[data-v-4447964c] {
            opacity: 1
        }

        .students_cards .avatar-wrapper:hover .tooltip-name[data-v-4447964c] {
            opacity: 1;
            transform: none
        }

        .students_cards .avatar-wrapper .telegram-link[data-v-4447964c] {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .5);
            color: #fff;
            opacity: 0
        }

        .students_cards .avatar-wrapper .telegram-link svg[data-v-4447964c] {
            width: 31px;
            height: 31px;
            color: #fff
        }

        .tooltip-name[data-v-4447964c] {
            transition: .2s;
            position: absolute;
            background: #fff;
            box-shadow: 10px 10px 40px rgba(175, 179, 199, .25);
            border-radius: 5px;
            padding: 7px 15px;
            white-space: nowrap;
            bottom: -20px;
            z-index: 10;
            opacity: 0;
            transform: translateY(10px);
            pointer-events: none
        }

        .tooltip-name[data-v-4447964c]:before {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
            z-index: 1;
            border: 5px solid #fff;
            border-top: 0 solid #fff;
            border-left-color: transparent !important;
            border-right-color: transparent !important;
            border-top-color: transparent !important;
            top: -5px;
            left: calc(50% - 5px);
            margin: 0 5px
        }

        @media(min-width:576px) {
            .students_cards[data-v-4447964c] {
                grid-template-columns: repeat(auto-fill, minmax(75px, 1fr)) !important
            }
        }

        @media(min-width:768px) {
            .students_cards[data-v-4447964c] {
                grid-template-columns: repeat(auto-fill, minmax(85px, 1fr)) !important
            }
        }

        .dots-enter-active[data-v-388e0493],
        .dots-leave-active[data-v-388e0493] {
            transition-duration: .2s;
            transition-timing-function: ease
        }

        .dots-enter[data-v-388e0493],
        .dots-leave-active[data-v-388e0493] {
            width: 0 !important;
            margin: 0 !important;
            opacity: 0 !important
        }

        .pagination[data-v-388e0493] {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .pagination[data-v-388e0493],
        .pagination>*[data-v-388e0493] {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .pagination>*[data-v-388e0493] {
            width: 36px;
            height: 36px;
            margin-right: 5px;
            font-size: 12px
        }

        @media(min-width:576px) {
            .pagination>*[data-v-388e0493] {
                width: 48px;
                height: 48px;
                font-size: 13px
            }
        }

        .pagination[data-v-388e0493]>:first-child {
            margin-right: 5px
        }

        .pagination[data-v-388e0493]>:last-child {
            margin-left: -5px;
            margin-right: 0
        }

        .pagination__item[data-v-388e0493] {
            border-radius: 10px;
            border: 1px solid #dce2f9;
            color: #000;
            font-weight: 500;
            background-color: #fff;
            transition: background-color .5s ease
        }

        .pagination__item[data-v-388e0493]:hover:enabled {
            background-color: #eaeeff
        }

        .pagination__item.active[data-v-388e0493] {
            border-color: #385bd7;
            color: #385bd7;
            background-color: #eaeeff
        }

        .pagination__item.active[data-v-388e0493]:disabled {
            border-color: #dce2f9;
            background: rgba(241, 242, 247, .51);
            color: #000
        }

        .pagination__item[data-v-388e0493]:disabled {
            border-color: #dce2f9
        }

        .pagination__arrow[data-v-388e0493] {
            color: #000
        }

        .pagination__arrow svg[data-v-388e0493] {
            transition: all .3s ease
        }

        .pagination__arrow[data-v-388e0493]:disabled {
            color: #6e7494
        }

        .pagination__arrow_prev svg[data-v-388e0493] {
            transform: translate(0) rotate(180deg)
        }

        .pagination__arrow_prev:hover svg[data-v-388e0493] {
            transform: translate(-3px) rotate(180deg)
        }

        .pagination__arrow_prev:disabled svg[data-v-388e0493] {
            transform: translate(0) rotate(180deg)
        }

        .pagination__arrow_next:hover svg[data-v-388e0493] {
            transform: translate(3px)
        }

        .pagination__arrow_next:disabled svg[data-v-388e0493] {
            transform: translate(0)
        }

        .pagination-dots[data-v-388e0493] {
            display: none;
            width: 24px;
            letter-spacing: .1em;
            color: #000
        }

        @media(min-width:375px) {
            .pagination-dots[data-v-388e0493] {
                display: flex
            }
        }

        .block-wrapper[data-v-00b6e9d8] {
            margin-bottom: 0;
            flex-direction: column
        }

        .author-avatar[data-v-00b6e9d8] {
            width: 100%;
            border-radius: 15px;
            padding-bottom: 100%;
            height: 0;
            margin-right: 30px;
            overflow: hidden
        }

        .author-avatar img[data-v-00b6e9d8] {
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%
        }

        .author-name[data-v-00b6e9d8] {
            margin-top: 30px;
            font-size: 1.125rem;
            font-weight: 600
        }

        .author-position[data-v-00b6e9d8] {
            margin: 12px 0;
            color: #6e7494
        }

        .courses-wrapper[data-v-00b6e9d8] {
            order: 3;
            margin-top: 25px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(54px, 1fr));
            grid-gap: 7px;
            gap: 7px;
            grid-auto-rows: 1fr
        }

        .courses-wrapper[data-v-00b6e9d8]:before {
            content: "";
            width: 0;
            padding-bottom: 100%
        }

        .courses-wrapper[data-v-00b6e9d8]:before,
        .courses-wrapper[data-v-00b6e9d8]>:first-child {
            grid-row: 1/1;
            grid-column: 1/1
        }

        .courses-wrapper .course[data-v-00b6e9d8] {
            border-radius: 7px
        }

        .courses-wrapper .course[data-v-00b6e9d8]:hover {
            border-radius: 10px
        }

        .courses-wrapper .course:hover>div[data-v-00b6e9d8] {
            transform: scale(1.1)
        }

        .courses-wrapper .course>div[data-v-00b6e9d8] {
            width: 100%;
            height: 100%;
            background-size: 50%;
            background-position: 50%;
            background-repeat: no-repeat;
            transition: .2s
        }

        @media(min-width:576px) {
            .author-avatar[data-v-00b6e9d8] {
                width: 156px;
                height: 156px;
                padding-bottom: 0
            }

            .author-name[data-v-00b6e9d8] {
                margin-top: 15px
            }

            .block-wrapper[data-v-00b6e9d8] {
                flex-direction: row
            }

            .courses-wrapper[data-v-00b6e9d8] {
                grid-template-columns: repeat(auto-fill, 49px);
                grid-gap: 10x;
                gap: 10x;
                margin: 13px 0 25px;
                order: 0
            }
        }

        @media(min-width:768px) {
            .courses-wrapper[data-v-00b6e9d8] {
                grid-gap: 16px;
                gap: 16px
            }

            .info[data-v-00b6e9d8] {
                margin-right: 10%
            }
        }

        .active[data-v-0d183450] {
            color: #000
        }

        .aside-menu[data-v-0d183450] {
            position: sticky;
            top: 8rem
        }

        .bottom-menu[data-v-0d183450] {
            position: sticky;
            bottom: 50px
        }

        .sidebar[data-v-0d183450] {
            display: flex;
            flex-direction: column;
            justify-content: space-between
        }

        .footer[data-v-f000587e] {
            display: flex;
            justify-content: space-around;
            color: #45518a;
            max-width: 1300px;
            margin: auto;
            padding: 85px 120px
        }

        .footer .footer-item[data-v-f000587e] {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            white-space: nowrap;
            flex-shrink: 0
        }

        .footer .footer-item.years[data-v-f000587e] {
            color: #6e7494
        }

        .footer .footer-item__label[data-v-f000587e] {
            z-index: 10
        }

        .footer .footer-item img[data-v-f000587e] {
            margin-right: 7px;
            z-index: 10
        }

        .footer .footer-item__tooltip[data-v-f000587e] {
            position: absolute;
            z-index: 2;
            left: -10px;
            display: none;
            width: calc(100% + 140px);
            background: #fff;
            justify-content: flex-end;
            padding: 7px 10px;
            border-radius: 5px
        }

        .footer .footer-item.bug .tooltip-content[data-v-f000587e] {
            display: flex;
            align-items: center;
            cursor: pointer;
            border-radius: 5px;
            padding: 4px 6px;
            color: #385bd7
        }

        .footer .footer-item.bug .tooltip-content[data-v-f000587e]:hover {
            background-color: #eaeeff
        }

        .footer .footer-item.help .footer-item__tooltip[data-v-f000587e] {
            width: 190px;
            bottom: -10px
        }

        .footer .footer-item.help .footer-item__tooltip .tooltip-content[data-v-f000587e] {
            margin-bottom: 40px;
            margin-top: 5px
        }

        .footer .footer-item.help .footer-item__tooltip .tooltip-content .phone[data-v-f000587e] {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 15px;
            margin-bottom: 9px;
            white-space: nowrap
        }

        .footer .footer-item.help .footer-item__tooltip .tooltip-content .flag[data-v-f000587e] {
            width: 21px;
            height: 14px;
            outline: 1px solid #f0f1f6
        }

        .footer .footer-item:hover .footer-item__tooltip[data-v-f000587e] {
            display: flex
        }

        .is-form-login .footer[data-v-f000587e] {
            max-width: 1000px
        }

        @media screen and (max-width:992px) {
            .footer[data-v-f000587e] {
                padding: 85px 50px
            }

            .footer .years[data-v-f000587e] {
                order: -2
            }

            .footer .main-site-link[data-v-f000587e] {
                order: -1
            }

            .footer .main-site-link span[data-v-f000587e] {
                display: none
            }

            .footer .main-site-link img[data-v-f000587e] {
                margin: 0 !important
            }
        }

        @media screen and (max-width:710px) {
            .footer[data-v-f000587e] {
                flex-wrap: wrap;
                justify-content: flex-start;
                padding: 55px 15px
            }

            .footer .footer-item[data-v-f000587e]:not(.bug):not(.help) {
                margin-right: 70%;
                margin-bottom: 1.4rem;
                margin-top: 0
            }

            .footer .bug[data-v-f000587e] {
                margin-right: 30px
            }

            .footer .bug[data-v-f000587e],
            .footer .help[data-v-f000587e] {
                margin-bottom: 0;
                margin-top: 35px
            }

            .footer .main-site-link[data-v-f000587e] {
                order: -3
            }
        }

        .cookie-enter-active[data-v-92b54a92],
        .cookie-leave-active[data-v-92b54a92] {
            transition: transform .5s ease
        }

        .cookie-enter[data-v-92b54a92],
        .cookie-leave-active[data-v-92b54a92] {
            transform: translateY(500px)
        }

        .cookie-notification[data-v-92b54a92] {
            position: fixed;
            bottom: 43px;
            z-index: 9999;
            width: 100%;
            padding: 0 20px
        }

        .cookie-notification h3[data-v-92b54a92] {
            font-size: 15px
        }

        .cookie-notification__content[data-v-92b54a92] {
            background: #fff;
            max-width: 824px;
            margin: auto;
            display: flex;
            align-items: center;
            padding: 22px 30px;
            border-radius: 30px;
            box-shadow: 10px 10px 40px rgba(150, 156, 187, .3568627451)
        }

        .cookie-notification__content_image-wrapper[data-v-92b54a92] {
            display: flex;
            align-items: center;
            flex-shrink: 0
        }

        .cookie-notification__content_image-wrapper h3[data-v-92b54a92] {
            margin-left: 11px;
            display: none
        }

        .cookie-notification__content_text[data-v-92b54a92] {
            margin: 0 30px
        }

        .cookie-notification__content_text h3[data-v-92b54a92] {
            margin-bottom: 8px
        }

        .cookie-notification__content_text p[data-v-92b54a92] {
            font-size: 13px
        }

        .cookie-notification__content button[data-v-92b54a92] {
            background-color: #e4ffed;
            color: #11b84a;
            white-space: nowrap;
            padding: 16px 30px
        }

        .cookie-notification__content button[data-v-92b54a92]:hover {
            background-color: #d8ffe5
        }

        .cookie-notification__content button[data-v-92b54a92]:active {
            background-color: #caffdc
        }

        @media screen and (max-width:768px) {
            .cookie-notification[data-v-92b54a92] {
                bottom: 32px
            }

            .cookie-notification .cookie-notification__content[data-v-92b54a92] {
                flex-direction: column;
                align-items: flex-start;
                padding: 37px 30px
            }

            .cookie-notification .cookie-notification__content_image-wrapper img[data-v-92b54a92] {
                height: 36px;
                width: 36px
            }

            .cookie-notification .cookie-notification__content_image-wrapper h3[data-v-92b54a92] {
                display: block
            }

            .cookie-notification .cookie-notification__content_text[data-v-92b54a92] {
                margin: 19px 0 24px
            }

            .cookie-notification .cookie-notification__content_text h3[data-v-92b54a92] {
                display: none
            }
        }

        @media screen and (max-width:400px) {
            button[data-v-92b54a92] {
                width: 100%;
                white-space: normal !important
            }
        }

        .vue-notification-wrapper {
            overflow: visible !important
        }

        .vue-notification-group[data-v-1fd4ee6a] {
            position: fixed;
            z-index: 9999;
            right: 20px !important;
            top: 20px !important;
            width: calc(100% - 40px) !important
        }

        .notify-body[data-v-1fd4ee6a] {
            position: relative;
            background: #fff;
            padding: 29px 44px 29px 30px;
            width: 100%;
            margin-bottom: 20px;
            transition: all .4s ease;
            box-shadow: 10px 10px 60px 0 rgba(193, 195, 204, .8156862745);
            border-radius: 10px
        }

        .notify-body.success>.title[data-v-1fd4ee6a] {
            color: #11b84a
        }

        .notify-body.success>.button[data-v-1fd4ee6a] {
            background: #e4ffed
        }

        .notify-body.success>.button[data-v-1fd4ee6a]:hover {
            background: #d0ffe0
        }

        .notify-body.success>.button[data-v-1fd4ee6a]:active {
            background: #caffdc
        }

        .notify-body.error>.title[data-v-1fd4ee6a] {
            color: #fe337c
        }

        .notify-body.error>.button[data-v-1fd4ee6a] {
            background: #ffd8e6
        }

        .notify-body>.close[data-v-1fd4ee6a] {
            display: flex;
            justify-content: flex-end;
            position: absolute;
            top: 14px;
            right: 14px
        }

        .notify-body>.close>.close-button[data-v-1fd4ee6a] {
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            height: 25px;
            background-color: #f4f6ff;
            border-radius: 5px;
            transition: .1s ease;
            color: rgba(0, 0, 0, .43)
        }

        .notify-body>.close>.close-button[data-v-1fd4ee6a]:hover {
            background: #eceeff;
            color: #000
        }

        .notify-body>.close>.close-button[data-v-1fd4ee6a]:active {
            background: #e5e9ff;
            color: #000
        }

        .notify-body>.title[data-v-1fd4ee6a] {
            font-weight: 600;
            font-size: 15px
        }

        .notify-body>.text[data-v-1fd4ee6a] {
            font-size: 11px;
            margin-top: 9px;
            line-height: 16px
        }

        .notify-body>.button[data-v-1fd4ee6a] {
            font-size: 11px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 40px;
            margin-top: 18px;
            border-radius: 5px
        }

        @media(min-width:576px) {
            .vue-notification-group[data-v-1fd4ee6a] {
                right: 40px !important;
                top: 40px !important;
                width: 324px !important
            }
        }

        .promo-popup-enter[data-v-c9f631d4],
        .promo-popup-leave-to[data-v-c9f631d4] {
            transform: translateY(700px)
        }

        .promo-popup[data-v-c9f631d4] {
            z-index: 1000;
            position: fixed;
            width: calc(100vw - 40px);
            bottom: 20px;
            right: 20px;
            background-color: #fff;
            box-shadow: 10px 10px 40px rgba(175, 179, 199, .25);
            border-radius: 15px;
            cursor: pointer;
            font-family: Montserrat;
            font-size: 15px;
            color: #fff;
            overflow: hidden;
            transition: 1s ease
        }

        .promo-popup[data-v-c9f631d4],
        .promo-popup .promo-popup_bg[data-v-c9f631d4] {
            background-size: cover
        }

        .promo-popup video[data-v-c9f631d4] {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .promo-popup .button[data-v-c9f631d4] {
            display: none;
            position: absolute;
            background-color: #385bd7;
            bottom: 21px;
            right: 21px;
            padding: 13px 25px;
            border-radius: 5px;
            color: #fff
        }

        .promo-popup .close-btn[data-v-c9f631d4] {
            position: absolute;
            background: hsla(0, 0%, 100%, .87);
            border-radius: 100px;
            width: 33px;
            height: 33px;
            top: 18px;
            right: 21px;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center
        }

        @media(min-width:576px) {
            .promo-popup[data-v-c9f631d4] {
                width: 464px;
                bottom: 30px;
                right: 30px
            }

            .promo-popup .button[data-v-c9f631d4] {
                display: block
            }
        }
    </style>

    <div data-v-db41e95e="" class="wrapper all-content full-cost df">
        <main data-v-db41e95e="" class="main">
            <div data-v-db41e95e="" class="section-head mb_50 df">
                <a data-v-db41e95e="" href="{{ route('personal.main.index') }}" class="nuxt-link-active back-link"></a>
                <h2 data-v-db41e95e="" class="main-title ts_25">На главную</h2>
            </div>
            <div data-v-db41e95e="">
                @if($user->courses()->where('course_id', $course->id)->exists())
                    @if ($userTime <= $date)
                        <div data-v-47bd3922="" data-v-db41e95e="" class="welcome-block block-wrapper" style="">
                            <div data-v-47bd3922="" class="image-wrapper">
                                <img data-v-47bd3922="" src="{{ asset('img/course/fire.png') }}" alt="">
                            </div>
                            <div data-v-47bd3922="">
                                <h3 data-v-47bd3922="">Добро пожаловать на курс! Что делать дальше?</h3>
                                <p data-v-47bd3922="">
                                    Первое занятие стартует <b data-v-47bd3922="">{{ $date->isoFormat('Do MMMM') . ' в ' . $date->translatedFormat('H:i') }} (Київ).</b> 
                                    Смотри его в день выхода и выполняй задание как можно скорее.
                                </p>
                            </div>
                        </div>
                    @endif
                @endif
                <section data-v-0d2d9f8c="" data-v-db41e95e="" class="block-wrapper" id="description">
                    <div data-v-daa191d4="" data-v-0d2d9f8c="" class="course-content block-padding d-flex flex-col">
                        <div data-v-daa191d4="" class="image-wrapper centered position-relative"
                            style="--bg: url({{ '/storage/' . $course->preview_image }}) 50% no-repeat, {{ $course->color }}; @auth height: 156px; width: 156px; @endauth">
                        </div>
                        <div data-v-daa191d4="" class="content-wrapper">
                            <div>
                                @foreach ($tags as $tag)
                                    @if (is_array($course->tags->pluck('id')->toArray()) && in_array($tag->id, $course->tags->pluck('id')->toArray()))
                                        <span data-v-ce44f04c="" data-v-daa191d4="" class="tag"
                                            style="background-color: rgb(0, 209, 197);">{{ $tag->title }}</span>
                                    @endif
                                @endforeach
                            </div>
                            <h1 data-v-daa191d4="" class="course-title">{{ $course->title }}</h1>
                            <div data-v-daa191d4="">
                                @if($user->courses()->where('course_id', $course->id)->exists())
                                    <div data-v-7ceea6bc="" data-v-daa191d4="" class="telegram-links__wrapper d-flex"
                                        style="">
                                        <a data-v-7ceea6bc="" href="https://t.me/wayup_gdz_bot" target="_blank"
                                            class="telegram-link centered" style="position: relative; cursor: pointer;">
                                            <svg data-v-7ceea6bc="" viewBox="0 0 17 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" width="17" class="">
                                                <g data-v-7ceea6bc="" clip-path="url(#clip0_1871_18503)">
                                                    <path data-v-7ceea6bc=""
                                                        d="M13.375 10.2a1.913 1.913 0 011.912 1.913v.769a3.187 3.187 0 01-1.11 2.419C12.845 16.443 10.94 17 8.485 17c-2.457 0-4.359-.558-5.687-1.7a3.187 3.187 0 01-1.11-2.417v-.771A1.912 1.912 0 013.6 10.2h9.775zm0 1.275H3.6a.638.638 0 00-.638.638v.771c0 .557.244 1.087.667 1.45 1.07.92 2.68 1.393 4.856 1.393 2.176 0 3.79-.474 4.861-1.394a1.914 1.914 0 00.666-1.45v-.77a.638.638 0 00-.637-.638zM8.398.007L8.485 0a.638.638 0 01.631.55l.006.087v.638h2.975a1.913 1.913 0 011.913 1.913v3.829a1.913 1.913 0 01-1.913 1.912H4.872A1.912 1.912 0 012.96 7.017v-3.83a1.912 1.912 0 011.912-1.912h2.975V.638a.638.638 0 01.551-.631L8.485 0l-.087.006zm3.7 2.543H4.871a.638.638 0 00-.637.638v3.829c0 .352.286.637.637.637h7.225a.637.637 0 00.638-.637v-3.83a.637.637 0 00-.638-.637zM6.571 3.825a1.062 1.062 0 110 2.125 1.062 1.062 0 010-2.125zm3.819 0a1.063 1.063 0 11.06 2.125 1.063 1.063 0 01-.06-2.125z"
                                                        fill="currentColor"></path>
                                                </g>
                                                <defs data-v-7ceea6bc="">
                                                    <clipPath data-v-7ceea6bc="" id="clip0_1871_18503">
                                                        <path data-v-7ceea6bc="" fill="currentColor" d="M0 0h17v17H0z"></path>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span data-v-7ceea6bc="">Telegram-бот курса</span>
                                        </a>
                                    </div>
                                @else
                                    <div data-v-3254bd9e="" data-v-daa191d4="" class="overflow-hidden">
                                        <div data-v-3254bd9e="" class="course-details d-flex align-center nowrap flex-wrap">
                                            <span data-v-3254bd9e="" class="d-flex align-center course-details__text author">
                                                <img data-v-3254bd9e="" src="{{ '/storage/' . $course->author_avatar }}" alt="" class="portrait-square">
                                                <span data-v-3254bd9e="">{{ $course->author }}</span>
                                            </span>
                                            <span data-v-3254bd9e="" class="course-details__text date">{{ $date->isoFormat('Do MMMM Y') }}</span>
                                            <span data-v-3254bd9e="" class="course-details__text">{{ $course->during }}</span>
                                        </div>
                                        <p data-v-3254bd9e="">
                                            {{ $course->description }}
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    @if(!$user->courses()->where('course_id', $course->id)->exists())
                        @if ($course->price <= 0)
                            <div data-v-74d46a74="" data-v-0d2d9f8c="" class="d-flex w-100">
                                <a href="{{ route('personal.course.take', $course) }}" data-v-74d46a74="" class="course-button centered">
                                    <div data-v-74d46a74="">Зарегистрироваться на курс</div>
                                </a>
                            </div>
                        @else
                            <div data-v-74d46a74="" data-v-0d2d9f8c="" class="d-flex w-100">
                                <a href="{{ route('personal.course.payment', $course) }}" data-v-74d46a74="" class="course-button centered">
                                    <div data-v-74d46a74="">Оплатить обучение ${{ $course->price }}</div>
                                </a>
                                <div data-v-74d46a74="" class="payment-details-wrapper">
                                    <div data-v-74d46a74="" class="payment-details d-flex align-center flex-wrap h-100">
                                        <span data-v-74d46a74="" class="centered">
                                            <svg data-v-74d46a74="" width="12" height="8"><use data-v-74d46a74="" href="#check" xlink:href="#check"></use></svg>
                                            Предоплата
                                        </span>
                                        <span data-v-74d46a74="" class="centered">
                                            <svg data-v-74d46a74="" width="12" height="8"><use data-v-74d46a74="" href="#check" xlink:href="#check"></use></svg>
                                            Рассрочка
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                </section>
                @if($user->courses()->where('course_id', $course->id)->exists())
                    {{-- <div class="first-lesson-block block-wrapper" data-v-5b7d6275="" data-v-db41e95e="">
                        <div class="image-wrapper" data-v-5b7d6275="">
                            <img src="{{ asset('img/components/course/camera.png') }}" alt="" data-v-5b7d6275="">
                        </div>
                        <div data-v-5b7d6275="">
                            <h3 data-v-5b7d6275="">Первое занятие уже вышло!</h3>
                            <p data-v-5b7d6275="">Переходи к просмотру, выполняй домашнее задание и дожидайся ответа наставника.
                                Ниже ты видишь, сколько у тебя осталось времени, чтобы успеть сдать все задания курса. Вперед!
                            </p>
                        </div>
                    </div> --}}
                    <div class="block-margin" data-v-db41e95e="">
                        <div class="block-wrapper block-padding info-progress-course" data-v-53105e2c="" data-v-db41e95e="">
                            <div class="timer-label" data-v-53105e2c="">До окончания курса:</div>
                            <div class="timer-wrapper" data-v-53105e2c="">
                                <div class="timer timer" data-v-65f94cf1="" data-v-53105e2c="">
                                    <div data-v-65f94cf1="">
                                        <div class="number" data-v-65f94cf1="">1</div>
                                        <div class="timer-label" data-v-65f94cf1="">дней</div>
                                    </div>
                                    <span class="separator" data-v-65f94cf1="">:</span>
                                    <div data-v-65f94cf1="">
                                        <div class="number" data-v-65f94cf1="">23</div>
                                        <div class="timer-label" data-v-65f94cf1="">часов</div>
                                    </div>
                                    <span class="separator" data-v-65f94cf1="">:</span>
                                    <div data-v-65f94cf1="">
                                        <div class="number" data-v-65f94cf1="">29</div>
                                        <div class="timer-label" data-v-65f94cf1="">минут</div>
                                    </div>
                                    <span class="separator" data-v-65f94cf1="">:</span>
                                    <div data-v-65f94cf1="">
                                        <div class="number" data-v-65f94cf1="">49</div>
                                        <div class="timer-label" data-v-65f94cf1="">секунд</div>
                                    </div>
                                </div>
                                <div class="progress progress" data-v-4538add2="" data-v-53105e2c=""
                                    style="position: relative; cursor: pointer;">
                                    <div class="bar" data-v-4538add2="">
                                        <div class="fill" style="width:0%;" data-v-4538add2=""></div>
                                    </div>
                                    <span class="counter" style="font-size:17px;" data-v-4538add2="">0%</span>
                                </div>
                            </div>
                            @php
                                $lessonCount = 0;
                                $firstLessonId = null;
                            @endphp
                            @foreach ($lessons as $lesson)
                                @if (is_array($course->lessons->pluck('id')->toArray()) && in_array($lesson->id, $course->lessons->pluck('id')->toArray()))
                                    @php
                                        $lessonCount++;
                                        if ($firstLessonId === null) {
                                            $firstLessonId = $lesson->id;
                                        }
                                    @endphp
                                @endif
                            @endforeach
                            <a href="{{ route('personal.lesson.index', ['lesson' => $firstLessonId, 'course' => $course]) }}" class="btn variant-green to-lesson-btn" data-v-1ede2ded="" data-v-53105e2c="">
                                <div class="btn-content" data-v-1ede2ded="">
                                    <svg viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"  width="15" data-v-53105e2c="" class=""><path d="M5.729 6.105v3.79c0 .283.123.49.371.619.248.13.49.118.726-.035L9.766 8.6A.648.648 0 0010.102 8a.648.648 0 00-.336-.602L6.826 5.52a.674.674 0 00-.726-.035.652.652 0 00-.371.62zm1.77 8.978c-.98 0-1.9-.186-2.762-.559a7.164 7.164 0 01-2.25-1.513 7.147 7.147 0 01-1.513-2.25A6.91 6.91 0 01.416 8c0-.98.186-1.9.558-2.762a7.164 7.164 0 011.514-2.25 7.148 7.148 0 012.249-1.513A6.91 6.91 0 017.499.916c.98 0 1.901.186 2.763.558a7.163 7.163 0 012.249 1.514 7.158 7.158 0 011.514 2.249c.372.862.558 1.782.558 2.762s-.186 1.901-.559 2.763a7.164 7.164 0 01-1.513 2.249 7.157 7.157 0 01-2.25 1.514 6.884 6.884 0 01-2.762.558zm0-1.417c1.57 0 2.908-.552 4.012-1.655 1.104-1.104 1.655-2.441 1.655-4.012 0-1.57-.552-2.907-1.655-4.01-1.104-1.105-2.441-1.657-4.012-1.656-1.57 0-2.907.551-4.01 1.655C2.383 5.092 1.831 6.428 1.832 8c0 1.57.551 2.908 1.655 4.012 1.104 1.104 2.44 1.655 4.011 1.655z" fill="currentColor" data-v-53105e2c=""></path></svg>
                                    Начать обучение
                                </div>
                            </a>
                            <div class="lesson-completed__points-wrap" data-v-53105e2c="">
                                <div class="lesson-completed__points" data-v-53105e2c="" style="position: relative; cursor: pointer;">
                                    @php
                                        $exists = $user->courses()->where('course_id', $course->id)->exists();
                                    @endphp
                                    
                                    <span class="lesson-completed__your-number-points" data-v-53105e2c="">
                                        @if($exists)
                                            {{ $user->courses()->where('course_id', $course->id)->first()->score }}
                                        @else
                                            0
                                        @endif
                                    </span>
                                    <span class="lesson-completed__all-number-points" data-v-53105e2c="">из 400</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($userTime >= $date)
                        <section id="challenge" class="program-wrapper" data-v-db41e95e="">
                            <h2 class="main-title ts_30 mb_50" data-v-db41e95e="">Челлендж</h2>
                            <div data-v-3bcae566="" data-v-db41e95e="">
                                <div class="challenge-block" data-v-3bcae566="">
                                    <div class="fireworks" data-v-3bcae566="">
                                        <img src="{{ asset('img/components/course/fireworks.svg') }}" alt="" data-v-3bcae566="">
                                    </div>
                                    <div class="text-wrapper" data-v-3bcae566="">
                                        <p class="time-left" data-v-3bcae566="">Осталось 1 день и 1 час</p>
                                        <div class="d-flex" data-v-57d8512c="" data-v-3bcae566="">
                                            <div class="title-wrapper" data-v-57d8512c="">
                                                <h4 data-v-57d8512c="">«Начало положено»</h4>
                                            </div>
                                        </div>
                                        <p class="text" data-v-3bcae566="">Заработай <b data-v-3bcae566="">200 баллов</b> на этом курсе до 18 марта (включ.) и получи подарок от команды WAYUP</p>
                                    </div>
                                    <div class="percent-wrapper percent-wrapper" style="--shadow-color: #CF040447;" data-v-4a57771d="" data-v-3bcae566="">
                                        <span class="percent" data-v-4a57771d="">0%</span>
                                        <div class="shadow" data-v-4a57771d=""></div>
                                        <div class="pie-wrapper circle first" style="--color: #F13F3F; --background: #FFFFFF30; --progress: 0; --size: 101px; --thickness: 3px;" data-v-2630fb91="" data-v-4a57771d="">
                                            <div class="pie first-half" data-v-2630fb91="">
                                                <div class="left-side half-circle" data-v-2630fb91=""></div>
                                                <div class="right-side half-circle" data-v-2630fb91=""></div>
                                            </div>
                                            <div class="bg" data-v-2630fb91=""></div>
                                        </div>
                                        <div class="pie-wrapper circle second" style="--color: #B8111108; --size: 170px; --thickness: 4px; --progress: 100;" data-v-2630fb91="" data-v-4a57771d="">
                                            <div class="pie" data-v-2630fb91="">
                                                <div class="left-side half-circle" data-v-2630fb91=""></div>
                                                <div class="right-side half-circle" data-v-2630fb91=""></div>
                                            </div>
                                            <div class="bg" data-v-2630fb91=""></div>
                                        </div>
                                        <div class="pie-wrapper circle third" style="--color: #FFFFFF14; --size: 208px; --thickness: 5px; --progress: 100;" data-v-2630fb91="" data-v-4a57771d="">
                                            <div class="pie" data-v-2630fb91="">
                                                <div class="left-side half-circle" data-v-2630fb91=""></div>
                                                <div class="right-side half-circle" data-v-2630fb91=""></div>
                                            </div>
                                            <div class="bg" data-v-2630fb91=""></div>
                                        </div>
                                        <div class="pie-wrapper circle four" style="--color: #B8111108; --size: 269px; --thickness: 7px; --progress: 100;" data-v-2630fb91="" data-v-4a57771d="">
                                            <div class="pie" data-v-2630fb91="">
                                                <div class="left-side half-circle" data-v-2630fb91=""></div>
                                                <div class="right-side half-circle" data-v-2630fb91=""></div>
                                        </div>
                                        <div class="bg" data-v-2630fb91=""></div>
                                    </div>
                                    <div class="dot first" data-v-4a57771d=""></div>
                                    <div class="dot second" data-v-4a57771d=""></div>
                                    <div class="dot third" data-v-4a57771d=""></div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                @else
                <div data-v-db41e95e="" class="block-margin">
                    <div data-v-be323d86="" data-v-db41e95e=""
                        class="block-wrapper block-padding d-flex flex-col justify-between">
                        <div data-v-be323d86="" class="specific-item">
                            <h2 data-v-be323d86="">25590 студентов</h2>Завершили обучение
                        </div>
                        <div data-v-be323d86="" class="specific-item">
                            <h2 data-v-be323d86="">1 работа</h2>Для твоего портфолио
                        </div>
                        <div data-v-be323d86="" class="specific-item">
                            <h2 data-v-be323d86="">1 наставник</h2>Проверяют ДЗ и отвечают на вопросы
                        </div>
                    </div>
                </div>
                @endif
                <section data-v-db41e95e="" id="shedule" class="program-wrapper">
                    <h2 data-v-db41e95e="" class="main-title ts_30 mb_50">Программа <span
                            data-v-db41e95e="">обучения</span>
                    </h2>
                    <div data-v-6570bffa="" data-v-db41e95e="" class="program">
                        <div data-v-6570bffa="" class="program-header">
                            <ul data-v-6570bffa="">
                                <li data-v-6570bffa="">4 спринта</li>
                                <li data-v-6570bffa="">6 занятий</li>
                                <li data-v-6570bffa="">4 ДЗ</li>
                            </ul>
                        </div>
                        <div data-v-6570bffa="">
                            @php
                                $lessonCount = 0;
                            @endphp
                            @foreach ($lessons as $lesson)
                                @if (is_array($course->lessons->pluck('id')->toArray()) && in_array($lesson->id, $course->lessons->pluck('id')->toArray()))
                                    @php
                                        $lessonCount++;
                                    @endphp
                                    <div data-v-6570bffa="" id="sprint-2" class="sprint-wrapper {{ $lessonCount == 1 ? 'first-sprint' : '' }}">
                                        <div data-v-6570bffa="" class="sprint-content">
                                            <div data-v-6570bffa="" class="sprint-header">
                                                <h3 data-v-6570bffa="" class="sprint-title">
                                                    <span data-v-6570bffa="" class="inline-sm">Урок</span>
                                                    <span data-v-6570bffa="">
                                                        {{ $lessonCount }}.
                                                        {{ $lesson->title }}
                                                    </span>
                                                </h3>
                                                <a href="{{ route('personal.lesson.index', ['lesson' => $lesson, 'course' => $course]) }}" data-v-6570bffa="" class="lessons-counter current">перейти</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
                <div data-v-00b6e9d8="" data-v-db41e95e="" id="about">
                    <h2 data-v-00b6e9d8="" class="main-title ts_30 mb_50">Об авторе</h2>
                    <div data-v-00b6e9d8="" class="block-wrapper block-padding d-flex">
                        <div data-v-00b6e9d8="" class="author-avatar">
                            <img data-v-00b6e9d8="" src="{{ '/storage/' . $course->author_avatar }}" alt="{{ $course->author }}">
                        </div>
                        <div data-v-00b6e9d8="" class="info d-flex flex-col flex-grow">
                            <h3 data-v-00b6e9d8="" class="author-name">{{ $course->author }}</h3>
                            <p data-v-00b6e9d8="" class="author-position">{{ $course->author_about }}</p>
                            <div data-v-00b6e9d8="" class="courses-wrapper">
                                @foreach ($courses as $item)
                                    @if ($item->author == $course->author && $item->is_published == 1)
                                        <a data-v-00b6e9d8="" href="{{ route('personal.course.index', $item->id) }}" aria-current="page" class="nuxt-link-exact-active nuxt-link-active course" style="background: {{ $item->color }};">
                                            <div data-v-00b6e9d8=""
                                                style="background-image: url(&quot;{{ '/storage/' . $item->preview_image }}&quot;);">
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            {{-- <ul data-v-00b6e9d8="" class="skills">
                                <li data-v-00b6e9d8="">10+ лет в графическом дизайне</li>
                                <li data-v-00b6e9d8="">Фриланс без бирж — мой конёк</li>
                                <li data-v-00b6e9d8="">Путешествую с одним рюкзаком</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <aside data-v-0d183450="" data-v-db41e95e="" class="sidebar">
            <nav data-v-0d183450="" class="aside-menu add_c ts_18 fwb">
                <ul data-v-0d183450="">
                    <li data-v-0d183450=""><a data-v-0d183450="" data-anchor="active" href="#description" class="active">Описание</a></li>
                    @if($user->courses()->where('course_id', $course->id)->exists())
                        <li data-v-0d183450=""><a data-v-0d183450="" href="#challenge">Челлендж</a></li>
                    @endif
                    <li data-v-0d183450=""><a data-v-0d183450="" data-anchor="" href="#shedule" class="">Программа</a></li>
                    <li data-v-0d183450=""><a data-v-0d183450="" data-anchor="" href="#about" class="">Об авторе</a></li>
                </ul>
            </nav>
            <div data-v-0d183450="" class="bottom-menu"></div>
        </aside>
    </div>
@endsection
