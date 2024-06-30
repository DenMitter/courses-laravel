@extends('layouts.main')
@section('content')
    <div class="content" data-v-07410990="" data-v-07410990="">
        <div class="overflow-hidden">
            <div class="container">
                <section class="course-page__section-margin" data-v-085dd42a="">
                    <div class="description-block" data-v-085dd42a="">
                        <div class="course-image" style="background: {{ $course->color }};" data-v-085dd42a="">
                            <img src="{{ '/storage/' . $course->preview_image }}" alt="" data-v-085dd42a="">
                        </div>
                        <div data-v-085dd42a="">
                            <div class="top-line" data-v-63d74148="" data-v-085dd42a="">
                                <div class="date-wrapper" data-v-63d74148="">
                                    <div class="course-image" style="background: {{ $course->color }};" data-v-63d74148="">
                                        <img src="{{ '/storage/' . $course->preview_image }}" alt="" data-v-63d74148="">
                                    </div>
                                    <span class="date text-big" data-v-63d74148="">
                                        <span class="start" data-v-63d74148="">Старт: </span>
                                        <span class="text-blue" data-v-63d74148="">{{ $date->isoFormat('Do MMMM') }}</span>
                                    </span>
                                        <div class="tag tag-top" style="background:#247CFF;" data-v-63d74148="">
                                            {{-- {{ $tag->title }} --}}
                                        </div>
                                    <span class="text-blue text-big" data-v-63d74148="">{{ $course->price ? '$' . $course->price : "Безкоштовно" }}</span>
                                </div>
                                <div class="tag tag-bottom" style="background:#247CFF;" data-v-63d74148="">UX/UI</div>
                            </div>
                            <h1 data-v-085dd42a="">{{ $course->title }}</h1>
                            <p data-v-085dd42a="">{{ $course->description }}</p>
                            @auth
                                @if(!auth()->user()->courses()->where('course_id', $course->id)->exists())
                                    <a href="{{ $course->price > 0 ? route('personal.course.payment', $course) : route('personal.course.take', $course) }}" class="btn variant-blue" data-v-0c1d1295="" data-v-085dd42a="">
                                        <div class="btn-content" data-v-0c1d1295="">
                                            <span data-v-0c1d1295="" data-v-085dd42a="">Зареєструватись</span>
                                        </div>
                                    </a>
                                @else
                                    <span href="{{ route('personal.course.take', $course) }}" class="btn variant-blue disabled" data-v-0c1d1295="" data-v-085dd42a="">
                                        <div class="btn-content" data-v-0c1d1295="">
                                            <span data-v-0c1d1295="" data-v-085dd42a="">Ви зареєстровані на курс</span>
                                        </div>
                                    </span>
                                @endif
                            @endauth
                            @guest
                                <a href="{{ route('register') }}" class="btn variant-blue" data-v-0c1d1295="" data-v-085dd42a="">
                                    <div class="btn-content" data-v-0c1d1295="">
                                        <span data-v-0c1d1295="" data-v-085dd42a="">Зареєструватись</span>
                                    </div>
                                </a>
                            @endguest
                        </div>
                    </div>
                    <div class="info-block" data-v-085dd42a="">
                        <div class="item" data-v-085dd42a="">
                            <p class="text-small" data-v-085dd42a="">Тут навчають</p>
                            <h3 data-v-085dd42a="">З нуля</h3>
                        </div>
                        {{-- <div class="item" data-v-085dd42a="">
                            <p class="text-small" data-v-085dd42a="">Тривалість</p>
                            <h3 data-v-085dd42a="">{{ $course->during }}</h3>
                        </div> --}}
                        <div class="item" data-v-085dd42a="">
                            <p class="text-small" data-v-085dd42a="">На курсі є</p>
                            <h3 data-v-085dd42a="">Наставник</h3>
                        </div>
                        <div class="item" data-v-085dd42a="">
                            <p class="text-small" data-v-085dd42a="">Ти створиш</p>
                            <h3 data-v-085dd42a="">Портфоліо</h3>
                        </div>
                        <div class="item" data-v-085dd42a="">
                            <p class="text-small" data-v-085dd42a="">Документ наприкінці</p>
                            <h3 data-v-085dd42a="">Сертифікат</h3>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        {{-- <div class="container">
            <section class="course-page__section-margin" data-v-60666277="">
                <h2 class="course-page__section-title" data-v-60666277="">Програма навчання</h2>
                <div data-v-60666277=""></div>
            </section>
            <section class="course-page__section-margin" style="background:#fff6d6;" data-v-42dd10d0="">
                <div class="text-block" data-v-42dd10d0="">
                    <h2 data-v-42dd10d0="">Один автор курсу – єдиний рівень та якість</h2>
                    <h3 class="author-name" data-v-42dd10d0="">{{ $course->author }}</h3>
                    <p data-v-42dd10d0="">{{ $course->author_about }}</p>
                    <ul data-v-42dd10d0="">
                        <li data-v-42dd10d0="">Досвід роботи у сфері веб – 10 років</li>
                        <li data-v-42dd10d0="">Заробляє на фрілансі $3000-$5000/міс.</li>
                        <li data-v-42dd10d0="">Подорожує та веде блог</li>
                    </ul>
                    <div class="info-block" style="background:#fef0be;" data-v-42dd10d0="">
                        <div data-v-42dd10d0="">
                            <h3 data-v-42dd10d0=""> 6750</h3>
                            <p data-v-42dd10d0="">Випускників</p>
                        </div>
                        <div data-v-42dd10d0="">
                            <h3 data-v-42dd10d0="">35</h3>
                            <p data-v-42dd10d0="">Потоків</p>
                        </div>
                        <div data-v-42dd10d0="">
                            <h3 data-v-42dd10d0="">8</h3>
                            <p data-v-42dd10d0="">Років з нами</p>
                        </div>
                    </div>
                </div>
                <div class="portrait-wrapper" data-v-42dd10d0="">
                    <div class="backlight-first" style="background:linear-gradient(152.7deg, #fff1bd 5.77%, #fcedb8 89.29%);bottom:0%;left:0%;" data-v-42dd10d0=""></div>
                    <div class="backlight-second" style="background:linear-gradient(152.7deg, #fff3ca 5.77%, #d6bffb 89.29%);bottom:30%;left:30%;" data-v-42dd10d0=""></div>
                    <div class="backlight-third" style="background:linear-gradient(152.7deg, #fff3ca 5.77%, #c4fbbf 89.29%);bottom:0%;right:5%;" data-v-42dd10d0=""></div>
                    <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg" class="star" style="color:#8bf896;top:20%;left:25%;" data-v-42dd10d0="" data-v-42dd10d0=""><path d="M15 0l4.051 10.949L30 15l-10.949 4.051L15 30l-4.051-10.949L0 15l10.949-4.051L15 0z" fill="currentColor" data-v-42dd10d0="" data-v-42dd10d0=""></path></svg>
                    <svg width="30" height="29" fill="none" xmlns="http://www.w3.org/2000/svg" class="triangle" style="color:#cf8bf8;top:30%;right:25%;" data-v-42dd10d0="" data-v-42dd10d0=""><path d="M29.211 21.109L.8 28.84 8.31.37 29.21 21.109z" fill="currentColor" data-v-42dd10d0="" data-v-42dd10d0=""></path></svg>
                    <div class="rectangle" style="background:#f8e08a;top:45%;left:10%;" data-v-42dd10d0=""></div>
                    <img src="/img/course/authors/alexey.png" alt="" class="author-portrait" data-v-42dd10d0="">
                </div>
            </section>
        </div> --}}
        <section id="how-it-work-section" class="course-page__section-margin" style="--paralax:0px;" data-v-2953b6c4="">
            <div class="container" data-v-2953b6c4=""><img src="/_nuxt/img/check-figure.29cebab.svg" alt=""
                    class="bg-img check" data-v-2953b6c4=""> <img src="/_nuxt/img/cross-figure.bd56b05.svg"
                    alt="" class="bg-img cross" data-v-2953b6c4="">
                <h1 class="title" data-v-2953b6c4="">
                    Видихай.
                    <br data-v-2953b6c4="">
                    У нас все влаштовано інакше.
                </h1>
                <p class="text-big" data-v-2953b6c4="">Навчання в <i data-v-2953b6c4="">
                        типовій онлайн-школі
                    </i> працює за принципом:</p>
                <div class="items" data-v-2953b6c4="">
                    <div class="item" data-v-2953b6c4="">Дивишся відео</div> <svg xmlns="http://www.w3.org/2000/svg"
                        width="25" height="16" viewbox="0 0 25 16" fill="none" data-v-2953b6c4="">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.6875 8.00009C0.6875 7.77631 0.776395 7.5617 0.934629 7.40347C1.09286 7.24524 1.30747 7.15634 1.53125 7.15634H21.4319L16.1214 1.84746C15.9629 1.68903 15.8739 1.47415 15.8739 1.25009C15.8739 1.02603 15.9629 0.811148 16.1214 0.652714C16.2798 0.49428 16.4947 0.405273 16.7188 0.405273C16.9428 0.405273 17.1577 0.49428 17.3161 0.652714L24.0661 7.40271C24.1447 7.48109 24.207 7.5742 24.2496 7.67671C24.2921 7.77922 24.314 7.88911 24.314 8.00009C24.314 8.11107 24.2921 8.22096 24.2496 8.32347C24.207 8.42598 24.1447 8.51909 24.0661 8.59747L17.3161 15.3475C17.1577 15.5059 16.9428 15.5949 16.7188 15.5949C16.4947 15.5949 16.2798 15.5059 16.1214 15.3475C15.9629 15.189 15.8739 14.9741 15.8739 14.7501C15.8739 14.526 15.9629 14.3111 16.1214 14.1527L21.4319 8.84384H1.53125C1.30747 8.84384 1.09286 8.75495 0.934629 8.59671C0.776395 8.43848 0.6875 8.22387 0.6875 8.00009Z"
                            fill="currentColor"></path>
                    </svg>
                    <div class="item" data-v-2953b6c4="">Робиш завдання</div> <svg xmlns="http://www.w3.org/2000/svg"
                        width="25" height="16" viewbox="0 0 25 16" fill="none" data-v-2953b6c4="">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.6875 8.00009C0.6875 7.77631 0.776395 7.5617 0.934629 7.40347C1.09286 7.24524 1.30747 7.15634 1.53125 7.15634H21.4319L16.1214 1.84746C15.9629 1.68903 15.8739 1.47415 15.8739 1.25009C15.8739 1.02603 15.9629 0.811148 16.1214 0.652714C16.2798 0.49428 16.4947 0.405273 16.7188 0.405273C16.9428 0.405273 17.1577 0.49428 17.3161 0.652714L24.0661 7.40271C24.1447 7.48109 24.207 7.5742 24.2496 7.67671C24.2921 7.77922 24.314 7.88911 24.314 8.00009C24.314 8.11107 24.2921 8.22096 24.2496 8.32347C24.207 8.42598 24.1447 8.51909 24.0661 8.59747L17.3161 15.3475C17.1577 15.5059 16.9428 15.5949 16.7188 15.5949C16.4947 15.5949 16.2798 15.5059 16.1214 15.3475C15.9629 15.189 15.8739 14.9741 15.8739 14.7501C15.8739 14.526 15.9629 14.3111 16.1214 14.1527L21.4319 8.84384H1.53125C1.30747 8.84384 1.09286 8.75495 0.934629 8.59671C0.776395 8.43848 0.6875 8.22387 0.6875 8.00009Z"
                            fill="currentColor"></path>
                    </svg>
                    <div class="item" data-v-2953b6c4="">Отримуєш фідбек</div> <svg xmlns="http://www.w3.org/2000/svg"
                        width="25" height="16" viewbox="0 0 25 16" fill="none" data-v-2953b6c4="">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.6875 8.00009C0.6875 7.77631 0.776395 7.5617 0.934629 7.40347C1.09286 7.24524 1.30747 7.15634 1.53125 7.15634H21.4319L16.1214 1.84746C15.9629 1.68903 15.8739 1.47415 15.8739 1.25009C15.8739 1.02603 15.9629 0.811148 16.1214 0.652714C16.2798 0.49428 16.4947 0.405273 16.7188 0.405273C16.9428 0.405273 17.1577 0.49428 17.3161 0.652714L24.0661 7.40271C24.1447 7.48109 24.207 7.5742 24.2496 7.67671C24.2921 7.77922 24.314 7.88911 24.314 8.00009C24.314 8.11107 24.2921 8.22096 24.2496 8.32347C24.207 8.42598 24.1447 8.51909 24.0661 8.59747L17.3161 15.3475C17.1577 15.5059 16.9428 15.5949 16.7188 15.5949C16.4947 15.5949 16.2798 15.5059 16.1214 15.3475C15.9629 15.189 15.8739 14.9741 15.8739 14.7501C15.8739 14.526 15.9629 14.3111 16.1214 14.1527L21.4319 8.84384H1.53125C1.30747 8.84384 1.09286 8.75495 0.934629 8.59671C0.776395 8.43848 0.6875 8.22387 0.6875 8.00009Z"
                            fill="currentColor"></path>
                    </svg> <img src="{{ asset('img/confused-smile.a51cff2.png') }}" alt="" data-v-2953b6c4="">
                </div>
            </div>
        </section>
        <div class="container">
            <section data-v-717a8a50="">
                <h2 class="course-page__section-title" data-v-717a8a50="">Ми розробили онлайн-платформу, якої ніколи не
                    буде в інших.</h2>
                <div class="tabs-header" data-v-717a8a50="">
                    <div class="tabs-title text-big" data-v-717a8a50="">
                        <p data-v-717a8a50=""><b data-v-717a8a50="">{{ config('app.name', 'Laravel') }} – не онлайн-школа </b><span
                                class="text-blue cursor-pointer" data-v-717a8a50=""><b
                                    data-v-717a8a50="">?</b></span></p>
                        <p data-v-717a8a50="">Це освітня платформа, в основі якої 3 складові:</p>
                    </div>
                    <div class="tabs-buttons" data-v-717a8a50="">
                        <div class="tab selected" data-v-717a8a50=""><svg xmlns="http://www.w3.org/2000/svg"
                                width="22" height="24" fill="none" data-v-717a8a50="" data-v-717a8a50="">
                                <path d="M6.417 8.333a2.75 2.75 0 100-5.5 2.75 2.75 0 000 5.5z" stroke="currentColor"
                                    stroke-width="1.4" data-v-717a8a50="" data-v-717a8a50=""></path>
                                <path
                                    d="M9.167 12h-3.76a2.75 2.75 0 00-2.728 2.409l-.588 4.697a1.833 1.833 0 001.82 2.06h4.34M19.91 19.106l-.587-4.697A2.75 2.75 0 0016.593 12h-2.02a2.75 2.75 0 00-2.728 2.409l-.588 4.697a1.834 1.834 0 001.82 2.06h5.013a1.834 1.834 0 001.82-2.06z"
                                    stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                    stroke-linejoin="round" data-v-717a8a50="" data-v-717a8a50=""></path>
                                <path d="M15.584 8.333a2.75 2.75 0 100-5.5 2.75 2.75 0 000 5.5z" stroke="currentColor"
                                    stroke-width="1.4" data-v-717a8a50="" data-v-717a8a50=""></path>
                            </svg>Люди</div>
                        <div class="tab" data-v-717a8a50=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" data-v-717a8a50="" data-v-717a8a50="">
                                <path
                                    d="M12 21l2-2m2.5 0a2.5 2.5 0 100-5 2.5 2.5 0 000 5v0zM10 5l2-2-2 2zm-2.5 5a2.5 2.5 0 100-5 2.5 2.5 0 000 5v0zm.5 6l8-8-8 8zm-2.5 5a2.5 2.5 0 100-5 2.5 2.5 0 000 5v0zm13-13a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"
                                    stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                    stroke-linejoin="round" data-v-717a8a50="" data-v-717a8a50=""></path>
                            </svg>Технології</div>
                        <div class="tab" data-v-717a8a50=""><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" data-v-717a8a50="" data-v-717a8a50="">
                                <path
                                    d="M9 15l-2.968 2.968A2.362 2.362 0 012 16.298V15l1.357-6.784A4 4 0 017.279 5h9.442a4 4 0 013.922 3.216L22 15v1.297a2.362 2.362 0 01-4.032 1.67L15 15H9z"
                                    stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                    stroke-linejoin="round" data-v-717a8a50="" data-v-717a8a50=""></path>
                                <path d="M9 5l1 2h4l1-2" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                    stroke-linejoin="round" data-v-717a8a50="" data-v-717a8a50=""></path>
                            </svg>Ігри</div>
                    </div>
                </div>
                <div class="course_about-platform__tab" data-v-3dfef6e4="" data-v-717a8a50="" data-v-717a8a50="">
                    <div class="course_about-platform__game" data-v-3dfef6e4="">
                        <div class="circle-wrapper" data-v-3dfef6e4="">
                            <div class="circle" data-v-3dfef6e4=""></div>
                        </div>
                        <div class="circle-wrapper" data-v-3dfef6e4="">
                            <div class="circle" data-v-3dfef6e4=""></div>
                        </div>
                        <div class="circle-wrapper" data-v-3dfef6e4="">
                            <div class="circle" data-v-3dfef6e4=""></div>
                        </div>
                    </div>
                    <div class="course_about-platform__content" data-v-3dfef6e4="">
                        <h3 data-v-3dfef6e4="">Чарівні практики, з якими не нудно</h3>
                        <div class="text" data-v-3dfef6e4="">
                            <p data-v-3dfef6e4="">Люди – ключовий актив {{ config('app.name', 'Laravel') }}. Усі викладачі є нашими друзями. Справжніх
                                друзів
                                не буває багато, тому у нас лише {{ $teachers }} викладачів та {{ $courses }} курсів.</p>
                            <p data-v-3dfef6e4="">Куратор відповідає за освітній процес на курсі. Він робить навчання
                                комфортним, допомагаючи з технічними питаннями.</p>
                            <p data-v-3dfef6e4="">Ну а менеджер «Служби турботи» завжди на зв'язку по телефону або в
                                месенджері.
                                Він дізнається, чому ти затримуєш здачу чергової роботи, чи відповість на запитання щодо
                                нового
                                курсу, який ти хочеш пройти.</p>
                        </div>
                        <p class="list-header text-big" data-v-3dfef6e4="">З тобою працюють:</p>
                        <ul data-v-3dfef6e4="">
                            <li data-v-3dfef6e4="">Викладач</li>
                            <li data-v-3dfef6e4="">Куратор</li>
                            <li data-v-3dfef6e4="">«Служба турботи»</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        {{-- <section data-v-01ce9bdb="">
            <div class="container" data-v-01ce9bdb="">
                <div id="you-want-quit" class="section-header" data-v-01ce9bdb="">
                    <h1 data-v-01ce9bdb="">#тинекинеш</h1>
                    <h3 data-v-01ce9bdb="">адже у тебе є:</h3>
                </div>
            </div>
            <div class="cards" style="padding:0px 333px;" data-v-01ce9bdb="">
                <div class="card" data-v-01ce9bdb="">
                    <div class="bg" data-v-01ce9bdb="" style="background: url({{ asset('img/card-bg-1.aed1b61.png') }});background-size: cover;"></div> <span class="card-number text-small"
                        data-v-01ce9bdb="">01</span>
                    <div class="card-title" data-v-01ce9bdb=""><img src="{{ asset('img/user.97f4581.svg') }}" alt=""
                            data-v-01ce9bdb="">
                        <h4 data-v-01ce9bdb="">Наставник</h4>
                    </div>
                    <p class="text-small" data-v-01ce9bdb="">
                        Він усе знає. Все вміє. І навчить тебе. Щоденний коннект на платформі та в Telegram. Ти можеш писати
                        наставникові, як другу – він завжди прийде на допомогу і підбадьорить. Жодних обмежень.
                    </p>
                </div>
                <div class="card" data-v-01ce9bdb="">
                    <div class="bg" data-v-01ce9bdb="" style="background: url({{ asset('img/card-bg-2.4cd7049.png') }});background-size: cover;"></div> <span class="card-number text-small"
                        data-v-01ce9bdb="">02</span>
                    <div class="card-title" data-v-01ce9bdb=""><img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjIiIGhlaWdodD0iMjMiIHZpZXdCb3g9IjAgMCAyMiAyMyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjUwMDcgNC4xNjY5OUg1LjUwMDY1QzMuNDc1NjEgNC4xNjY5OSAxLjgzMzk4IDUuODA4NjEgMS44MzM5OCA3LjgzMzY2VjE1LjE2N0MxLjgzMzk4IDE3LjE5MiAzLjQ3NTYxIDE4LjgzMzcgNS41MDA2NSAxOC44MzM3SDE2LjUwMDdDMTguNTI1NyAxOC44MzM3IDIwLjE2NzMgMTcuMTkyIDIwLjE2NzMgMTUuMTY3VjcuODMzNjZDMjAuMTY3MyA1LjgwODYxIDE4LjUyNTcgNC4xNjY5OSAxNi41MDA3IDQuMTY2OTlaIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik0xMy43NTEzIDExLjVMOS4xNjc5NyA4Ljc1VjE0LjI1TDEzLjc1MTMgMTEuNVoiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg=="
                            alt="" data-v-01ce9bdb="">
                        <h4 data-v-01ce9bdb="">Відеорозбори</h4>
                    </div>
                    <p class="text-small" data-v-01ce9bdb="">
                        Ти отримаєш докладний відеорозбір кожного зданого ДЗ. У WAYUP немає обмежень щодо кількості та
                        тривалості відеорозборів. Дивись, аналізуй, виправляй.
                    </p>
                </div>
                <div class="card" data-v-01ce9bdb="">
                    <div class="bg" data-v-01ce9bdb="" style="background: url({{ asset('img/card-bg-3.d8f581a.png') }});background-size: cover;"></div> <span class="card-number text-small"
                        data-v-01ce9bdb="">03</span>
                    <div class="card-title" data-v-01ce9bdb=""><img src="{{ asset('img/users.236d85b.svg') }}" alt=""
                            data-v-01ce9bdb="">
                        <h4 data-v-01ce9bdb="">Команда</h4>
                    </div>
                    <p class="text-small" data-v-01ce9bdb="">
                        Грандіозні зміни створюються у командах. Один у полі не воїн. На кожному потоці ми розбиваємо
                        студентів на команди з наставником на чолі. Підтримка, спілкування, нові друзі – це все в команді.
                    </p>
                </div>
                <div class="card" data-v-01ce9bdb="">
                    <div class="bg" data-v-01ce9bdb="" style="background: url({{ asset('img/card-bg-4.8f98de9.png') }});background-size: cover;"></div> <span class="card-number text-small"
                        data-v-01ce9bdb="">04</span>
                    <div class="card-title" data-v-01ce9bdb=""><img src="{{ asset('img/chat.ae27525.svg') }}" alt=""
                            data-v-01ce9bdb="">
                        <h4 data-v-01ce9bdb="">Майстермайнди</h4>
                    </div>
                    <p class="text-small" data-v-01ce9bdb="">
                        Найкращий інструмент для роботи над собою та вирішення будь-яких питань. Регулярні дзвінки в Google
                        Meet з командою та наставником-модератором допоможуть ставити вірні цілі та брати від навчання
                        максимум.
                    </p>
                </div>
            </div>
        </section> --}}
        <div class="container"></div>
        <div class="container">
            @auth
                @if(auth()->user()->courses()->where('course_id', $course->id)->exists())
                    <section id="register-section" class="course-page__section-margin" data-v-78110038="">
                        <h2 class="course-page__section-title" data-v-78110038="">Реєстрація на курс</h2> 
                        <div data-v-a0c771f4="" class="registered-block">
                            <div data-v-a0c771f4="" class="centered" style="gap: 25px">
                                <div data-v-a0c771f4="" class="portrait">
                                    <img data-v-a0c771f4="" src="/img/default-photo.png" alt=""> 
                                    <div data-v-a0c771f4="" class="check">
                                        <svg data-v-a0c771f4="" xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11" fill="none"><path d="M1.62695 5.54899L5.37907 9.30111L11.6326 1.79688" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </div>
                                </div> 
                                <h4 data-v-a0c771f4="">Блиск! Ти вже студент цього курсу.</h4>
                                <a data-v-a0c771f4="" href="{{ route('personal.main.index') }}">
                                    <button data-v-7ebd546e="" data-v-a0c771f4="" type="button" class="btn variant-blue">
                                        <div data-v-7ebd546e="" class="btn-content">
                                            <div data-v-a0c771f4="" data-v-7ebd546e="" class="centered">
                                                Перейти на платформу
                                                <svg data-v-a0c771f4="" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 12.5H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13 5.5L20 12.5L13 19.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </div>
                                        </div>
                                    </button>
                                </a>
                            </div> 
                        </div>
                    </section>
                @endif
            @endauth
            @guest
                <div class="top-line" data-v-78110038="">
                    <div class="course-card" data-v-78110038="">
                        <div class="d-flex align-center flex-grow" data-v-78110038="">
                            <div class="image-wrapper" style="background: {{ $course->color }};" data-v-78110038="">
                                <img src="{{ '/storage/' . $course->preview_image }}" alt="" data-v-78110038="">
                            </div>
                            <h4 data-v-78110038="">{{ $course->title }}</h4>
                        </div>
                        {{-- <div class="items" data-v-78110038="">
                            <div class="item length" data-v-78110038="">
                                <p data-v-78110038="">Тривалість</p>
                                <p class="text-big text-blue" data-v-78110038="">{{ $course->during }}</p>
                            </div>
                            <div class="item" data-v-78110038="">
                                <p data-v-78110038="">Старт</p>
                                <p class="text-big text-blue" data-v-78110038="">{{ $course->starting }}</p>
                            </div>
                        </div> --}}
                    </div>
                    <div class="recent-students" data-v-6ba8f87d="" data-v-78110038="">
                        <div class="d-flex align-center" data-v-6ba8f87d=""><img
                                src="https://wayup-other.s3.eu-west-2.amazonaws.com/avatars/475300/65e5729dbc842.jpg" alt="" data-v-6ba8f87d="" data-v-6ba8f87d="">
                                <span class="counter" data-v-6ba8f87d="">502</span>
                            </div>
                        <span class="text-small" data-v-6ba8f87d="">Користувача зареєструвалися на курс за останні 7 днів</span>
                    </div>
                </div>
            @endguest
            <section class="course-page__section-margin" data-v-6c7ea154="">
                <h2 class="course-page__section-title" data-v-6c7ea154="">Відповіді на твої запитання</h2>
                <div class="faq__main" data-v-6c7ea154="">
                    <div data-fetch-key="data-v-4f95b810:0" class="accordeon" data-v-4f95b810="" data-v-6c7ea154="">
                        <div class="item" data-v-4f95b810="">
                            <h4 class="title active" style="font-size:18px;color:initial;" data-v-4f95b810="">Цей курс
                                справді
                                безкоштовний?</h4>
                            <div class="text" style="font-size:13px;" data-v-4f95b810="" data-v-4f95b810="">
                                <p data-v-6c7ea154="">Так. Жодних прихованих платежів або доплат у майбутньому. Безкоштовні
                                    заняття та безкоштовна перевірка домашніх завдань.</p>
                            </div>
                        </div>
                        <div class="item" data-v-4f95b810="">
                            <h4 class="title" style="font-size:18px;color:initial;" data-v-4f95b810="">Який рівень
                                веб-дизайну
                                потрібен для навчання на цьому курсі?</h4>
                        </div>
                        <div class="item" data-v-4f95b810="">
                            <h4 class="title" style="font-size:18px;color:initial;" data-v-4f95b810="">Я можу почати
                                заробляти
                                після цього курсу?</h4>
                        </div>
                        <div class="item" data-v-4f95b810="">
                            <h4 class="title" style="font-size:18px;color:initial;" data-v-4f95b810="">В який час
                                відбуваються
                                заняття та який графік навчання?</h4>
                        </div>
                        <div class="item" data-v-4f95b810="">
                            <h4 class="title" style="font-size:18px;color:initial;" data-v-4f95b810="">Я можу розпочати
                                навчання
                                у будь-який момент?</h4>
                        </div>
                        <div class="item" data-v-4f95b810="">
                            <h4 class="title" style="font-size:18px;color:initial;" data-v-4f95b810="">Чи зможу я
                                поєднувати
                                курс із роботою чи навчанням?</h4>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapper" data-v-6c7ea154="">
                    <h3 data-v-6c7ea154="">Немає відповіді на твоє запитання?</h3><button type="button"
                        class="btn variant-outline" data-v-0c1d1295="" data-v-6c7ea154="">
                        <div class="btn-content" data-v-0c1d1295="">
                            <div class="btn-content" data-v-0c1d1295="" data-v-6c7ea154=""><svg viewbox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    data-v-0c1d1295="" data-v-6c7ea154="">
                                    <path
                                        d="M14 19c3.771 0 5.657 0 6.828-1.172C22 16.657 22 14.771 22 11c0-3.771 0-5.657-1.172-6.828C19.657 3 17.771 3 14 3h-4C6.229 3 4.343 3 3.172 4.172 2 5.343 2 7.229 2 11c0 3.771 0 5.657 1.172 6.828.653.654 1.528.943 2.828 1.07"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" data-v-0c1d1295="" data-v-6c7ea154=""></path>
                                    <path d="M9 11l2.25 2L15 9" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" data-v-0c1d1295=""
                                        data-v-6c7ea154=""></path>
                                    <path
                                        d="M14 19c-1.236 0-2.598.5-3.84 1.145-1.999 1.037-2.998 1.556-3.49 1.225-.492-.33-.399-1.355-.212-3.404L6.5 17.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        data-v-0c1d1295="" data-v-6c7ea154=""></path>
                                </svg>Поставити запитання у чаті</div>
                        </div>
                    </button>
                </div>
            </section>
            <section class="course-page__section-margin" data-v-724d4e86="">
                <div class="left-col" data-v-724d4e86="">
                    <h1 class="large-text" data-v-724d4e86="">{{ config('app.name', 'Laravel') }} – це освітня платформа</h1>
                    <div class="left-col__why" data-v-724d4e86="">
                        <h3 data-v-724d4e86="">Чому обирають нас</h3>
                        <p data-v-724d4e86=""><b data-v-724d4e86="">Бутіковий формат.</b> Ми рідко створюємо нові курси.
                            Ми
                            вдосконалюємо існуючі.</p>
                        <p data-v-724d4e86=""><b data-v-724d4e86="">Ком'юніті.</b> Сотні тисяч людей підписані на нас у
                            соціальних мережах та навчаються у нашій еко-системі.</p>
                    </div>
                    <h2 class="pray" data-v-724d4e86="">А ще, ми <br> віримо в тебе.</h2>
                </div>
                <div class="right-col" data-v-724d4e86="">
                    <div class="counters-first" data-v-724d4e86="">
                        {{-- <div data-v-724d4e86="">
                            <h1 class="large-text" data-v-724d4e86="">9</h1>
                            <p class="text-big" data-v-724d4e86="">Років на ринку</p>
                        </div> --}}
                        <div data-v-724d4e86="">
                            <h1 class="large-text" data-v-724d4e86="">{{ $users }}</h1>
                            <p class="text-big" data-v-724d4e86="">Проходять курси на сайті</p>
                        </div>
                    </div>
                    {{-- <h2 class="text-blue" data-v-724d4e86="">«Під капотом» – технології та крута команда</h2>
                    <div class="button-wrapper" data-v-724d4e86="">
                        <div data-v-724d4e86="">
                            <h1 class="large-text" data-v-724d4e86="">8735</h1>
                            <p class="text-big" data-v-724d4e86="">Випускника платних курсів</p>
                        </div><button type="button" class="btn variant-blue" data-v-0c1d1295="" data-v-724d4e86="">
                            <div class="btn-content" data-v-0c1d1295=""><span data-v-0c1d1295=""
                                    data-v-724d4e86="">Зареєструватись</span></div>
                        </button>
                    </div> --}}
                    <h2 class="pray" data-v-724d4e86="">А ще, ми <br> віримо в тебе.</h2>
                </div>
            </section>
        </div>
    </div>
@endsection
