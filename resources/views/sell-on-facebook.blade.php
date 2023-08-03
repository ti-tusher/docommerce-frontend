@extends('layouts.web')

@section('title')
Sell on Facebook | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Sell on Facebook.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('sell-on-facebook') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            মিনিটেই তৈরী করুন আপনার ওয়েবসাইটের<br>
                            সাথে কানেক্টেড ফেসবুক স্টোর
                        </h2>
                        <p>
                            কপি/পেস্ট করে সোশ্যাল মিডিয়ায় প্রোডাক্ট প্রচারের দিন আর নেই। এখন ডু-কমার্সের অনলাইন স্টোর থেকেই ম্যানেজ করুন আপনার নিজস্ব ফেসবুক স্টোর।
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
                            <h2 class="section__title">ডু-কমার্সের স্টোর থেকেই ম্যানেজ করুন আপনার ফেসবুক স্টোর!</h2>
                            <p>
                                ফেসবুকের স্টোর ম্যানেজ করতে পারবেন আপনার নিজস্ব ওয়েবসাইট থেকেই। প্রোডাক্ট অ্যাড, রিমুভ, কিংবা অ্যাডভার্টাইজিং সবই হবে আপনার নিজস্ব ডু-কমার্স প্যানেল থেকে।
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
                                এক ঢিলে দুই পাখি, ফেসবুক ও ইনস্টাগ্রামে একইসাথে সেল করুন
                            </h2>
                            <p>
                                ফেসবুকের স্টোরকে কানেক্ট করুন ইনস্টাগ্রামের স্টোরের সাথে। আর দুটি স্টোরই ম্যানেজ করুন আপনার ই-কমার্স প্যানেল থেকে।
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
                        <img src="{{ asset('assets/img/custom/branding-elements.webp')}}" alt="branding | elements" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9">
                    <div class="about__wrapper about__wrapper-2 ml-60 mb-30">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">
                                ফেসবুক পোস্টে আপনার প্রোডাক্ট ট্যাগ করুন!
                            </h2>
                            <p>
                                আপনার ফেসবুক পোস্টে কি শতশত লাইক আর কমেন্টের বন্যা বয়ে যায়? তাহলে, সহজেই আপনার নির্বাচিত প্রোডাক্টকে আপনার ফেসিবুক পোস্টের সাথে ট্যাগ করে দিতে পারেন। এতে সহজেই কাস্টমাররা আকর্ষণীয় প্রোডাক্টের অর্ডার করতে পারবেন ফেসবুক পোস্ট থেকেই। আর এর সবই হবে ডু-কমার্সের প্যানেল থেকে!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

@endsection