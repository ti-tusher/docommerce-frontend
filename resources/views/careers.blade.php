@extends('layouts.web')

@section('title')
Careers | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Careers Docommerce.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('careers') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            ডু-কমার্সে ক্যারিয়ার গড়ুন
                        </h2>
                        <p>
                            আপনার স্বপ্নের ক্যারিয়ার গড়তে এবং ডু-কমার্সের অগ্রযাত্রার সঙ্গী হতে আমাদের টিমে যোগ দিন।
                        </p>

                        <p>
                            বাংলাদেশে ই-কমার্স ব্যবসায়ীদের সর্বপ্রথম বিস্তৃত নেটওয়ার্ক তৈরির ইতিহাসের অংশ হতে আমাদের পরিবারে আপনাকে স্বাগত জানাই।
                        </p>

                        <p>
                            সময়ের সাথে পাল্লা দিয়ে আমাদের প্রতিটি বিভাগ এগিয়ে যাচ্ছে। অধ্যাবসায় এবং দায়িত্বশীলতার  মাধ্যমে আমাদের টিমের বন্ধন প্রতিনিয়ত। দৃঢ় হচ্ছে। আপনি যদি নিত্য নতুন প্রযুক্তির সাথে কাজ করে চ্যালেঞ্জিং ক্যারিয়ার গড়তে বদ্ধপরিকর হয়ে থাকেন, তবে, ডু-কমার্স পরিবারে যোগ দিন।
                        </p>
                        
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2">
                        <div class="hero__thumb-inner p-relative mt-50">
                            <img class="hero-2-thumb shadow-none img-fluid mx-auto d-block" src="{{ asset('assets/img/custom/careers.webp') }}" alt="Careers Docommerce">
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
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper about__wrapper-2 mb-30">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">
                                শূন্য পদসমূহ
                            </h2>

                            <div class="table-responsive">
                                <table class="table table-bordered table-dc">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center tg-m0cw">পদের নাম</th>
                                            <th scope="col" class="text-center tg-5t9h">বিভাগ</th>
                                            <th scope="col" class="text-center tg-wlkl">পদের ধরণ</th>
                                            <th scope="col" class="text-center tg-phft">জেলা</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center tg-m0cw">
                                                ১. Data Scientist
                                            </td>
                                            <td class="text-center tg-5t9h">
                                                Software Development
                                            </td>
                                            <td class="text-center tg-wlkl">
                                                Permanent
                                            </td>
                                            <td class="text-center tg-phft">
                                                Dhaka
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="about__wrapper about__wrapper-2">
                        <div class="section__title-wrapper">
                            <h2 class="section__title">
                                ইন্টার্নশিপ
                            </h2>
                            <p>
                                পাঠ্যপুস্তকে অর্জিত জ্ঞান ব্যবহারিক কাজে লাগানোর সবচেয়ে উপযুক্ত মাধ্যম হচ্ছে ইন্টার্নশিপ। আমাদের টিমে প্রায় প্রতিটি বিভাগে ইন্টার্নশিপদের জন্য বিশেষ ব্যবস্থায় দাপ্তরিক ও ব্যবহারিক কাজের বাস্তব অভিজ্ঞতা অর্জনের সাথে সাথে পাঠ্যগত বিদ্যা প্রয়োগের জন্য উৎসাহিত করা হয়। আমরা চাই নিত্যনতুন ধারণা নিয়ে আমাদের টিমে প্রতিনিয়ত তারুণ্যে ভরপুর শিক্ষার্থীদেরকে সহকর্মী হিসেবে পেতে।
                            </p>
                            <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">ইন্টার্নশিপের আবেদন</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

@endsection