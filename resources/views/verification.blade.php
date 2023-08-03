@extends('layouts.web')

@section('title')
Verification | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Verification.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('verification') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            ভেরিফায়েড অ্যাকাউন্ট মানেই
                            বিশ্বস্ততা এবং অগ্রাধিকার
                        </h2>
                        <p>
                            ভেরিফায়েড অ্যাকাউন্টে তুলনামূলকভাবে বেশি অর্ডার পাওয়া যায়। 
                            ড্রপশিপাররা ভেরিফায়েড অ্যাকাউন্টের প্রোডাক্ট নিশ্চিন্তে প্রমোট ও বিক্রি করে থাকেন। 
                            কারণ, ভেরিফায়েড অ্যাকাউন্ট মানেই বিশ্বস্ততা এবং নিশ্চয়তা।
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
                    <div class="about__wrapper about__wrapper-2 mb-70">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">অ্যাকাউন্ট ভেরিফিকেশন কি সম্পূর্ণ ফ্রি?</h2>
                            <p>
                                ডু-কমার্সের সাথে অ্যাকাউন্ট ভেরিফিকেশনের জন্য আপনাকে কোনো প্রকার চার্জ দিতে হবে না। 
                                প্রয়োজনীয় ডকুমেন্ট জমা দিলে ডু-কমার্স টিম সেগুলো যাচাই বাছাই শেষে ভেরিফিকেশন সম্পন্ন করে থাকে। ভেরিফিকেশন সম্পূর্ণ ফ্রি!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper mb-10">
                        <div class="section__title-wrapper mb-70">
                            <h2 class="section__title">
                                ভেরিফায়েড অ্যাকাউন্টের সুবিধা কি?
                            </h2>
                            <p>
                                বিশ্বস্ততা এবং নির্ভরতা। ডু-কমার্সের বিস্তৃত ব্যবসায়িক নেটওয়ার্কে সবাই সবাইকে চিনবে, সেটি দুরাশা। তাই, নেটওয়ার্কের বাকি সবার কাছে বিশ্বস্ততার সহজ এবং নির্ভরযোগ্য পদ্ধতি হচ্ছে অ্যাকাউন্ট ভেরিফিকেশন সম্পন্ন করা। এর ফলে ড্রপশিপাররা নির্ভাবনায় আপনার প্রোডাক্ট তাঁদের স্টোরে যুক্ত করার মাধ্যমে মার্কেটিংয়ের পরিধি বাড়াতে পারে।  এছাড়াও ডু-কমার্সের স্বয়ংক্রিয় অ্যালগরিদম ভেরিফায়েড অ্যাকাউন্টকে অগ্রাধিকার দিয়ে থাকে।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper about__wrapper-2">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">ভেরিফিকেশনের জন্য কি প্রয়োজন?</h2>
                            <p>
                                একাউন্ট ভেরিফিকেশনের জন্য শুধুমাত্র তিনটি ধাপ সম্পন্ন করতে হবে:
                            </p>
                            <ul class="list-unstyled">
                                <li>
                                    ১. নিজস্ব প্রোডাক্ট যোগ করতে হবে
                                </li>
                                <li>
                                    ২. ড্রপশিপারদের জন্য পর্যাপ্ত মার্জিন ঘোষণা করতে হবে, এবং,
                                </li>
                                <li>
                                    ৩. ব্যবসা সংক্রান্ত নির্ধারিত কাগজপত্র জমা দিতে হবে।
                                </li>
                            </ul>
                            <p>
                                উপরিউক্ত তিনটি ধাপ সম্পন্ন করলেই ডু-কমার্স টিম প্রয়োজনীয় যাচাই-বাছাই শেষে অ্যাকাউন্টটি ভেরিফায়েড হিসেবে তালিকাভুক্ত করবে। আপনার অ্যাকাউন্টের নামের সাথে যুক্ত হবে বিশেষ ভেরিফায়েড চিহ্ন। আপনার অ্যাকাউন্টটি যুক্ত হবে মর্যাদাপূর্ণ ভেরিফায়েড ক্লাবে।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about area end -->

@endsection