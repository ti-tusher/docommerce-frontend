@extends('layouts.web')

@section('canonical')
    <link rel="canonical" href="{{ route('home') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area hero__height-2 p-relative d-flex align-items-center">
        <div class="hero__shape-2">
            <img class="hero-2-dot" src="{{ asset('assets/img/icon/hero/home-2/hero-2-dot.png') }}" alt="dot">
            <img class="hero-2-dot-2" src="{{ asset('assets/img/icon/hero/home-2/hero-2-dot-2.png') }}" alt="dot">
            <img class="hero-2-flower" src="{{ asset('assets/img/icon/hero/home-2/hero-2-flower.png') }}" alt="flower">
            <img class="hero-2-triangle" src="{{ asset('assets/img/icon/hero/home-2/hero-2-triangle.png') }}" alt="triangle">
            <img class="hero-2-triangle-2" src="{{ asset('assets/img/icon/hero/home-2/hero-2-triangle-2.png') }}" alt="triangle">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 mt-55">
                    <!-- <span class="hero__pre-title">Analytics</span> -->
                    <h2 class="hero__title-2">আপনার ব্যবসার অনলাইন ঠিকানা</h2>
                    <p>মাত্র ৯৯০ টাকায় আপনার ব্রান্ডের নিজস্ব নাম ই-কমার্স ব্যবসা শুরু করুন। আপনার নিজস্ব পণ্য না থাকলেও ডুকমার্সের বিস্তৃত ব্যবসায়িক নেটওয়ার্কের পার্টনার হয়ে পণ্য বিক্রির সুযোগ নিন।</p>
                    <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">বিস্তারিত দেখুন</a>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2 mt-80">
                    <div class="hero__thumb-inner p-relative ml-90">
                        <img class="hero-2-thumb" src="{{ asset('assets/img/hero/home-2/hero-2-thumb.png') }}" alt="thumb">
                        <img class="hero-2-girl" src="{{ asset('assets/img/hero/home-2/hero-2-girl.png') }}" alt="girl">
                        <img class="hero-2-thumb-sm" src="{{ asset('assets/img/hero/home-2/hero-2-thumb-sm.png') }}" alt="design">
                        <img class="hero-2-thumb-sm-2" src="{{ asset('assets/img/hero/home-2/hero-2-thumb-sm-2.png') }}" alt="design">
                        <img class="hero-2-thumb-sm-3" src="{{ asset('assets/img/hero/home-2/hero-2-thumb-sm-3.png') }}" alt="design">
                        <img class="hero-2-circle" src="{{ asset('assets/img/hero/home-2/hero-2-circle.png') }}" alt="design">
                        <img class="hero-2-circle-2" src="{{ asset('assets/img/hero/home-2/hero-2-circle-2.png') }}" alt="design">
                        <img class="hero-2-leaf" src="{{ asset('assets/img/hero/home-2/hero-2-leaf.png') }}" alt="design">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- services area start -->
    <section class="services__area grey-bg-3 pt-120 mt-200 pb-60 p-relative">
        <div class="services__shape-2">
            <img class="services-2-circle" src="{{ asset('assets/img/icon/services/home-2/services-circle.png') }}" alt="design">
            <img class="services-2-circle-2" src="{{ asset('assets/img/icon/services/home-2/services-circle-2.png') }}" alt="design">
        </div>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-12 col-lg-12 col-md-12">
                    <div class="section__title-wrapper mb-70 wow fadeInUp text-center" data-wow-delay=".3s">
                        <span class="section__pre-title purple">সেবা</span>
                        <h2 class="section__title section__title-2">অনলাইন ব্যবসার সম্মৃদ্ধির জন্য এখানেই পাচ্ছেন সমস্ত প্রয়োজনীয় সেবা</h2>
                        <p class="w-100 w-md-70">আপনার ব্যবসার প্রয়োজনকে প্রাধান্য দিয়ে ডু-কমার্সের অভিজ্ঞ অনলাইন বিশেষজ্ঞগণ তৈরী করছেন ব্যবসার জন্য অতি প্রয়োজনীয় সব সেবা। ব্যবসার প্রয়োজনে বেছে নিন আপনার জন্য বেস্ট সল্যুশন।</p>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="services__inner services__inner-2 hover__active mb-30">
                        <div class="services__item-2 transition-3 white-bg text-center">
                        <div class="services__icon-2">
                            <img src="{{ asset('assets/img/icon/services/home-1/branding.png') }}" alt="branding">
                        </div>
                        <div class="services__content-2">
                            <h3 class="services__title-2"><a href="{{ route('branding') }}" class="stretched-link">ব্র্যান্ডিং</a></h3>
                            <p>লোগো তৈরি থেকে ডিজাইন কনসেপ্ট, সবকিছু এক জায়গায়। </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="services__inner services__inner-2 hover__active active mb-30">
                        <div class="services__item-2 transition-3 white-bg text-center">
                        <div class="services__icon-2">
                            <img src="{{ asset('assets/img/icon/services/home-1/Photography.png') }}" alt="Photography">
                        </div>
                        <div class="services__content-2">
                            <h3 class="services__title-2"><a href="{{ route('animation-photography-videography') }}" class="stretched-link">প্রোডাক্ট ফটোগ্রাফি</a></h3>
                            <p>ওয়েবসাইটের জন্য আকর্ষণীয় প্রোডাক্ট ফটোগ্রাফি, সহজে এবং দ্রুত।</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="services__inner services__inner-2 hover__active mb-30">
                        <div class="services__item-2  transition-3 white-bg text-center">
                        <div class="services__icon-2">
                            <img src="{{ asset('assets/img/icon/services/home-1/PaymentGateway.png') }}" alt="PaymentGateway">
                        </div>
                        <div class="services__content-2">
                            <h3 class="services__title-2"><a href="#">পেমেন্ট গেটওয়ে</a></h3>
                            <p>বিশ্বস্ত সব পেমেন্ট গেটওয়ের সেবা আপনার নিজের ওয়েবসাইট থেকেই।</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="services__inner services__inner-2 hover__active mb-30">
                        <div class="services__item-2  transition-3 white-bg text-center">
                        <div class="services__icon-2">
                            <img src="{{ asset('assets/img/icon/services/home-1/Delivery.png') }}" alt="Delivery">
                        </div>
                        <div class="services__content-2">
                            <h3 class="services__title-2"><a href="{{ route('delivery') }}" class="stretched-link">ডেলিভারি</a></h3>
                            <p>আপনার সাইট থেকে বাংলাদেশের যেকোন প্রান্তে পণ্য পৌঁছে দিন।</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services area end -->

    <!-- Free use area start -->
    <section class="about__area grey-bg-3 pt-70 pb-105 p-relative">
        <div class="about__shape-2">
            <img class="about-2-circle" src="{{ asset('assets/img/about/home-2/about-circle.png') }}" alt="">
            <img class="about-2-circle-2" src="{{ asset('assets/img/about/home-2/about-circle-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-8">
                    <div class="promotion__thumb w-img wow fadeInRight" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInRight;">
                        <img src="{{ asset('assets/img/icon/services/home-1/free.png') }}" alt="বিনা শর্তে এক মাস ফ্রি ব্যবহার করুন!">

                        <div class="promotion__play">
                        <a href="https://youtu.be/_5uaz0cGlW0" data-fancybox="" class="pulse-play"><i class="arrow_triangle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
                    <div class="about__content-3 pt-35">
                        <div class="section__title-wrapper section__title-wrapper-2 mb-35 wow fadeInUp" data-wow-delay=".3s">
                        <span class="section__pre-title purple">ফ্রি ব্যবহার</span>
                        <h2 class="section__title section__title-2">বিনা শর্তে এক মাস ফ্রি ব্যবহার করুন!</h2>
                        <p>উদ্যোক্তাদের জন্য অনলাইন স্টোর তৈরীর টুলসমূহ সম্পূর্ণ বিনামূল্যে একমাস ব্যবহার করে তারপর নিবন্ধন করুন।</p>
                        </div>
                        <a href="#" class="w-btn w-btn-blue w-btn-3 w-btn-1">ফ্রী ট্রায়াল শুরু করুন</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Free area end -->

    <!-- merchant area start -->
    <section class="testimonial__area bg-white pt-105 pb-105 overflow-y-visible p-relative z-index-1">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper section__title-wrapper-4 text-center mb-50 wow fadeInUp" data-wow-delay=".3s">
                        <span class="section__pre-title purple">আমাদের পার্টনার</span>
                        <h2 class="section__title section__title-4 ">এখন পর্যন্ত যেসব পার্টনার ডু-কমার্সে আস্থা রেখে চলেছেন</h2>
                        <p>প্রতিদিন বড় হচ্ছে আমাদের পরিবার। অনলাইন ব্যবসাবান্ধব বিভিন্ন সেবার জন্য আমাদের উপর এখনো যারা আস্থা রেখে চলেছেন...</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="testimonial__slider-3 testimonial__slider-4 owl-carousel wow fadeInUp" data-wow-delay=".5s">
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://astinternational2.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/AST.png') }}" alt="AST">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://dreamcruise.xyz/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/DC.png') }}" alt="DC">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://etelphonesandgadgets.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/etel.png') }}" alt="etel">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://evasbd.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/evasbd.png') }}" alt="evasbd">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://exitosfashion.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/Exitos.png') }}" alt="Exitos">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://mommykiddybd.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/mommy-Kiddy.png') }}" alt="mommy-Kiddy">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://nryshoppingmart.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/NRY.png') }}" alt="NRY">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://olivefashionbd.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/olivefashion.png') }}" alt="olivefashion">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://opusfashionbd.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/Opusfashion.png') }}" alt="Opusfashion">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://rootsleatherbd.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/Rootsleather.png') }}" alt="Rootsleather">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://sobrakom.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/sobrokom.png') }}" alt="sobrokom">
                        </a>
                        </div>
                        <div class="testimonial__item-3 transition-3 mb-30">
                        <a href="https://tmartworld.com/" class="stretched-link" target="_blank">
                            <img src="{{ asset('assets/img/merchants/tmart.png') }}" alt="tmart">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- merchant area end -->

    <!-- testimonial area start -->
    <section class="testimonial__area grey-bg-3 pt-105 pb-105 p-relative overflow-y-visible">
        <div class="circle-animation testimonial">
            <span></span>
        </div>
        <div class="testimonial__shape">
            <img class="testimonial-circle-1" src="{{ asset('assets/img/icon/testimonial/home-1/circle-1.png') }}" alt="design">
            <img class="testimonial-circle-2" src="{{ asset('assets/img/icon/testimonial/home-1/circle-2.png') }}" alt="design">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="section__title-wrapper text-center section-padding mb-65 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="section__title">আপনাদের বিশ্বস্ততা এবং আস্থার উপর আমাদের সফলতা নির্ভর করে</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="testimonial__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                        <div class="testimonial__item white-bg transition-3 mb-110">
                        <div class="testimonial__thumb mb-25">
                            <img src="{{ asset('assets/img/testimonial/home-1/testi-5.png') }}" alt="">
                        </div>
                        <div class="testimonial__text mb-25">
                            <p>ডু-কমার্সের সাথে পার্টনারশিপ মানে দেশের সুবিশাল ব্যবসায়িক নেটওয়ার্কে যুক্ত হওয়া। সাথে নিয়ে নাম স্বতন্ত্র সাইট আর অন্যান্য ই-কমার্স ভিত্তিক সার্ভিস তো আছেই।</p>
                        </div>
                        <div class="testimonial__author">
                            <h3>আব্দুল মালেক</h3>
                            <span>স্বত্বাধিকারী, কাকলি ফার্নিচার</span>
                        </div>
                        </div>
                        <div class="testimonial__item white-bg transition-3 mb-110">
                        <div class="testimonial__thumb mb-25">
                            <img src="{{ asset('assets/img/testimonial/home-1/testi-5.png') }}" alt="">
                        </div>
                        <div class="testimonial__text mb-25">
                            <p>ডু-কমার্সের সাথে পার্টনারশিপ মানে দেশের সুবিশাল ব্যবসায়িক নেটওয়ার্কে যুক্ত হওয়া। সাথে নিয়ে নাম স্বতন্ত্র সাইট আর অন্যান্য ই-কমার্স ভিত্তিক সার্ভিস তো আছেই।</p>
                        </div>
                        <div class="testimonial__author">
                            <h3>আব্দুল মালেক</h3>
                            <span>স্বত্বাধিকারী, কাকলি ফার্নিচার</span>
                        </div>
                        </div>
                        <div class="testimonial__item white-bg transition-3 mb-110">
                        <div class="testimonial__thumb mb-25">
                            <img src="{{ asset('assets/img/testimonial/home-1/testi-5.png') }}" alt="">
                        </div>
                        <div class="testimonial__text mb-25">
                            <p>ডু-কমার্সের সাথে পার্টনারশিপ মানে দেশের সুবিশাল ব্যবসায়িক নেটওয়ার্কে যুক্ত হওয়া। সাথে নিয়ে নাম স্বতন্ত্র সাইট আর অন্যান্য ই-কমার্স ভিত্তিক সার্ভিস তো আছেই।</p>
                        </div>
                        <div class="testimonial__author">
                            <h3>আব্দুল মালেক</h3>
                            <span>স্বত্বাধিকারী, কাকলি ফার্নিচার</span>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- single blog use area start -->
    <section class="about__area grey-bg-3 pt-105 pb-105 p-relative">
        <div class="about__shape-2">
            <img class="about-2-circle" src="{{ asset('assets/img/about/home-2/about-circle.png') }}" alt="design">
            <img class="about-2-circle-2" src="{{ asset('assets/img/about/home-2/about-circle-2.png') }}" alt="design">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-8">
                    <div class="blog__thumb wow fadeInLeft" data-wow-delay=".3s">
                        <img src="{{ asset('assets/img/blog/blog-big.jpg') }}" alt="blog" class="img-fluid">
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
                    <div class="about__content-3 pt-45">
                        <div class="section__title-wrapper section__title-wrapper-2 mb-15 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="section__title section__title-2">বাংলাদেশে ই-কমার্সের সবচেয়ে শক্তিশালী ব্যবসায়িক নেটওয়ার্ক</h2>
                        <p>২০ হাজারেরও বেশি প্রোডাক্ট নিয়ে বাংলাদেশে ই-কমার্সের সবচেয়ে বড় ব্যবসায়ীক নেটওয়ার্কে যুক্ত আছে শতাধিক হোলসেলার। আপনার নিজস্ব প্রোডাক্ট থাকুক বা নাই থাকুক, ডু-কমার্স মানেই স্মার্ট ব্যবসায়ীদের এক বিশ্বস্ত নেটওয়ার্ক।</p>
                        </div>
                        <a href="#" class="w-btn w-btn-blue">বিস্তারিত</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single blog area end -->

    <!-- blog area start -->
    <section class="blog__area pt-105 pb-105 p-relative">
        <div class="blog__shape">
            <img class="blog-dot" src="{{ asset('assets/img/icon/blog/home-2/blog-dot.png') }}" alt="design">
            <img class="blog-triangle" src="{{ asset('assets/img/icon/blog/home-2/blog-triangle.png') }}" alt="design">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog__item white-bg mb-30">
                        <div class="blog__thumb fix w-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/home-2/blog-1.jpg') }}" alt="blog">
                        </a>
                        </div>
                        <div class="blog__content pt-20">
                        <div class="blog__meta mb-10">
                            <span class="date">২৭ ফেব্রুয়ারি, ২০২২</span>
                            <span class="tag"><a href="#">এক্সপার্ট সল্যুশন</a></span>
                        </div>
                        <h3 class="blog__title"><a href="#">মার্কেটপ্লেসে  প্রোডাক্ট বিক্রি করা আর নিজস্ব ওয়েবসাইট থেকে প্রোডাক্ট বিক্রি করা নিয়ে এক্সপার্টরা কি ভাবেন?</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog__item white-bg mb-30">
                        <div class="blog__thumb fix w-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/home-2/blog-2.jpg') }}" alt="">
                        </a>
                        </div>
                        <div class="blog__content pt-20">
                        <div class="blog__meta mb-10">
                            <span class="date">২০ ফেব্রুয়ারি, ২০২২</span>
                            <span class="tag"><a href="#">এক্সপার্ট সল্যুশন</a></span>
                        </div>
                        <h3 class="blog__title"><a href="#">ব্যবসায়ীরা ডু-কমার্সের এর বিভিন্ন সেবা নিয়ে কিভাবে বিক্রি বাড়াচ্ছেন তার উদাহরণ দেখুন</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="blog__item white-bg mb-30">
                        <div class="blog__thumb fix w-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/home-2/blog-3.jpg') }}" alt="">
                        </a>
                        </div>
                        <div class="blog__content pt-20">
                        <div class="blog__meta mb-10">
                            <span class="date">১৫ ফেব্রুয়ারি, ২০২২</span>
                            <span class="tag"><a href="#">এক্সপার্ট সল্যুশন</a></span>
                        </div>
                        <h3 class="blog__title"><a href="#">ড্রপশিপিং-এর মাধ্যমে অনলাইনে অন্য হোলসেলারদের  পণ্য বিক্রি করতে ডু-কমার্সের সলিউশন</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 wow fadeInUp" data-wow-delay=".9s">
                    <div class="blog__more text-center mt-40">
                        <a href="#" class="w-btn w-btn-blue w-btn-6">সব সলিউশন দেখুন</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

    <!-- subscribe area start -->
    <section class="subscribe__area grey-bg-8 pt-105 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="subscribe__wrapper d-xl-flex justify-content-between align-items-center wow fadeInUp" data-wow-delay=".5s">
                        <div class="subscribe__content">
                        <h3 class="subscribe__title">ডু-কমার্স সম্পর্কে আরো জানতে চান?</h3>
                        <p>আপনার ফোন নাম্বারটি পাশের বক্সে লিখে নিশ্চিত করুন, আমরা আপনাকে কল করে আরো বিস্তারিত জানাবো।</p>
                        </div>
                        <div class="subscribe__form">
                        <form action="#">
                            <input type="text" placeholder="আপনার ফোন নাম্বার*">

                            <button class="w-btn w-btn-blue">নিশ্চিত করুন</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe area end -->
@endsection