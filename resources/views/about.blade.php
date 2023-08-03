@extends('layouts.web')

@section('title')
About | DoCommerce
@endsection

@section('description')
    <meta name="description" content="About Docommerce.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('about-docommerce') }}" />
@endsection

@section('content')
    <!-- hero area start -->
    <section class="hero__area grey-bg-3 hero__height-2 p-relative d-flex align-items-center">
        <div class="container">
            <div class="row pb-60">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 about__wrapper mt-55">
                        <h2 class="hero__title-2">
                            ডু-কমার্স পরিচিতি
                        </h2>
                        <p>
                            প্রযুক্তি বিশ্বে বেশ অনেক বছরের অভিজ্ঞতাকে পুঁজি করে ডু-কমার্সের যাত্রা শুরু হয় ২০১৯ সালে। ডু-কমার্সের উদ্যোক্তাগণ দেশবিদেশের বিভিন্ন খ্যাতনামা প্রতিষ্ঠানে অভিজ্ঞতার সুবাদে অর্জিত দক্ষতাকে কাজে লাগিয়ে বাংলাদেশে ই-কমার্স প্রযুক্তির এক নতুন ধারার সূচনা করতে চান। সেই ধারণা থেকে শুরু হয়েছে ডু-কমার্সের যাত্রা।
                        </p>

                        <p>
                            প্রাথমিকভাবে মাত্র কয়েকটি ক্লিকেই ই-কমার্স ওয়েবসাইট নির্মাণের ধারণা থেকে কাজ শুরু করে ডু-কমার্সের ব্যবস্থাপনা টিম। প্রকল্পটি ধীরে ধীরে সফলতার মুখ দেখার সাথে সাথে আরও বিভিন্ন ফিচার যুক্ত হতে শুরু করে এই প্ল্যাটফর্মে। ডু-কমার্সের বর্তমান প্রযুক্তিগত অর্জন বিবেচনা করলে, বর্তমানে বাংলাদেশে ই-কমার্স ভিত্তিক সর্বশেষ প্রযুক্তির সম্মিলন ঘটানো একমাত্র প্রযুক্তি প্রতিষ্ঠান হিসেবে ডু-কমার্স অনন্য। ডু-কমার্সের প্রতিটি সদস্য বিশ্বাস করে অচিরেই এই ব্যবসায়িক নেটওয়ার্ক বাংলাদেশে ই-কমার্স ব্যবসার এক নতুন পথ সৃষ্টি করবে।
                        </p>
                        
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2">
                        <div class="hero__thumb-inner p-relative mt-50">
                            <img class="hero-2-thumb shadow-none img-fluid mx-auto d-block" src="{{ asset('assets/img/custom/business-connection-2.webp') }}" alt="About Docommerce">
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
                            <p>
                                ডু-কমার্সের প্রাথমিক সফলতার পেছনের গল্পটি এর ব্যবস্থাপনা টিমেরই সফলতার গল্প। উদ্যোক্তাদের পেশাদার অভিজ্ঞতার সবটুকু কাজে লাগিয়ে এই প্রতিষ্ঠানের এগিয়ে চলা। বাংলাদেশের সমস্ত ব্যবসায়ীদেরকে প্রযুক্তি বিশ্বের সর্বশেষ প্রযুক্তির সাথে পরিচয়ে করিয়ে দেয়ার প্রচেষ্টাকে ইতোমধ্যে স্বাগত জানিয়েছে অসংখ্য ব্যবহারকারী। সময়ের সাথে পাল্লা দিয়ে বর্তমানে ডু-কমার্সের সেবা গ্রহীতাদের সংখ্যা বেড়ে চলছে। এমনকি প্রচুর আগ্রহের কারণে ডু-কমার্স প্রথম দিকে সব ধরণের প্রমোশন বন্ধ রেখেছিল। কারণ, এই বিপুল সংখ্যক ব্যবহারকারীর আগ্রহ ধরে রাখার মতো লোকবল সেই সময় সীমিত ছিল।
                            </p>
        
                            <p>
                                প্রাথমিক সফলতার ফলশ্রুতিতে দিনে দিনে  ডু-কমার্স টিমের কলেবর বৃদ্ধি পাচ্ছে। বর্তমানে প্রায় অর্ধসহস্র গ্রাহককে সেবা দেয়ার পাশাপাশি ব্যবসায়ীদের জন্য প্রয়োজনীয় নিত্যনতুন ফিচার প্ল্যাটফর্মে যোগ করে চলেছে।
                            </p>
        
                            <p>
                                ডু-কমার্স টিম বাংলাদেশে ই-কমার্স প্রযুক্তিতে নতুন ধারার সূচনা করে, ছোট বড় সবধরণের ব্যবসায়ীদের অনলাইনে সুদৃঢ় অবস্থান নিশ্চিত করতে চায়।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

@endsection