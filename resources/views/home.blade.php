@extends('layouts.main')

@section('contentMainBlock')
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold">Search engine optimisation &<br>Marketing.</h1>
            <h6 class="font-weight-normal text-muted pb-3">Simple is a simple template with a creative design that solves all
                your marketing and SEO queries.</h6>
            <div>
                <button class="btn btn-opacity-light mr-1">Get started</button>
                <button class="btn btn-opacity-success ml-1">Learn more</button>
            </div>
            <img src="images/Group171.svg" alt="" class="img-fluid">
        </div>
    </div>
@endsection
@section('content')
    <section class="features-overview" id="features-section">
        <div class="content-header">
            <h2>How does it works</h2>
            <h6 class="section-subtitle text-muted">One theme that serves as an easy-to-use operational toolkit<br>that
                meets customer's needs.</h6>
        </div>
        <div class="d-md-flex justify-content-between">
            <div class="grid-margin d-flex justify-content-start">
                <div class="features-width">
                    <img src="images/Group12.svg" alt="" class="img-icons">
                    <h5 class="py-3">Speed<br>Optimisation</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer
                        turpis, suspendisse.</p>
                    <a href="#">
                        <p class="readmore-link">Readmore</p>
                    </a>
                </div>
            </div>
            <div class="grid-margin d-flex justify-content-center">
                <div class="features-width">
                    <img src="images/Group7.svg" alt="" class="img-icons">
                    <h5 class="py-3">SEO and<br>Backlinks</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer
                        turpis, suspendisse.</p>
                    <a href="#">
                        <p class="readmore-link">Readmore</p>
                    </a>
                </div>
            </div>
            <div class="grid-margin d-flex justify-content-end">
                <div class="features-width">
                    <img src="images/Group5.svg" alt="" class="img-icons">
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
                <h3 class="m-0">We Offer a Full Range<br>of Digital Marketing Services!</h3>
                <div class="col-lg-7 col-xl-6 p-0">
                    <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                        consectetuer turpis, suspendisse.</p>
                    <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                        consectetuer</p>
                </div>
            </div>
            <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                <img src="images/Group1.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                <img src="images/Group2.png" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                <h3 class="m-0">Leading Digital Agency<br>for Business Solution.</h3>
                <div class="col-lg-9 col-xl-8 p-0">
                    <p class="py-4 m-0 text-muted">Power-packed with impressive features and well-optimized, this template
                        is designed to provide the best performance in all circumstances.</p>
                    <p class="pb-2 font-weight-medium text-muted">Its smart features make it a powerful stand-alone website
                        building tool.</p>
                </div>
                <button class="btn btn-info">Readmore</button>
            </div>
        </div>
    </section>
    <section class="case-studies" id="case-studies-section">
        <div class="row grid-margin">
            <div class="col-12 text-center pb-5">
                <h2>Our case studies</h2>
                <h6 class="section-subtitle text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                <div class="card color-cards">
                    <div class="card-body p-0">
                        <div class="bg-primary text-center card-contents">
                            <div class="card-image">
                                <img src="images/Group95.svg" class="case-studies-card-img" alt="">
                            </div>
                            <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                    <h6 class="text-white pb-2 px-3">Know more about Online marketing</h6>
                                    <button class="btn btn-white">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-details text-center pt-4">
                            <h6 class="m-0 pb-1">Online Marketing</h6>
                            <p>Seo, Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="card color-cards">
                    <div class="card-body p-0">
                        <div class="bg-warning text-center card-contents">
                            <div class="card-image">
                                <img src="images/Group108.svg" class="case-studies-card-img" alt="">
                            </div>
                            <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                    <h6 class="text-white pb-2 px-3">Know more about Web Development</h6>
                                    <button class="btn btn-white">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-details text-center pt-4">
                            <h6 class="m-0 pb-1">Web Development</h6>
                            <p>Developing, Designing</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="card color-cards">
                    <div class="card-body p-0">
                        <div class="bg-violet text-center card-contents">
                            <div class="card-image">
                                <img src="images/Group126.svg" class="case-studies-card-img" alt="">
                            </div>
                            <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                    <h6 class="text-white pb-2 px-3">Know more about Web Designing</h6>
                                    <button class="btn btn-white">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-details text-center pt-4">
                            <h6 class="m-0 pb-1">Web Designing</h6>
                            <p>Designing, Developing</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
                <div class="card color-cards">
                    <div class="card-body p-0">
                        <div class="bg-success text-center card-contents">
                            <div class="card-image">
                                <img src="images/Group115.svg" class="case-studies-card-img" alt="">
                            </div>
                            <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                    <h6 class="text-white pb-2 px-3">Know more about Software Development</h6>
                                    <button class="btn btn-white">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-details text-center pt-4">
                            <h6 class="m-0 pb-1">Software Development</h6>
                            <p>Developing, Designing</p>
                        </div>
                    </div>
                </div>
            </div>
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
                            <img src="images/face2.jpg" width="89" height="89" alt=""
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
                            <img src="images/face3.jpg" width="89" height="89" alt=""
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
                            <img src="images/face20.jpg" width="89" height="89" alt=""
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
                            <img src="images/face15.jpg" width="89" height="89" alt=""
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
                            <img src="images/face16.jpg" width="89" height="89" alt=""
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
                            <img src="images/face1.jpg" width="89" height="89" alt=""
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
                            <img src="images/face2.jpg" width="89" height="89" alt=""
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
                            <img src="images/face3.jpg" width="89" height="89" alt=""
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
                            <img src="images/face20.jpg" width="89" height="89" alt=""
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
