@extends('layouts.web')

@section('title')
Free training | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Free training.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('free-training') }}" />
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
                    <h3>ফ্রি ট্রেনিং</h3>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- services area start -->
    <section class="services__area pt-110 pb-45">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="services__item-4 white-bg mb-30">
                        <div class="services__thumb-4 text-center d-flex align-items-end justify-content-center">
                        <img src="{{ asset('assets/img/services/home-4/services-1.png')}}" alt="">
                        </div>
                        <div class="services__content-4">
                        <h3 class="services__title-4"><a href="#">Finish routine tasks automatically</a></h3>
                        <p>I smashing, hanky panky chap plastered show off show off pick your nose plastered.</p>
                        <a href="#" class="link-btn">Chat Platfrom <i class="arrow_right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="faq__wrapper wow fadeInUp">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What to do if you can’t access ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Looking to start an online store and you're not sure where to begin? I'll guide will help you to navigate Would you like to boost your Twitter profile.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How to start an online store in 2021 ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Looking to start an online store and you're not sure where to begin? I'll guide will help you to navigate Would you like to boost your Twitter profile.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-none">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed pb-0 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How to change font size in wordPress ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <p>Looking to start an online store and you're not sure where to begin? I'll guide will help you to navigate Would you like to boost your Twitter profile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services area end -->

    <!-- blog area start -->
    <section class="blog__area pt-30 pb-140 p-relative">
        <div class="blog__shape">
            <img class="blog-dot" src="{{ asset('assets/img/icon/blog/home-2/blog-dot.png')}}" alt="">
            <img class="blog-triangle" src="{{ asset('assets/img/icon/blog/home-2/blog-triangle.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog__item white-bg mb-30">
                        <div class="blog__thumb fix w-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/home-2/blog-4.jpg')}}" alt="">
                        </a>
                        </div>
                        <div class="blog__content pt-20">
                        <div class="blog__meta mb-10">
                            <span class="date">August 27, 2020</span>
                            <span class="tag"><a href="#">Development</a></span>
                        </div>
                        <h3 class="blog__title"><a href="#">Modern black fonts use in web design.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog__item white-bg mb-30">
                        <div class="blog__thumb fix w-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/home-2/blog-5.jpg')}}" alt="">
                        </a>
                        </div>
                        <div class="blog__content pt-20">
                        <div class="blog__meta mb-10">
                            <span class="date">August 22, 2020</span>
                            <span class="tag"><a href="#">News</a></span>
                        </div>
                        <h3 class="blog__title"><a href="#">What to Know When Developing a Streaming App.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="blog__item white-bg mb-30">
                        <div class="blog__thumb fix w-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/home-2/blog-6.jpg')}}" alt="">
                        </a>
                        </div>
                        <div class="blog__content pt-20">
                        <div class="blog__meta mb-10">
                            <span class="date">August 15, 2020</span>
                            <span class="tag"><a href="#">Design</a></span>
                        </div>
                        <h3 class="blog__title"><a href="#">20 of the Best Free Resources For App Developers.</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

    <!-- services area start -->
    <section class="services__area dark-blue-bg pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3">
                    <div class="section__title-wrapper section__title-wrapper-5 section__title-wrapper-5-p section__title-white text-center mb-55 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="section__title-5 mb-25">ট্রেনিং ক্যাটাগরি</h2>
                        <p>Starkers pardon you knees up is Elizabeth geeza Why, quain standard  guvnor gosh cras brilliant.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="fal fa-envelope"></i>
                        <h3 class="services__title-5"><a href="#">Email marketing</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="icon_search"></i>
                        <h3 class="services__title-5"><a href="#">Search engine</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="arrow_triangle-right_alt2"></i>
                        <h3 class="services__title-5"><a href="#">Video marketing</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="icon_document_alt"></i>
                        <h3 class="services__title-5"><a href="#">SEO consultancy</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="icon_archive_alt"></i>
                        <h3 class="services__title-5"><a href="#">Development</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="icon_hourglass"></i>
                        <h3 class="services__title-5"><a href="#">Tracking</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="icon_globe-2"></i>
                        <h3 class="services__title-5"><a href="#">Website design</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="icon_toolbox_alt"></i>
                        <h3 class="services__title-5"><a href="#">Lead recovery</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="services__item-5 d-flex justify-content-between align-items-center transition-3 mb-30">
                        <div class="services__content-5 d-flex align-items-center">
                        <i class="icon_search-2"></i>
                        <h3 class="services__title-5"><a href="#">Media marketing</a></h3>
                        </div>
                        <div class="services__more-5 d-flex align-items-center">
                        <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services area end -->

    <!-- blog area start -->
    <section class="blog__area pt-30 pt-115 pb-140 p-relative">
        <div class="blog__shape">
            <img class="blog-dot" src="{{ asset('assets/img/icon/blog/home-2/blog-dot.png')}}" alt="">
            <img class="blog-triangle" src="{{ asset('assets/img/icon/blog/home-2/blog-triangle.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rc__thumb mr-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/rc-post/rc-img-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="rc__content">
                        <div class="rc__meta">
                            <span>April 10, 2021</span>
                        </div>
                        <h3 class="rc__title"><a href="#">Building a New Successful Hostel Campaign.</a></h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rc__thumb mr-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/rc-post/rc-img-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="rc__content">
                        <div class="rc__meta">
                            <span>April 10, 2021</span>
                        </div>
                        <h3 class="rc__title"><a href="#">Building a New Successful Hostel Campaign.</a></h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rc__thumb mr-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/rc-post/rc-img-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="rc__content">
                        <div class="rc__meta">
                            <span>April 10, 2021</span>
                        </div>
                        <h3 class="rc__title"><a href="#">Building a New Successful Hostel Campaign.</a></h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rc__thumb mr-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/rc-post/rc-img-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="rc__content">
                        <div class="rc__meta">
                            <span>April 10, 2021</span>
                        </div>
                        <h3 class="rc__title"><a href="#">Building a New Successful Hostel Campaign.</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

    <!-- blog area start -->
    <section class="blog__area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog__item-3 white-bg mb-30">
                        <div class="blog__thumb-3 p-relative w-img fix">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/home-3/blog-1.jpg')}}" alt="">
                        </a>
                        <div class="blog__meta-3">
                            <span class="tag-3"><a href="#">Design</a></span>
                        </div>
                        </div>
                        <div class="blog__content-3">
                        <div class="blog__meta-3 mb-10">
                            <span class="date">May 18, 2021</span>
                        </div>
                        <h3 class="blog__title-3"><a href="#">What is a digital agency & what can they do for my business?</a></h3>

                        <a href="#" class="link-btn">More Details <i class="arrow_right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog__item-3 white-bg mb-30">
                        <div class="blog__thumb-3 p-relative w-img fix">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/home-3/blog-2.jpg')}}" alt="">
                        </a>
                        <div class="blog__meta-3">
                            <span class="tag-3"><a href="#">Creative</a></span>
                        </div>
                        </div>
                        <div class="blog__content-3">
                        <div class="blog__meta-3 mb-10">
                            <span class="date">May 20, 2021</span>
                        </div>
                        <h3 class="blog__title-3"><a href="#">How to Create an Amazon Affiliate Store in WordPress?</a></h3>

                        <a href="#" class="link-btn">More Details <i class="arrow_right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

    <!-- blog area start -->
    <section class="blog__area pt-30 pb-140 p-relative">
        <div class="blog__shape">
            <img class="blog-dot" src="{{ asset('assets/img/icon/blog/home-2/blog-dot.png')}}" alt="">
            <img class="blog-triangle" src="{{ asset('assets/img/icon/blog/home-2/blog-triangle.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rc__thumb mr-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/rc-post/rc-img-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="rc__content">
                        <div class="rc__meta">
                            <span>April 10, 2021</span>
                        </div>
                        <h3 class="rc__title"><a href="#">Building a New Successful Hostel Campaign.</a></h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rc__thumb mr-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/rc-post/rc-img-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="rc__content">
                        <div class="rc__meta">
                            <span>April 10, 2021</span>
                        </div>
                        <h3 class="rc__title"><a href="#">Building a New Successful Hostel Campaign.</a></h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rc__thumb mr-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/rc-post/rc-img-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="rc__content">
                        <div class="rc__meta">
                            <span>April 10, 2021</span>
                        </div>
                        <h3 class="rc__title"><a href="#">Building a New Successful Hostel Campaign.</a></h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex align-items-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rc__thumb mr-30">
                        <a href="#">
                            <img src="{{ asset('assets/img/blog/rc-post/rc-img-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="rc__content">
                        <div class="rc__meta">
                            <span>April 10, 2021</span>
                        </div>
                        <h3 class="rc__title"><a href="#">Building a New Successful Hostel Campaign.</a></h3>
                    </div>
                </div>
            </div>

            <div class="row pt-115">
                <div class="col-lg-12">
                    <div class="basic-pagination wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="arrow_left"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    <span>1</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('free-training/other-pages') }}">
                                    <span>2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fal fa-ellipsis-h"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>30</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="arrow_right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

@endsection