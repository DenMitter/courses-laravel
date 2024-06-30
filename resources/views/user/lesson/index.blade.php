@extends('layouts.cabinet')

@section('content')
    <div data-v-06e4efb8="" class="wrapper df">
        <main data-v-06e4efb8="" class="main">
            <div data-v-06e4efb8="" class="section-head mb_50 df"><a data-v-06e4efb8="" href="{{ route('user.course.index', $course) }}" class="back-link"></a>
                <h2 data-v-06e4efb8="" class="main-title ts_25">До курсу</h2>
            </div>
            <section data-v-06e4efb8="" class="section-lesson">
                <div data-v-06e4efb8="" class="lesson">
                    <div data-v-06e4efb8="" class="block-wrapper block-padding" id="lesson">
                        <div data-v-8ac7ca1c="">
                            <div data-v-8ac7ca1c="" class="lesson__head">
                                {{-- <span data-v-8ac7ca1c="" class="lesson__date">{{ $date->translatedFormat('d') . '-го ' . $date->translatedFormat('F') . ' в ' . $date->translatedFormat('h') . ':' . $date->translatedFormat('m')}} (Київ)</span> --}}
                                <span data-v-8ac7ca1c="" class="lesson__date">{{ $date->isoFormat('Do MMMM') . ' в ' . $date->translatedFormat('H:i')}} (Київ)</span>

                                <h1 data-v-8ac7ca1c="" class="lesson__heading">{{ $lesson->title }}</h1>
                            </div>
                            <div data-v-8ac7ca1c="" class="lesson__desc">
                                <p data-v-8ac7ca1c="">{!! $lesson->lesson_content !!}</p>
                            </div>
                        </div>
                        <div>
                            @if ($userTime >= $date)
                                @if ($course->price <= 0)
                                    {{-- <iframe data-v-4a098ae6=""
                                        src="{{ $lesson->link_video }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="allowfullscreen" title="YouTube video player">
                                    </iframe> --}}
                                    <iframe height="540" style="width: 100%; border: 0px;" src="{{ $lesson->link_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                @else
                                    <div data-v-4a098ae6="" class="lesson__video">
                                        {{-- <iframe data-v-4a098ae6=""
                                            src="https://www.youtube.com/embed/YfqXlvFtgIk" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen="allowfullscreen" title="YouTube video player">
                                        </iframe> --}}
                                        {{-- <iframe src="https://meet.google.com/doh-aonb-fdh" width="800" height="600" frameborder="0" allow="microphone; camera" scrolling="no"></iframe> --}}
                                        {{-- <video id="localVideo" autoplay muted></video>
                                        <video id="remoteVideo" autoplay></video> --}}
                                        <iframe 
                                            allow="camera; microphone; fullscreen; display-capture; autoplay" 
                                            src="https://8x8.vc/mymeeting" 
                                            style="height: 100%; width: 100%; border: 0px;">
                                        </iframe>
                                    </div>
                                @endif
                            @else
                                <div data-v-7ed53b59="" class="lesson-no-access time-access">
                                    <div data-v-7ed53b59="" class="back1"></div>
                                    <div data-v-7ed53b59="" class="back2"></div>
                                    <div data-v-7ed53b59="" class="lesson-no-access__content">
                                        <img data-v-7ed53b59="" src="/img/icons/lesson-access-clock.svg" alt="">
                                        <p data-v-7ed53b59="" class="title">Ти дуже рано.</p>
                                        <p data-v-7ed53b59="">
                                            Занятття почнеться <span data-v-7ed53b59="" class="text-blue">{{ $date->isoFormat('Do MMMM') }}</span> в {{ $date->translatedFormat('H:i') }} (Київ)
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div data-v-a4dc314a="" class="lesson__mentor">
                            <div data-v-a4dc314a="" class="lesson__mentor-box">
                                <div data-v-a4dc314a="" class="lesson__mentor-name">
                                    <img data-v-a4dc314a="" src="{{ '/storage/' . $course->author_avatar }}" alt="{{ $course->author }}" class="portrait-square">
                                    <span data-v-a4dc314a="">{{ $course->author }}</span>
                                </div>
                                <div data-v-a4dc314a="" class="lesson__mentor-time d-flex align-center">
                                    <img data-v-a4dc314a="" src="{{ asset('img/components/lesson/timer.svg') }}" alt="" class="timer-icon">
                                    50 хвилин
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-06e4efb8="">
                        <div data-v-6570bffa="" data-v-06e4efb8="" class="program" id="shedule">
                            <div data-v-6570bffa="" class="program-header">
                                <ul data-v-6570bffa="">
                                    <li data-v-6570bffa="">3 спринта</li>
                                    <li data-v-6570bffa="">4 занятия</li>
                                    <li data-v-6570bffa="">3 ДЗ</li>
                                    <li data-v-6570bffa="">1 тест</li>
                                </ul>
                                <button data-v-6570bffa="">
                                    <img data-v-6570bffa="" src="/img/icons/one-lesson/close-lessons.svg" alt="">
                                </button>
                            </div>
                            <div data-v-6570bffa="">
                                @php
                                    $lessonCount = 0;
                                @endphp
                                @foreach ($lessons as $lessonItem)
                                    @if (is_array($course->lessons->pluck('id')->toArray()) && in_array($lessonItem->id, $course->lessons->pluck('id')->toArray()))
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
                                                            {{ $lessonItem->title }}
                                                        </span>
                                                    </h3>
                                                    <a href="{{ route('user.lesson.index', ['lesson' => $lessonItem, 'course' => $course->id]) }}" data-v-6570bffa="" class="lessons-counter current">перейти</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @if ($lesson->lesson_file)
                            <div data-v-61c9aaaf="" data-v-06e4efb8="" class="lesson__item" id="files">
                                <div data-v-61c9aaaf="" class="lesson__tabs">
                                    <h2 data-v-0329c807="" class="lesson__title">Додатковий матеріал до уроку</h2>
                                    <div data-v-61c9aaaf="" class="block-wrapper block-padding">
                                        <div data-v-61c9aaaf="" class="lesson__tabs-item active">
                                            <ul data-v-61c9aaaf="" class="lesson__tabs-files">
                                                <li data-v-61c9aaaf="">
                                                    <a data-v-61c9aaaf="" href="{{ '/storage/' . $lesson->lesson_file }}" download="{{ $lesson->file_name }}">
                                                        <img data-v-61c9aaaf=""  src="{{ asset('img/icons/file.png') }}" alt="">
                                                        <span data-v-61c9aaaf="">{{ $lesson->file_name }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($course->price <= 0)                        
                        @else
                            <div data-v-0329c807="" data-v-06e4efb8="" id="homework">
                                <h2 data-v-0329c807="" class="lesson__title">Домашня робота</h2>
                                <div data-v-0329c807="" class="block-wrapper block-padding">
                                    <div data-v-0329c807="" class="lesson-description">{{ $lesson->homework_content }}</div>
                                </div>
                            </div>
                            <section data-v-0ed8579a="" data-v-06e4efb8="" id="chat">
                                <h2 data-v-0ed8579a="" class="lesson__title">Сдать ДЗ наставнику</h2>
                                <div data-v-0ed8579a="" class="block-wrapper block-padding">
                                    <div data-v-0ed8579a="">
                                        <div data-v-07667039="" data-v-0ed8579a="" class="messages">
                                            <div data-v-07667039="" class="centered flex-col empty-block">
                                                <img data-v-07667039="" src="{{ asset('img/components/lesson/keyboard.svg') }}" alt="">
                                                <span data-v-07667039="" class="text-empty text-gray">Пока что здесь пусто. Исправим это?</span>
                                            </div>
                                        </div>
                                        <form data-v-0501b817="" data-v-0ed8579a="" class="message-form">
                                            <textarea data-v-0501b817="" contenteditable="true" placeholder="Начни набирать текст сообщения" class="message-input"></textarea>
                                            <div data-v-0501b817="" class="symbols-counter">0/3000</div>
                                            <button type="submit" data-v-7ceea6bc="" href="https://t.me/+R1UqUIB0OrdkMzky" target="_blank" class="btn-link centered" style="position: relative; cursor: pointer; width: 100%;">
                                                <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.17743 3.07745C1.03211 2.81741 0.973749 2.5177 1.0109 2.22213C1.04806 1.92656 1.17878 1.65061 1.38395 1.43463C1.58911 1.21865 1.85798 1.07394 2.15125 1.02167C2.44453 0.969392 2.74684 1.01229 3.014 1.14408L20.7131 9.2485C20.828 9.30694 20.9244 9.39595 20.9918 9.50577C21.0591 9.61558 21.0948 9.74195 21.0948 9.87075C21.0948 9.99963 21.0591 10.1259 20.9918 10.2357C20.9244 10.3456 20.828 10.4346 20.7131 10.4931L3.014 17.8559C2.74684 17.9877 2.44453 18.0306 2.15125 17.9783C1.85798 17.926 1.58911 17.7813 1.38395 17.5654C1.17878 17.3494 1.04806 17.0735 1.0109 16.7779C0.973749 16.4823 1.03211 16.1826 1.17743 15.9225L5.88566 9.87033L1.17743 3.07745Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.095 9.87036H5.88116" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                <span data-v-7ceea6bc="">Чат команды</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        @endif
                    </div>
                </div>
            </section>
        </main>
        <aside data-v-0d183450="" data-v-06e4efb8="" class="sidebar">
            <nav data-v-0d183450="" class="aside-menu add_c ts_18 fwb">
                <ul data-v-0d183450="">
                    <li data-v-0d183450=""><a data-v-0d183450="" data-anchor="active" href="#lesson" class="active">Занятие</a></li>
                    <li data-v-0d183450=""><a data-v-0d183450="" data-anchor="" href="#shedule" class="">Программа</a></li>
                    <li data-v-0d183450=""><a data-v-0d183450="" data-anchor="" href="#files" class="">Файлы и примечания</a></li>
                    @if ($course->price <= 0)
                    @else
                        <li data-v-0d183450=""><a data-v-0d183450="" data-anchor="" href="#homework" class="">Домашнее задание</a></li>
                        <li data-v-0d183450=""><a data-v-0d183450="" data-anchor="" href="#chat" class="">Сдать ДЗ</a></li>
                    @endif
                </ul>
            </nav>
        </aside>
    </div>
@endsection
