<section id="featured-services-area">
    <div class="container">
        <div class="featured-services">
            <div class="section-title text-center">
                <h2><span>{{trans('frontend.activities')}}</span></h2>
            </div>
            <div class="row">
            @foreach($activities->take(3) as $activity)
                <!--Star Single Featured Services-->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-featured">
                            <div class="single-featured-icon alignleft">
                                <i class="flaticon-familiar17"></i>
                            </div>
                            <div class="single-featured-text">
                                <h5>{{$activity->getTranslation->first()->subject}}</h5>
                                <p>{{str_limit($activity->getTranslation->first()->description,100)}}</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Featured Services-->
                @endforeach
            </div>
            <div class="row">
                <div class="bottom-featured">
                @foreach($activities->slice(3,count($activities))->take(3) as $activity)
                    <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-featured">
                                <div class="single-featured-icon alignleft">
                                    <i class="flaticon-familiar17"></i>
                                </div>
                                <div class="single-featured-text">
                                    <h5>{{$activity->getTranslation->first()->subject}}</h5>
                                    <p>{{str_limit($activity->getTranslation->first()->description,100)}}</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
