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
                                            <li class="single-law-box active" data-tab-name="Criminal">
                                                <a href="#Criminal" aria-controls="Criminal" role="tab"
                                                   data-toggle="tab"
                                                   aria-expanded="true">{{$trial->subject}}<i
                                                            class="fa fa-angle-right"></i></a>
                                            </li>
                                            <!--End single law box-->
                                    @endforeach
                                    </ul>
                                </div>
                                <!--End practice right single sidebar-->
                                <!--Start practice right single sidebar-->
                                <div class="practice-right-single-sidebar">
                                    <div class="practice-v4-sidebar-title">
                                        <h3><span>Download Docs</span></h3>
                                    </div>
                                    <div class="doenload-items">
                                        <ul>
                                            <li><a href="">Download Brochure</a></li>
                                            <li><a href="">Download PDF</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--End practice right single sidebar-->
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 tab-content">
                            <div class="practice-left-content tab-pane fade active in" id="Criminal">
                                <div class="fix practice-left-top-img">
                                    <div class="fix practice-left-top-left-img">
                                        <img src="img/practice-top-1.jpg" alt="">
                                    </div>
                                    <div class="fix practice-left-top-right-img">
                                        <img src="img/practice-top-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="fix practice-left-middle-text">
                                    <h2>Criminal Law</h2>
                                    <p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                        velit,
                                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                                        aliquam
                                        quaerat voluptatem.<br><br>Ut enim ad minima veniam, quis nostrum exercitationem
                                        ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                        Quis
                                        autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae
                                        consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                                </div>
                                <div class="fix practice-left-bottom-text">
                                    <div class="fix practice-bottom-left-img">
                                        <img src="img/practice-left-bottom.jpg" alt="">
                                    </div>
                                    <div class="fix practice-bottom-right-text">
                                        <h3>Duis aute irure dolor in reprehenderit in voluptate</h3>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                            sed
                                            quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                            Neque
                                            porro quisquam est, qui dolorem ipsum quia dolor sit amet.<br><br>Ut enim ad
                                            minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                            laboriosam,
                                            nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                                            reprehenderit
                                            qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum
                                            qui
                                            dolorem eum fugiat quo voluptas nulla pariatur</p>
                                    </div>
                                </div>
                                <div class="fix right-content-contact-box">
                                    <h1>All people are equal before the law. A good attorney.</h1>
                                    <a href="">Contact us</a>
                                </div>
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
    }
</style>
@endpush