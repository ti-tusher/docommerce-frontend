@extends('layouts.web')

@section('title')
Branding Service | DoCommerce
@endsection

@section('description')
    <meta name="description" content="branding">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('branding') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">আপনার ব্র্যান্ডকে<br>দিন নতুন মাত্রা</h2>
                        <p>
                            আপনার ব্র্যান্ড ইমেজ—কে আরও শক্তিশালী এবং সুসংগত করে
                            লাখো ক্রেতাদের কাছে পৌঁছে দিতে তৈরী আছে ডু—কমার্সের
                            সৃজনশীল ডিজাইনার এবং অভিজ্ঞ মার্কেটিং বিশেষজ্ঞরা।
                            দেখে নিন সুপরিকল্পিত ব্র্যান্ডিং কিভাবে আপনার ব্যবসাকে
                            প্রতিষ্ঠিত করতে পারে:
                        </p>
                        <ul class="ms-4 mb-50">
                            <li>
                                প্রতিদ্বন্দ্বী ব্যবসায়ীদের থেকে আপনার ব্যবসাকে এগিয়ে রাখবে
                            </li>
                            <li>
                                ক্রেতারা সহজেই আপনার ব্যবসার নাম মনে রাখতে পারবেন
                            </li>
                            <li>
                                নিত্যনতুন প্রোডাক্ট প্রচারের ফলে আপনার ব্যবসায়িক সুনাম বৃদ্ধি পাবে
                            </li>
                        </ul>

                        <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">ব্র্যান্ডিং সেবা নিন</a>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2">
                        <div class="hero__thumb-inner p-relative mt-50">
                            <img class="hero-2-thumb shadow-none img-fluid mx-auto d-block" src="{{ asset('assets/img/custom/branding-service.webp') }}" alt="thumb">
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
                            <h2 class="section__title">লোগো এবং ব্র্যান্ড রং</h2>
                            <p>
                                আপনার প্রোডাক্টের ইউনিক গুণাবলীগুলো ক্রেতাদের কাছে আকর্ষণীয়ভাবে তুলে ধরতে
                                আপনার ব্র্যান্ডের রং এবং লোগো অতন্ত্য গুরুত্বপূর্ণ। আপনার ব্র্যান্ডের স্বতন্ত্র রংয়ের
                                মাধ্যমে ক্রেতারা সহজেই আপনার ব্র্যান্ডকে চিনতে পারবে। অনলাইন স্টোর, ব্যবসায়িক
                                প্রচারপত্র, শুভেচ্ছা উপহার, ইত্যাদিতে আকর্ষণীয় নির্দিষ্ট রংয়ের ব্যবহারের মাধ্যমে
                                প্রতিদ্বন্দ্বীদের থেকে সম্পূর্ণ আলাদাভাবে আপনার ব্র্যান্ডকে পরিচিত করে তুলবে।
                            </p>
                            <p>
                                লোগোকে অবশ্যই দৃষ্টিনন্দন, সঠিক মাপের এবং যুগোপযোগী হতে হয়। তাহলে ক্রেতারা
                                সহজেই দৃষ্টিনন্দন লোগো মনে রাখার সাথে সাথে আপনার ব্র্যান্ডের সাথে অজান্তেই
                                একটি সম্পর্ক তৈরি করে ফেলেন। এতে আপনার ব্যবসায়িক প্রোডাক্ট ক্রেতাদের কাছে তুলে
                                ধরা মাত্রই ক্রেতারা ব্র্যান্ড সম্পর্কে একটি ভালো ধারণা পেয়ে যান।
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
                                ব্র্যান্ডের মুড বুঝে<br>
                                অনলাইন স্টোর অলংকরণ
                            </h2>
                            <p>
                                প্রোডাক্টের ধরণ অনুযায়ী মানানসই লোগো এবং রংয়ের ব্যবহারের মাধ্যমে প্রতিদ্বন্দ্বীদের থেকে আপনার অনলাইন স্টোরকে আলাদা করে ক্রেতাদের কাছে তুলে ধরে বিক্রি বাড়ানো সম্ভব। ডু—কমার্সের অভিজ্ঞ ডিজাইন টিম আপনার অনলাইন স্টোরের নান্দনিকতা বৃদ্ধিতে অবদান রাখতে পারে। আপনার পছন্দ অনুযায়ী আমাদের পেশাদার ডিজাইন টিমের সহায়তায় আপনার অনলাইন স্টোরকে মনের মতো করে সাজিয়ে তুলতে পারেন।
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
                                ব্যবসায়ের প্রতিটি উপকরণে<br>
                                তুলে ধরুন নান্দনিকতা
                            </h2>
                            <p>
                                ব্র্যান্ডকে দৃঢ় এবং দৃষ্টিনন্দন উপস্থাপনের জন্য ধারাবাহিকতার সাথে প্রতিটি ক্ষেত্রে আপনার ব্র্যান্ডের নির্দিষ্ট ডিজাইনের উপস্থিতি অত্যন্ত কার্যকরী। অনলাইন স্টোর কিংবা প্রোডাক্ট প্যাকেজিং, সব ক্ষেত্রেই যদি আপনার ব্র্যান্ডের নির্দিষ্ট রং, লোগো এবং ডিজাইনের উপস্থিতি থাকে, তাহলে ক্রেতাগন সহজেই আপনার ব্র্যান্ডের নাম এবং পরিচয় নিজেদের অজান্তেই মনে রাখবেন। পরবর্তীতে একই ধরণের প্রোডাক্ট কিনতে গেলে প্রথমেই আপনার ব্র্যান্ডের নাম ক্রেতাদের মনে আসবে। এর জন্য প্রয়োজন ধারাবাহিকভাবে ব্যবসার প্রতিটি উপকরণে আপনার ব্র্যান্ডের পরিচিতিমূলক উপস্থিতি। নান্দনিক ডিজাইনের জন্য ডু-কমার্সের সুদক্ষ ডিজাইন টিমের সহায়তা নিতে পারেন। বিস্তারিত জানতে আমাদের সাথে যোগাযোগ করুন।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->
@endsection