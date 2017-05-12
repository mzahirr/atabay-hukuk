@extends('frontend.layouts.master')
@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-text text-center">
                            <h1>{{trans('frontend.query')}}</h1>
                            <ul class="breadcrumbs">
                                <li><a href="{{url('/')}}">{{trans('frontend.homepage')}}</a><i
                                            class="fa fa-angle-right"></i></li>
                                <li>
                                    <a href="{{route('files.query')}}">{{trans('frontend.query')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start query area-->
    <section id="contact-area" class="anim-5-all">
        <div class="container">
            <div class="row">
                <div class="contact">
                    <div class="section-title text-center">
                        <h2><span>{{trans('frontend.query')}}</span></h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="{{route('files.query_check')}}" method="POST">
                                {{csrf_field()}}
                                <input name="case_number" type="text" placeholder="{{trans('frontend.case_number')}}">
                                <button type="submit">{{trans('frontend.submit')}} <i class="fa fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End query area-->

    @if(session()->has('trials'))
        @if(count(session('trials'))>0)
            <section id="practice-v5-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="practice-right-sidebar">
                                <!--Start practice right single sidebar-->
                                <div class="practice-right-single-sidebar">
                                    <ul class="practice-law-box" role="tablist">
                                    @foreach(session('trials') as $trial)
                                        <!--Start single law box-->
                                            <li class="single-law-box active"
                                                data-tab-name="{{str_slug($trial->subject)}}">
                                                <a href="#{{str_slug($trial->subject)}}"
                                                   aria-controls="{{str_slug($trial->subject)}}" role="tab"
                                                   data-toggle="tab"
                                                   aria-expanded="true">{{$trial->subject}}<i
                                                            class="fa fa-angle-right"></i></a>
                                            </li>
                                            <!--End single law box-->
                                        @endforeach
                                    </ul>
                                </div>
                                <!--End practice right single sidebar-->

                            @if(count($trial->attorneys)>0)
                                <!--Start practice right single sidebar-->
                                    <div class="practice-right-single-sidebar">
                                        <div class="practice-v4-sidebar-title">
                                            <h3><span>{{trans('frontend.attorneys')}}</span></h3>
                                        </div>
                                        <div class="doenload-items">
                                            <ul>
                                                @foreach($trial->attorneys as $attorney)
                                                    <li><a href="mailto:{{$attorney->email}}">{{$attorney->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End practice right single sidebar-->
                            @endif

                            @if(count($trial->clients)>0)
                                <!--Start practice right single sidebar-->
                                    <div class="practice-right-single-sidebar">
                                        <div class="practice-v4-sidebar-title">
                                            <h3><span>{{trans('frontend.clients')}}</span></h3>
                                        </div>
                                        <div class="doenload-items">
                                            <ul>
                                                @foreach($trial->clients as $client)
                                                    <li><a href="mailto:{{$client->email}}">{{$client->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End practice right single sidebar-->
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 tab-content">
                            <div class="practice-left-content tab-pane fade active in" id="Criminal">
                                <div class="fix practice-left-middle-text">
                                    <h2>{{$trial->subject}}</h2>
                                    <p>{{$trial->description}}</p>
                                </div>
                                @if(count($trial->status))
                                    <div class="fix right-content-contact-box">
                                        <h1>{{$trial->status->label}}</h1>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif
@endsection
@push('styles')
<style type="text/css">
    #contact-area {
        padding-top: 95px;
        padding-bottom: 0px;
        margin-bottom: 20px;
    }
</style>
@endpush