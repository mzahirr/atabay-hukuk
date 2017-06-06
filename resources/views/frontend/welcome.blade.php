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
                            <h1>EQUAL . JUSTIC . UNDER . LAW</h1>
                        </div>

                        <div class="caption sfr sfb tp-resizeme p-tag text-center"
                             data-x="0"
                             data-y="570"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                        </div>
                        <div class="caption sft tp-resizeme thm-btn text-center"
                             data-x="0"
                             data-y="660"
                             data-speed="700"
                             data-start="2800"
                             data-easing="easeOutBack"
                        >
                            <a href="{{route('actions.index')}}">{{trans('frontend.activities')}} <i class="fa fa-arrow-right"></i></a>
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
                            <h1>WE OFFER OUR CLIENTS ONLY</h1>
                        </div>

                        <div class="caption sfr sfb tp-resizeme caption-2 large text-center"
                             data-x="0"
                             data-y="460"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                            <h1>EXPERT LEGAL ADVICE</h1>
                        </div>
                        <div class="caption sft tp-resizeme caption-4 italic text-center"
                             data-x="0"
                             data-y="543"
                             data-speed="700"
                             data-start="2500"
                             data-easing="easeOutBack"
                        >
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
                        </div>

                        <div class="caption sfr sfb tp-resizeme caption-2 large text-center"
                             data-x="0"
                             data-y="460"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                        </div>
                        <div class="caption sft tp-resizeme caption-4 italic text-center"
                             data-x="0"
                             data-y="543"
                             data-speed="700"
                             data-start="2500"
                             data-easing="easeOutBack"
                        >
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
                        </div>

                        <div class="caption sfr sfb tp-resizeme caption-2 large text-center"
                             data-x="0"
                             data-y="460"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                        </div>
                        <div class="caption sft tp-resizeme caption-4 italic text-center"
                             data-x="0"
                             data-y="543"
                             data-speed="700"
                             data-start="2500"
                             data-easing="easeOutBack"
                        >
                        </div>
                        <div class="caption sft tp-resizeme border text-center"
                             data-x="0"
                             data-y="610"
                             data-speed="700"
                             data-start="2700"
                             data-easing="easeOutBack"
                        >
                        </div>
                        <div class="caption sft tp-resizeme icon text-center"
                             data-x="0"
                             data-y="680"
                             data-speed="700"
                             data-start="3000"
                             data-easing="easeOutBack"
                        >
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
                        </div>

                        <div class="caption sfr sfb tp-resizeme caption-2 large text-center"
                             data-x="0"
                             data-y="460"
                             data-speed="700"
                             data-start="2000"
                             data-easing="easeOutBack"
                        >
                        </div>
                        <div class="caption sft tp-resizeme caption-4 italic text-center"
                             data-x="0"
                             data-y="543"
                             data-speed="700"
                             data-start="2500"
                             data-easing="easeOutBack"
                        >
                        </div>
                        <div class="caption sft tp-resizeme border text-center"
                             data-x="0"
                             data-y="610"
                             data-speed="700"
                             data-start="2700"
                             data-easing="easeOutBack"
                        >
                        </div>
                        <div class="caption sft tp-resizeme icon text-center"
                             data-x="0"
                             data-y="680"
                             data-speed="700"
                             data-start="3000"
                             data-easing="easeOutBack"
                        >
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
                        <h4>{{trans('frontend.working_days')}}</h4>
                    </div>


                </div>
            </div>
        </div>
    </section>

    @if(count($announcements)>0)
        @include('frontend.partials.announcements')
    @endif
    @if(count($activities)>0)
        @include('frontend.partials.activities')
    @endif
    @if(count($articles)>0)
        @include('frontend.partials.articles')
    @endif
    @if(count($partners))
        <div class="container">
            <div class="row">
                <div class="main-carousel">
                    @foreach($partners as $partner)
                        <div class="col-md-2 carousel-cell">
                            <div class="custom_slider">
                                <img src="{{asset($partner->image)}}" alt="{{$partner->name}}">
                            </div>
                        </div>
                    @endforeach
                    <div style="clear: both"></div>
                </div>

            </div>
        </div>
        <div style="clear: both"></div>
    @endif
@endsection
@push('styles')
<link href="https://unpkg.com/flickity@2.0.5/dist/flickity.css" rel="stylesheet" type="text/css"/>

<style>

    .action-bar {
        padding-left: 90px;
    }

    .action-bar2 {
        padding-left: 290px;
    }

    .bottom {
        margin-bottom: 10px;
    }

    .main-carousel {
        padding: 25px;
    }

    .custom_slider > img {
        min-width: 200px;
        min-height: 200px;
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/flickity@2.0.5/dist/flickity.pkgd.min.js"></script>
<script>
    $('.main-carousel').flickity({
        cellAlign: 'center',
        contain: true,
        autoPlay: true,
        prevNextButtons: false,
        pageDots: false,
    });
</script>
@endpush