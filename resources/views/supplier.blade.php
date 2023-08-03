@extends('layouts.web')

@section('title')
Supplier | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Supplier.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('supplier') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            হোলসেল প্রোডাক্টের<br>প্রমোশন নিয়ে টেনশন?
                        </h2>
                        <p>
                            বিপুল পরিমান হোলসেল প্রোডাক্ট অনলাইনে বিক্রি করতে ডু-কমার্সের ড্রপশিপারদের বিশাল নেটওয়ার্কের সুবিধা নিন। বিজনেস অথবা এন্টারপ্রাইজ প্যাকেজের সাথেই পাচ্ছেন সম্পূর্ণ ফ্রি ড্রপশিপিং মডিউল।
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
                            <h2 id="supplier-benefits" class="section__title jumptarget">সাপ্লায়ার হলে সুবিধা কি?</h2>
                            <p>
                                ডু-কমার্সের সাপ্লায়ারদের বিশাল নেটওয়ার্কের রকমারি প্রোডাক্টের সাথে আপনার হোলসেল প্রোডাক্ট প্রমোট করুন, 
                                কোনোরকম অতিরিক্ত খরচ ছাড়াই। এছাড়া আপনার নিজস্ব ব্র্যান্ডের ওয়েবসাইটে প্রমোশন তো থাকছেই।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper mb-10">
                        <div class="section__title-wrapper mb-70">
                            <h2 id="how-to-be-a-supplier" class="section__title jumptarget">
                                কিভাবে সাপ্লায়ার হবেন?
                            </h2>
                            <p>
                                সাপ্লায়ার হিসেবে নিবন্ধিত হতে বিজনেস অথবা এন্টারপ্রাইজ প্যাকেজে সাবস্ক্রাইব করুন। 
                                আপনার ব্যবসার নিজস্ব প্রোডাক্ট যুক্ত করার মাধ্যমে ডু-কমার্সের বিশ্বস্ত ড্রপশিপারদের 
                                অগণিত ওয়েবসাইটে প্রোডাক্টের প্রচার এবং বিক্রি করুন।
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper about__wrapper-2">
                        <div class="section__title-wrapper mb-25">
                            <h2 id="verified-supplier" class="section__title jumptarget">ভেরিফায়েড সাপ্লায়ার কেন হবেন?</h2>
                            <p>
                                ব্যবসায়িক নেটওয়ার্কে বিশ্বস্ততা শুরু হয় ভেরিফায়েড সাপ্লায়ারদের নিজ নিজ প্রতিশ্রুতি রক্ষার মাধ্যমে। 
                                ড্রপশিপাররা ভেরিফায়েড সাপ্লায়ারের প্রোডাক্ট স্বাচ্ছন্দ্যে নিজের ওয়েবসাইটে যোগ করে থাকেন।
                            </p>
                            <a href="{{ route('verification') }}" class="w-btn w-btn-blue w-btn-7 w-btn-6">বিস্তারিত</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about area end -->

@endsection