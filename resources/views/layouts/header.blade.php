<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="follow, index" />
    <meta name="description" content="@stack('description')">
    <meta name="google-site-verification" content="Eqyz5iEDtj7gm9_LnQfz8C0wX6qjnzitc_3p0Ysr2lE" />
    <meta name="keywords" content="@stack('keywords')">
    <link rel="canonical" href="@stack('rel')" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
    @stack('title')
</head>

<body>
    <!-- header starts -->
    <header>
        <nav class="main-menu">
            <div>
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="assets/img/logo.png" alt="logo" width="120px">
                    </a>
                </div>
            </div>
            <div class="menu">
                <div class="menu-item">
                    <a href="{{ route('home') }}">Home</a>
                </div>
                <div id="services" class="menu-item">
                    <a href="{{ route('services') }}">Services
                        <i class="fa fa-caret-down" style="color: #fff; font-size:20px"></i>
                    </a>
                    <div class="drop-down">
                        <div><a href="{{ route('animation') }}">Animation</a></div>
                        <div><a href="{{ route('comic') }}">Comic Services</a></div>
                        <div><a href="{{ route('graphics') }}">Graphic Designing</a></div>
                    </div>
                </div>
                <div class="menu-item">
                    <a href="{{ route('portfolio') }}">Portfolio</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('about') }}">About Us</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('packages') }}">Packages</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('testimonials') }}">Testimonials</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
                {{-- <div class="menu-item">
                    <button>
                        Let's Get Started
                    </button>
                </div> --}}
            </div>
        </nav>
        <!-- header ends   -->

        <!-- mobile menu   -->
        <nav class="menu-extras">
            <input type="checkbox" id="check">
            <ul class="d-flex align-items-center justify-content-between" id="my-nav">
                <li>
                    <i class="fas fa-grin-beam"></i>
                    <a href="{{ route('home') }}">
                        <img src="assets/img/logo.png" alt="logo" width="120px">
                    </a>
                </li>
                <li>
                    <label for="check">
                        <a class="mx-3" style="cursor: pointer;">
                            <i class="fa fa-bars" id="hamberger"></i>
                        </a>
                    </label>
                </li>
            </ul>
            <ul id="menu-extra">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <label for="checkbox">
                            Services
                        </label>
                    </a>
                    <input type="checkbox" id="checkbox">
                    <i class="fa fa-caret-down" style="color:#fff;"></i>
                    <div class="menu-drop-down pt-3">
                        <div><a href="{{ route('animation') }}">Animation</a></div>
                        <div><a href="{{ route('comic') }}">Comic Services</a></div>
                        <div><a href="{{ route('graphics') }}">Graphic Designing</a></div>
                    </div>
                </li>
                <li>
                    <a href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li>
                    <a href="{{ route('packages') }}">Packages</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('testimonials') }}">Testimonials</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">CONTACT US</a>
                </li>
                {{-- <li class="btn-brandBoosters pt-4">
                    <a href="{{ route('contact') }}">
                        Let's Get Started
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- mobile menu ends -->

    </header>
