@extends('layouts.cabinet')

@section('content')
    <div data-fetch-key="data-v-15d01916:0" class="wrapper all-content main-page df" data-v-15d01916="">
        <main class="main" data-v-15d01916="">
            <section class="free-courses" data-v-15d01916="">
                <div class="title-wrapper" data-v-15d01916="">
                    <h2 class="title simple" data-v-15d01916="">Бесплатные курсы</h2>
                </div>
                <div class="courses" data-v-15d01916="">
                    @foreach ($courses as $course)
                        @if ($course->price == 0)
                            <a href="{{ route('personal.course.index', $course->id) }}" class="course-card registered"
                                data-v-4c81e784="" data-v-15d01916="">
                                <div class="image-wrapper" style="background:{{ $course->color }};" data-v-4c81e784="">
                                    <div class="course-image centered"
                                        style="background-image:url({{ 'storage/' . $course->preview_image }});"
                                        data-v-4c81e784=""></div>
                                </div>
                                <div class="d-flex flex-col flex-grow" data-v-4c81e784="">
                                    <div class="d-flex justify-between" data-v-4c81e784="">
                                        <div>
                                            @foreach ($tags as $tag)
                                                @if (is_array($course->tags->pluck('id')->toArray()) && in_array($tag->id, $course->tags->pluck('id')->toArray()))
                                                    <span class="label ts_9" style="background:#FCB500;" data-v-4c81e784="">{{ $tag->title }}</span>
                                                @endif
                                            @endforeach
                                        </div>
                                        {{-- <div class="star star" data-v-5195f33d="" data-v-4c81e784="">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="border" data-v-5195f33d=""><path d="M20.9699 7.59449C20.8975 7.3721 20.705 7.21006 20.4732 7.17644L13.9632 6.23195L11.0517 0.342375C10.9481 0.132716 10.7342 0 10.5 0C10.2659 0 10.052 0.132757 9.94832 0.342375L7.03671 6.23199L0.526758 7.17644C0.29502 7.21006 0.102493 7.37214 0.0301419 7.59449C-0.0422505 7.81684 0.0181244 8.06094 0.185796 8.22412L4.89635 12.8086L3.7845 19.2819C3.74492 19.5123 3.83983 19.7453 4.02928 19.8826C4.21869 20.02 4.46979 20.0382 4.67721 19.9294L10.5 16.8731L16.3226 19.9294C16.4126 19.9767 16.5109 20 16.6088 20C16.7364 20 16.8634 19.9604 16.9705 19.8827C17.16 19.7453 17.2549 19.5124 17.2153 19.2819L16.1031 12.8086L20.8142 8.22416C20.9819 8.06094 21.0423 7.81684 20.9699 7.59449ZM15.0126 12.1542C14.8676 12.2954 14.8014 12.4987 14.8357 12.698L15.7918 18.2629L10.7864 15.6355C10.6071 15.5414 10.393 15.5414 10.2137 15.6355L5.20799 18.2629L6.16381 12.6979C6.19802 12.4987 6.13186 12.2954 5.98691 12.1543L1.93741 8.21319L7.53378 7.40121C7.73418 7.37214 7.90735 7.2465 7.99701 7.06522L10.5 2.00204L13.0029 7.06518C13.0925 7.24646 13.2657 7.37214 13.4661 7.40121L19.0626 8.21315L15.0126 12.1542Z" fill="currentColor" data-v-5195f33d=""></path></svg>
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="filled" data-v-5195f33d=""><path d="M18.6081 7.11876L13.1532 6.32598L10.7148 1.38243C10.6482 1.24708 10.5386 1.13751 10.4032 1.07091C10.0638 0.903328 9.65129 1.04298 9.48157 1.38243L7.04309 6.32598L1.58821 7.11876C1.43782 7.14024 1.30032 7.21114 1.19504 7.31856C1.06777 7.44937 0.997643 7.62536 1.00006 7.80785C1.00248 7.99034 1.07725 8.16441 1.20794 8.2918L5.15461 12.1397L4.22219 17.5731C4.20033 17.6994 4.21431 17.8294 4.26257 17.9483C4.31082 18.0671 4.39141 18.1701 4.49519 18.2455C4.59898 18.3208 4.72181 18.3656 4.84975 18.3748C4.9777 18.3839 5.10564 18.357 5.21907 18.2971L10.0982 15.7318L14.9773 18.2971C15.1105 18.368 15.2652 18.3916 15.4134 18.3658C15.7872 18.3014 16.0386 17.9469 15.9741 17.5731L15.0417 12.1397L18.9884 8.2918C19.0958 8.18653 19.1667 8.04903 19.1882 7.89864C19.2462 7.52266 18.9841 7.17462 18.6081 7.11876V7.11876Z" fill="#FFC940" data-v-5195f33d=""></path></svg>
                                        </div> --}}
                                    </div>
                                    <h3 class="title flex-grow" data-v-4c81e784="">{{ $course->title }}</h3>
                                    <div class="d-flex align-center justify-between" data-v-4c81e784="">
                                        <div class="details" data-v-4c81e784="">
                                            {{-- <span class="learn-time" data-v-4c81e784="">{{ $course->during }}</span> --}}
                                            <span class="lessons-count" data-v-4c81e784="">
                                                <span class="progress-text" data-v-4c81e784="">
                                                    @php
                                                        $lessonCount = 0;
                                                    @endphp
                                                    @foreach ($lessons as $lesson)
                                                        @if (is_array($course->lessons->pluck('id')->toArray()) && in_array($lesson->id, $course->lessons->pluck('id')->toArray()))
                                                            @php
                                                                $lessonCount++;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    @if($user->courses()->where('course_id', $course->id)->exists())
                                                        0 из {{ $lessonCount++ }} занятий
                                                    @else
                                                        {{ $lessonCount++ }} занятий
                                                    @endif
                                                </span>
                                                @if($user->courses()->where('course_id', $course->id)->exists())
                                                    <div class="progress progress" data-v-4538add2="" data-v-4c81e784="" style="position: relative; cursor: pointer;">
                                                        <div class="bar" data-v-4538add2="">
                                                            <div class="fill" style="width:16%;" data-v-4538add2=""></div>
                                                        </div>
                                                        <span class="counter" style="font-size:12px;" data-v-4538add2="">16%</span>
                                                    </div>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="card-link" data-v-4c81e784=""></div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </section>
            <section data-v-15d01916="">
                <div class="title-wrapper" data-v-15d01916="">
                    <h2 class="title" data-v-15d01916="">Платные курсы</h2>
                </div>
                <div class="courses" data-v-15d01916="">
                    @foreach ($courses as $course)
                        @if ($course->price > 0)
                            <a href="{{ route('personal.course.index', $course->id) }}" class="course-card registered"
                                data-v-4c81e784="" data-v-15d01916="">
                                <div class="image-wrapper" style="background:{{ $course->color }};" data-v-4c81e784="">
                                    <div class="course-image centered"
                                        style="background-image:url({{ 'storage/' . $course->preview_image }});"
                                        data-v-4c81e784=""></div>
                                </div>
                                <div class="d-flex flex-col flex-grow" data-v-4c81e784="">
                                    <div class="d-flex justify-between" data-v-4c81e784="">
                                        <div>
                                            @foreach ($tags as $tag)
                                                @if (is_array($course->tags->pluck('id')->toArray()) && in_array($tag->id, $course->tags->pluck('id')->toArray()))
                                                    <span class="label ts_9" style="background:#FCB500;" data-v-4c81e784="">{{ $tag->title }}</span>
                                                @endif
                                            @endforeach
                                        </div>
                                        {{-- <div class="star star" data-v-5195f33d="" data-v-4c81e784="">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="border" data-v-5195f33d=""><path d="M20.9699 7.59449C20.8975 7.3721 20.705 7.21006 20.4732 7.17644L13.9632 6.23195L11.0517 0.342375C10.9481 0.132716 10.7342 0 10.5 0C10.2659 0 10.052 0.132757 9.94832 0.342375L7.03671 6.23199L0.526758 7.17644C0.29502 7.21006 0.102493 7.37214 0.0301419 7.59449C-0.0422505 7.81684 0.0181244 8.06094 0.185796 8.22412L4.89635 12.8086L3.7845 19.2819C3.74492 19.5123 3.83983 19.7453 4.02928 19.8826C4.21869 20.02 4.46979 20.0382 4.67721 19.9294L10.5 16.8731L16.3226 19.9294C16.4126 19.9767 16.5109 20 16.6088 20C16.7364 20 16.8634 19.9604 16.9705 19.8827C17.16 19.7453 17.2549 19.5124 17.2153 19.2819L16.1031 12.8086L20.8142 8.22416C20.9819 8.06094 21.0423 7.81684 20.9699 7.59449ZM15.0126 12.1542C14.8676 12.2954 14.8014 12.4987 14.8357 12.698L15.7918 18.2629L10.7864 15.6355C10.6071 15.5414 10.393 15.5414 10.2137 15.6355L5.20799 18.2629L6.16381 12.6979C6.19802 12.4987 6.13186 12.2954 5.98691 12.1543L1.93741 8.21319L7.53378 7.40121C7.73418 7.37214 7.90735 7.2465 7.99701 7.06522L10.5 2.00204L13.0029 7.06518C13.0925 7.24646 13.2657 7.37214 13.4661 7.40121L19.0626 8.21315L15.0126 12.1542Z" fill="currentColor" data-v-5195f33d=""></path></svg>
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="filled" data-v-5195f33d=""><path d="M18.6081 7.11876L13.1532 6.32598L10.7148 1.38243C10.6482 1.24708 10.5386 1.13751 10.4032 1.07091C10.0638 0.903328 9.65129 1.04298 9.48157 1.38243L7.04309 6.32598L1.58821 7.11876C1.43782 7.14024 1.30032 7.21114 1.19504 7.31856C1.06777 7.44937 0.997643 7.62536 1.00006 7.80785C1.00248 7.99034 1.07725 8.16441 1.20794 8.2918L5.15461 12.1397L4.22219 17.5731C4.20033 17.6994 4.21431 17.8294 4.26257 17.9483C4.31082 18.0671 4.39141 18.1701 4.49519 18.2455C4.59898 18.3208 4.72181 18.3656 4.84975 18.3748C4.9777 18.3839 5.10564 18.357 5.21907 18.2971L10.0982 15.7318L14.9773 18.2971C15.1105 18.368 15.2652 18.3916 15.4134 18.3658C15.7872 18.3014 16.0386 17.9469 15.9741 17.5731L15.0417 12.1397L18.9884 8.2918C19.0958 8.18653 19.1667 8.04903 19.1882 7.89864C19.2462 7.52266 18.9841 7.17462 18.6081 7.11876V7.11876Z" fill="#FFC940" data-v-5195f33d=""></path></svg>
                                        </div> --}}
                                    </div>
                                    <h3 class="title flex-grow" data-v-4c81e784="">{{ $course->title }}</h3>
                                    <div class="d-flex align-center justify-between" data-v-4c81e784="">
                                        <div class="details" data-v-4c81e784="">
                                            {{-- <span class="learn-time" data-v-4c81e784="">1 неделя</span> --}}
                                            <span class="lessons-count" data-v-4c81e784="">
                                                <span class="progress-text" data-v-4c81e784="">
                                                    @php
                                                        $lessonCount = 0;
                                                    @endphp
                                                    @foreach ($lessons as $lesson)
                                                        @if (is_array($course->lessons->pluck('id')->toArray()) && in_array($lesson->id, $course->lessons->pluck('id')->toArray()))
                                                            @php
                                                                $lessonCount++;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    @if($user->courses()->where('course_id', $course->id)->exists())
                                                        0 из {{ $lessonCount++ }} занятий
                                                    @else
                                                        {{ $lessonCount++ }} занятий
                                                    @endif
                                                </span>
                                                @if($user->courses()->where('course_id', $course->id)->exists())
                                                    <div class="progress progress" data-v-4538add2="" data-v-4c81e784="" style="position: relative; cursor: pointer;">
                                                        <div class="bar" data-v-4538add2="">
                                                            <div class="fill" style="width:16%;" data-v-4538add2=""></div>
                                                        </div>
                                                        <span class="counter" style="font-size:12px;" data-v-4538add2="">16%</span>
                                                    </div>
                                                @endif
                                            </span>
                                        </div>
                                        <div class="card-link" data-v-4c81e784=""></div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </section>
        </main>
        <aside class="sidebar mt_70" data-v-20b3bc0f="" data-v-15d01916="">
            <h3 class="small-title ts_24" data-v-20b3bc0f="">Отличного дня! <img src="{{ asset('img/emoji/hand.png') }}" alt="" width="20" height="20" data-v-20b3bc0f=""></h3>
            <div class="siedbar-wrapper" data-v-20b3bc0f="">
                <div class="profile white_b" data-v-20b3bc0f=""><img src="{{ asset('img/default-photo.png') }}" alt="profile" class="profile__pic" data-v-20b3bc0f="">
                    <div class="profile__name ts_18" data-v-20b3bc0f="">{{ auth()->user()->name }}</div>
                    <div class="profile__level add_c" data-v-20b3bc0f="" style="position: relative; cursor: pointer;">Начинающий</div>
                    <div class="profile__btns df" data-v-20b3bc0f="">
                        <div class="lesson-completed__points" data-v-20b3bc0f="" style="position: relative; cursor: pointer;" data-tooltip="Test">
                            <span class="lesson-completed__your-number-points" data-v-20b3bc0f="">400 баллов</span>
                        </div>
                        <div class="patner-btn-wrapper" data-v-20b3bc0f="" data-tooltip="Партнерська програма" style="position: relative; cursor: pointer;">
                            <a href="/partner" type="button" class="btn variant-light-green partner-btn"
                                data-v-1ede2ded="" data-v-20b3bc0f="">
                                <div class="btn-content" data-v-1ede2ded="">
                                    <svg viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" data-v-20b3bc0f="" class=""><path d="M10.263.5a.61.61 0 00-.487.239l-.11.085a6.269 6.269 0 00-6.32 1.514 6.058 6.058 0 00-1.55 2.543c-.3.968-.357 1.999-.166 2.996-.021.02-.042.039-.062.06L.595 8.9a1.968 1.968 0 00-.44.65 2.016 2.016 0 00.44 2.203 2.04 2.04 0 001.827.555 2.038 2.038 0 001.936 1.604c.013.498.212.991.595 1.372.383.38.883.578 1.384.59.013.498.213.993.596 1.373.367.359.847.568 1.353.59a2.053 2.053 0 001.395-.471l.546.54a2.057 2.057 0 002.893 0c.382-.379.58-.87.598-1.366a2.03 2.03 0 001.969-1.956 2.037 2.037 0 001.92-1.649c.32.058.65.038.963-.06.312-.097.598-.268.834-.5.188-.184.338-.405.44-.65a2.018 2.018 0 000-1.554 1.969 1.969 0 00-.44-.65l-.899-.89.184-.708a5.921 5.921 0 00-.525-4.287 5.97 5.97 0 00-5.257-3.13H11.37A3.956 3.956 0 0011.173.5h-.91zm3.062 4.776l3.002 2.978.004.002 2.173 2.157a.74.74 0 01.223.535.757.757 0 01-.763.757c-.2 0-.394-.08-.54-.222l-1.649-1.635a.64.64 0 00-.898 0l-.018.016a.615.615 0 00-.186.446.63.63 0 00.186.446l1.286 1.275c.3.295.3.776 0 1.073a.77.77 0 01-.999.07.64.64 0 00-.835.06.625.625 0 00-.051.829.752.752 0 01-.067.996.77.77 0 01-1.011.062.64.64 0 00-.842.048.625.625 0 00-.054.833.763.763 0 01-.066 1.013.783.783 0 01-.547.224c-.204 0-.4-.08-.547-.224l-.54-.536.196-.196a1.97 1.97 0 00.441-.65 2.018 2.018 0 000-1.554A2.037 2.037 0 009.4 12.837a2.004 2.004 0 00-.595-1.372 2.037 2.037 0 00-1.384-.59 2.003 2.003 0 00-.596-1.372 2.071 2.071 0 00-.848-.504 2.027 2.027 0 00-.978-.05 2.004 2.004 0 00-.553-1.013 2.068 2.068 0 00-.745-.47c-.278-.101-.574-.14-.868-.113a4.938 4.938 0 01.224-2.237A4.82 4.82 0 014.243 3.23 5.043 5.043 0 016.14 2.052a4.931 4.931 0 012.205-.23L6.53 3.195a2.167 2.167 0 00-.576.649A2.231 2.231 0 005.73 5.55a2.244 2.244 0 001.85 1.637 2.21 2.21 0 001.63-.423l1.967-1.487h2.147l.001-.001zM7.269 4.23l3.235-2.446h.669c.061 0 .122.002.184.005h1.55a4.73 4.73 0 014.166 2.47 4.604 4.604 0 01.409 3.334l-.004.013-3.445-3.428a.615.615 0 00-.44-.188H10.97a.612.612 0 00-.368.124L8.47 5.727a.988.988 0 01-1.537-.517.93.93 0 01.093-.71.894.894 0 01.242-.27zm.551 11.065l.013-.012.97-.964.012-.01a.773.773 0 011.069.01.737.737 0 01.223.536.757.757 0 01-.223.536l-.973.963a.773.773 0 01-.54.222.773.773 0 01-.703-.462.756.756 0 01.151-.819h.001zm.096-1.879l-.012.012-.971.964-.013.011a.772.772 0 01-1.067-.012.738.738 0 01-.223-.53.756.756 0 01.214-.532l.009-.009.971-.964.009-.009a.773.773 0 01.537-.213.773.773 0 01.698.462.756.756 0 01-.152.82zm-1.99-1.952l-.973.964-.009.01a.772.772 0 01-1.07-.01.738.738 0 01-.224-.535.757.757 0 01.223-.536l.971-.963a.773.773 0 01.54-.222.773.773 0 01.706.463.756.756 0 01-.156.822l-.009.007zM3.545 9.9l-.97.964a.772.772 0 01-.541.222.772.772 0 01-.707-.467.757.757 0 01.166-.827l.973-.964a.773.773 0 011.08 0 .738.738 0 01.223.536.757.757 0 01-.224.536z" fill="currentColor" data-v-20b3bc0f=""></path></svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="profile__action df" data-v-20b3bc0f="">
                        <a href="/profile/settings" class="edit-icon" data-v-20b3bc0f="">
                            <svg viewBox="0 0 15 16" xmlns="http://www.w3.org/2000/svg" width="16" height="16" data-v-20b3bc0f="" class=""><path d="M9.039 3.33l3.215 3.215m.333-4.49l.942.942a1.608 1.608 0 010 2.273l-9.313 9.314H1v-3.216l9.314-9.313a1.608 1.608 0 012.273 0z" data-v-20b3bc0f=""></path></svg>
                        </a>
                        <form action="{{ route('logout') }}" method="post" class="d-flex" style="align-items: center;">
                            @csrf
                            <button class="exit-icon" data-v-20b3bc0f="">
                                <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" data-v-20b3bc0f="" class=""><path d="M2.125 11.333h1.417v1.417h8.5V1.417h-8.5v1.416H2.125V.708A.708.708 0 012.833 0h9.917a.708.708 0 01.708.708v12.75a.708.708 0 01-.708.709H2.833a.708.708 0 01-.708-.709v-2.125zm1.417-4.958H8.5v1.417H3.542v2.125L0 7.083 3.542 4.25v2.125z" fill="#6E7494" data-v-20b3bc0f=""></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
    </div>
@endsection
