@extends('layouts.web')

@section('title')
Mobile App | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Mobile App.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('mobile-app') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            মোবাইল অ্যাপে সবাই ব্যস্ত,<br>
                            আপনি বাদ যাবেন কেন?
                        </h2>
                        <p>
                            কাস্টমারদের জীবন সহজ করতে প্রোডাক্ট অর্ডারের জন্য আছে বিশেষায়িত মোবাইল অ্যাপ।<br>
                            আর, আপনার জীবন সহজ করতে থাকছে মার্চেন্ট অ্যাপ।
                        </p>

                        <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">গুগল প্লে স্টোর</a>
                        <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">অ্যাপ স্টোর</a>
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
                            <h2 class="section__title">সব ধরণের স্মার্ট ফোনের জন্য</h2>
                            <p>
                                অ্যান্ড্রয়েড অথবা আইওএস, যে কোনো ধরণের স্মার্ট ফোনের জন্য ডু-কমার্সের অ্যাপ ব্যবহার করে অর্ডার নিন এবং অর্ডার ম্যানেজ করুন।
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
                                কম্পিউটার নেই? স্টোর চালান মোবাইল থেকেই!
                            </h2>
                            <p>
                                রাস্তায় আছেন? স্টোর নিয়ে দারুন আইডিয়া মাথায় এসেছে? মোবাইল থেকেই আপডেট করুন আপনার স্টোর। ডু-কমার্সের ড্যাশবোর্ড থেকেই নিয়ন্ত্রণ করুন ই-কমার্স ওয়েবসাইট এবং সোশ্যাল মিডিয়া স্টোর।
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