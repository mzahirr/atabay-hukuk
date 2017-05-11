@extends('frontend.layouts.master')
@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-text text-center">
                            <h1>{{trans('frontend.activities')}}</h1>
                            <ul class="breadcrumbs">
                                <li><a href="{{url('/')}}">{{trans('frontend.homepage')}}</a><i
                                            class="fa fa-angle-right"></i></li>
                                <li>
                                    <a href="{{route('actions.index')}}">{{trans('frontend.activities')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start practice v3 area css-->
    <section id="practice-v3-area">
        <div class="container">
            <div class="row">
                <div class="practice-v3">
                @foreach($activities as $activity)
                    <!--Start practice v3 single item-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="practice-v3-single-item">
                                <div class="practice-v3-single-item-border">
                                    <div class="practice-v3-right-content">
                                        <div class="practice-v2-single-item-title practice-v3-title">
                                            <h4><span>{{$activity->getTranslation->first()->subject}}</span></h4>
                                        </div>
                                        <div class="practice-v2-single-item-text">
                                            <p>{{$activity->getTranslation->first()->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End practice v3 single item-->
                    @endforeach

                    <div class="col-lg-12">
                        <div class="practice-v3-paginat">
                            {{$activities->render()}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End practice v3 area css-->
@endsection
@push('styles')

@endpush