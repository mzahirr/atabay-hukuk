@extends('frontend.layouts.master')
@push('meta')
<meta property="og:url" content="{{route('news.show',$article->id)}}"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="{{ config('app.name') }}"/>
<meta property="og:description" content="{{ config('app.name') }}"/>
<meta property="og:image" content="{{asset($article->image)}}"/>
@endpush
@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-text text-center">
                            <h1>{{trans('frontend.articles')}}</h1>
                            <ul class="breadcrumbs">
                                <li><a href="{{url('/')}}">{{trans('frontend.homepage')}}</a><i
                                            class="fa fa-angle-right"></i></li>
                                <li>
                                    <a href="{{route('news.show',$article->id)}}">{{str_limit($article->getTranslation->first()->subject,50)}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog-v1-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-items">
                        <!--Start Single blog item-->
                        <div class="single-blog-item">
                            <img src="{{asset($article->image)}}"
                                 alt="{{$article->getTranslation->first()->subject}}">
                            <div class="fix blog-post-date">
                                <h1><b>{{$article->created_at->format('d')}}</b>
                                    <br> {{$article->created_at->formatLocalized('%B')}}</h1>
                            </div>
                            <div class="single-bolg-title">
                                <h3>{{$article->getTranslation->first()->subject}}</h3>
                                <div class="post-resource">
                                    <ul>
                                        <li class="authors"><span>{{$article->user->name}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog-text">
                                <p>{{$article->getTranslation->first()->description}}</p>
                            </div>
                            <div class="fb-share-button" data-href="{{request()->fullUrl()}}"
                                 data-layout="button_count" data-size="small" data-mobile-iframe="true"><a
                                        class="fb-xfbml-parse-ignore" target="_blank"
                                        href="https://www.facebook.com/sharer/sharer.php?u={{request()->fullUrl()}}">Paylaş</a>
                            </div>
                        </div>
                        <!--End Single blog item-->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')

@endpush

@push('scripts')

@endpush