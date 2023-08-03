@extends('layouts.web')

@section('title')
Digital Marketing | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Digital marketing.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('digital-marketing') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            ক্রেতাদের পছন্দের<br>
                            প্ল্যাটফর্মে প্রোডাক্টের<br>
                            স্মার্ট প্রচার
                        </h2>
                        <p>
                            কথার ফুলঝুরিতে ক্রেতাদের কাছাকাছি পৌঁছোনো গেলেও, ক্রেতাদের মনে জায়গা করে নিতে প্রয়োজন শক্তিশালী ও বিশ্বস্ত অনলাইন মাধ্যম। আপনার ক্রেতাদের চাহিদা বুঝে নির্বাচিত প্ল্যাটফর্মে স্মার্ট উপায়ে বিজ্ঞাপন দিয়ে অত্যন্ত কম খরচে বেশি বেশি প্রোডাক্টের প্রচার করুন। অনলাইন বিজ্ঞাপনের জন্য ডু-কমার্সের অভিজ্ঞ টিমের সহায়তায় কম খরচে বেছে নিন আপনার প্রোডাক্টের জন্য উপযুক্ত ও সবচেয়ে কার্যকরী ডিজিটাল মার্কেটিং সল্যুশন। এখানে সেখানে অযথা টাকা খরচ না করে ডিজিটাল মার্কেটিং-এর জন্য অভিজ্ঞ সেবা নিন।
                        </p>

                        <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">ডিজিটাল মার্কেটিং সেবা নিন</a>
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
                            <h2 class="section__title">কন্টেন্ট মার্কেটিং</h2>
                            <p>
                                খবরের কাগজ বা টেলিভিশনের বিজ্ঞাপনের সুদিন এখন আর নেই। প্রোডাক্টের গুণগান ধৈর্য ধরে শোনার মতো দর্শক বা শ্রোতা পাওয়া এখন দুষ্কর। তাই, প্রোডাক্টের উপকারিতা অথবা বিশেষত্ব নিয়ে তৈরী আকর্ষণীয় লেখা, ছবি বা ভিডিওর চাহিদা এখন তুঙ্গে। দর্শক শ্রোতাদের জন্য মনোমুগ্ধকর গল্পের আবহে প্রোডাক্টের বিশেষত্ব তুলে ধরাই এখন সবচেয়ে বেশি কার্যকর ডিজিটাল মার্কেটিং পদ্ধতি। যাতে দর্শক শ্রোতাগণ তাদের পছন্দের বিষয়বস্তু সম্পর্কে কোনো আকর্ষণীয় ভিডিও দেখা বা লেখা পড়ার সাথে সাথে কোনো একটি প্রোডাক্ট সম্পর্কে ধারণা পেয়ে যান। দর্শক শ্রোতাদের অজান্তেই তাঁরা প্রোডাক্টের গুণাবলী সম্পর্কে ভালো একটা ধারণা পেয়ে যান।
                            </p>
                            <p>
                                দর্শক শ্রোতাদের বিরক্তির উদ্রেক না ঘটিয়ে এই  পদ্ধতিতে প্রোডাক্ট মার্কেটিং-এর জন্য আমাদের অভিজ্ঞ ডিজিটাল মার্কেটিং টিমের সাহায্য নিয়ে দ্রুত পৌঁছে যেতে পারেন আপনার ক্রেতাদের কাছে। এর ফলে আপনার প্রোডাক্টের বিজ্ঞাপন না থাকলেও, দর্শক শ্রোতাগণ আপনার ব্র্যান্ডের ও প্রোডাক্টের নাম লিখে অনলাইনে সার্চ করে আপনার প্রোডাক্ট সম্পর্কে আরও জানতে চাইবেন।
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
                                এসইএম, এসএমএম এবং এসইও
                            </h2>
                            <p>
                                কোনো ক্রেতা যখন কোনো প্রোডাক্টের নাম লিখে সার্চ করেন, তখন সার্চ রেজাল্টের শুরুতেই বিভিন্ন প্রোডাক্টের সংক্ষিপ্ত বিজ্ঞাপন দেখা যায়। যেটি Search Engine Marketing (SEM) নামে পরিচিত। এর মাধ্যমে একজন সম্ভাব্য ক্রেতা সরাসরি আপনার প্রোডাক্টের বিজ্ঞাপনে ক্লিক করে আপনার অনলাইন স্টোরে চলে আসতে পারেন। শুনতে খুব সহজ মনে হলেও, মনে রাখতে হবে, লিপস্টিক লিখে সার্চ করলে আপনার ব্র্যান্ডের লিপস্টিককে অন্যান্য আরও শত শত ব্র্যান্ডের সাথে প্রতিযোগিতা করে প্রথম দিকে জায়গা করে নিতে হবে। সেই কারিগরি দক্ষতার সেবা নেয়ার জন্য আস্থা রাখুন আমাদের ওপর।
                            </p>

                            <p>
                                Social Media Marketing (SMM)-এর মাধ্যমে আপনি আপনার প্রোডাক্টের ধরণ অনুযায়ী সবচেয়ে উপযুক্ত মাধ্যমে ক্রেতাদের কাছে পৌঁছে যেতে পারেন। আলাদা আলাদা ভাবে ফেইসবুক, ইনস্টাগ্রাম বা টিকটকে বিজ্ঞাপন না দিয়ে সম্ভাব্য ক্রেতাদের সময় এবং চাহিদা বুঝে সঠিক সময়ে তাদের সামনে আপনার প্রোডাক্টকে তুলে ধরতে পারলেই ক্রেতাদের কাছে সহজে পৌঁছে যাওয়া সম্ভব। কিন্তু এখানে সবচেয়ে চ্যালেঞ্জিং বিষয়টি হলো কোন ধরণের প্রোডাক্টের জন্য কখন কোথায় কোন ধরণের বিজ্ঞাপন দিবেন। আর সে জটিল পরিকল্পনার জন্যই আছে ডু-কমার্সের স্পেশালাইজড ডিজিটাল মার্কেটিং টিম।
                            </p>

                            <p>
                                Search Engine Optimization বা SEO অনলাইন মার্কেটিং-এর জগতে বেশ জনপ্রিয় একটি বিষয়। কিন্তু আসলেই কি এসইও’র সমস্ত খুঁটিনাটি আপনাদের জন্য সহজলভ্য? আপনি কি জানেন, একটি ভুল এসইও সেবা আপনার ব্যবসার জন্য কতটা ক্ষতির কারণ হতে পারে? অথবা, হয়তো শুনে থাকবেন, একই Key Word ব্যবহার করা এসইও’র জন্য ক্ষতিকর, আসলেই কি তাই? এসইও’র আরও খুঁটিনাটি সেবা সম্পর্কে জানতে আমাদের সাথে যোগাযোগ করুন।
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
                                সিপিএ এবং অ্যাফিলিয়েট মার্কেটিং
                            </h2>
                            <p>
                                Cost per Acquisition (CPA) এবং Affiliate  মার্কেটিং এর মাধ্যমে আপনার প্রোডাক্ট অন্য পার্টনারগণ তাদের ওয়েবসাইটে প্রমোট করতে পারেন। তাদের ওয়েবসাইটের ভিজিটররা আপনার অনলাইন স্টোর থেকে কেনাকাটা করলে, বা ক্লিক করলে পার্টনাররা পেমেন্ট পাবেন। সাধারণত, এই ধরণের প্রমোশনে সঠিক পার্টনারের সন্ধান না পেলে বা, তাদেরকে আপনার প্রোডাক্ট প্রোমোশনের জন্য পাওয়া না গেলে বিভিন্ন প্রোমোটারের ওয়েবসাইটে অযথা টাকা খরচ হয়ে যায়। এ ধরণের অযথা খরচ আপনার ব্যবসার মূলধনকে কমিয়ে নিয়ে আসতে পারে। তাই, ডু-কমার্সের ডিজিটাল মার্কেটিং টিমের সেবা ও পরামর্শ নিতে আমাদের সাথে যোগাযোগ করুন।
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
                                ইমেইল মার্কেটিং
                            </h2>
                            <p>
                                ভাবছেন এখনও এই যুগে ইমেইল মার্কেটিং কাজ করে? অবশ্যই করে! বিশ্বখ্যাত ফোর্বস ম্যাগাজিনের মতে, ইমেইল মার্কেটিং এখন আগে থেকেও আরও বেশি কার্যকর। প্রথম দিকে শুধুমাত্র যোগাযোগের জন্য ইমেইল ব্যবহার করা হলেও এখন ইমেইলের ওপর সেই নির্ভরতা আর নেই। তবে, এখনকার সময়ে আপনার ইমেইল ঠিকানার ওপর নির্ভর করে অন্যান্য সমস্ত যোগাযোগ মাধ্যমে আপনি সক্রিয় হতে পারছেন। তাই, কারো স্মার্ট ফোন থাকা মানেই তার একটি ইমেইল ঠিকানা আছে। ইমেইলে প্রোমোশনের জন্য সবচেয়ে বড় বাধা হলো স্প্যাম ফিল্টারকে পাশ কাটিয়ে প্রাপকের ইনবক্সে আপনার প্রোডাক্টের ইমেইলটি পৌঁছে দেয়া। ডু-কমার্স বিশ্বখ্যাত বিভিন্ন ইমেইল সেবাদাতা প্রতিষ্ঠানের সহযোগী হিসেবে আপনার প্রোডাক্টের ইমেইলকে সঠিকভাবে প্রাপকের ইনবক্সে পৌঁছে দিতে সক্ষম। বিস্তারিত জানতে আমাদের সাথে যোগাযোগ করুন।
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