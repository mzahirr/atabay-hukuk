<!--Start legal problem area-->
<section id="legal-problem-area" class="anim-5-all">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="legal-problem-text">
                    <h2>{{trans('frontend.watch_word')}}</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="get-free-consultation-button">
                    <a href="{{route('contacts.index')}}">{{trans('frontend.consultant')}} <i
                                class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End legal problem area-->
<!--Start Footer widget area-->
<section id="footer-widget-area">
    <div class="container">
        <div class="row">
            <!--Start Single Footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="footer-logo">
                        <img src="/img/footer-logo.png" alt="">
                    </div>
                    <div class="widget-text">
                        <p>Ulusal ve uluslararası şirketleri, finansal kuruluşları ve gerçek kişileri, ceza hukuku,
                            dava, tahkim ve uyuşmazlık hukuku ve icra hukuku başta olmak üzere Türkiye’deki hukuki
                            ihtiyaçlar konusunda uluslararası standartlarda temsil eden Atabay Hukuk Bürosu, insan
                            haklarına saygı ve hukuk devleti ilkelerine dayalı ısrarlı bir hukuki mücadeleyi ilke
                            edinmiştir...</p>
                    </div>
                    <div class="widget-social-links">
                        <a href="{{env('FACEBOOK_ADDRESS')}}"><i class="fa fa-facebook mysocial_style"></i></a>
{{--
                        <a href="{{env('TWITTER_ADDRESS')}}"><i class="fa fa-twitter mysocial_style"></i></a>
                        <a href="{{env('GOOGLE_ADDRESS')}}"><i class="fa fa-google-plus mysocial_style"></i></a>
                        <a href="{{env('LINKEDIN_ADDRESS')}}"><i class="fa fa-linkedin mysocial_style"></i></a>
--}}
                    </div>
                </div>
            </div>
            <!--End Single Footer widget-->
        @if(count($links)>0)
            <!--Start Single Footer widget-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <div class="quick-links">
                            <h3>{{trans('frontend.quick_links')}}</h3>
                            <ul class="left-quick-links alignleft">
                                @foreach($links->take(5) as $link)
                                    <li><i class="fa fa-angle-right"></i>
                                        <a target="_blank" href="{{$link->url}}">{{$link->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <ul>
                                @foreach($links->slice(5,count($links))->take(5) as $link)
                                    <li><i class="fa fa-angle-right"></i>
                                        <a target="_blank" href="{{$link->url}}">{{$link->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Single Footer widget-->
        @endif

        <!--Start Single Footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="widget-get-intouch">
                        <h3>{{trans('frontend.get_in_touch')}}</h3>
                        <ul>
                            <li class="location">Filistin CAD.kader sokak No 6/7 G.O.P / Çankaya / Ankara</li>
                            <li class="phone">312 466 44 44</li>
                            <li class="website">312 466 44 52</li>
                            <li class="envelop">contact@atabayhukuk.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Single Footer widget-->
        </div>
    </div>
</section>
<!--End Footer widget area-->
<!--Start Footer area-->
<section id="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="copy-right-text">
                    <p>COPYRIGHT © {{config('app.name')}} {{date('Y')}}. ALL RIGHTS RESERVED. </p>
                </div>
            </div>
            <div class="col-lg-2 col-lg-offset-5">
                <div class="created-text">
                    <p><a href="//www.weberkent.com">WEBERKENT INC.</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Footer area-->