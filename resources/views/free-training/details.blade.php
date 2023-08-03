@extends('layouts.web')

@section('title')
Free training | DoCommerce
@endsection

@section('description')
    <meta name="description" content="Free training.">
@endsection

@section('canonical')
    <link rel="canonical" href="{{ route('free-training/details') }}" />
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

    <!-- blog area start -->
    <section class="blog__area pt-120 pb-120">
        <div class="container">
           <div class="row">
               <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div class="blog__wrapper">
                     <div class="postbox__item">
                        <div class="postbox__thumb w-img wow fadeInUp" data-wow-delay=".3s">
                           <a href="#"><img src="{{ asset('assets/img/blog/blog-big-1.jpg')}}" alt=""></a>

                           <div class="postbox__meta">
                              <div class="postbox__date">
                                 <h5>17</h5>
                                 <span>Nov.</span>
                              </div>
                           </div>
                        </div>
                        <div class="postbox__content wow fadeInUp" data-wow-delay=".5s">
                           <div class="postbox__meta mb-20">
                              <span><a href="#"> <i class="icon_tag_alt"></i> Saas & App</a></span>
                              <span><a href="#"> <i class="fal fa-user"></i> wetLand</a></span>
                           </div>
                           <h3 class="postbox__title"><a href="#">The Importance of Functional Animation in UX The End  Culture Is Coming to Wall Street</a></h3>
                           <p>Twit pukka blow off nice one cack bubble and squeak that, quaint blimey don't get shirty with me up the kyver bamboozled bobby spiffing, cuppa chap lavatory hunky-dory only a quid. Cack hanky panky show off show off pick your nose and blow off cracking goal. Why cup of tea chap blatant porkies say gosh sloshed bevvy, a a blinding shot down the pub bamboozled butty barmy blimey bleeding bum bag faff about cor blimey guvnor. Why I say old chap that is spiffing, only a quid Oxford matie boy cras cup of tea golly gosh, down the pub Eaton so I said crikey cor blimey guvnor amongst.</p>
                           <div class="postbox__img w-img mt-50 mb-50">
                              <img src="{{ asset('assets/img/blog/blog-big-2.jpg')}}" alt="">
                           </div>
                           <p>Twit pukka blow off nice one cack bubble and squeak that, quaint blimey don't get shirty with me up the kyver bamboozled bobby spiffing, cuppa chap lavatory hunky-dory only a quid. Cack hanky panky show off show off pick your nose and blow off cracking goal. Why cup of tea chap blatant porkies say gosh sloshed bevvy, a a blinding shot down the pub bamboozled butty barmy blimey bleeding bum bag faff about cor blimey guvnor. Why I say old chap that is spiffing, only a quid Oxford matie boy cras cup of tea golly gosh, down the pub Eaton so I said crikey cor blimey guvnor amongst.</p>
                        </div>

                        <div class="postbox__tag mb-65 mt-65 wow fadeInUp" data-wow-delay=".7s">
                           <h3>Tags : </h3>
                           <a href="#">Web Template</a>
                           <a href="#">Saas</a>
                        </div>
                        <div class="postbox__share d-flex justify-content-between align-items-center wow fadeInUp" data-wow-delay=".9s">
                           <h3>Share :</h3>
                           <ul>
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                           </ul>
                        </div>
                        
                     </div>
                  </div>
               </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-8">
                 <div class="blog__sidebar pl-30">
                    <div class="sidebar__widget mb-60 wow fadeInUp" data-wow-delay=".3s">
                       <div class="sidebar__search">
                          <form action="#">
                             <input type="text" placeholder="Search">
                             <button type="submit"><i class="far fa-search"></i></button>
                          </form>
                       </div>
                    </div>
                    <div class="sidebar__widget mb-60 wow fadeInUp" data-wow-delay=".5s">
                       <div class="sidebar__widget-head">
                          <h3 class="sidebar__widget-title">Categories</h3>
                       </div>
                       <div class="sidebar__widget-body">
                          <div class="sidebar__category">
                             <ul>
                                <li><a href="#">Project Management <span>(05)</span></a></li>
                                <li><a href="#"> Consulting <span> (04)</span></a></li>
                                <li><a href="#">Finacial News <span>(09)</span> </a></li>
                                <li><a href="#">Ideas & Strategies <span> (07)</span></a></li>
                                <li><a href="#">News <span>(22)</span></a></li>
                                <li><a href="#">Trending <span>(51)</span></a></li>
                             </ul>
                          </div>
                       </div>
                    </div>
                    <div class="sidebar__widget mb-60 wow fadeInUp" data-wow-delay=".7s">
                       <div class="sidebar__widget-head">
                          <h3 class="sidebar__widget-title">Recent Post</h3>
                       </div>
                       <div class="sidebar__widget-body">
                          <div class="rc__post">
                             <ul>
                                <li class="d-flex align-items-center mb-30">
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
                                </li>
                                <li class="d-flex align-items-center mb-30">
                                   <div class="rc__thumb mr-30">
                                      <a href="#">
                                         <img src="{{ asset('assets/img/blog/rc-post/rc-img-2.png')}}" alt="">
                                      </a>
                                   </div>
                                   <div class="rc__content">
                                      <div class="rc__meta">
                                         <span>May 23, 2021</span>
                                      </div>
                                      <h3 class="rc__title"><a href="#">How to Win The Attention of New Clients: Tips & Tricks</a></h3>
                                   </div>
                                </li>
                                <li class="d-flex align-items-center mb-30">
                                   <div class="rc__thumb mr-30">
                                      <a href="#">
                                         <img src="{{ asset('assets/img/blog/rc-post/rc-img-3.png')}}" alt="">
                                      </a>
                                   </div>
                                   <div class="rc__content">
                                      <div class="rc__meta">
                                         <span>June 04, 2021</span>
                                      </div>
                                      <h3 class="rc__title"><a href="#">Dream Team of the Future We Predict Your Business.</a></h3>
                                   </div>
                                </li>
                             </ul>
                          </div>
                       </div>
                    </div>
                    <div class="sidebar__widget mb-60 wow fadeInUp" data-wow-delay="1.2s">
                       <div class="sidebar__widget-head">
                          <h3 class="sidebar__widget-title">Tags</h3>
                       </div>
                       <div class="sidebar__widget-body">
                           <div class="sidebar__tags">
                              <a href="#">UI/Ux</a>
                              <a href="#">Web Template</a>
                              <a href="#">Design</a>
                              <a href="#">Landing Page</a>
                              <a href="#">Update</a>
                              <a href="#">Branding</a>
                           </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- blog area end -->

@endsection