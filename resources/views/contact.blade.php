@extends('layouts.web')

@section('title')
Contact | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Contact Docommerce.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('contact-us') }}" />
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
                    <h3>যোগাযোগ করুন</h3>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- contact area start  -->
    <section class="contact__area pb-150 p-relative z-index-1">
        <div class="container">
            <div class="row">
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="contact__wrapper white-bg mt--70 p-relative z-index-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="contact__info pr-80">
                                <div class="contact__details">
                                    <ul>
                                    <li>
                                        <h4>ইলেক্ট্রনিক যোগাযোগ</h4>
                                        <p>কলসেন্টার: <a href="tel:+8809613919293">(+৮৮) ০৯৬১৩৯১৯২৯৩</a></p>
                                        <p>ইমেইল: <a href="mailto:support@docommerce.com">support@docommerce.com</a></p>
                                    </li>
                                    <li>
                                        <h4>কর্পোরেট হেড অফিস</h4>
                                        <p>
                                            ইউনিট ৫, প্লট ৮৮১, সড়ক ১২<br>
                                            অ্যাভিনিউ ২, মিরপুর ডি.ও.এইচ.এস<br>
                                            ঢাকা-১২১৬
                                        </p>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="contact__form">
                                <form action="#">
                                    <input type="text" placeholder="নাম*" required>
                                    <input type="tel" placeholder="মোবাইল নাম্বার*" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                    <input type="email" placeholder="ইমেইল">
                                    <select name="subject" id="" required>
                                        <option value="">যোগাযোগের কারণ:</option>
                                        <option value="1">মতামত</option>
                                        <option value="2">ফ্রি ট্রেনিং</option>
                                        <option value="3">সার্ভিস সম্পর্কে প্রশ্ন</option>
                                    </select>
                                    <textarea placeholder="বিস্তারিত বার্তা*" required></textarea>
                                    <button type="submit" class="w-btn w-btn-blue w-btn-6 w-btn-14">Send Massage</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end  -->

    <!-- contact form area start -->
    <section class="contact__map">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-12">
                    <div class="contact__map wow fadeInUp" data-wow-delay=".3s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1534.398695053737!2d90.36439701488892!3d23.838657735038996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8bf89957dc2700f7!2zMjPCsDUwJzE5LjEiTiA5MMKwMjEnNTUuOCJF!5e0!3m2!1sbn!2sbd!4v1641644129294!5m2!1sbn!2sbd"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form area end -->

@endsection