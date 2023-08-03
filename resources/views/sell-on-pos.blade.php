@extends('layouts.web')

@section('title')
Sell on POS | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Sell on POS.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('sell-on-pos') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            সবার হাতে ব্যাংক কার্ড, শোরুমে কিংবা ওয়েবসাইটে
                            সবখানে পেমেন্ট নিন।
                        </h2>
                        <p>
                            খুব সহজেই পিওএস, মোবাইল অ্যাপ এবং ওয়েবসাইটে, ব্যাংকের ডেবিট কার্ড অথবা ক্রেডিট কার্ড ছাড়াও প্রায় সব ধরণের মোবাইল ব্যাংকিংয়ের পেমেন্ট নিন।
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
                            <h2 class="section__title">সেল করুন, সবখানে</h2>
                            <p>
                                মোবাইল অ্যাপ অথবা আপনার নিজস্ব ই-কমার্স ওয়েবসাইট ও বিভিন্ন সোশ্যাল মিডিয়ায় সেল করুন, একসাথে, ডু-কমার্সের প্যানেল থেকে।
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
                                সব মাধ্যমেই সহজে পেমেন্ট নিন
                            </h2>
                            <p>
                                অনলাইনে কাস্টমারদের পেমেন্ট নিতে সবচেয়ে বড় বাধা বিভিন্ন ধরণের পেমেন্ট গেটওয়ের সাথে আলাদাভাবে যুক্ত হওয়া। ডু-কমার্সের একটি সল্যুশনেই বাংলাদেশের প্রায় সমস্ত ইলেক্ট্রনিক পেমেন্ট গেটওয়ের সাথে যুক্ত থেকে সব ধরণের কাস্টমারদের পেমেন্ট খুব সহজেই নিতে পারছেন।
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