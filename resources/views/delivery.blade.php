@extends('layouts.web')

@section('title')
Delivery Service | DoCommerce
@endsection

@section('description')
    <meta name="description" content="delivery">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('delivery') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            স্মার্ট বিজনেসের জন্য<br>
                            স্মার্ট ডেলিভারি সল্যুশন!
                        </h2>
                        <p>
                            বাংলাদেশের প্রতিটি জেলায় কম খরচে এবং দ্রুততম সময়ে হোম ডেলিভারিতে প্রোডাক্ট পৌঁছে দিতে আছে ডু-কমার্সের ডেলিভারি সার্ভিস। ক্যাশ অন কিংবা পেইড, দুই ধরণের সেবাই পাচ্ছেন।
                        </p>

                        <a href="#" class="w-btn w-btn-blue w-btn-7 w-btn-6">ডেলিভারি সেবা নিন</a>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2">
                        <div class="hero__thumb-inner p-relative mt-50">
                            <img class="hero-2-thumb shadow-none img-fluid mx-auto d-block" src="{{ asset('assets/img/custom/delivery-service.webp') }}" alt="thumb">
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
                            <h2 class="section__title">আপনার জন্য ডেডিকেটেড সেবা</h2>
                            <p>
                                ডেলিভারি সার্ভিসের সমস্ত যোগাযোগে আছে আপনার জন্য ডেডিকেটেড রিপ্রেজেনটেটিভ। আপনার মূল্যবান সময় বাঁচাতে আপনার জন্য নিৰ্দিষ্ট একটি নাম্বারেই যোগাযোগ করুন।
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
                                বিনামূল্যে প্রোডাক্ট রিটার্ন!
                            </h2>
                            <p>
                                ডু-কমার্সে রিটার্ন প্রোডাক্টের জন্য কোনো আলাদা চার্জ নেই! মূল্যবান প্রোডাক্ট ওয়্যারহাউজে ফিরিয়ে আনুন সম্পূর্ণ বিনামূল্যে।
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
                                বিনামূল্যে লাইভ ট্র্যাকিং সেবা
                            </h2>
                            <p>
                                আপনার কাস্টোমারদেরকে প্রোডাক্টের অবস্থান জানাতে লাইভ ট্র্যাকিং সেবা নিন। এক্সপ্রেস কিংবা রেগুলার, সব ধরণের ডেলিভারির জন্যই আছে লাইভ ট্র্যাকিং।
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
                                ডেলিভারি আপডেট জানিয়ে দিন, মোবাইলে কিংবা ইমেইলে
                            </h2>
                            <p>
                                প্রোডাক্ট ডেলিভারি নিশ্চিত করতে কাস্টমারদের ইমেইলে এবং মোবাইলে ডেলিভারি কনফার্মেশন মেসেজ স্বয়ংক্রিভাবে চলে যাবে।
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
                                কল সেন্টার ও ইন্সুরেন্স কভারেজ
                            </h2>
                            <p>
                                সম্পূর্ণ টেনশন ফ্রি থাকুন, ২৪ ঘন্টা ডেলিভারি কল সেন্টারের সেবা নিন। প্রোডাক্টের শতভাগ ইন্সুরেন্স নিশ্চিত করে প্রতিটি ডেলিভারি গ্রহণ করা হয়।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0; border: 2px solid #81368f;}
    .tg td{overflow:hidden;padding:10px 15px;word-break:normal;border: 2px solid #81368f;}
    .tg th{font-weight:normal;overflow:hidden;padding:10px 15px;word-break:normal;border: 2px solid #81368f;}
    .tg .tg-5t9h{background-color:#ece8ff;font-weight:bold;text-align:center;vertical-align:top}
    .tg .tg-wlkl{background-color:#f4f9fd;font-weight:bold;text-align:center;vertical-align:top}
    .tg .tg-1wig{font-weight:bold;text-align:left;vertical-align:top}
    .tg .tg-h3q9{background-color:#f4f9fd;text-align:right;vertical-align:top}
    .tg .tg-3375{background-color:#ece8ff;text-align:right;vertical-align:top}
    .tg .tg-m0cw{background-color:#fef8fb;font-weight:bold;text-align:center;vertical-align:top}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-phft{background-color:#e2edfb;font-weight:bold;text-align:center;vertical-align:top}
    .tg .tg-u3iy{background-color:#fef8fb;text-align:right;vertical-align:top}
    .tg .tg-ox9d{background-color:#e2edfb;text-align:right;vertical-align:top}
</style>

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
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about__wrapper mb-10">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">
                                হোম ডেলিভারি চার্জ<sup>+</sup>
                            </h2>
                            <table class="tg table shadow">
                                <thead>
                                    <tr>
                                        <th class="tg-0pky" rowspan="2">
                                            <br><span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent">প্যাকেজ</span>
                                        </th>
                                        <th class="tg-m0cw" colspan="2">
                                            <span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent">ঢাকা জেলা</span>
                                        </th>
                                        <th class="tg-wlkl" colspan="2">
                                            <span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent">অন্যান্য জেলা</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="tg-m0cw" style="text-align:right;">
                                            <span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent;">সময় </span>
                                        </th>
                                        <th class="tg-5t9h" style="text-align:right;">
                                            <span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent;">সেবা মূল্য*</span>
                                        </th>
                                        <th class="tg-wlkl" style="text-align:right;">
                                            <span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent;">সময় </span>
                                        </th>
                                        <th class="tg-phft" style="text-align:right;">
                                            <span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent;">সেবা মূল্য*</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tg-1wig"><span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent">এক্সপ্রেস</span></td>
                                        <td class="tg-u3iy"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">৬ ঘন্টা</span></td>
                                        <td class="tg-3375"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">১০০ টাকা</span></td>
                                        <td class="tg-h3q9"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">২৪ ঘন্টা</span></td>
                                        <td class="tg-ox9d"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">১৮০ টাকা</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig"><span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent">প্রিমিয়াম</span></td>
                                        <td class="tg-u3iy"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">২৪ ঘন্টা</span></td>
                                        <td class="tg-3375"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">৮০ টাকা</span></td>
                                        <td class="tg-h3q9"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">২-৩ দিন</span></td>
                                        <td class="tg-ox9d"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">১৬০ টাকা</span></td>
                                    </tr>
                                    <tr>
                                        <td class="tg-1wig"><span style="font-weight:700;font-style:normal;text-decoration:none;color:#000;background-color:transparent">স্ট্যান্ডার্ড</span></td>
                                        <td class="tg-u3iy"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">৭২ ঘন্টা</span></td>
                                        <td class="tg-3375"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">৬০ টাকা</span></td>
                                        <td class="tg-h3q9"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">৩-৫ দিন</span></td>
                                        <td class="tg-ox9d"><span style="font-weight:400;font-style:normal;text-decoration:none;color:#000;background-color:transparent">১২০ টাকা</span></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="fst-italic mt-25">
                                <small>
                                + বিক্রয় মূল্যের ১% ক্যাশ অন ডেলিভারি মাশুল প্রযোজ্য<br>
                                * সর্বোচ্চ ৩ কেজি পর্যন্ত। পরবর্তী প্রতি কেজির জন্য ২০ টাকা হারে মাশুল প্রযোজ্য
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->
@endsection