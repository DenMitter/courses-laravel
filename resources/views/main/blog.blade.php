@extends('layouts.main')
@section('content')
  <div class="container" data-v-07410990=""></div>
  <section id="journal" class="journal content" data-v-1e6839d7="" data-v-07410990="" data-v-07410990="">
    <div class="container" data-v-1e6839d7="">
      <div class="journal__box d-flex" data-v-1e6839d7="">
        <div class="sidebar" data-v-204feb1c="" data-v-1e6839d7="">
          <form action="#" class="search d-flex" data-v-204feb1c=""><input type="text" name="search"
              placeholder="Поиск" class="form__field search__input" data-v-204feb1c=""> <button
              class="search__btn" data-v-204feb1c=""><img src="/img/icon-search.svg" alt=""
                data-v-204feb1c=""></button></form>
          <div class="courses__list" data-v-204feb1c=""><a href="blog.html" aria-current="page"
              class="nuxt-link-exact-active nuxt-link-active active" data-v-204feb1c="">
              Стрічка
            </a> <a href="blog\ux-ui.html" data-v-204feb1c="">
              UX/UI
            </a><a href="blog\graphics.html" data-v-204feb1c="">
              Графіка
            </a><a href="blog\dev.html" data-v-204feb1c="">
              Розробка
            </a><a href="blog\freelance.html" data-v-204feb1c="">
              Фріланс
            </a><a href="blog\interview.html" data-v-204feb1c="">
              Інтервʼю
            </a></div>
        </div>
        <div class="journal__content" data-v-1e6839d7="">
          <div data-v-65f2f7ae="" data-v-1e6839d7="">
            <h2 data-v-65f2f7ae="">Стрічка</h2>
          </div>
          <div data-v-1e6839d7="">
            <div data-v-1e6839d7="" data-v-1e6839d7="" data-v-1e6839d7="">
              <div data-fetch-key="data-v-aa25a83e:0" data-v-aa25a83e="">
                <div data-v-aa25a83e="">
                  <div data-v-aa25a83e="">
                    <div class="journal__wrap d-flex">
                      <a href="blog\ai-tools-for-the-designer.html" id="482" class="journal__item">
                        <div class="journal__pic">
                          <img src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/b0mSfVIGG8ojdBLlfZqmBC2da3paZliclhdIemH1.jpg" alt="" data-fetch-key="LazyImage:0" class="skeleton">
                        </div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#247CFF;">UX/UI</div>
                          <div class="journal__date">7 березня</div>
                        </div>
                        <h4>Свіжі інструменти AI для дизайнера</h4>
                      </a><a href="blog\meeting-with-a-client.html" id="481" class="journal__item">
                        <div class="journal__pic"><img
                            src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/t6UtvmRL4v55z5P83syvQi6SixIIUrWiEdloWfZn.jpg"
                            alt="" data-fetch-key="LazyImage:1" class="skeleton"></div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#37C87A;">
                            Фріланс
                          </div>
                          <div class="journal__date">
                            29 лютого
                          </div>
                        </div>
                        <h4>Зустріч із клієнтом: як провести брифінг</h4>
                      </a><a href="blog\palette-selection-and-list-of-services.html" id="480"
                        class="journal__item">
                        <div class="journal__pic"><img
                            src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/6BCbjxlDWQl5W7VYXUI1thEgiw1imYjhjoAp5IPv.jpg"
                            alt="" data-fetch-key="LazyImage:2" class="skeleton"></div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#00D1C5;">
                            Графіка
                          </div>
                          <div class="journal__date">
                            23 лютого
                          </div>
                        </div>
                        <h4>Підбір палітри + список сервісів</h4>
                      </a></div> <a href="blog\how-to-set-prices.html" id="479"
                      class="journal__item journal__middle d-flex">
                      <div class="journal__pic"><img
                          src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/UubsksEAMlmtN7DBTF0NZQr2EB9g910twldDNSCw.jpg"
                          alt="" data-fetch-key="LazyImage:3" class="skeleton"></div>
                      <div class="journal__biginfo">
                        <div class="journal__type journal__type_freelance" style="background-color:#37C87A;">
                          Фріланс
                        </div>
                        <div class="journal__flex d-flex">
                          <div class="journal__date">
                            15 лютого
                          </div>
                        </div>
                        <h4>Веб-дизайн: як встановлювати ціни</h4>
                        <div class="journal__read">
                          Читати
                          <img src="/img/journal-arrow.svg" alt="" class="svg">
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="information information__yellow" data-v-01e6e38e="" data-v-aa25a83e="">
                    <h3 data-v-01e6e38e="">Отримуй нові статті та анонси безкоштовних майстер-класів</h3>
                    <form action="{{ route('main.index.subscribe') }}" method="POST" class="information__form d-flex" data-v-01e6e38e="">
                      @method('POST')
                      @csrf
                      <div class="form__group" data-v-01e6e38e="">
                        <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}" class="form__field" data-v-01e6e38e="">
                      </div>
                      <button type="submit" class="information__btn btn" data-v-01e6e38e="">
                        <span data-v-01e6e38e="">Підписатися</span>
                      </button>
                      <div class="form__policy" data-v-01e6e38e="">
                        Натискаючи на цю кнопку, я даю згоду на обробку
                        своїх <a href="/offerta#personal" target="_blank" data-v-01e6e38e="">персональних даних</a> 
                        і погоджуюсь з <a href="/offerta" target="_blank" data-v-01e6e38e="">договором оферти</a>
                      </div>
                    </form>
                  </div>
                  <div data-v-aa25a83e="">
                    <div class="journal__wrap d-flex"><a href="blog\selection-of-freelance-marketplaces.html"
                        id="478" class="journal__item">
                        <div class="journal__pic"><img
                            src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/QFH2JRbnrI1WD7Yw37jDUUpoIe83ObRxLxN7jZsN.jpg"
                            alt="" data-fetch-key="LazyImage:4" class="skeleton"></div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#37C87A;">
                            Фріланс
                          </div>
                          <div class="journal__date">
                            8 лютого
                          </div>
                        </div>
                        <h4>Добірка бірж фрілансу</h4>
                      </a><a href="blog\psychology-and-design.html" id="477" class="journal__item">
                        <div class="journal__pic"><img
                            src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/uFk9XyEP3qlTPRJ8W8XRGSSLkIKwQEFs4VQzet6e.jpg"
                            alt="" data-fetch-key="LazyImage:5" class="skeleton"></div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#247CFF;">
                            UX/UI
                          </div>
                          <div class="journal__date">
                            1 лютого
                          </div>
                        </div>
                        <h4>Психологія та дизайн</h4>
                      </a><a href="blog\pantone-color-of-the-year.html" id="476" class="journal__item">
                        <div class="journal__pic"><img
                            src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/by7D4wzrNiW7gg4BSHBel9k67GYYvHJJEfTgh0i5.jpg"
                            alt="" data-fetch-key="LazyImage:6" class="skeleton"></div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#00D1C5;">
                            Графіка
                          </div>
                          <div class="journal__date">
                            25 січня
                          </div>
                        </div>
                        <h4>Колір року 2024 Pantone</h4>
                      </a><a href="blog\career-paths-for-a-web-designer.html" id="475" class="journal__item">
                        <div class="journal__pic"><img
                            src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/z9iQkE4DRw0u5DGYHhuvkzUJSpHDFJZ35o9lYdT6.jpg"
                            alt="" data-fetch-key="LazyImage:7" class="skeleton"></div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#37C87A;">
                            Фріланс
                          </div>
                          <div class="journal__date">
                            19 січня
                          </div>
                        </div>
                        <h4>Шляхи кар'єрного розвитку для веб-дизайнера</h4>
                      </a><a href="blog\tips-for-ux-ui-beginners.html" id="474" class="journal__item">
                        <div class="journal__pic"><img
                            src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/JaSAZnxUSreKbv8sIYd86Nsd5gU9HxLsQ2jbUFbB.jpg"
                            alt="" data-fetch-key="LazyImage:8" class="skeleton"></div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#247CFF;">
                            UX/UI
                          </div>
                          <div class="journal__date">
                            12 січня
                          </div>
                        </div>
                        <h4>10 порад для новачків у UX/UI</h4>
                      </a><a href="blog\resources-for-the-ux-ui-designer.html" id="473" class="journal__item">
                        <div class="journal__pic"><img
                            src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/zDJ7bL9bsRIgOUe8QUGFl0K8NWU8iF3IjKLIv2R1.jpg"
                            alt="" data-fetch-key="LazyImage:9" class="skeleton"></div>
                        <div class="journal__flex d-flex">
                          <div class="journal__type journal__type_ui" style="background-color:#247CFF;">
                            UX/UI
                          </div>
                          <div class="journal__date">
                            5 січня
                          </div>
                        </div>
                        <h4>10 ресурсів для UX/UI-дизайнера</h4>
                      </a></div> <a href="blog\creative-pauses-for-the-designer.html" id="472"
                      class="journal__item journal__middle d-flex">
                      <div class="journal__pic"><img
                          src="https://FAVORITE ENGLISH-other.s3.eu-west-2.amazonaws.com/images/blog/preview/0y7F8pV12vsq2swyZNkpjfNHM7z6ZZ5WvEr6skDN.jpg"
                          alt="" data-fetch-key="LazyImage:10" class="skeleton"></div>
                      <div class="journal__biginfo">
                        <div class="journal__type journal__type_freelance" style="background-color:#37C87A;">
                          Фріланс
                        </div>
                        <div class="journal__flex d-flex">
                          <div class="journal__date">
                            29 грудня
                          </div>
                        </div>
                        <h4>Креативні паузи для дизайнера</h4>
                        <div class="journal__read">
                          Читати
                          <img src="/img/journal-arrow.svg" alt="" class="svg">
                        </div>
                      </div>
                    </a>
                  </div>
                  <span data-v-aa25a83e=""></span>
                  <button type="button" class="btn reviews__btn variant-outline" data-v-7ebd546e="" data-v-aa25a83e="">
                    <div class="btn-content"  data-v-7ebd546e="">
                      <div class="btn-content" data-v-0c1d129="" data-v-aa25a83e="" data-v-7ebd546e="">
                        <svg width="26" height="26" viewbox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-aa25a83e=""><path d="M13 3.25C8.84812 3.25 5.37631 5.8175 3.96094 9.44531L5.45919 10.0547C6.643 7.02 9.51438 4.875 13 4.875C15.6325 4.875 17.9839 6.16688 19.4496 8.125H16.25V9.75H21.9375V4.0625H20.3125V6.57638C19.4023 5.53133 18.2786 4.69365 17.0171 4.11983C15.7557 3.546 14.3858 3.24939 13 3.25V3.25ZM20.54 15.9453C19.357 18.98 16.4856 21.125 13 21.125C10.3382 21.125 7.99744 19.8153 6.52437 17.875H9.75V16.25H4.0625V21.9375H5.6875V19.4236C7.46688 21.4386 10.0709 22.75 13 22.75C17.1519 22.75 20.6237 20.1825 22.0391 16.5547L20.5408 15.9453H20.54Z" fill="currentColor"></path></svg>
                        Завантажити ще
                      </div>
                    </div>
                  </button>
                  <div class="information journal__information d-flex" data-v-aa25a83e="">
                    <div class="information__content">
                      <h3>Почни навчання безкоштовно, як тисячі наших студентів</h3> <button type="button"
                        class="btn information__btn variant-blue" data-v-7ebd546e="">
                        <div class="btn-content" data-v-7ebd546e=""><span data-v-7ebd546e="">Вибрати курс до
                            душі</span></div>
                      </button>
                    </div>
                    <div class="students__flex d-flex">
                      <div class="students__item" style="background-image: url(/img/student1@2x.jpg)"></div>
                      <div class="students__item" style="background-image: url(/img/student4@2x.jpg)"></div>
                      <div class="students__item" style="background-image: url(/img/student3@2x.jpg)"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
