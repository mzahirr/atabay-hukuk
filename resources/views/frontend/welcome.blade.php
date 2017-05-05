@extends('frontend.layouts.master')
@section('content')
    <!-- #banner -->
    <section id="banner">
        <div class="banner-container">
            <div class="banner home-v1">
                <ul>

                    <li
                            class="slider-1"
                            data-transition="fade"
                            data-slotamount="7"
                            data-thumb="/img/slider/atabay_sldr1.jpg"
                            data-title="{{config('app.name')}}">

                        <img
                                src="/img/slider/atabay_sldr1.jpg"
                                data-bgrepeat="no-repeat"
                                data-bgfit="cover"
                                data-bgposition="center center"
                                alt="slider image">

                        <div class="caption sfl sfb tp-resizeme caption-bold-heading text-center"
                             data-x="0"
                             data-y="480"
                             data-speed="700"
                             data-start="1700"
                             data-easing="easeOutBack"
                        >
                            <h1>Equal . justic . under . law</h1>
                        </div>

                        <div class="caption sfr sfb tp-resizeme p-tag text-center"
                             data-x="0"
                             data-y="570"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus
                                mal suada faci lisis.<br> Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum
                                nec odio ipsum. </p>
                        </div>
                        <div class="caption sft tp-resizeme thm-btn text-center"
                             data-x="0"
                             data-y="660"
                             data-speed="700"
                             data-start="2800"
                             data-easing="easeOutBack"
                        >
                            <a href="#">View Services <i class="fa fa-arrow-right"></i></a>
                        </div>

                    </li>

                    <li
                            class="slider-3"
                            data-transition="fade"
                            data-slotamount="7"
                            data-thumb="/img/slider/atabay_sldr2.jpg"
                            data-title="{{config('app.name')}}">

                        <img
                                src="/img/slider/atabay_sldr2.jpg"
                                data-bgrepeat="no-repeat"
                                data-bgfit="cover"
                                data-bgposition="center center"
                                alt="slider image">

                        <div class="caption sfl sfb tp-resizeme caption-1 text-center"
                             data-x="0"
                             data-y="400"
                             data-speed="700"
                             data-start="1700"
                             data-easing="easeOutBack"
                        >
                            <h1>We Offer Our Clients Only</h1>
                        </div>

                        <div class="caption sfr sfb tp-resizeme caption-2 large text-center"
                             data-x="0"
                             data-y="460"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                            <h1>Expert Legal Advice</h1>
                        </div>
                        <div class="caption sft tp-resizeme caption-4 italic text-center"
                             data-x="0"
                             data-y="543"
                             data-speed="700"
                             data-start="2500"
                             data-easing="easeOutBack"
                        >
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse <br>
                                cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur.</p>
                        </div>
                        <div class="caption sft tp-resizeme border text-center"
                             data-x="0"
                             data-y="610"
                             data-speed="700"
                             data-start="2700"
                             data-easing="easeOutBack"
                        >
                            <span></span>
                        </div>
                        <div class="caption sft tp-resizeme icon text-center"
                             data-x="0"
                             data-y="680"
                             data-speed="700"
                             data-start="3000"
                             data-easing="easeOutBack"
                        >
                            <i class="flaticon-justice4"></i>
                        </div>

                    </li>

                    <li
                            class="slider-3"
                            data-transition="fade"
                            data-slotamount="7"
                            data-thumb="/img/slider/atabay_sldr3.jpg"
                            data-title="{{config('app.name')}}">

                        <img
                                src="/img/slider/atabay_sldr3.jpg"
                                data-bgrepeat="no-repeat"
                                data-bgfit="cover"
                                data-bgposition="center center"
                                alt="slider image">

                        <div class="caption sfl sfb tp-resizeme caption-1 text-center"
                             data-x="0"
                             data-y="400"
                             data-speed="700"
                             data-start="1700"
                             data-easing="easeOutBack"
                        >
                            <h1>We Offer Our Clients Only</h1>
                        </div>

                        <div class="caption sfr sfb tp-resizeme caption-2 large text-center"
                             data-x="0"
                             data-y="460"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                            <h1>Expert Legal Advice</h1>
                        </div>
                        <div class="caption sft tp-resizeme caption-4 italic text-center"
                             data-x="0"
                             data-y="543"
                             data-speed="700"
                             data-start="2500"
                             data-easing="easeOutBack"
                        >
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse <br>
                                cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur.</p>
                        </div>
                        <div class="caption sft tp-resizeme border text-center"
                             data-x="0"
                             data-y="610"
                             data-speed="700"
                             data-start="2700"
                             data-easing="easeOutBack"
                        >
                            <span></span>
                        </div>
                        <div class="caption sft tp-resizeme icon text-center"
                             data-x="0"
                             data-y="680"
                             data-speed="700"
                             data-start="3000"
                             data-easing="easeOutBack"
                        >
                            <i class="flaticon-justice4"></i>
                        </div>

                    </li>

                    <li
                            class="slider-3"
                            data-transition="fade"
                            data-slotamount="7"
                            data-thumb="/img/slider/atabay_sldr4.jpg"
                            data-title="{{config('app.name')}}">

                        <img
                                src="/img/slider/atabay_sldr4.jpg"
                                data-bgrepeat="no-repeat"
                                data-bgfit="cover"
                                data-bgposition="center center"
                                alt="slider image">

                        <div class="caption sfl sfb tp-resizeme caption-1 text-center"
                             data-x="0"
                             data-y="400"
                             data-speed="700"
                             data-start="1700"
                             data-easing="easeOutBack"
                        >
                            <h1>We Offer Our Clients Only</h1>
                        </div>

                        <div class="caption sfr sfb tp-resizeme caption-2 large text-center"
                             data-x="0"
                             data-y="460"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                            <h1>Expert Legal Advice</h1>
                        </div>
                        <div class="caption sft tp-resizeme caption-4 italic text-center"
                             data-x="0"
                             data-y="543"
                             data-speed="700"
                             data-start="2500"
                             data-easing="easeOutBack"
                        >
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse <br>
                                cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur.</p>
                        </div>
                        <div class="caption sft tp-resizeme border text-center"
                             data-x="0"
                             data-y="610"
                             data-speed="700"
                             data-start="2700"
                             data-easing="easeOutBack"
                        >
                            <span></span>
                        </div>
                        <div class="caption sft tp-resizeme icon text-center"
                             data-x="0"
                             data-y="680"
                             data-speed="700"
                             data-start="3000"
                             data-easing="easeOutBack"
                        >
                            <i class="flaticon-justice4"></i>
                        </div>

                    </li>

                    <li
                            class="slider-3"
                            data-transition="fade"
                            data-slotamount="7"
                            data-thumb="/img/slider/atabay_sldr5.jpg"
                            data-title="{{config('app.name')}}">

                        <img
                                src="/img/slider/atabay_sldr5.jpg"
                                data-bgrepeat="no-repeat"
                                data-bgfit="cover"
                                data-bgposition="center center"
                                alt="slider image">

                        <div class="caption sfl sfb tp-resizeme caption-1 text-center"
                             data-x="0"
                             data-y="400"
                             data-speed="700"
                             data-start="1700"
                             data-easing="easeOutBack"
                        >
                            <h1>We Offer Our Clients Only</h1>
                        </div>

                        <div class="caption sfr sfb tp-resizeme caption-2 large text-center"
                             data-x="0"
                             data-y="460"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                            <h1>Expert Legal Advice</h1>
                        </div>
                        <div class="caption sft tp-resizeme caption-4 italic text-center"
                             data-x="0"
                             data-y="543"
                             data-speed="700"
                             data-start="2500"
                             data-easing="easeOutBack"
                        >
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse <br>
                                cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur.</p>
                        </div>
                        <div class="caption sft tp-resizeme border text-center"
                             data-x="0"
                             data-y="610"
                             data-speed="700"
                             data-start="2700"
                             data-easing="easeOutBack"
                        >
                            <span></span>
                        </div>
                        <div class="caption sft tp-resizeme icon text-center"
                             data-x="0"
                             data-y="680"
                             data-speed="700"
                             data-start="3000"
                             data-easing="easeOutBack"
                        >
                            <i class="flaticon-justice4"></i>
                        </div>

                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!-- /#banner -->

    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dtc icon-box">
                        <i class="icon icon-Phone2"></i>
                    </div>
                    <div class="dtc text-one">
                        <h3>{{trans('frontend.consultant')}}: <span class="number">312 466 44 44</span></h3>
                    </div>
                    <div class="dtc text-two">
                        <h4>7 days a Week From : 8.00 am to 2.30 pm</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(count($announcements)>0)
        <section id="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="testimonial-list">
                            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                @foreach($announcements as $announcement)
                                    @if ($loop->first)
                                        <!--Start Testimonial Single Item-->
                                            <div class="item active">
                                                <div class="single-testimonial-item text-center">
                                                    <div class="testimonial-image-holder">
                                                        <img src="/img/widget-icon-1.png" alt="">
                                                    </div>
                                                    <p>
                                                        “{{$announcement->getTranslation(app()->getLocale())->first()->announcement}}
                                                        ”</p>
                                                </div>
                                            </div>
                                            <!--End Testimonial Single Item-->
                                    @else
                                        <!--Start Testimonial Single Item-->
                                            <div class="item">
                                                <div class="single-testimonial-item text-center">
                                                    <div class="testimonial-image-holder">
                                                        <img src="/img/widget-icon-1.png" alt="">
                                                    </div>
                                                    <p>
                                                        “{{$announcement->getTranslation(app()->getLocale())->first()->announcement}}
                                                        ”</p>
                                                </div>
                                            </div>
                                            <!--End Testimonial Single Item-->
                                        @endif
                                    @endforeach


                                    <a class="left testimonial-control" href="#testimonial-carousel" role="button"
                                       data-slide="prev"><i
                                                class="fa fa-long-arrow-left testimonial-ctl-button"></i></a>
                                    <a class="right testimonial-control" href="#testimonial-carousel" role="button"
                                       data-slide="next"><i
                                                class="fa fa-long-arrow-right testimonial-ctl-button"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif







    <section id="featured-services-area">
        <div class="container">
            <div class="featured-services">
                <div class="section-title text-center">
                    <span>Our Practice Areas</span>
                    <h2><span>Our featured services</span></h2>
                </div>
                <div class="row">
                    <div class="top-featured">
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-featured">
                                <div class="single-featured-icon alignleft">
                                    <i class="flaticon-familiar17"></i>
                                </div>
                                <div class="single-featured-text">
                                    <h5>family law</h5>
                                    <p>Phasellus sit amet tristique ligula. Doc iaculis leo suscipit ultricies Intedum
                                        esuada fames ant infaucibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-featured">
                                <div class="single-featured-icon alignleft">
                                    <i class="flaticon-justice4"></i>
                                </div>
                                <div class="single-featured-text">
                                    <h5>criminal law</h5>
                                    <p>Phasellus sit amet tristique ligula. Doc iaculis leo suscipit ultricies Intedum
                                        esuada fames ant infaucibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-featured">
                                <div class="single-featured-icon alignleft">
                                    <i class="flaticon-transport111"></i>
                                </div>
                                <div class="single-featured-text">
                                    <h5>auto Accident law</h5>
                                    <p>Phasellus sit amet tristique ligula. Doc iaculis leo suscipit ultricies Intedum
                                        esuada fames ant infaucibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                    </div>
                </div>
                <div class="row">
                    <div class="bottom-featured">
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-featured">
                                <div class="single-featured-icon alignleft">
                                    <i class="flaticon-rain7"></i>
                                </div>
                                <div class="single-featured-text">
                                    <h5>real estate law</h5>
                                    <p>Phasellus sit amet tristique ligula. Doc iaculis leo suscipit ultricies Intedum
                                        esuada fames ant infaucibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-featured">
                                <div class="single-featured-icon alignleft">
                                    <i class="flaticon-medical85"></i>
                                </div>
                                <div class="single-featured-text">
                                    <h5>Drug Offence</h5>
                                    <p>Phasellus sit amet tristique ligula. Doc iaculis leo suscipit ultricies Intedum
                                        esuada fames ant infaucibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-featured">
                                <div class="single-featured-icon alignleft">
                                    <i class="flaticon-sprain"></i>
                                </div>
                                <div class="single-featured-text">
                                    <h5>personal injury</h5>
                                    <p>Phasellus sit amet tristique ligula. Doc iaculis leo suscipit ultricies Intedum
                                        esuada fames ant infaucibus.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start latest news area-->
    <section id="latest-news-area" class="anim-5-all">
        <div class="container">
            <div class="row">
                <div class="latest-news">
                    <div class="section-title text-center">
                        <span>Attorney News</span>
                        <h2><span>latest news of attorney</span></h2>
                    </div>
                    <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="/img/news-1.jpg" alt="">
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>05</h3>
                                        <p>Aug</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="#"><i class="fa fa-user"></i> By: Michale John</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> Comments: 5</a></li>
                                </ul>
                                <h4>Heading of Blog</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus iste natus iste natus</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->
                    <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="/img/news-1.jpg" alt="">
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>05</h3>
                                        <p>Aug</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="#"><i class="fa fa-user"></i> By: Michale John</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> Comments: 5</a></li>
                                </ul>
                                <h4>Heading of Blog</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus iste natus iste natus</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->
                    <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="/img/news-1.jpg" alt="">
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>05</h3>
                                        <p>Aug</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="#"><i class="fa fa-user"></i> By: Michale John</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> Comments: 5</a></li>
                                </ul>
                                <h4>Heading of Blog</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus iste natus iste natus</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->
                    <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="/img/news-1.jpg" alt="">
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>05</h3>
                                        <p>Aug</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="#"><i class="fa fa-user"></i> By: Michale John</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> Comments: 5</a></li>
                                </ul>
                                <h4>Heading of Blog</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus iste natus iste natus</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->
                    <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="/img/news-1.jpg" alt="">
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>05</h3>
                                        <p>Aug</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="#"><i class="fa fa-user"></i> By: Michale John</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> Comments: 5</a></li>
                                </ul>
                                <h4>Heading of Blog</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus iste natus iste natus</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->
                    <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="/img/news-1.jpg" alt="">
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>05</h3>
                                        <p>Aug</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="#"><i class="fa fa-user"></i> By: Michale John</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> Comments: 5</a></li>
                                </ul>
                                <h4>Heading of Blog</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus iste natus iste natus</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->
                    <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="/img/news-1.jpg" alt="">
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>05</h3>
                                        <p>Aug</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="#"><i class="fa fa-user"></i> By: Michale John</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> Comments: 5</a></li>
                                </ul>
                                <h4>Heading of Blog</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus iste natus iste natus</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->
                    <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="/img/news-1.jpg" alt="">
                                <div class="overlay">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>05</h3>
                                        <p>Aug</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="#"><i class="fa fa-user"></i> By: Michale John</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> Comments: 5</a></li>
                                </ul>
                                <h4>Heading of Blog</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus iste natus iste natus</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->


                </div>
            </div>


        </div>
    </section>
    <!--End latest news area-->
@endsection
@push('styles')
<style>
    .bottom {
        margin-bottom: 10px;
    }
</style>
@endpush