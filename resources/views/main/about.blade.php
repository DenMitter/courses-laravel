@extends('layouts.main')
@section('content')
  <div class="container" data-v-07410990=""><!----></div>
  <div data-fetch-key="0" class="content" data-v-07410990="" data-v-07410990="">
    <div data-v-532ad906="">
      <section id="desc" class="desc" data-v-532ad906="">
        <div class="container" data-v-532ad906="">
          <div class="desc__box d-flex" data-v-532ad906="">
            <div class="desc__item" data-v-532ad906="">
              <div class="students__item" data-v-532ad906=""><video loop="loop" muted="muted"
                  poster="/posters/kate.jpg" class="thevideo" data-v-532ad906="">
                  <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/kate_small.mp4"
                    type="video/mp4" data-v-532ad906="">
                </video></div> <button class="desc__load" data-v-532ad906=""><img src="/img/about-icon-load.svg"
                  alt="" data-v-532ad906=""></button>
            </div>
            <div class="desc__video" data-v-532ad906=""><video poster="/img/about/default.jpg" data-v-532ad906="">
                <source src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/video/ua/small/FAVORITE ENGLISH.mp4"
                  type="video/mp4" data-v-532ad906="">
              </video></div>
            <div class="desc__info" data-v-532ad906="">
              <h1 data-v-532ad906=""><img src="{{ asset('img/emojii-rocket.png') }}" alt="" class="emojii" data-v-532ad906="">
                FAVORITE ENGLISH –
              </h1>
              <p class="desc__text" data-v-532ad906="">
                Освітня платформа твого майбутнього. Технологічне навчання. Від людей до людей.
              </p> <a class="desc__link" data-v-532ad906="">
                Як це?
              </a>
            </div>
          </div>
        </div>
      </section> <!---->
    </div>
    <section id="way" class="way">
      <div class="container">
        <div class="way__box d-flex">
          <div class="way__info">
            <div class="way__desc">
              Основний напрямок навчання
            </div>
            <h2>Дизайн та розробка сайтів</h2>
            <p class="way__text">
              У FAVORITE ENGLISH ми фокусуємось на одному напрямку.
              <br>
              Не женемося за кількістю курсів, віддаючи пріоритет розвитку методології.
            </p>
          </div>
          <div class="way__van d-flex">
            <div class="way__item">
              <div class="way__num">{{ $users->count() }}</div>
              <p>Студента</p>
            </div>
            {{-- <div class="way__item">
              <div class="way__num">9+</div>
              <p>Років у навчанні</p>
            </div> --}}
            <a href="{{ route('main.index') }}" class="way__item">
              <div class="way__num">{{ $courses->count() }}</div>
              <p>
                Курсів
                <img src="/img/way-arrow.svg" alt="">
              </p>
            </a>
          </div>
        </div>
      </div>
    </section>
    {{-- <section id="game" class="game" data-v-7d3fa956="">
      <div class="container" data-v-7d3fa956="">
        <div class="game__box d-flex" data-v-7d3fa956="">
          <div class="game__boring" data-v-7d3fa956="">
            <div class="game__word" data-v-7d3fa956="">Нудно?</div>
            <div class="game__word" data-v-7d3fa956="">Нудно?</div>
            <div class="game__word game__word_solid" data-v-7d3fa956="">
              Нудно?
              <img src="/img/game-arrow.svg" alt="" class="game__arrow" data-v-7d3fa956="">
            </div>
            <div class="game__word" data-v-7d3fa956="">Нудно?</div>
            <div class="game__word" data-v-7d3fa956="">Нудно?</div>
            <div class="game__word" data-v-7d3fa956="">Нудно?</div>
          </div>
          <div id="star_container" data-v-7d3fa956=""><img id="star" src="/img/game/star.svg"
              style="top: 2px; left: 33px" data-v-7d3fa956=""></div>
        </div>
      </div>
    </section> --}}
    <section id="we" class="we" data-v-2cdb1890="">
      <link rel="preload" href="/img/about/activity.png" as="image" data-v-2cdb1890="">
      <link rel="preload" href="/img/about/gamification.png" as="image" data-v-2cdb1890="">
      <link rel="preload" href="/img/about/work.png" as="image" data-v-2cdb1890="">
      <link rel="preload" href="/img/about/dream.png" as="image" data-v-2cdb1890="">
      <div class="container" data-v-2cdb1890="">
        <div class="we__box" data-v-2cdb1890="">
          <h1 data-v-2cdb1890="">У нас точно не нудно</h1>
          <div class="we__flex d-flex" data-v-2cdb1890="">
            <div class="we__cards d-flex" data-v-2cdb1890="">
              <div class="we__item active" data-v-2cdb1890="">
                <h3 data-v-2cdb1890="">
                  Драйв
                  <span class="round" style="background: #385bd7" data-v-2cdb1890=""></span>
                </h3>
                <p class="we__text" data-v-2cdb1890="">
                  Навчання майбутнього – це НЕ ТІЛЬКИ відеоуроки. Це екосистема, виклики, конкуренція та командна
                  робота
                </p>
              </div>
              <div class="we__item" data-v-2cdb1890="">
                <h3 data-v-2cdb1890="">
                  Гейміфікація
                  <span class="round" style="background: #11b84a" data-v-2cdb1890=""></span>
                </h3>
                <p class="we__text" data-v-2cdb1890="">
                  Бонуси, здобутки, нагороди, ігри – в офлайні так не вміють. Та й в онлайні не багато хто може.
                </p>
              </div>
              <div class="we__item" data-v-2cdb1890="">
                <h3 data-v-2cdb1890="">
                  Драйв
                  <span class="round" style="background: #fe337c" data-v-2cdb1890=""></span>
                </h3>
                <p class="we__text" data-v-2cdb1890="">
                  Будь-яке навчання в FAVORITE ENGLISH закінчується сприянням при виході на фріланс, або роботі в компанії
                </p>
              </div>
              <div class="we__item" data-v-2cdb1890="">
                <h3 data-v-2cdb1890="">
                  Мрія
                  <span class="round" style="background: #ffc940" data-v-2cdb1890=""></span>
                </h3>
                <p class="we__text" data-v-2cdb1890="">
                  Вчитися просто так немає сенсу. Тільки щоб прийти до мрії. Принаймні, в FAVORITE ENGLISH.
                </p>
              </div>
            </div>
            <div class="we__block" style="background-color:#eaedfd;" data-v-2cdb1890="">
              <div class="image-wrapper" data-v-2cdb1890=""><img src="{{ asset('img/about/activity.png') }}" alt=""
                  class="image" data-v-2cdb1890="" data-v-2cdb1890=""></div>
            </div>
          </div>
        </div>
      </div>
    </section> <!---->
    {{-- <section id="fest" class="fest" data-v-64c1c316="">
      <div class="container" data-v-64c1c316="">
        <div class="fest__box" data-v-64c1c316="">
          <div class="fest__top d-flex" data-v-64c1c316="">
            <h1 data-v-64c1c316="">
              Регулярна подія «FAVORITE ENGLISH FEST»
              <img src="/img/emojii-rocket.png" alt="" class="emojii" data-v-64c1c316="">
            </h1>
            <div class="fest__info" data-v-64c1c316="">
              <h4 data-v-64c1c316="">Що це?</h4>
              <p class="fest__text" data-v-64c1c316="">
                Дизайнери, розробники та фрілансери збираються на 1 день у великих містах слухати лекції, брати
                участь у воркшопах і знайомитися з однодумцями
              </p>
              <div class="fest__date" data-v-64c1c316="">
                Найближча дата: не визначена
              </div>
            </div>
          </div>
          <div class="fest__gallery d-flex" data-v-64c1c316="">
            <div class="fest__pic fest__pic_big" data-v-64c1c316=""><button class="fest__prev fest__arrow"
                data-v-64c1c316=""><img src="/img/fest-ar-left.svg" alt="" data-v-64c1c316=""></button> <img
                src="/img/fest/1.jpeg" alt="" class="image-big" data-v-64c1c316="" data-v-64c1c316=""> <button
                class="fest__next fest__arrow" data-v-64c1c316=""><img src="/img/fest-ar-right.svg" alt=""
                  data-v-64c1c316=""></button></div>
            <div class="fest__flex d-flex" data-v-64c1c316="">
              <div class="fest__pic active" data-v-64c1c316=""><img src="/img/fest/1.jpeg" alt=""
                  data-v-64c1c316=""></div>
              <div class="fest__pic" data-v-64c1c316=""><img src="/img/fest/2.jpeg" alt="" data-v-64c1c316="">
              </div>
              <div class="fest__pic" data-v-64c1c316=""><img src="/img/fest/3.jpeg" alt="" data-v-64c1c316="">
              </div>
              <div class="fest__pic" data-v-64c1c316=""><img src="/img/fest/4.jpeg" alt="" data-v-64c1c316="">
              </div>
              <div class="fest__pic" data-v-64c1c316=""><img src="/img/fest/5.jpeg" alt="" data-v-64c1c316="">
              </div>
              <div class="fest__pic" data-v-64c1c316=""><img src="/img/fest/6.jpeg" alt="" data-v-64c1c316="">
              </div>
              <div class="fest__pic" data-v-64c1c316=""><img src="/img/fest/7.jpeg" alt="" data-v-64c1c316="">
              </div>
              <div class="fest__pic" data-v-64c1c316=""><img src="/img/fest/8.jpeg" alt="" data-v-64c1c316="">
              </div>
              <div class="fest__pic" data-v-64c1c316=""><img src="/img/fest/9.jpeg" alt="" data-v-64c1c316="">
              </div>
            </div>
          </div> <button type="button" class="btn fest__btn variant-blue" data-v-7ebd546e="" data-v-64c1c316="">
            <div class="btn-content" data-v-7ebd546e=""><span data-v-64c1c316="" data-v-7ebd546e="">
                Завести обліковий запис і вчитися
              </span></div> <!---->
          </button>
        </div>
      </div>
    </section> --}}
    <section id="links" class="links" data-v-4808cc25="">
      <div class="container" data-v-4808cc25="">
        <div class="links__box" data-v-4808cc25="">
          <h2 data-v-4808cc25="">Корисні посилання</h2>
          <ul class="links__list" data-v-4808cc25="">
            <li data-v-4808cc25=""><a href="{{ route('main.index') }}" data-v-4808cc25="">Курси</a></li>
            {{-- <li data-v-4808cc25=""><a href="{{ route('main.installment') }}" data-v-4808cc25="">Розстрочка 0%</a></li> --}}
            {{-- <li data-v-4808cc25=""><a href="{{ route('main.https://my.FAVORITE ENGLISH.in/partner') }}" data-v-4808cc25="">Партнерська програма</a></li> --}}
            {{-- <li data-v-4808cc25=""><a href="{{ route('main.offerta') }}" data-v-4808cc25="">Договір оферти</a></li> --}}
            <li data-v-4808cc25=""><a href="{{ route('main.contacts') }}" data-v-4808cc25="">Контакти</a></li>
          </ul>
        </div>
      </div>
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
