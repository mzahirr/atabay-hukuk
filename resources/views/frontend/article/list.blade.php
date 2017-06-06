@extends('frontend.layouts.master')
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
                                    <a href="{{route('news.index')}}">{{trans('frontend.articles')}}</a>
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
                    @if(count($articles)>0)
                        <div class="blog-items">

                        @foreach($articles as $article)
                            <!--Start Single blog item-->
                                <div class="single-blog-item">
                                    <img src="{{asset($article->image)}}"
                                         alt="{{$article->getTranslation->first()->subject}}">
                                    <div class="fix blog-post-date">
                                        <h1><b>{{$article->created_at->format('d')}}</b>
                                            <br> {{$article->created_at->formatLocalized('%B')}}</h1>
                                    </div>
                                    <div class="single-bolg-title">
                                        <h3>{{str_limit($article->getTranslation->first()->subject,100)}}</h3>
                                        <div class="post-resource">
                                            <ul>
                                                <li class="authors"><span>{{$article->user->name}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-blog-text">
                                        <p>{{str_limit($article->getTranslation->first()->description,500)}}</p>
                                        <div class="single-blog-read-more">
                                            <a href="{{route('news.show',$article->id)}}">{{trans('frontend.read_more')}}
                                                <i
                                                        class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single blog item-->
                            @endforeach
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="practice-v3-paginat">
                                        {{$articles->render()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-center">
                            <h1>{{trans('frontend.article_exists')}}</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')

@endpush