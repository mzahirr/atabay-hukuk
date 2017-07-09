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
                                <h5>
                                    {{$activity->getTranslation->first()->subject}}
                                </h5>
                                <p class="pointer" data-toggle="modal"
                                   data-target="#myModal{{$activity->id}}">{{str_limit($activity->getTranslation->first()->description,100)}}</p>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal{{$activity->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title"
                                                    id="myModalLabel">{{$activity->getTranslation->first()->subject}}</h4>
                                            </div>
                                            <div class="modal-body">
                                                {{$activity->getTranslation->first()->description}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <p class="pointer" data-toggle="modal"
                                       data-target="#myModal{{$activity->id}}">{{str_limit($activity->getTranslation->first()->description,100)}}</p>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal{{$activity->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title"
                                                        id="myModalLabel">{{$activity->getTranslation->first()->subject}}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    {{$activity->getTranslation->first()->description}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

@push('styles')
<style type="text/css">
    .pointer {
        cursor: pointer;
    }

    .modal {
        text-align: center;
        padding: 0 !important;
    }

    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }
</style>
@endpush
