<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yess</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/media/logo/yess.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('public/template/css/bootstrap-5.0.0-beta1.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/css/LineIcons.2.0.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/css/main.css')}}">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- ========================= header start ========================= -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('public/media/logo/yess.png')}}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll {{request()->is('/') ? 'active' : ''}}" href="{{url('')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll {{request()->is('about') ? 'active' : ''}}" href="{{url('about')}}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll {{request()->is('program*') ? 'active' : ''}}" href="{{url('program')}}">Program</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll {{request()->is('ambasador*') ? 'active' : ''}}" href="{{url('ambasador')}}">Ambasador</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll {{request()->is('kegiatan*') ? 'active' : ''}}" href="{{url('kegiatan')}}">Galery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll btn btn-sm btn-success py-3 text-white" href="{{url('login')}}">
                                        Login
                                    </a>
                                </li>
                            </ul>
                            <!-- <form action="#" class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form> -->
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

    </header>
    <!-- ========================= header end ========================= -->

    @yield('content')

    <!-- ========================= footer start ========================= -->
    <footer class="footer pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                        <a href="index.html" class="logo mb-30"><img src="{{asset('public/media/logo/yess.png')}}" alt="logo"></a>
                        <p class="mb-30 footer-desc">Young Ambbasador Agriculture 2023.</p>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                        <h4>Quick Link</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="{{url('')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('program')}}">Program</a>
                            </li>
                            <li>
                                <a href="{{url('ambasador')}}">Ambasador</a>
                            </li>
                            <li>
                                <a href="{{url('galery')}}">Galery</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                        <h4>Ambasador</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="javascript:void(0)">Ambasador</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                        <h4>Contact</h4>
                        <ul class="footer-contact">
                            <li>
                                <p>cs@yaa.com</p>
                            </li>
                            <li>
                                <p>Indonesia</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="footer-social-links">
                            <ul class="d-flex">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="wow fadeInUp" data-wow-delay=".3s">Template Designed by <a
                                href="" rel="nofollow">YeSS 2023</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{asset('public/template/js/bootstrap.bundle-5.0.0-beta1.min.js')}}"></script>
    <script src="{{asset('public/template/js/contact-form.js')}}"></script>
    <script src="{{asset('public/template/js/count-up.min.js')}}"></script>
    <script src="{{asset('public/template/js/tiny-slider.js')}}"></script>
    <script src="{{asset('public/template/js/isotope.min.js')}}"></script>
    <script src="{{asset('public/template/js/glightbox.min.js')}}"></script>
    <script src="{{asset('public/template/js/wow.min.js')}}"></script>
    <script src="{{asset('public/template/js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('public/template/js/main.js')}}"></script>
</body>

</html>