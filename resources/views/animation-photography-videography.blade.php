@extends('layouts.web')

@section('title')
Animation, Photography, Videography | DoCommerce
@endsection

@section('description')
    <meta name="description" content="branding">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('animation-photography-videography') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            দুর্দান্ত প্রোডাক্টের জন্য<br>
                            দুর্দান্ত প্রেজেন্টেশন!
                        </h2>
                        <p>
                            চমৎকার প্রোডাক্টের সাদামাটা ঘরোয়া ছবি ও ভিডিও ক্রেতাদের মনোযোগ আকর্ষণ করতে ব্যর্থ হয়। ঝাঁ চকচকে বিজ্ঞাপন জগতে জায়গা করে নিতে প্রয়োজন প্রোডাক্টের পেশাদার ছবি, ভিডিও এবং অ্যানিমেশন তৈরী। আপনার ব্র্যান্ডের মর্জি বুঝে আকর্ষণীয়ভাবে প্রোডাক্টকে ক্রেতাদের কাছে উপস্থাপন করতে ডু-কমার্সের পেশাদার ভিজুয়াল আর্ট টিমের অভিজ্ঞতাকে কাজে লাগান।
                        </p>

                        <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">ভিজুয়াল আর্ট সেবা নিন</a>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2">
                        <div class="hero__thumb-inner p-relative mt-50">
                            <img class="hero-2-thumb shadow-none img-fluid mx-auto d-block" src="{{ asset('assets/img/custom/photography-animation.webp') }}" alt="thumb">
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
                            <h2 class="section__title">প্রোডাক্ট ফোটোগ্রাফি</h2>
                            <p>
                                গোডাউনে অবহেলায় পড়ে থাকা প্রোডাক্ট আর সম্ভাব্য ক্রেতাদের মধ্যখানে একমাত্র সেতুবন্ধন হচ্ছে অনলাইন স্টোরে প্রোডাক্টের আকর্ষণীয় উপস্থাপনা। চমৎকার একটি প্রোডাক্টের ভুল বা অস্পষ্ট উপস্থাপনার কারণে সেই প্রোডাক্টের চাহিদা কমে যেতে বাধ্য। অনলাইন কেনাকাটায় অভস্ত্য ক্রেতাগন এখন প্রোডাক্টের সমস্ত খুঁটিনাটি দেখে বিচার বিবেচনা করে প্রোডাক্টের অর্ডার দিয়ে থাকেন। যেহেতু প্রোডাক্টটি হাতে ধরে দেখা যাচ্ছে না, তাই একমাত্র ভালো মানের পেশাদার প্রোডাক্ট ফোটোগ্রাফিই পারে ক্রেতাদের বিভিন্ন প্রশ্নের উত্তর দিতে। প্রোডাক্টের সাথে মানানসই পর্যাপ্ত আলো এবং পেশাদার টেলিফোটো লেন্স ব্যবহার করে প্রোডাক্টের আকর্ষণীয় ছবি অনলাইনে স্টোরে উপস্থাপন করলে তাতে ক্রেতাদের চমৎকার সাড়া পাওয়া যায়। উঁচু মানের এবং ভালো রেজ্যুলেশনের  ছবিতে প্রোডাক্টের খুঁটিনাটি দেখে ক্রেতাগন নিজের প্রয়োজন মতো দ্রুত সিদ্ধান্ত নিতে পারেন। এই ফোটোগ্রাফি সার্ভিসের জন্য ডু-কমার্সের আছে পেশাদার ভিজুয়াল আর্ট টিম। আপনার স্টোরের জন্য পেশাদার এবং আকর্ষণীয় ছবি তুলতে অত্যন্ত কম খরচে আমাদের ফোটোগ্রাফি সেবা নিন।
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
                                অ্যানিমেশন
                            </h2>
                            <p>
                                প্রোডাক্টকে ক্রেতাদের কাছে আকষণীয়ভাবে উপস্থাপনের জন্য অ্যানিমেশনের বিকল্প নেই। কারণ, অ্যানিমেশনের মাধ্যমে তুলনামূলকভাবে কম খরচে প্রোডাক্টের বিশদ বর্ননা ক্রেতাদের কাছে তুলে ধরা সম্ভব। প্রোডাক্টকে ভিন্ন আঙ্গিকে দেখানো বা প্রোডাক্টের বিস্তারিত বর্ণনা দেয়া, অথবা প্রোডাক্টের সাউন্ড সম্পর্কে দ্রুত ধারণা দেয়ার জন্য অ্যানিমেশন অত্যন্ত কার্যকরী। অ্যানিমেশনের মাধ্যমে প্রোডাক্ট সম্পর্কে যেমন ধারা বর্ণনা দেয়া যায়, তেমনি মূল্যবান প্রোডাক্টের ক্ষেত্রে থ্রি-ডি অ্যানিমেশনের মাধ্যমে প্রোডাক্টের বিভিন্ন খুঁটিনাটি ক্রেতাদেরকে দেখানো যায়। বিভিন্ন অ্যাপে বা ওয়েবে প্রায় সবাই এখন খুব দ্রুত স্ক্রল করে বিভিন্ন আকর্ষণীয় কন্টেন্ট দেখতে চান। তাই অ্যানিমেশনের মাধ্যমে ক্রেতাদের মনোযোগ আকর্ষণ করে প্রোডাক্টের বিস্তারিত ক্রেতাদের কাছে তুলে ধরতে আমাদের আছে অভিজ্ঞ অ্যানিমেটর। টু-ডি বা থ্রি-ডি অ্যানিমেশনের জন্য আমাদের দক্ষ সেবা নিতে পারেন।
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
                                ভিডিওগ্রাফি
                            </h2>
                            <p>
                                দুর্দান্ত ফোটোগ্রাফি বা আকর্ষণীয় অ্যানিমেশনের চেয়েও বাস্তব জীবনে ধারণকৃত বিজ্ঞাপনমূলক প্রচারণা বেশি হৃদয়গ্রাহী। বাই-সাইকেলের ছবি থেকে সেই বাই-সাইকেল চালিয়ে কেউ ভ্রমণ করছে, সেই দৃশ্য অনেক বেশি মনোরম এবং মর্মস্পর্শী। এর ফলে ক্রেতারা নিজেদের অজান্তেই প্রোডাক্টের সাথে নিজেদের একটি সম্পর্ক তৈরী করে ফেলে এবং প্রোডাক্টের প্রতি আগ্রহী হয়। কিন্তু এই ধরণের বিজ্ঞাপনমূলক ভিডিও পেশাদার হাতে তৈরী না করলে প্রোডাক্টের গ্রহণযোগ্যতা কমে যেতে পারে। কারণ উপযুক্ত আলোর ব্যবহার এবং উচ্চ মূল্যের ভিডিও সরঞ্জামাদির সাথে সাথে অভিজ্ঞ পরিচালকের প্রয়োজন রয়েছে। শুধু দামি যন্ত্রপাতি ব্যবহার করলেই হবে না, ভিডিওকে গ্রহণযোগ্যভাবে উপস্থাপনের জন্য পরিচালকের দক্ষতা জরুরি। এক্সপার্ট সল্যুশনের অংশ হিসেবে ডু-কমার্সের ভিজুয়াল আর্ট টিমের সদস্যরা আপনার প্রোডাক্টের জন্য সবচেয়ে বেশি কার্যকরী ভিডিও কন্টেন্ট তৈরিতে সহায়তা করতে পারেন। আর্টিস্টিক ভিডিওগ্রাফির জন্য ডু-কমার্সের অভিজ্ঞ ভিজুয়াল আর্ট টিমের সেবা নিন।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->
@endsection