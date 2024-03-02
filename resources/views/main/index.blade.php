@extends('layouts.main')

@section('contentMainBlock')
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold">Highly Distinguished Courses</h1>
            <h6 class="font-weight-normal text-muted pb-3">We know how large objects will act, but things on a small scale
            </h6>
            <div>
                <button class="btn btn-opacity-light mr-1">Join Us</button>
                <button class="btn btn-opacity-success ml-1">Learn more</button>
            </div>
            <img src="{{ asset('images/Group171.svg') }}" alt="" class="img-fluid">
        </div>
    </div>
@endsection
@section('content')
    <section class="features-overview" id="features-section">
        <div class="content-header">
            <h2>Lifetime access</h2>
            <h6 class="section-subtitle text-muted">The gradual accumulation of
                information about atomic and
                small-scale behaviour...</h6>
        </div>
        <div class="d-md-flex justify-content-between">
            <div class="grid-margin d-flex justify-content-start">
                <div class="features-width">
                    <img src="{{ asset('images/Group12.svg') }}" alt="" class="img-icons">
                    <h5 class="py-3">training Courses</h5>
                    <p class="text-muted">The gradual accumulation of
                        information about atomic and
                        small-scale behaviour...</p>
                    <a href="#">
                        <p class="readmore-link">Readmore</p>
                    </a>
                </div>
            </div>
            <div class="grid-margin d-flex justify-content-center">
                <div class="features-width">
                    <img src="{{ asset('images/Group7.svg') }}" alt="" class="img-icons">
                    <h5 class="py-3">Books Liberary</h5>
                    <p class="text-muted">The gradual accumulation of
                        information about atomic and
                        small-scale behaviour...</p>
                    <a href="#">
                        <p class="readmore-link">Readmore</p>
                    </a>
                </div>
            </div>
            <div class="grid-margin d-flex justify-content-end">
                <div class="features-width">
                    <img src="{{ asset('images/Group5.svg') }}" alt="" class="img-icons">
                    <h5 class="py-3">Content<br>Marketing</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer
                        turpis, suspendisse.</p>
                    <a href="#">
                        <p class="readmore-link">Readmore</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="digital-marketing-service" id="digital-marketing-section">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                <h3 class="m-0">Make online education<br>accessible</h3>
                <div class="col-lg-7 col-xl-6 p-0">
                    <p class="py-4 m-0 text-muted">
                        Problems trying to resolve the conflict between
                        the two major realms of Classical physics:
                        Newtonian mechanics
                    </p>
                    <button class="btn btn-opacity-success ml-1">Learn more</button>
                    {{-- <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                        consectetuer</p> --}}
                </div>
            </div>
            <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                <img src="{{ asset('images/Group1.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                <img src="{{ asset('images/Group2.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                <h3 class="m-0">Watch our Courses</h3>
                <div class="col-lg-9 col-xl-8 p-0">
                    <p class="py-4 m-0 text-muted">
                        Problems trying to resolve the conflict between
                        the two major realms of Classical physics: Newtonian mechanics
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="case-studies" id="case-studies-section">
        <div class="row grid-margin">
            <div class="col-12 text-center pb-5">
                <h2>Choose the appropriate course</h2>
                {{-- <h6 class="section-subtitle text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6> --}}
            </div>
            @foreach ($courses as $course)
                <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                    <div class="card color-cards">
                        <div class="card-body p-0">
                            <div class="text-center card-contents" style="background-color: {{ $course->color }}">
                                <div class="card-image">
                                    <img src="{{ 'storage/' . $course->preview_image }}" class="case-studies-card-img" alt="">
                                </div>
                                <div class="card-desc-box d-flex align-items-center justify-content-around" style="background-color: {{ $course->color }}">
                                    <div>
                                        <h6 class="text-white pb-2 px-3">Know more about {{ $course->title }}</h6>
                                        <button class="btn btn-white">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-details text-center pt-4">
                                <p>{{ $course->price ? '$' . $course->price : 'Free' }}</p>
                                <h6 class="m-0 pb-1">{{ $course->title }}</h6>
                                <p>Seo, Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="customer-feedback" id="feedback-section">
        <div class="row">
            <div class="col-12 text-center pb-5">
                <h2>What our customers have to say</h2>
                <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
            </div>
            <div class="owl-carousel owl-theme grid-margin">
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face2.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Tony Martinez</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face3.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Sophia Armstrong</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face20.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Cody Lambert</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face15.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Cody Lambert</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face16.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Cody Lambert</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face1.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Tony Martinez</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face2.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Tony Martinez</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face3.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Sophia Armstrong</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/face20.jpg') }}" width="89" height="89" alt=""
                                class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Cody Lambert</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact-section">
        <div class="contact-us-bgimage grid-margin">
            <div class="pb-4">
                <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Do you have any projects?</h4>
                <h4 class="pt-1" data-aos="fade-down">Contact us</h4>
            </div>
            <div data-aos="fade-up">
                <button class="btn btn-rounded btn-outline-danger">Contact us</button>
            </div>
        </div>
    </section>
@endsection
