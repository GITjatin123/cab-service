<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ludhiana Taxi Services">
    <meta name="author" content="DynamicLayers">
    <base href="public/">
    <title>Ludhiana Taxi Services</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/elements.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve
    your experience.
</p><![endif]-->

<div class="site-preloader">
    <div class="car">
        <div class="strike"></div>
        <div class="strike strike2"></div>
        <div class="strike strike3"></div>
        <div class="strike strike4"></div>
        <div class="strike strike5"></div>
        <div class="car-detail spoiler"></div>
        <div class="car-detail back"></div>
        <div class="car-detail center"></div>
        <div class="car-detail center1"></div>
        <div class="car-detail front"></div>
        <div class="car-detail wheel"></div>
        <div class="car-detail wheel wheel2"></div>
    </div>
</div><!--/.site-preloader-->

<header class="main-header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-wrap">
                <div class="top-left">
                    <p>Reliable Taxi Service!</p>
                </div>
                <div class="top-right">
                    <ul class="top-header-nav">
                        <li><a href="{{route('contact')}}">Help</a></li>
                        <li><a href="{{route('contact')}}">Support</a></li>
{{--                        <li><a href="faqs.html">FAQ</a></li>--}}
                    </ul>
                    <ul class="header-social-share">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--/.top-header-->
    <div class="mid-header">
        <div class="container">
            <div class="mid-header-wrap">
                <div class="site-logo">
                    <a href="{{route('home')}}"><img style="height: 105px;
    top: 50px;
    position: absolute;" src="assets/img/logo-dark.png" alt="Logo"></a>
                </div><!--/.site-logo-->
                <ul class="header-info">
                    <li>
                        <div class="header-info-icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Call us now</span><a href="tel:1234567890">95178-15169</a></h3>
                        </div>
                    </li>
                    <li>
                        <div class="header-info-icon">
                            <i class="las la-envelope-open"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Email now</span><a href="javascript:void(0);" class="__cf_email__">deepcabs007@gmail.com</a>
                            </h3>
                        </div>
                    </li>
                    <li>
                        <div class="header-info-icon">
                            <i class="las la-map-marked-alt"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Shop no 23</span>jai singh complex model town...</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--/.mid-header-->
    <div class="nav-menu-wrapper">
        <div class="container">
            <div class="nav-menu-inner">
                <div class="site-logo">
                    <a href="{{route('home')}}"><img style="height: 72px;" src="assets/img/logo-dark.png" alt="Logo"></a>
                </div><!--/.site-logo-->
                <div class="header-menu-wrap">
                    <ul class="nav-menu">
                        <li class="active dropdown_menu">
                            <a href="{{route('home')}}">Home</a>

                        </li>
                        <li class="dropdown_menu">
                            <a href="{{route('about')}}">About Us</a>
{{--                            <ul>--}}
{{--                                <li><a href="about-us.php">About Us</a></li>--}}
{{--                                <li><a href="about-company.php">About Company</a></li>--}}
{{--                                <li><a href="our-services.php">Our Services</a></li>--}}
{{--                                <li><a href="service-details.php">Services Details</a></li>--}}
{{--                                <li><a href="book-taxi.php">Book a Ride</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        {{--<li class="dropdown_menu">
                            <a href="our-taxi.php">Our Taxi</a>
                            <ul>
                                <li><a href="our-taxi.php">Taxi Lists</a></li>
                                <li><a href="taxi-details.php">Taxi Details</a></li>
                            </ul>
                        </li>--}}
                        {{--<li class="dropdown_menu">
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="our-drivers.php">Our Drivers</a></li>
                                <li><a href="driver-details.php">Driver Details</a></li>
                                <li><a href="testimonials.php">Customer Reviews</a></li>
                                <li><a href="faqs.php">Help &amp; Faq's</a></li>
                                <li><a href="404.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="blog-details.php">Blog</a></li>--}}
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="menu-right-item">
                    <div class="search-icon dl-search-icon">
                        <i class="las la-search"></i>
                    </div>
                    <div class="sidebox-icon dl-sidebox-icon">
                        <i class="las la-bars"></i>
                    </div>
                    <a href="{{route('book-taxi')}}" class="menu-btn">Book a Taxi</a>
                </div>
                <div class="mobile-menu-icon">
                    <div class="burger-menu">
                        <div class="line-menu line-half first-line"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu line-half last-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.nav-menu-->
</header>
<!--/.main-header-->
<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here..." />
            <button id="popup-search-button" type="submit" name="submit">
                <i class="las la-search"></i>
            </button>
        </form>
        <div class="search-close"><i class="las la-times"></i></div>
    </div>
</div>
<div id="searchbox-overlay"></div>
<!--/.popupsearch-box-->
<div id="popup-sidebox" class="popup-sidebox">
    <div class="sidebox-content">
        <div class="site-logo">
            <a href="{{route('home')}}"><img src="assets/img/logo-dark.png" alt="logo" /></a>
        </div>
        <p>Everything your taxi business needs is already here! Deep Cabs, a theme
            made for taxi service companies.</p>
        <ul class="sidebox-list">
            <li class="call"><span>Call for ride:</span>95178-15169</li>
            <li>
                <span>You can find us at:</span>Shop no 23 , jai singh complex model town <br> link road near children traffic park Ludhiana, punjab
            </li>
            <li><span>Email now:</span><a href="javascript:void(0);" class="text-white __cf_email__">deepcabs007@gmail.com</a></li>
        </ul>
    </div>
</div>
<!--/.popup-sidebox-->
<div id="sidebox-overlay"></div>
@yield('content')
<footer class="footer-section">
    <div class="footer-top-wrap bg-grey">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="brand">
                            <a class="footer-logo" href="{{route('home')}}"><img src="assets/img/logo-dark.png"
                                                                          alt="logo"></a>
                            <p>We successfully cope with tasks of varying complexity, provide long-term guarantees
                                and regularly master new technologies with Deep Cabs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-call">
                            <i class="las la-phone-volume"></i>
                            <p><span>Call For Taxi</span><a href="tel:9517815169">95178-15169</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.footer-top-wrap-->
    <div class="footer-mid-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer-item">
                        <div class="widget-title">
                            <h3>Working Hours</h3>
                        </div>
                        <ul class="footer-contact">
                            <li><span>Monday - Sunday:</span>24/7</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer-item footer-list">
                        <div class="widget-title">
                            <h3>Usefull Links</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="{{route('book-taxi')}}">Taxi Booking</a></li>
                            <li><a href="{{route('contact')}}">Help Center</a></li>
                            <li><a href="javascript:void(0);">Privacy and Policy</a></li>
                            <li><a href="javascript:void(0);">Terms of Use</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer-item">
                        <div class="widget-title">
                            <h3>Head Office</h3>
                        </div>
                        <ul class="footer-contact">
                            <li><span>Location:</span>Shop no 23, jai singh complex model town link road near children traffic park - Ludhiana, punjab</li>
                            <li><span>Join Us:</span><a href="javascript:void(0);" class="text-white __cf_email__"> deepcabs007@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer-item subscribe-wrap">
                        <div class="widget-title">
                            <h3>Newsletter Signup</h3>
                        </div>
                        <form action="{{ route('newsletter.store') }}" method="post" class="subscribe-form">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="Your Email"
                                   required="">
                            <input type="hidden" name="action" value="mailchimpsubscribe">
                            <button class="submit">Subscribe Now</button>
                            <div class="clearfix"></div>
                            <div id="subscribe-result">
                                <div class="subscription-success"></div>
                                <div class="subscription-error"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="running-taxi">
            <div class="taxi"></div>
            <div class="taxi-2"></div>
            <div class="taxi-3"></div>
        </div>
    </div>
    <!--/.footer-mid-wrap-->
    <div class="copyright-wrap">
        <div class="container">
            <p>© <span id="currentYear"></span> Deep Cabs All Rights Reserved.</p>
        </div>
    </div>
    <!--/.copyright-wrap-->
</footer>
<!--/.footer-section-->

<div id="scrollup">
    <button id="scroll-top" class="scroll-to-top">
        <i class="las la-arrow-up"></i>
    </button>
</div>
<!--scrollup-->

<div class="dl-cursor">
    <div class="cursor-icon-holder"><i class="las la-times"></i></div>
</div>
<!--/.dl-cursor-->

<!--jQuery Lib-->
<script src="assets/js/email-decode.min.js"></script>
<script src="assets/js/jquary-3.6.0.min.js"></script>
<script src="assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.datetimepicker.full.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/venobox.min.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/book-ride.js"></script>
<script src="assets/js/main.js"></script>
<script>(function () {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML = "window.__CF$cv$params={r:'9a796625b96861eb',t:'MTc2NDY2MzU2Mw=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }

        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else {
                var e = document.onreadystatechange || function () {
                };
                document.onreadystatechange = function (b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"66c9e2d05ffd40608761a8fdcdbd0b45","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
