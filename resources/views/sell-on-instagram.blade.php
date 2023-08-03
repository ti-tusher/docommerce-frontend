@extends('layouts.web')

@section('title')
Sell on Instagram | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Sell on Instagram.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('sell-on-instagram') }}" />
@endsection

@section('content')

    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            মাত্র কয়েক ক্লিকে ইনস্টাগ্রামে আপনার স্টোর তৈরী করুন!
                        </h2>
                        <p>
                            বিশ্বের অন্যতম জনপ্রিয় সোশ্যাল মিডিয়া, ইনস্টাগ্রামে আপনার স্টোর তৈরি করতে পারবেন খুব সহজেই।
                        </p>

                        <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">স্টোর তৈরী করুন</a>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2">
                        <div class="hero__thumb-inner p-relative mt-50">
                            <img class="hero-2-thumb shadow-none img-fluid mx-auto d-block" src="{{ asset('assets/img/hero/home-2/hero-2-thumb.png') }}" alt="thumb">
                            <img class="hero-2-girl" src="{{ asset('assets/img/hero/home-2/hero-2-girl.png') }}" alt="girl">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- about area start -->
    <section class="about__area pb-160 pt-110 p-relative">
        <div class="about__shape">
            <img class="about-plus" src="{{ asset('assets/img/icon/about/home-1/plus.png') }}"" alt="design">
            <img class="about-triangle-2" src="{{ asset('assets/img/icon/about/home-1/triangle-2.png') }}"" alt="design">
            <img class="about-circle-4" src="{{ asset('assets/img/icon/about/home-1/circle-4.png') }}"" alt="design">
            <img class="about-circle-5" src="{{ asset('assets/img/icon/about/home-1/circle-5.png') }}"" alt="design">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__thumb-wrapper p-relative fix">
                        <img src="{{ asset('assets/img/custom/branding-logo.webp')}}" alt="branding | logo" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9">
                    <div class="about__wrapper about__wrapper-2 ml-60 mb-30">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">সরাসরি ইনস্টাগ্রাম স্টোরে বিক্রি করুন</h2>
                            <p>
                                কাস্টমাররা আপনার ইনস্টাগ্রাম পোস্ট থেকে সহজেই প্রোডাক্ট অর্ডার করতে পারবেন। আপনার অনলাইনে স্টোরের সাথে ইনস্টাগ্রাম স্টোরের সাথে সহজেই যোগাযোগ করিয়ে দিতে ডু-কমার্সের ইনস্টাগ্রাম সল্যুশন বেছে নিন। এক জায়গা থেকেই ম্যানেজ করুন সোশ্যাল মিডিয়ার সবগুলো স্টোর।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- about area start -->
    <section class="about__area pb-120 p-relative">
        <div class="about__shape">
            <img class="about-triangle" src="{{ asset('assets/img/icon/about/home-1/triangle.png') }}" alt="design">
            <img class="about-circle" src="{{ asset('assets/img/icon/about/home-1/circle.png') }}" alt="design">
            <img class="about-circle-2" src="{{ asset('assets/img/icon/about/home-1/circle-2.png') }}" alt="design">
            <img class="about-circle-3" src="{{ asset('assets/img/icon/about/home-1/circle-3.png') }}" alt="design">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-9">
                    <div class="about__wrapper mb-10">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">
                                ইনস্টাগ্রামের ফিড-কে বানান আপনার অনলাইন স্টোর
                            </h2>
                            <p>
                                ইনস্টাগ্রামের চাকচিক্যময় ছবি আর ভিডিওর সাথে সাথে প্রমোট করুন আপনার প্রোডাক্ট। ইনস্টাগ্রামের ‘শপ নাও’ ফিচারের মাধ্যমে প্রোডাক্ট সেল করতে ডু-কমার্সের সল্যুশন কাজ করে পানির মতো সহজে!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6 col-lg-6 col-md-10 order-first order-lg-last">
                    <div class="about__thumb-wrapper p-relative ml-40 fix text-end">
                        <img src="{{ asset('assets/img/custom/branding-store.webp')}}" alt="Branding | store" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

@endsection