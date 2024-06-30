@extends('layouts.main')
@section('content')
    <style>
      @media (min-width: 576px) {
        .vue-notification-group[data-v-1fd4ee6a] {
          right: 40px !important;
          top: 40px !important;
          width: 324px !important;
        }
      }
      .vue-notification-group[data-v-1fd4ee6a] {
        right: 20px !important;
        top: 20px !important;
        width: 400px !important;
      }
      .vue-notification-group {
        display: block;
        position: fixed;
        z-index: 5000;
      }

      .vue-notification-wrapper {
        display: block;
        overflow: hidden;
        width: 100%;
        margin: 0;
        padding: 0;
      }
      .vue-notification-wrapper {
        overflow: visible !important;
      }

      .notify-body[data-v-1fd4ee6a] {
        position: relative;
        background: #fff;
        padding: 29px 44px 29px 30px;
        width: 100%;
        margin-bottom: 20px;
        transition: all .4s ease;
        box-shadow: 10px 10px 60px 0 rgba(193,195,204,.8156862745);
        border-radius: 10px;
      }

      .notify-body>.close[data-v-1fd4ee6a] {
        display: flex;
        justify-content: flex-end;
        position: absolute;
        top: 14px;
        right: 14px;
      }

      .notify-body.success>.title[data-v-1fd4ee6a] {
        color: #11b84a;
      }
      .notify-body>.title[data-v-1fd4ee6a] {
        font-weight: 600;
        font-size: 15px;
      }

      .notify-body>.text[data-v-1fd4ee6a] {
        font-size: 11px;
        margin-top: 9px;
        line-height: 16px;
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
        color: rgba(0, 0, 0, .43);
      }
    </style>

    @if(session('success'))
      <div data-v-1fd4ee6a="">
        <div data-v-1fd4ee6a="" class="vue-notification-group" style="width: 324px; top: 0px; right: 0px;">
          <span>
            <div data-id="0" class="vue-notification-wrapper" style="transition: all 300ms ease 0s;">
              <div data-v-1fd4ee6a="" class="notify-body success">
                <div data-v-1fd4ee6a="" class="close">
                  <a data-v-1fd4ee6a="" class="close-button">
                    <svg data-v-1fd4ee6a="" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path data-v-1fd4ee6a="" d="M1 1L10 10M10 1L1 10" stroke="black"></path></svg>
                  </a>
                </div>
                <a data-v-1fd4ee6a="" class="title">Реєстрація успішна!</a>
                <div data-v-1fd4ee6a="" class="text">
                  Твоє навчання стартує <b>1 квітня о 19:00 (київ)</b>. 
                  Вивчи інформацію на цій сторінці, щоб бути у всеозброєнні
                </div>
              </div>
            </div>
          </span>
        </div>
        <div data-v-1fd4ee6a="" class="vue-notification-group" style="width: 324px; top: 0px; right: 0px;">
          <span></span>
        </div>
      </div>
    @endif

    <div class="container" data-v-07410990=""></div>
    <div class="content" data-v-07410990="" data-v-07410990="">
        <section id="header" class="index-header container" data-v-0293901a="">
            <div class="blue-blur" data-v-0293901a=""></div>
            <div class="green-blur" data-v-0293901a=""></div>
            <h1 data-v-0293901a="">Вивчення англійської.</h1>
            <ul data-v-0293901a="">
                <li data-v-0293901a="">Вчися<img src="/img/emoji/student-hat.png" alt="🎓" data-v-0293901a=""></li>
                <li data-v-0293901a="">Працюй<img src="/img/emoji/laptop.png" alt="💻" data-v-0293901a=""></li>
                <li data-v-0293901a="">Розвивайся<img src="/img/emoji/rocket.png" alt="🚀" data-v-0293901a=""></li>
            </ul>
            <div class="bottom" data-v-0293901a="">
              @if (!auth()->user())
                <button type="button" class="btn variant-blue modal-btn" data-v-0c1d1295="" data-v-0293901a="" data-modal-btn="register">
                  <div class="btn-content" data-v-0c1d1295="">Почати безкоштовно</div>
                </button>
              @else
                <a href="{{ route('personal.main.index') }}" class="btn variant-blue" data-v-0c1d1295="" data-v-0293901a="">
                  <div class="btn-content" data-v-0c1d1295="">Перейти на платформу</div>
                </a>
              @endif
              <p class="info-text" data-v-0293901a="">Освітня платформа твого майбутнього</p>
              <div class="header__top" data-v-0293901a="">
                <h3 class="header__num" data-v-0293901a="">{{ $users->count() }} студента</h3>
                <div class="header__text" data-v-0293901a="">Будують нову кар'єру з нами</div>
              </div>
            </div>
        </section>
        <section id="courses" data-fetch-key="Courses:0" class="courses">
            <div class="container">
                <div class="courses__box d-flex">
                    <!-- <div class="courses__list"><a class="active">Всі</a><a>UX/UI</a><a>Розробка</a><a>Графіка</a></div> -->
                    <div class="courses__block">
                        <div class="courses__content">
                            <div class="courses__top d-flex">
                                <h3>Основи безкоштовно</h3>
                                <div class="courses__dropdown">
                                    <span>За датою старту</span>
                                    <!-- <span></span> -->
                                </div>
                            </div>
                            @foreach ($courses as $course)
                                @if ($course->price == 0)
                                    <a href="{{ route('course.index', $course->id) }}" class="courses__item">
                                        <div class="courses__pic" style="background: {{ $course->color }};">
                                            <img src="{{ 'storage/' . $course->preview_image }}" alt="">
                                        </div>
                                        <div class="courses__info">
                                            <div class="courses__types">
                                                @foreach ($tags as $tag)
                                                    @if (is_array($course->tags->pluck('id')->toArray()) && in_array($tag->id, $course->tags->pluck('id')->toArray()))
                                                        <div class="courses__type courses__type_ui">
                                                            {{ $tag->title }}
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <h4 class="courses__title">{{ $course->title }}</h4>
                                            <div class="courses__bottom d-flex">
                                                {{-- <div class="courses__date">{{ $date->isoFormat('Do MMMM') }}</div> --}}
                                                <div class="courses__duration">{{ $course->during }}</div>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <div class="courses__content">
                            <div class="courses__top d-flex">
                                <h3>Від основ до професії</h3>
                                <div class="courses__dropdown">
                                    <span>За датою старту</span>
                                    <!-- <span></span> -->
                                </div>
                            </div>
                            @foreach ($courses as $course)
                                @if ($course->price > 0)
                                    <a href="{{ route('course.index', $course->id) }}" class="courses__item">
                                        <div class="courses__pic" style="background: {{ $course->color }};">
                                            <img src="{{ 'storage/' . $course->preview_image }}" alt="">
                                        </div>
                                        <div class="courses__info">
                                          <div class="courses__types">
                                              @foreach ($tags as $tag)
                                                @if (is_array($course->tags->pluck('id')->toArray()) && in_array($tag->id, $course->tags->pluck('id')->toArray()))
                                                    <div class="courses__type courses__type_ui">
                                                        {{ $tag->title }}
                                                    </div>
                                                @endif
                                             @endforeach
                                            </div>
                                            <h4 class="courses__title">{{ $course->title }} <span class="courses__duration">( {{ $course->lesson_count }} уроків )</span></h4>
                                            <div class="courses__bottom d-flex">
                                                {{-- <div class="courses__date">{{ $date->isoFormat('Do MMMM') }}</div> --}}
                                                {{-- <div class="courses__duration">{{ $course->during }}</div> --}}
                                                <div class="courses__duration">{{ $course->price }}грн за урок</div>
                                                <div class="courses__discount">-10 %</div>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="about" class="about">
          <div class="container">
            <div class="about__box">
              <h2>
                Навчання з людьми
                <br> <span class="blue">на технологічній платформі</span>
              </h2>
              <div class="about__main">
                <div id="about-item-wrapper-null" class="about__item-wrapper" data-v-44f5cf32="" data-v-8cf2479c="">
                  <div id="about-item-null" class="about__item d-flex active" data-v-44f5cf32="">
                    <div class="about__info" data-v-44f5cf32="">
                      <h3 id="about-item-label-null" class="about__label" data-v-44f5cf32="">
                        Команда
                      </h3>
                      <div class="about__text-content" data-v-44f5cf32="">
                        <p class="about__text" data-v-44f5cf32="" data-v-8cf2479c="">
                          Ми зібрали талановитих спеціалістів, які вміють викладати. Ми створили dream team з
                          наставників, кураторів та менеджерів, які вдосконалюють методологію щодня.
                        </p>
                        <div class="about__desc d-flex" data-v-44f5cf32="" data-v-8cf2479c="">
                          <p data-v-44f5cf32="" data-v-8cf2479c="">45 осіб</p>
                        </div>
                      </div>
                    </div>
                    <div class="about__more" data-v-44f5cf32="">
                      <div class="about__team d-flex" data-v-44f5cf32="" data-v-8cf2479c="">
                        <a href="about.html" class="about__photo" data-v-8cf2479c="">
                          <img src="/img/team1@2x.jpg" alt="" data-v-8cf2479c="">
                        </a>
                        <a href="about.html" class="about__photo" data-v-8cf2479c="">
                          <img src="/img/team2@2x.jpg" alt="" data-v-8cf2479c="">
                        </a>
                        <a href="about.html" class="about__photo about__last" data-v-8cf2479c="">
                          Про нас
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="about-item-wrapper-null" class="about__item-wrapper" data-v-44f5cf32="" data-v-bf1145da="">
                  <div id="about-item-null" class="about__item d-flex" data-v-44f5cf32="">
                    <div class="about__info" data-v-44f5cf32="">
                      <h3 id="about-item-label-null" class="about__label" data-v-44f5cf32="">
                        Гейміфікація
                      </h3>
                      <div class="about__text-content" data-v-44f5cf32="">
                        <p class="about__text" data-v-44f5cf32="" data-v-bf1145da="">
                          Ми онлайн, щоб було весело. Тому навчання в FAVORITE ENGLISH будується навколо технологій, які
                          залучають та підвищують ефективність. Але про це не можна розповідати, це треба спробувати.
                        </p>
                        <div class="about__desc d-flex" data-v-44f5cf32="" data-v-bf1145da="">
                          <p data-v-44f5cf32="" data-v-bf1145da="">12 гейміфікаційних інструментів</p>
                        </div>
                      </div>
                    </div>
                    <div class="about__more" data-v-44f5cf32="">
                      <div class="about__game" data-v-44f5cf32="" data-v-bf1145da="">
                        <div id="star_container" data-v-44f5cf32="" data-v-bf1145da=""><img id="star"
                            src="/img/game/star.svg" style="top:2px;left:33px;" data-v-44f5cf32="" data-v-bf1145da="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="about-item-wrapper-null" class="about__item-wrapper" data-v-44f5cf32="" data-v-168b12e8="">
                  <div id="about-item-null" class="about__item d-flex" data-v-44f5cf32="">
                    <div class="about__info" data-v-44f5cf32="">
                      <h3 id="about-item-label-null" class="about__label" data-v-44f5cf32="">
                        Робота та фріланс
                      </h3>
                      <div class="about__text-content" data-v-44f5cf32="">
                        <div class="about__text" data-v-44f5cf32="" data-v-168b12e8="">
                          <div data-v-44f5cf32="" data-v-168b12e8="">
                            <div data-v-168b12e8="">Випускники курсу <a href="library\course4.html"
                                data-v-168b12e8="">«UX/UI легенда»</a> потрапляють у «FAVORITE ENGLISH CAMP» - особливе навчання,
                              в якому ми гарантуємо випускнику проєкти на фрілансі або оффер від компанії. «FAVORITE ENGLISH
                              CAMP» - це особливий простір, ком'юніті та навчання. Заняття від HR/фріланс-фахівців,
                              допомога у складанні резюме та оформленні портфоліо, регулярні онлайн-події, мета яких
                              якнайшвидше привести випускника до його першої роботи.</div>
                          </div>
                        </div>
                        <div class="about__desc" data-v-44f5cf32="" data-v-168b12e8="">
                          <p data-v-44f5cf32="" data-v-168b12e8="">Випускники інших платних курсів отримують доступ до
                            «полегшеної» версії «FAVORITE ENGLISH CAMP», без гарантії проєктів на фрілансі або оффера від
                            компанії.</p>
                        </div>
                      </div>
                    </div>
                    <div class="about__more" data-v-44f5cf32="">
                      <div class="about__logos" data-v-44f5cf32="" data-v-168b12e8=""><img
                          src="/img/index/FAVORITE ENGLISH_camp.png" alt="" data-v-44f5cf32="" data-v-168b12e8=""></div>
                    </div>
                  </div>
                </div>
                <div id="about-item-wrapper-null" class="about__item-wrapper" data-v-44f5cf32="">
                  <div id="about-item-null" class="about__item d-flex" data-v-44f5cf32="">
                    <div class="about__info" data-v-44f5cf32="">
                      <h3 id="about-item-label-null" class="about__label" data-v-44f5cf32="">
                        Екосистема
                      </h3>
                      <div class="about__text-content" data-v-44f5cf32="">
                        <p class="about__text" data-v-44f5cf32="">
                          Ми вибудовуємо освітню екосистему навколо студента: заняття, наставники, куратори, ігри,
                          змагання, технології, майстермайнди та багато іншого.
                        </p>
                        <div class="about__desc d-flex" data-v-44f5cf32="">
                          <p data-v-44f5cf32="">4 складових екосистеми</p>
                        </div>
                      </div>
                    </div>
                    <div class="about__more" data-v-44f5cf32="">
                      <div class="popup__nav d-flex" data-v-44f5cf32=""><a
                          class="popup__item header__item header__empty" data-v-44f5cf32=""><img
                            src="/img/emojii-hands.png" alt="" class="emojii" data-v-44f5cf32=""></a><a
                          class="popup__item header__item header__empty" data-v-44f5cf32=""><img
                            src="/img/emojii-money.png" alt="" class="emojii" data-v-44f5cf32=""></a><a
                          class="popup__item header__item header__empty" data-v-44f5cf32=""><img
                            src="/img/emojii-game.png" alt="" class="emojii" data-v-44f5cf32=""></a><a
                          class="popup__item header__item header__empty" data-v-44f5cf32=""><img
                            src="/img/emojii-clock.png" alt="" class="emojii" data-v-44f5cf32=""></a></div>
                    </div>
                  </div>
                </div>
                <div id="about-item-wrapper-null" class="about__item-wrapper" data-v-44f5cf32="">
                  <div id="about-item-null" class="about__item d-flex" data-v-44f5cf32="">
                    <div class="about__info" data-v-44f5cf32="">
                      <h3 id="about-item-label-null" class="about__label" data-v-44f5cf32="">
                        Мрія
                      </h3>
                      <div class="about__text-content" data-v-44f5cf32="">
                        <p class="about__text" data-v-44f5cf32="">
                          Наші студенти змінюють своє життя завдяки навчанню та новій професії. Вчитися з іншою метою
                          просто не має сенсу. Принаймні, в FAVORITE ENGLISH.
                        </p>
                        <div class="about__desc d-flex" data-v-44f5cf32="">
                          <p data-v-44f5cf32="">1 мрія буде реалізована</p>
                        </div>
                      </div>
                    </div>
                    <div class="about__more" data-v-44f5cf32="">
                      <div class="about__dream d-flex" data-v-44f5cf32="">
                        <div class="about__pic" data-v-44f5cf32=""><img src="/img/default-photo.png" alt=""
                            data-v-44f5cf32=""></div> <img src="/img/emojii-done.png" alt=""
                          class="about__done" data-v-44f5cf32="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- <section id="master" class="master" data-v-88984bf6="">
          <div class="container" data-v-88984bf6="">
            <div id="master_title" class="master__box" data-v-88984bf6="">
              <h2 data-v-88984bf6="">Бери участь у безкоштовних<br>подіях</h2>
            </div>
          </div>
          <div class="horizontal-scroll" data-v-47465cd1="" data-v-88984bf6="">
            <div class="container" data-v-47465cd1=""></div>
            <div class="scroll-container container not-init script-scroll"
              style="padding:0 0px;scroll-padding-left:0px;" data-v-47465cd1=""><a
                href="webinars\3-designs-1-night-12032024.html" class="master__item master__item_tl"
                style="--background:#E7F3FF;--background-hover:#E7F3FF;--background-circle:#D4E8FD;"
                data-v-6e476ae9="" data-v-88984bf6="">
                <div class="master__content" data-v-6e476ae9="">
                  <div class="courses__type" style="background-color:#247CFF;" data-v-6e476ae9="">
                    UX/UI
                  </div>
                  <div class="master__date" data-v-6e476ae9="">
                    12 марта 19:00 (киев)
                  </div>
                  <h4 data-v-6e476ae9="">3 дизайн-концепции за 1 вечер в Figma</h4>
                  <div class="master__author d-flex" data-v-6e476ae9="">
                    <div class="master__photo" data-v-6e476ae9=""><img
                        src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/1682090326_oic_1670506476_oic_331B3CF7-2148-41A1-A2DB-B7B0063A7F13_1_105_c.jpeg"
                        alt="" data-v-6e476ae9=""></div>
                    Андрей Гаврилов
                  </div>
                  <div class="master__bottom d-flex" data-v-6e476ae9="">
                    <div class="master__num" data-v-6e476ae9=""><img src="/_nuxt/img/user-outlined.4c17539.svg" alt=""
                        data-v-6e476ae9="">
                      12
                    </div> <img src="/img/master-arrow-right.svg" alt="" class="master__arrow" data-v-6e476ae9="">
                  </div>
                </div>
              </a><a href="webinars\fast-illustration-13032024.html" class="master__item master__item_tr"
                style="--background:#ECFFF7;--background-hover:#E8FFF5;--background-circle:#D9FEEB;"
                data-v-6e476ae9="" data-v-88984bf6="">
                <div class="master__content" data-v-6e476ae9="">
                  <div class="courses__type" style="background-color:#00D1C5;" data-v-6e476ae9="">
                    ГРАФИКА
                  </div>
                  <div class="master__date" data-v-6e476ae9="">
                    13 марта 19:00 (киев)
                  </div>
                  <h4 data-v-6e476ae9="">Как быстро и с нуля сделать свою иллюстрацию</h4>
                  <div class="master__author d-flex" data-v-6e476ae9="">
                    <div class="master__photo" data-v-6e476ae9=""><img
                        src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/1683815373_oic_1650125302_oic_1.jpg"
                        alt="" data-v-6e476ae9=""></div>
                    Алексей Фанкин
                  </div>
                  <div class="master__bottom d-flex" data-v-6e476ae9="">
                    <div class="master__num" data-v-6e476ae9=""><img src="/_nuxt/img/user-outlined.4c17539.svg" alt=""
                        data-v-6e476ae9="">
                      8
                    </div> <img src="/img/master-arrow-right.svg" alt="" class="master__arrow" data-v-6e476ae9="">
                  </div>
                </div>
              </a></div>
          </div>
          <div class="container" data-v-88984bf6=""><a href="webinars.html" class="master__btn"
              data-v-88984bf6=""><button type="button" class="btn variant-outline" data-v-0c1d1295=""
                data-v-88984bf6="">
                <div class="btn-content" data-v-0c1d1295=""><span data-v-0c1d1295="" data-v-88984bf6="">Усі
                    події</span></div>
              </button></a></div>
        </section> -->
        <section id="students" class="students" data-v-c78450ac="">
            <div class="container" data-v-c78450ac="">
                <div class="students__box" data-v-c78450ac="">
                    <h2 data-v-c78450ac=""><span class="blue" data-v-c78450ac="">{{ $users->count() }} студента<br
                                data-v-c78450ac=""></span>будують свою кар'єру зараз</h2>
                </div>
            </div>
            <!-- <div class="horizontal-scroll" data-v-47465cd1="" data-v-c78450ac="">
            <div class="container" data-v-47465cd1=""></div>
            <div class="scroll-container container not-init script-scroll"
              style="padding:0 0px;scroll-padding-left:0px;" data-v-47465cd1="">
              <div class="students__item" data-v-47465cd1="" data-v-c78450ac=""><video loop="loop" muted="muted"
                  poster="/posters/kate.jpg" class="thevideo" data-v-47465cd1="" data-v-c78450ac="">
                  <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/kate_small.mp4" type="video/mp4"
                    data-v-47465cd1="" data-v-c78450ac="">
                </video></div>
              <div class="students__item" data-v-47465cd1="" data-v-c78450ac=""><video loop="loop" muted="muted"
                  poster="/posters/maxim.jpg" class="thevideo" data-v-47465cd1="" data-v-c78450ac="">
                  <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/maxim_small.mp4" type="video/mp4"
                    data-v-47465cd1="" data-v-c78450ac="">
                </video></div>
              <div class="students__item" data-v-47465cd1="" data-v-c78450ac=""><video loop="loop" muted="muted"
                  poster="/posters/nasty.jpg" class="thevideo" data-v-47465cd1="" data-v-c78450ac="">
                  <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/nasty_small.mp4" type="video/mp4"
                    data-v-47465cd1="" data-v-c78450ac="">
                </video></div>
              <div class="students__item" data-v-47465cd1="" data-v-c78450ac=""><video loop="loop" muted="muted"
                  poster="/posters/max.jpg" class="thevideo" data-v-47465cd1="" data-v-c78450ac="">
                  <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/max_small.mp4" type="video/mp4"
                    data-v-47465cd1="" data-v-c78450ac="">
                </video></div>
              <div class="students__item" data-v-47465cd1="" data-v-c78450ac=""><video loop="loop" muted="muted"
                  poster="/posters/george.jpg" class="thevideo" data-v-47465cd1="" data-v-c78450ac="">
                  <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/george_small.mp4" type="video/mp4"
                    data-v-47465cd1="" data-v-c78450ac="">
                </video></div>
              <div class="students__item" data-v-47465cd1="" data-v-c78450ac=""><video loop="loop" muted="muted"
                  poster="/posters/alice.jpg" class="thevideo" data-v-47465cd1="" data-v-c78450ac="">
                  <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/alice_small.mp4" type="video/mp4"
                    data-v-47465cd1="" data-v-c78450ac="">
                </video></div>
              <div class="students__item" data-v-47465cd1="" data-v-c78450ac=""><video loop="loop" muted="muted"
                  poster="/posters/kathrine.jpg" class="thevideo" data-v-47465cd1="" data-v-c78450ac="">
                  <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/kathrine_small.mp4"
                    type="video/mp4" data-v-47465cd1="" data-v-c78450ac="">
                </video></div>
            </div>
          </div> -->
        </section>
        <section id="help" class="help" data-v-a40c534a="">
            <div class="container" data-v-a40c534a="">
                <div class="help__box d-flex" data-v-14f0f9b0="" data-v-a40c534a="">
                    <div class="help__pic" data-v-14f0f9b0=""><img src="/img/help-pic@2x.jpg" alt="" data-v-14f0f9b0=""></div>
                    <div class="help__content" data-v-14f0f9b0="">
                        <h2 data-v-14f0f9b0="">Потрібна <img src="/img/emojii-hands.png" alt="" class="emojii" data-v-14f0f9b0=""> допомога у виборі курсу?</h2>
                        <h4 class="fill-form" data-v-14f0f9b0=""> Заповни форму і ми зв'яжемося з тобою якнайшвидше</h4>
                        <div class="help__person" data-v-14f0f9b0="">
                            <h4 data-v-14f0f9b0="">Каріна</h4>
                            <div class="help__job" data-v-14f0f9b0="">Керівник «Служби турботи»</div>
                        </div>
                        <div class="help__text" data-v-14f0f9b0="">
                            Консультація допоможе виявити твої сильні сторони. Ми
                            познайомимося та порадимо, як правильно розпочати твою нову кар'єру.
                        </div>
                    </div>
                    <div class="help__info" data-v-bbb3a68a="" data-v-14f0f9b0="">
                        <h4 data-v-bbb3a68a="">Ти за один крок від професії:</h4>
                        <form action="{{ route('main.index.message') }}" class="help__form form" data-v-bbb3a68a="" method="POST">
                          @method('POST')
                          @csrf
                          <div class="form__group" data-v-bbb3a68a="">
                            <input type="text" name="name" placeholder="Ім'я" autocomplete="off" value="{{ old('name') }}" class="form__field" data-v-bbb3a68a="">
                          </div>
                          <div class="form__group" data-v-bbb3a68a="">
                            <input type="tel" name="phone" maxlength="25" placeholder="Телефон" autocomplete="off" value="{{ old('phone') }}" class="form__field" data-v-bbb3a68a="">
                          </div>
                          <button type="submit" class="btn variant-blue help__btn w-100 text-big" data-v-0c1d1295="" data-v-bbb3a68a="">
                            <div class="btn-content" data-v-0c1d1295="">
                              <span data-v-0c1d1295="" data-v-bbb3a68a="">Передзвоніть мені</span>
                            </div>
                          </button>
                          <div class="form__policy" data-v-bbb3a68a="">
                            Натискаючи на цю кнопку, я даю згоду на обробку своїх
                            <a href="/offerta#personal" target="_blank" data-v-bbb3a68a="">персональних даних</a> 
                            і погоджуюсь з <a href="/offerta" target="_blank" data-v-bbb3a68a="">договором оферти</a>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
