<section id="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="testimonial-list">
                    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                        @foreach($announcements as $announcement)
                            @if ($loop->first)
                                <!--Start Testimonial Single Item-->
                                    <div class="item active">
                                        <div class="single-testimonial-item text-center">
                                            <div class="testimonial-image-holder">
                                                <img src="/img/widget-icon-1.png" alt="">
                                            </div>
                                            <p>
                                                “{{$announcement->getTranslation->first()->announcement}}
                                                ”</p>
                                        </div>
                                    </div>
                                    <!--End Testimonial Single Item-->
                            @else
                                <!--Start Testimonial Single Item-->
                                    <div class="item">
                                        <div class="single-testimonial-item text-center">
                                            <div class="testimonial-image-holder">
                                                <img src="/img/widget-icon-1.png" alt="">
                                            </div>
                                            <p>
                                                “{{$announcement->getTranslation->first()->announcement}}
                                                ”</p>
                                        </div>
                                    </div>
                                    <!--End Testimonial Single Item-->
                                @endif
                            @endforeach


                            <a class="left testimonial-control" href="#testimonial-carousel" role="button"
                               data-slide="prev"><i
                                        class="fa fa-long-arrow-left testimonial-ctl-button"></i></a>
                            <a class="right testimonial-control" href="#testimonial-carousel" role="button"
                               data-slide="next"><i
                                        class="fa fa-long-arrow-right testimonial-ctl-button"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
