@extends('layouts.web')

@section('title')
Dropshipping | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Dropshipping.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('dropshipping') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            ডু-কমার্স নেটওয়ার্কের<br>
                            বিশ্বস্ত পার্টনারদের প্রোডাক্ট<br>
                            দিয়ে স্টোর তৈরি করুন!
                        </h2>
                        <p>
                            নিজস্ব প্রোডাক্ট না থাকলেও আমাদের নেটওয়ার্কের বিশ্বস্ত ব্যবসায়ীদের প্রোডাক্ট দিয়ে অনলাইন স্টোর সাজিয়ে তুলুন, 
                            এমনকি প্রোডাক্টের দামও নির্ধারণ করুন। বিক্রি হওয়া প্রোডাক্ট থেকে আপনার লাভ বুঝে নিন। 
                            প্রোডাক্ট সোর্সিং কিংবা ডেলিভারির কোনো ঝামেলাই নেই!
                        </p>
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

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper mb-10">
                        <div class="section__title-wrapper mb-70">
                            <h2 class="section__title">
                                সাপ্লায়ারদের জন্য
                            </h2>
                            <p>
                                প্রোডাক্টের প্রমোশন কিংবা মার্কেটিংয়ের ঝামেলা এড়াতে দেশব্যাপী ছড়িয়ে থাকা ডু-কমার্সের বিশ্বস্ত ড্রপশিপারদের অগণিত অনলাইন স্টোরের মাধ্যমে প্রোডাক্টের অর্ডার সংগ্রহ করুন। আপনার নিজস্ব প্রোডাক্ট যুক্ত করে ড্রপশিপারদের মাধ্যমে প্রোডাক্ট বিক্রির সুযোগ নিন।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper about__wrapper-2 mb-70">
                        <div class="section__title-wrapper mb-25">
                            <h2 id="dropshipping" class="section__title jumptarget">ড্রপশিপারদের জন্য</h2>
                            <p>
                                টাকা দিয়ে প্রোডাক্ট কিনে স্টক করে ওয়্যারহাউজের পেছনে অযথা খরচ করবেন কেন? ডু-কমার্সের বিশ্বস্ত পার্টনারদের বিভিন্ন প্রোডাক্ট দিয়ে আপনার অনলাইন স্টোর তৈরী করুন। প্রয়োজন মতো প্রোডাক্ট যোগ করুন, অথবা বাদ দিন, নিজেই মূল্য নির্ধারণ করুন। প্রোডাক্টে বিনিয়োগের কোনো রকম ঝুঁকি ছাড়াই সহজে ড্রপশিপিং-এর মাধ্যমে আপনার ব্র্যান্ড ভ্যালু তৈরী করুন।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper mb-10">
                        <div class="section__title-wrapper mb-70">
                            <h2 id="independent-dropshipper" class="section__title jumptarget">
                                ইন্ডিপেন্ডেন্ট ড্রপশিপার
                            </h2>
                            <p>
                                অন্যদের প্রোডাক্ট আপনার নিজস্ব স্টোরে বিক্রি করে লাভ বুঝে নিন। একমাত্র ডু-কমার্সেই ড্রপশিপারদের জন্য অতিরিক্ত কোনো চার্জ বা নির্দিষ্ট কোনো কমিশন নেই। প্রোডাক্ট বিক্রি করতে সহায়তা করে আয় করুন, অযথা বিনিয়োগ কেন করবেন?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper about__wrapper-2 mb-70">
                        <div class="section__title-wrapper mb-25">
                            <h2 id="dropshipper-training" class="section__title jumptarget">ড্রপশিপার ট্রেনিং</h2>
                            <p>
                                ড্রপশিপারদের জন্য ডু-কমার্সের ফ্রি ট্রেনিং নিন। ড্রপশিপিং ব্যবসায়ের খুঁটিনাটি সমস্ত বিষয় জানতে আমাদের ফ্রি ট্রেনিং-এ বিনামূল্যে অংশ নিন।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper mb-10">
                        <div class="section__title-wrapper mb-10">
                            <h2 id="dropshipper-support" class="section__title jumptarget">
                                ড্রপশিপার সাপোর্ট
                            </h2>
                            <p>
                                আপনাদের সবধরণের সহায়তার জন্য তৈরী আছে ডু-কমার্সের ‘সাপোর্ট টিম’। রেজিস্ট্রেশন, পেমেন্ট, কিংবা স্টোর আপডেট, যে কোনো ধরণের ব্যবসায়িক সহায়তার জন্য আমাদের সাথে যোগাযোগ করুন।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about area end -->

@endsection