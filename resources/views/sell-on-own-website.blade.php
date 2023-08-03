@extends('layouts.web')

@section('title')
Sell on own website | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Sell on own website.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('sell-on-own-website') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            নিজের স্টোরে বিক্রি মানে,<br>
                            সবকিছুর ওপর ‘ফুল কন্ট্রোল’!
                        </h2>
                        <p>
                            ব্যবসায়ী ও উদ্যোক্তাদের জন্য ডু-কমার্স অফার করছে সবচেয়ে সহজে ব্র্যান্ডের নিজস্ব নামে ইকমার্স ওয়েবসাইট। কোনোরকম পূর্ব অভিজ্ঞতা ছাড়াই, খুব সহজে নিজস্ব ওয়েবসাইটের মাধ্যমে আপনার প্রোডাক্ট অনলাইনে তুলে ধরুন। আর প্রোডাক্ট প্রোমোশনের বিভিন্ন সল্যুশনও আমাদের কাছেই পাচ্ছেন।
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
                            <h2 class="section__title">ওয়েবসাইটের ফুল কন্ট্রোল</h2>
                            <p>
                                আপনার ব্র্যান্ডের নিজস্ব ওয়েবসাইটের মাধ্যমে সমস্ত প্রোডাক্ট সহজেই অনলাইনে বিক্রির জন্য রেডি করুন। খুবই অল্প সময়ের মধ্যে ডু-কমার্সের সাপোর্ট টিমের সহায়তায় আপনার অনলাইন স্টোর সাজিয়ে তুলুন। আপনার ওয়েবসাইটের সমস্ত কিছুর নিয়ন্ত্রণ আপনার কাছে থাকার ফলে আপনাকে অন্য কারো নিয়মনীতির উপর নির্ভর করতে হবে না। অনলাইনে প্রোডাক্ট বিক্রি করুন আপনার নিজস্ব স্টাইলে!
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
                                এক ক্লিকে সোশ্যাল মিডিয়ায় প্রোডাক্টের প্রমোশন করুন!
                            </h2>
                            <p>
                                ব্যস্ত জীবনের বিনোদন বিভিন্ন সোশ্যাল মিডিয়ার নিউজ ফিডে আপনার প্রোডাক্টের প্রোমোশনের মাধ্যমে বিক্রি বাড়াতে পারেন। প্রোডাক্টের স্টাইলিশ প্রোমোশনের জন্য ডু-কমার্সের ভিজ্যুয়াল আর্ট টিমের সহায়তা নিন।
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
                                নিজস্ব শো-রুম, ওয়েবসাইট বা সোশ্যাল মিডিয়ায় বিক্রি করুন
                            </h2>
                            <p>
                                শো-রুম, ওয়্যারহাউজ বা হোলসেলার, প্রোডাক্ট যেখানেই যার কাছেই থাকুক, অনলাইনের প্রায় প্রতিটি মাধ্যমে আপনার প্রোডাক্টকে প্রমোট করে বিক্রি বাড়ান। প্রোডাক্টের হিসাব নিয়ে মাথা ব্যথার দিন ফুরিয়েছে। ডু-কমার্সের পি.ও.এস. (পয়েন্ট অভ সেল)-এর মাধ্যমে বিক্রি হওয়া প্রোডাক্টের হিসাব স্বয়ংক্রিয়ভাবে আপনার অনলাইন স্টোর থেকে শুরু করে অন্যান্য সংযুক্ত মাধ্যমে আপডেট হয়ে যাবে।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

@endsection