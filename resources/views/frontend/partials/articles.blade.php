<!--Start latest news area-->
<section id="latest-news-area" class="anim-5-all">
    <div class="container">
        <div class="row">
            <div class="latest-news">
                <div class="section-title text-center">
                    <span>{{trans('frontend.articles')}}</span>
                    <h2><span>{{trans('frontend.article_subhead')}}</span></h2>
                </div>
            @foreach($articles as $article)
                <!--Start Single news item-->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bottom">
                        <div class="single-news-item">
                            <div class="news-image-holder">
                                <img src="{{$article->image ?? '/img/news-1.jpg'}}" alt="{{$article->subject}}">
                                <div class="overlay">
                                    <a href="{{route('articles.show',$article->id)}}"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="published-date-wrapper">
                                    <div class="published-date">
                                        <h3>{{$article->created_at->format('d')}}</h3>
                                        <p>{{$article->created_at->formatLocalized('%B')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-text">
                                <ul class="meta text-center">
                                    <li><a href="{{route('articles.show',$article->id)}}"><i
                                                    class="fa fa-user"></i> {{$article->user->name}}</a></li>
                                </ul>
                                <h4 title="{{$article->getTranslation->first()->subject}}">{{str_limit($article->getTranslation->first()->subject,20)}}</h4>
                                <p>{{str_limit($article->getTranslation->first()->description,100)}}</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single news item-->
                @endforeach
            </div>
        </div>


    </div>
</section>
<!--End latest news area-->