@extends('frontend.layouts.master')
@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-text text-center">
                            <h1>{{trans('frontend.contact')}}</h1>
                            <ul class="breadcrumbs">
                                <li><a href="{{url('/')}}">{{trans('frontend.homepage')}}</a><i
                                            class="fa fa-angle-right"></i></li>
                                <li>
                                    <a href="{{route('contacts.index')}}">{{trans('frontend.contact')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start contact area-->
    <section id="contact-area" class="anim-5-all">
        <div class="container">
            <div class="row">
                <div class="contact">
                    <div class="section-title text-center">
                        <h2><span>{{trans('frontend.get_in_touch')}}</span></h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="{{route('contacts.form')}}" method="POST">
                                {{csrf_field()}}
                                <input name="name" type="text" placeholder="{{trans('frontend.name')}}">
                                <input name="email" type="text" placeholder="{{trans('frontend.email')}}">
                                <input name="phone" type="text" placeholder="{{trans('frontend.phone')}}">
                                <textarea name="message" placeholder="{{trans('frontend.message')}}"></textarea>
                                <button type="submit">{{trans('frontend.submit')}} <i class="fa fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End contact area-->

    <!--start map area-->
    <section id="map-area">
        <div class="google-map" id="contact-google-map" data-map-lat="39.9245834" data-map-lng="32.8495374"
             data-icon-path="/img/map-marker.png" data-map-title="Atabay" data-map-zoom="17"></div>
    </section>
    <!--End map area-->
@endsection
@push('styles')

@endpush

@push('scripts')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBacr_9FoaE1G3od4zv0edn43_vDFRZSK4"></script>
<script src="/js/gmap.js"></script>

@endpush