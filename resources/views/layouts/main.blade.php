<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple landing page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/aos/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <img src="images/Group2.svg" alt="">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                        <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                            <div class="navbar-collapse-logo">
                                <img src="images/Group2.svg" alt="">
                            </div>
                            <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features-section">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#digital-marketing-section">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#feedback-section">Testimonials</a>
                        </li>
                        <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
                        </li>
                        @auth
                            <li class="nav-item text-nowrap ml-2">
                                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Особистий кабінет</button>
                            </li>
                            <li class="nav-item text-nowrap ml-2">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <input class="btn btn-outline-info" type="submit" value="Вихід">
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('contentMainBlock')
    <div class="content-wrapper">
        <div class="container">
            @yield('content')
            <section class="contact-details" id="contact-details-section">
                <div class="row text-center text-md-left">
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <img src="images/Group2.svg" alt="" class="pb-2">
                        <div class="pt-2">
                            <p class="text-muted m-0">mikayla_beer@feil.name</p>
                            <p class="text-muted m-0">906-179-8309</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Get in Touch</h5>
                        <p class="text-muted">Don’t miss any updates of our new templates and extensions.!</p>
                        <form>
                            <input type="text" class="form-control" id="Email" placeholder="Email id">
                        </form>
                        <div class="pt-3">
                            <button class="btn btn-dark">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Our Guidelines</h5>
                        <a href="#">
                            <p class="m-0 pb-2">Terms</p>
                        </a>
                        <a href="#">
                            <p class="m-0 pt-1 pb-2">Privacy policy</p>
                        </a>
                        <a href="#">
                            <p class="m-0 pt-1 pb-2">Cookie Policy</p>
                        </a>
                        <a href="#">
                            <p class="m-0 pt-1">Discover</p>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Our address</h5>
                        <p class="text-muted">518 Schmeler Neck<br>Bartlett. Illinois</p>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <a href="#"><span class="mdi mdi-facebook"></span></a>
                            <a href="#"><span class="mdi mdi-twitter"></span></a>
                            <a href="#"><span class="mdi mdi-instagram"></span></a>
                            <a href="#"><span class="mdi mdi-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="border-top">
                <p class="text-center text-muted pt-4">Copyright © 2019<a href="https://www.bootstrapdash.com/"
                        class="px-1">Bootstrapdash.</a>All rights reserved.</p>
            </footer>
            <!-- Modal for Contact - us Button -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" id="Email-1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="Message">Message</label>
                                    <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/aos/js/aos.js') }}"></script>
    <script src="{{ asset('js/landingpage.js') }}"></script>
</body>

</html>
