@extends('layouts.web')

@section('title')
Pricing | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Pricing.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('pricing') }}" />
@endsection

@section('content')
    <!-- page title area start -->
    <section class="page__title-area page__title-height d-flex align-items-center fix p-relative z-index-1" data-background="{{ asset('assets/img/page-title/page-title.jpg') }}">
        <div class="page__title-shape">
            <img class="page-title-dot-4" src="{{ asset('assets/img/page-title/dot-4.png') }}" alt="">
            <img class="page-title-dot" src="{{ asset('assets/img/page-title/dot.png') }}" alt="">
            <img class="page-title-dot-2" src="{{ asset('assets/img/page-title/dot-2.png') }}" alt="">
            <img class="page-title-dot-3" src="{{ asset('assets/img/page-title/dot-3.png') }}" alt="">
            <img class="page-title-plus" src="{{ asset('assets/img/page-title/plus.png') }}" alt="">
            <img class="page-title-triangle" src="{{ asset('assets/img/page-title/triangle.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
            <div class="col-xxl-12">
                <div class="page__title-wrapper text-center">
                    <h3>প্রাইসিং</h3>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- pricing area start -->
    <section class="price__area grey-bg pt-105 pb-90">
        <div class="container">
            <div class="row pb-105">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="tab-switcher d-block mx-auto mt-5 mb-3 p-2">
                        <ul class="nav nav-pills text-center justify-content-center" id="pricing-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link mr-1 active" id="price-monthly-tab" data-bs-toggle="pill" data-bs-target="#price-monthly" type="button" role="tab" aria-controls="price-monthly" aria-selected="true">মাসিক চার্জ</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="price-yearly-tab" data-bs-toggle="pill" data-bs-target="#price-yearly" type="button" role="tab" aria-controls="price-yearly" aria-selected="false">বাৎসরিক চার্জ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="price-monthly" role="tabpanel" aria-labelledby="price-monthly-tab">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="price__item white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".3s">
                                <div class="price__offer mb-15">
                                    <span>স্টার্টার</span>
                                </div>
                                <div class="price__tag mb-15">
                                    <h5 class="text-black-50">
                                        <del>
                                            ১,৯৯০
                                        </del>
                                    </h5>
                                    <h3>
                                        <small class="text-secondary">উদ্বোধনী অফার</small><br>
                                        ৯৯০ টাকা
                                    </h3>
                                </div>
                                <div class="price__features mb-40">
                                    <ul>
                                        <li>
                                            ১৫০ টি ফ্রি অর্ডার<br>
                                            <small>পরবর্তী প্রতি অর্ডার ৮ টাকা</small>
                                        </li>
                                        <li>
                                            ১টি বিজনেস ইমেইল
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="w-btn w-btn-4 w-100 price__btn">রেজিস্ট্রেশন</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="price__item hover__active active white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".5s">
                                <div class="price__offer mb-15">
                                    <span>বেসিক</span>
                                </div>
                                <div class="price__tag mb-15">
                                    <h5 class="text-black-50">
                                        <del>
                                            ২,৯৯০
                                        </del>
                                    </h5>
                                    <h3>
                                        <small class="text-secondary">উদ্বোধনী অফার</small><br>
                                        ১,৪৯০ টাকা
                                    </h3>
                                </div>
                                <div class="price__features mb-40">
                                    <ul>
                                        <li>
                                            ৩০০ টি ফ্রি অর্ডার<br>
                                            <small>পরবর্তী প্রতি অর্ডার ৭ টাকা</small>
                                        </li>
                                        <li>
                                            ১টি বিজনেস ইমেইল
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="w-btn w-btn-4 w-100 price__btn">রেজিস্ট্রেশন</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="price__item white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".3s">
                                <div class="price__offer mb-15">
                                    <span>অ্যাডভান্সড</span>
                                </div>
                                <div class="price__tag mb-15">
                                    <h5 class="text-black-50">
                                        <del>
                                            ৫,৯৯০
                                        </del>
                                    </h5>
                                    <h3>
                                        <small class="text-secondary">উদ্বোধনী অফার</small><br>
                                        ২,৯৯০ টাকা
                                    </h3>
                                </div>
                                <div class="price__features mb-40">
                                    <ul>
                                        <li>
                                            ড্রপশিপিং মডিউল
                                        </li>
                                        <li>
                                            ৭৫০ টি ফ্রি অর্ডার<br>
                                            <small>পরবর্তী প্রতি অর্ডার ৫ টাকা</small>
                                        </li>
                                        <li>
                                            ২টি বিজনেস ইমেইল
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="w-btn w-btn-4 w-100 price__btn">রেজিস্ট্রেশন</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="price__item white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".3s">
                                <div class="price__offer mb-15">
                                    <span>সুপার প্রো</span>
                                </div>
                                <div class="price__tag mb-15">
                                    <h5 class="text-black-50">
                                        <del>
                                            ৯,৯৯০
                                        </del>
                                    </h5>
                                    <h3>
                                        <small class="text-secondary">উদ্বোধনী অফার</small><br>
                                        ৪,৯৯০ টাকা
                                    </h3>
                                </div>
                                <div class="price__features mb-40">
                                    <ul>
                                        <li>
                                            ড্রপশিপিং মডিউল
                                        </li>
                                        <li>
                                            আনলিমিটেড অর্ডার<br>
                                            <small>অর্ডার প্রতি অতিরিক্ত কোনো ফি নেই</small>
                                        </li>
                                        <li>
                                            ৩টি বিজনেস ইমেইল
                                        </li>
                                        <li>
                                            ওয়েবসাইট সেটআপ সাপোর্ট
                                        </li>
                                        <li>
                                            ডেডিকেটেড অ্যাকাউন্ট ম্যানেজার
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="w-btn w-btn-4 w-100 price__btn">রেজিস্ট্রেশন</a>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-105">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <h3 class="text-center pb-90">সাবস্ক্রিপশন প্যাকেজের বিস্তারিত দেখুন</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-dc">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col" class="text-center tg-m0cw">স্টার্টার</th>
                                            <th scope="col" class="text-center tg-5t9h">বেসিক</th>
                                            <th scope="col" class="text-center tg-wlkl">অ্যাডভান্সড</th>
                                            <th scope="col" class="text-center tg-phft">সুপার প্রো</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><h3>সেলস চ্যানেল</h3></th>
                                            <td class="text-center tg-m0cw"></td>
                                            <td class="text-center tg-5t9h"></td>
                                            <td class="text-center tg-wlkl"></td>
                                            <td class="text-center tg-phft"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ওয়েবসাইট</th>
                                            <td class="text-center tg-m0cw"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-5t9h"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-wlkl"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-phft"><i class="fas fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ফেইসবুক স্টোর</th>
                                            <td class="text-center tg-m0cw"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-5t9h"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-wlkl"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-phft"><i class="fas fa-check text-success"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="price-yearly" role="tabpanel" aria-labelledby="price-yearly-tab">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="price__item white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".3s">
                                <div class="price__offer mb-15">
                                    <span>স্টার্টার</span>
                                </div>
                                <div class="price__tag mb-15">
                                    <h5 class="text-black-50">
                                        <del>
                                            ২২,৯৯০
                                        </del>
                                    </h5>
                                    <h3>
                                        <small class="text-secondary">উদ্বোধনী অফার</small><br>
                                        ১০,৯৯০ টাকা
                                    </h3>
                                </div>
                                <div class="price__features mb-40">
                                    <ul>
                                        <li>
                                            ১,৮০০ টি ফ্রি অর্ডার<br>
                                            <small>পরবর্তী প্রতি অর্ডার ৮ টাকা</small>
                                        </li>
                                        <li>
                                            ১টি বিজনেস ইমেইল
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="w-btn w-btn-4 w-100 price__btn">রেজিস্ট্রেশন</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="price__item hover__active active white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".5s">
                                <div class="price__offer mb-15">
                                    <span>বেসিক</span>
                                </div>
                                <div class="price__tag mb-15">
                                    <h5 class="text-black-50">
                                        <del>
                                            ৩৪,৯৯০
                                        </del>
                                    </h5>
                                    <h3>
                                        <small class="text-secondary">উদ্বোধনী অফার</small><br>
                                        ১৫,৯৯০ টাকা
                                    </h3>
                                </div>
                                <div class="price__features mb-40">
                                    <ul>
                                        <li>
                                            ৩,৬০০ টি ফ্রি অর্ডার<br>
                                            <small>পরবর্তী প্রতি অর্ডার ৭ টাকা</small>
                                        </li>
                                        <li>
                                            ১টি বিজনেস ইমেইল
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="w-btn w-btn-4 w-100 price__btn">রেজিস্ট্রেশন</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="price__item white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".3s">
                                <div class="price__offer mb-15">
                                    <span>অ্যাডভান্সড</span>
                                </div>
                                <div class="price__tag mb-15">
                                    <h5 class="text-black-50">
                                        <del>
                                            ৬৪,৯৯০
                                        </del>
                                    </h5>
                                    <h3>
                                        <small class="text-secondary">উদ্বোধনী অফার</small><br>
                                        ৩১,৯৯০ টাকা
                                    </h3>
                                </div>
                                <div class="price__features mb-40">
                                    <ul>
                                        <li>
                                            ড্রপশিপিং মডিউল
                                        </li>
                                        <li>
                                            ৯,০০০ টি ফ্রি অর্ডার<br>
                                            <small>পরবর্তী প্রতি অর্ডার ৫ টাকা</small>
                                        </li>
                                        <li>
                                            ২টি বিজনেস ইমেইল
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="w-btn w-btn-4 w-100 price__btn">রেজিস্ট্রেশন</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="price__item white-bg mb-30 transition-3 fix wow fadeInUp" data-wow-delay=".3s">
                                <div class="price__offer mb-15">
                                    <span>সুপার প্রো</span>
                                </div>
                                <div class="price__tag mb-15">
                                    <h5 class="text-black-50">
                                        <del>
                                            ১,০৯,৯৯০
                                        </del>
                                    </h5>
                                    <h3>
                                        <small class="text-secondary">উদ্বোধনী অফার</small><br>
                                        ৫৩,৯৯০ টাকা
                                    </h3>
                                </div>
                                <div class="price__features mb-40">
                                    <ul>
                                        <li>
                                            ড্রপশিপিং মডিউল
                                        </li>
                                        <li>
                                            আনলিমিটেড অর্ডার<br>
                                            <small>অর্ডার প্রতি অতিরিক্ত কোনো ফি নেই</small>
                                        </li>
                                        <li>
                                            ৩টি বিজনেস ইমেইল
                                        </li>
                                        <li>
                                            ওয়েবসাইট সেটআপ সাপোর্ট
                                        </li>
                                        <li>
                                            ডেডিকেটেড অ্যাকাউন্ট ম্যানেজার
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="w-btn w-btn-4 w-100 price__btn">রেজিস্ট্রেশন</a>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-105">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <h3 class="text-center pb-90">সাবস্ক্রিপশন প্যাকেজের বিস্তারিত দেখুন</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-dc">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col" class="text-center tg-m0cw">স্টার্টার</th>
                                            <th scope="col" class="text-center tg-5t9h">বেসিক</th>
                                            <th scope="col" class="text-center tg-wlkl">অ্যাডভান্সড</th>
                                            <th scope="col" class="text-center tg-phft">সুপার প্রো</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><h3>সেলস চ্যানেল</h3></th>
                                            <td class="text-center tg-m0cw"></td>
                                            <td class="text-center tg-5t9h"></td>
                                            <td class="text-center tg-wlkl"></td>
                                            <td class="text-center tg-phft"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ওয়েবসাইট</th>
                                            <td class="text-center tg-m0cw"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-5t9h"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-wlkl"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-phft"><i class="fas fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ফেইসবুক স্টোর</th>
                                            <td class="text-center tg-m0cw"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-5t9h"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-wlkl"><i class="fas fa-check text-success"></i></td>
                                            <td class="text-center tg-phft"><i class="fas fa-check text-success"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
                
            
        </div>
    </section>
    <!-- pricing area end -->

@endsection