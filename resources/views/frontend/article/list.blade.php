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
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="blog-items">
                        <!--Start Single blog item-->
                        <div class="single-blog-item">
                            <img src="/img/blog-1.jpg" alt="">
                            <div class="fix blog-post-date">
                                <h1><b>02</b> <br> july</h1>
                            </div>
                            <div class="single-bolg-title">
                                <h3>Heading of Blog</h3>
                                <div class="post-resource">
                                    <ul>
                                        <li class="authors"><a href="">By:<span>Michale John</span></a></li>
                                        <li class="tags"><a href="">Attorney Law</a></li>
                                        <li class="comments"><a href="">Comments: 5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog-text">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, co nsect etur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                                <div class="single-blog-read-more">
                                    <a href="">read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog item-->
                        <!--Start Single blog item-->
                        <div class="single-blog-item">
                            <img src="/img/blog-2.jpg" alt="">
                            <div class="fix blog-post-date">
                                <h1><b>02</b> <br> july</h1>
                            </div>
                            <div class="single-bolg-title">
                                <h3>Heading of Blog</h3>
                                <div class="post-resource">
                                    <ul>
                                        <li class="authors"><a href="">By:<span>Michale John</span></a></li>
                                        <li class="tags"><a href="">Attorney Law</a></li>
                                        <li class="comments"><a href="">Comments: 5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog-text">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, co nsect etur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                                <div class="single-blog-read-more">
                                    <a href="">read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog item-->
                        <!--Start Single blog item-->
                        <div class="single-blog-item">
                            <img src="/img/blog-3.jpg" alt="">
                            <div class="fix blog-post-date">
                                <h1><b>02</b> <br> july</h1>
                            </div>
                            <div class="single-bolg-title">
                                <h3>Heading of Blog</h3>
                                <div class="post-resource">
                                    <ul>
                                        <li class="authors"><a href="">By:<span>Michale John</span></a></li>
                                        <li class="tags"><a href="">Attorney Law</a></li>
                                        <li class="comments"><a href="">Comments: 5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog-text">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, co nsect etur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                                <div class="single-blog-read-more">
                                    <a href="">read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog item-->
                        <!--Start Single blog item-->
                        <div class="single-blog-item  single-last-blog-item">
                            <img src="/img/blog-4.jpg" alt="">
                            <div class="fix blog-post-date">
                                <h1><b>02</b> <br> july</h1>
                            </div>
                            <div class="single-bolg-title">
                                <h3>Heading of Blog</h3>
                                <div class="post-resource">
                                    <ul>
                                        <li class="authors"><a href="">By:<span>Michale John</span></a></li>
                                        <li class="tags"><a href="">Attorney Law</a></li>
                                        <li class="comments"><a href="">Comments: 5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog-text">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, co nsect etur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                                <div class="single-blog-read-more">
                                    <a href="">read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--End Single blog item-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="practice-v3-paginat">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li> <a href="#">2</a></li>
                                        <li> <a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--Start Left sidebar widget-->
                    <div class="left-sidebar">
                        <div class="left-sidebar-items">
                            <!--Start left sidebar single item-->
                            <div class="left-sidebar-single-item">
                                <div class="searchme">
                                    <form action="#" class="mysearchform">
                                        <input type="text" class="search" placeholder="Enter Search Keywords">
                                        <button><img src="/img/search-button.png" alt=""></button>
                                    </form>
                                </div>
                            </div>
                            <!--End left sidebar single item-->
                            <!--Start left sidebar single item-->
                            <div class="left-sidebar-single-item">
                                <div class="sidebar-widget-title">
                                    <h3><span>Practice Widget</span></h3>
                                </div>
                                <div class="practice-widget-items">
                                    <!--Start Practice widget single-item-->
                                    <div class="fix practice-widget-single-item">
                                        <div class="fix widget-lawyer-image">
                                            <img src="/img/practice-v4-left-sedebar-1.jpg" alt="">
                                        </div>
                                        <div class="fix widget-lawyer-name">
                                            <h4>Car Accident </h4>
                                            <p><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></p>
                                        </div>
                                    </div>
                                    <!--End Practice widget single-item-->
                                    <!--Start Practice widget single-item-->
                                    <div class="fix practice-widget-single-item">
                                        <div class="fix widget-lawyer-image">
                                            <img src="/img/practice-v4-left-sedebar-2.jpg" alt="">
                                        </div>
                                        <div class="fix widget-lawyer-name">
                                            <h4>Family Law </h4>
                                            <p><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></p>
                                        </div>
                                    </div>
                                    <!--End Practice widget single-item-->
                                    <!--Start Practice widget single-item-->
                                    <div class="fix practice-widget-single-item">
                                        <div class="fix widget-lawyer-image">
                                            <img src="/img/practice-v4-left-sedebar-3.jpg" alt="">
                                        </div>
                                        <div class="fix widget-lawyer-name">
                                            <h4>Business Law</h4>
                                            <p><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></p>
                                        </div>
                                    </div>
                                    <!--End Practice widget single-item-->
                                    <!--Start Practice widget single-item-->
                                    <div class="fix practice-widget-single-item">
                                        <div class="fix widget-lawyer-image">
                                            <img src="/img/practice-v4-left-sedebar-4.jpg" alt="">
                                        </div>
                                        <div class="fix widget-lawyer-name">
                                            <h4>Insurance Law</h4>
                                            <p><a href="#">Read more <i class="fa fa-long-arrow-right"></i></a></p>
                                        </div>
                                    </div>
                                    <!--End Practice widget single-item-->
                                </div>
                            </div>
                            <!--End left sidebar single item-->
                            <!--Start left sidebar single item-->
                            <div class="left-sidebar-single-item">
                                <div class="sidebar-widget-title">
                                    <h3><span>Categories</span></h3>
                                </div>
                                <div class="sidebar-widget-category">
                                    <ul>
                                        <li><a href="">Criminla Defence</a></li>
                                        <li><a href="">Professional Lawyers</a></li>
                                        <li><a href="">Employment Law</a></li>
                                        <li><a href="">Legal Consultation</a></li>
                                        <li><a href="">Trusted Law Agency</a></li>
                                        <li><a href="">Human Rights Law</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End left sidebar single item-->
                            <!--Start left sidebar single item-->
                            <div class="left-sidebar-single-item">
                                <div class="sidebar-widget-title">
                                    <h3><span>Text Widget</span></h3>
                                </div>
                                <div class="sidebar-text-widget">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore que laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arch itecto beatae vitae.</p>
                                </div>
                            </div>
                            <!--End left sidebar single item-->
                            <!--Start left sidebar single item-->
                            <div class="left-sidebar-single-item">
                                <div class="sidebar-widget-title">
                                    <h3><span>Tags Clouds</span></h3>
                                </div>
                                <div class="sidebar-tags-cloude">
                                    <ul>
                                        <li><a href="">Personal injury</a></li>
                                        <li><a href="">laywer</a></li>
                                        <li><a href="">Business Law</a></li>
                                        <li><a href="">Attorney</a></li>
                                        <li><a href="">Latest news</a></li>
                                        <li><a href="">Awards</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End left sidebar single item-->
                            <!--Start left sidebar single item-->
                            <div class="left-sidebar-single-item">
                                <div class="sidebar-widget-title">
                                    <h3><span>Meet Attorneys</span></h3>
                                </div>
                                <div class="sidebar-meet-attorneys">
                                    <img src="/img/meet-attorney.jpg" alt="">
                                    <div class="meet-attorney-name">
                                        <h4>Marry John</h4>
                                    </div>
                                </div>
                            </div>
                            <!--End left sidebar single item-->
                        </div>
                    </div>
                    <!--End Left sidebar widget-->
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')

@endpush