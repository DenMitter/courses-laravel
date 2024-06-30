@extends('layouts.main')
@section('content')
  <div class="container" data-v-07410990=""></div>
  <section id="contacts" class="content contacts" data-v-07410990="" data-v-07410990="">
    <div class="container">
      <div class="contacts__box">
        <h2>Контакти</h2>
        <div class="contacts__phones d-flex">
          <div class="contacts__item">
            <a href="tel:0800336567" class="contacts__tel d-flex">
              <img src="/img/ukraine.png" alt="" class="contacts__flag">0 (800) 33-65-67
            </a>
            <span>Безкоштовно по Україні</span>
          </div>
          <div class="contacts__item">
            <a href="tel:+380504888794" class="contacts__tel d-flex">+38 (050) 488-87-94</a>
            <span>Для дзвінків з інших країн</span>
          </div>
        </div>
        <div class="contacts__mail d-flex">
          <a href="mailto:{{ env('RETURN_EMAIL') }}" target="_blank" class="contacts__email">{{ env('RETURN_EMAIL') }}</a>
          <div class="contacts__care">Час роботи «Служби турботи»: 10:00 – 18:00 Пн-Пт</div>
        </div>
        <div class="contacts__flex d-flex" data-v-afd1a3d6="">
          <div class="contacts__main" data-v-afd1a3d6="">
            <h3 data-v-afd1a3d6="">Зв'яжіться з нами з будь-якого питання</h3>
            <form action="{{ route('main.index.help') }}" method="POST" class="contacts__form" data-v-afd1a3d6="">
              @csrf
              @method('POST')
              <div class="form__flex d-flex" data-v-afd1a3d6="">
                <div class="form__group" data-v-afd1a3d6="">
                  @error('name')
                    <p>Поле має бути заповненим</p>
                  @enderror
                  <input type="text" name="name" placeholder="Ім'я" value="{{ old('name') }}" class="form__field" data-v-afd1a3d6="">
                </div>
                <div class="form__group" data-v-afd1a3d6="">
                  @error('email')
                    <p>Поле має бути заповненим</p>
                  @enderror
                  <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="form__field" data-v-afd1a3d6="">
                </div>
              </div>
              <div class="form__group" data-v-afd1a3d6="">
                @error('phone')
                  <p>Поле має бути заповненим</p>
                @enderror
                <input type="tel" name="phone" autocomplete="tel" maxlength="25" placeholder="Телефон" value="{{ old('phone') }}" class="form__field" data-v-16012ebc="">
              </div>
              <div class="form__group" data-v-afd1a3d6="">
                @error('content')
                  <p>Поле має бути заповненим</p>
                @enderror
                <textarea name="content" placeholder="Повідомлення" class="form__field" data-v-afd1a3d6="">{{ old('content') }}</textarea>
              </div>
              <div class="contacts__bottom d-flex" data-v-afd1a3d6="">
                <button type="submit" class="btn help__btn variant-blue" data-v-7ebd546e="" data-v-afd1a3d6="">
                  <div class="btn-content" data-v-7ebd546e="">
                    <span data-v-afd1a3d6="" data-v-7ebd546e="">Надіслати повідомлення</span>
                  </div>
                </button>
                <div class="form__policy" data-v-afd1a3d6="">
                  Натискаючи на цю кнопку, я даю згоду на обробку своїх
                  <a href="/offerta#personal" target="_blank" data-v-afd1a3d6="">персональних даних</a> і погоджуюсь з
                  <a href="/offerta" target="_blank" data-v-afd1a3d6="">договором оферти </a>
                </div>
              </div>
            </form>
          </div>
          <div class="contacts__write" data-v-9397bc80="" data-v-afd1a3d6=""><a href="https://t.me/FAVORITE ENGLISHhelp_bot"
              target="_blank" class="contacts__link" data-v-9397bc80=""><img src="/img/contacts-telegram.svg"
                alt="" class="svg" data-v-9397bc80="">Написати в Telegram</a><a href="https://m.me/FAVORITE ENGLISH.in"
              target="_blank" class="contacts__link" data-v-9397bc80=""><img src="/img/contacts-messenger.svg"
                alt="" class="svg" data-v-9397bc80="">Написати в Messenger</a></div>
        </div>
      </div>
    </div>
  </section>
@endsection
