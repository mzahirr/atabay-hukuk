@extends('frontend.layouts.master')
@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-text text-center">
                            <h1>{{trans('frontend.attorneys')}}</h1>
                            <ul class="breadcrumbs">
                                <li><a href="{{url('/')}}">{{trans('frontend.homepage')}}</a><i
                                            class="fa fa-angle-right"></i></li>
                                <li>
                                    <a href="{{route('lawyers.index')}}">{{trans('frontend.attorneys')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="best-attorney-area" class="anim-5-all">
        <div class="container">
            <div class="row">
                <div class="our-attorneys">
                    <div class="section-title text-center">
                        <span>{{trans('frontend.attorneys')}}</span>
                    </div>

                @if(count($lawyers)>0)
                    @foreach($lawyers as $lawyer)
                        <!--Start Single Best Attorney-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="single-attorney single-best-attorney">
                                    <div class="attorney-image-holder">
                                        <img src="{{asset($lawyer->image)}}" alt="{{$lawyer->name}}">
                                        <div class="attorney-overlay">
                                            <div class="attorney-ninus-icon">
                                                <img src="/img/attorney-ninus-icon.png" alt="">
                                            </div>
                                        </div>
                                        <div class="attorney-plus-icon">
                                            <img src="/img/attorney-plus-icon.png" alt="">
                                        </div>
                                    </div>
                                    <div class="attorney-name text-center">
                                        <h5>{{$lawyer->name}}</h5>
                                        <div class="phone-and-mail-number">
                                            <p>{{trans('frontend.phone')}}: {{$lawyer->number}}</p>
                                            <p>{{trans('frontend.email')}}: {{$lawyer->email}}</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <span>{{str_limit($lawyer->getTranslation->first()->description,200)}}</span>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Best Attorney-->
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')

@endpush