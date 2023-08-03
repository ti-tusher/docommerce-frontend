<!doctype html>
<html class="no-js" lang="bn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @hasSection('title')
        <title>@yield('title')</title>
    @else
    <title>DoCommerce - Smart E-Commerce Network - Build Online Store Yourself</title>
    @endif

    @hasSection('description')
        @yield('description')
    @else
    <meta name="description" content="DoCommerce is an online based E-Commerce platform where you can create online store by yourself with some very simple steps. With just a few clicks your online store will be ready to sell your products.">
    @endif

    <meta name="author" content="DoCommerce">
    <meta name="keywords" content="ecommerce website builder,best website builder for ecommerce,best ecommerce website builder for small business,ecommerce website design,ecommerce website development,ecommerce website developer,cheap ecommerce website">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    @yield('canonical')

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elegantFont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v='.time()) }}">
    @yield('page_css')

</head>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two" style="left:20px;"></div>
                <div class="object" id="object_three" style="left:40px;"></div>
                <div class="object" id="object_four" style="left:60px;"></div>
                <div class="object" id="object_five" style="left:80px;"></div>
            </div>
        </div>  
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header>
        <div class="header__top pt-5 pb-5 grey-bg-6">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="header__info text-center text-sm-start">
                            <a href="mailto:support@docommerce.com"> <i class="icon_mail"></i> <span class="__cf_email__">support@docommerce.com</span></a>
                            <a href="tel:+8809613919293"> <i class="icon_phone w-phone"></i> +8809613919293</a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="header__social fix float-end d-none d-sm-block">
                            <h5>Follow us:</h5>
                            <ul>
                            <li><a href="https://www.facebook.com/DoCommerceLtd"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/DoCommerceltd"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/docommerceltd/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/docommerceltd/"><i class="fab fa-instagram"></i></a></li>
                            
                            
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="header-sticky" class="header__area header__border header__padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-7">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo/do-commerce-logo.webp') }}" alt="DoCommerce" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 d-none d-lg-block">
                        <div class="main-menu main-menu-2">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="#">বিক্রি করুন</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('sell-on-own-website') }}">নিজস্ব ওয়েবসাইটে</a></li>
                                            <li><a href="{{ route('sell-on-instagram') }}">ইনস্টাগ্রামে</a></li>
                                            <li><a href="{{ route('sell-on-facebook') }}">ফেসবুকে</a></li>
                                            <li><a href="{{ route('sell-on-mobile-app') }}">মোবাইল অ্যাপে</a></li>
                                            <li><a href="{{ route('sell-on-pos') }}">পিওএস-এ</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">ব্যবস্থাপনা</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('store-management') }}">স্টোর ব্যবস্থাপনা</a></li>
                                            <li><a href="{{ route('mobile-app') }}">মোবাইল অ্যাপ</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown menu-mr">
                                        <a href="#">সল্যুশন</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('digital-marketing') }}">ডিজিটাল মার্কেটিং</a></li>
                                            <li><a href="{{ route('animation-photography-videography') }}">অ্যানিমেশন, ফোটোগ্রাফি ও ভিডিওগ্রাফি</a></li>
                                            <li><a href="{{ route('branding') }}">ব্র্যান্ডিং</a></li>
                                            <li><a href="{{ route('delivery') }}">ডেলিভারি</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('supplier') }}">সাপ্লায়ার</a></li>
                                    <li><a href="{{ route('dropshipping') }}">ড্রপশিপিং</a></li>
                                    <li><a href="{{ route('pricing') }}">প্রাইসিং</a></li>
                                    <li><a href="{{ route('free-training') }}">ফ্রি ট্রেনিং</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-5">
                        <div class="header__right text-end d-flex align-items-center justify-content-end">
                            <div class="header__right-btn d-none d-md-flex d-xl-block">
                                <a href="#" class="w-btn w-btn-transparent w-btn-transparent-2">লগইন</a>
                                <a href="#" class="w-btn w-btn-blue">ফ্রি ট্রায়াল</a>
                            </div>
                            <div class="sidebar__menu d-lg-none">
                                <div class="sidebar-toggle-btn sidebar-toggle-btn-2" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- sidebar area start -->
    <div class="sidebar__area">
        <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
            <span><i class="fal fa-times"></i></span>
            <span>close</span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo/do-commerce-logo-sm.webp') }}" alt="DoCommerce">
                </a>
            </div>
            <div class="mobile-menu mobile-menu-2"></div>
            <div class="sidebar__info mt-350">
                <a href="#" class="w-btn w-btn-blue-2 w-btn-4 d-block mb-15 mt-15">লগইন</a>
                <a href="#" class="w-btn w-btn-blue d-block">রেজিস্ট্রেশন</a>
            </div>
        </div>
        </div>
    </div>
    <!-- sidebar area end -->      
    <div class="body-overlay"></div>
    <!-- sidebar area end -->

    <main>
        @yield('content')
    </main>

    <!-- footer area start -->
    <footer class="footer__area grey-bg-3 pt-120 p-relative fix">
        <div class="footer__shape">
            <img class="footer-circle-1 footer-2-circle-1" src="{{ asset('assets/img/icon/footer/home-1/circle-1.png') }}" alt="">
            <img class="footer-circle-2 footer-2-circle-2" src="{{ asset('assets/img/icon/footer/home-1/circle-2.png') }}" alt="">
        </div>
        <div class="footer__top pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="footer__widget mb-50">
                        <div class="footer__widget-title mb-25">
                            <div class="footer__logo mb-25">
                                <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo/do-commerce-logo.webp') }}" alt="DoCommerce">
                                </a>
                            </div>
                            <div class="footer__widget-content">
                                <p>
                                ফ্লাট ৫, হাউজ ৮৮১, রোড ১২, এভিনিউ ২<br> মিরপুর DOHS, ঢাকা
                                </p>
                                <p>
                                BIN: 004518144-0401
                                </p>
                            </div>
                        </div>
                        <div class="footer__widget-content">
                            <div class="footer__link footer__link-2">
                                <ul>
                                <li><a href="#">গোপনীয়তার নীতি</a></li>
                                <li><a href="#">ব্যবহারের শর্তাবলী</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer__widget-content">
                            <div class="footer__social footer__social-2">
                                <ul>
                                    <li><a href="https://www.facebook.com/DoCommerceLtd"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/DoCommerceltd"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/docommerceltd/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.instagram.com/docommerceltd/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="footer__widget mb-50">
                        <div class="footer__widget-title mb-25">
                            <h3>আমাদের সম্পর্কে</h3>
                        </div>
                        <div class="footer__widget-content">
                            <div class="footer__link footer__link-2">
                                <ul>
                                <li><a href="{{ route('about-docommerce') }}">ডু-কমার্স পরিচিতি</a></li>
                                <li><a href="#">সচরাচর জিজ্ঞাস্য</a></li>
                                <li><a href="{{ route('careers') }}">ডু-কমার্সে ক্যারিয়ার গড়ুন</a></li>
                                <li><a href="{{ route('contact-us') }}">যোগাযোগের ঠিকানা</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-title mb-25">
                                <h3>এক্সপার্ট সল্যুশন</h3>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__link footer__link-2">
                                    <ul>
                                        <li><a href="{{ route('digital-marketing') }}">ডিজিটাল মার্কেটিং</a></li>
                                        <li><a href="{{ route('animation-photography-videography') }}">অ্যানিমেশন, ফোটোগ্রাফি ও ভিডিওগ্রাফি</a></li>
                                        <li><a href="{{ route('branding') }}">ব্র্যান্ডিং</a></li>
                                        <li><a href="{{ route('delivery') }}">ডেলিভারি</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-title mb-25">
                                <h3>সাপ্লায়ার</h3>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__link footer__link-2">
                                    <ul>
                                    <li><a href="{{ route('supplier') }}#supplier-benefits">কেন সাপ্লায়ার হবেন?</a></li>
                                    <li><a href="{{ route('supplier') }}#how-to-be-a-supplier">কিভাবে সাপ্লায়ার হবেন?</a></li>
                                    <li><a href="{{ route('supplier') }}#verified-supplier">ভেরিফায়েড সাপ্লায়ার</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="footer__widget mb-50 float-md-end fix">
                            <div class="footer__widget-title mb-25">
                                <h3>ড্রপশিপিং</h3>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__link footer__link-2">
                                    <ul>
                                    <li><a href="{{ route('dropshipping') }}#dropshipping"">ড্রপশিপিং সম্পর্কে বিস্তারিত</a></li>
                                    <li><a href="{{ route('dropshipping') }}#independent-dropshipper">ইন্ডিপেন্ডেন্ট ড্রপশিপার</a></li>
                                    <li><a href="{{ route('dropshipping') }}#dropshipper-training">ড্রপশিপার ট্রেনিং</a></li>
                                    <li><a href="{{ route('dropshipping') }}#dropshipper-support">ড্রপশিপার সাপোর্ট</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__copyright">
                    <div class="row">
                    <div class="col-xxl-12 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="footer__copyright-wrapper footer__copyright-wrapper-2 text-center">
                            <p>© ২০২০ - ২০২২ ডু-কমার্স লিমিটেড কতৃক সর্বস্বত্ব সংরক্ষিত</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('page_js')

</body>
</html>