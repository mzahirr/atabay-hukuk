@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Duyuru güncelle</span>
                </div>
            </div>
            <div class="form">
                <form role="form" action="{{route('announcements.update',$announcement->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-body">
                        <div class="row">
                            <div class="portlet light">
                                <div class="portlet-title tabbable-line">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#portlet_tab1" data-toggle="tab"> TR </a>
                                        </li>
                                        <li>
                                            <a href="#portlet_tab2" data-toggle="tab"> EN </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_tab1">
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                        <textarea rows="8" name="announcement" class="form-control"
                                                  id="announcement">{{$announcement->getTranslation('tr')->first()->announcement}}</textarea>
                                                <label for="announcement">Duyuru metni</label>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="portlet_tab2">
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                        <textarea rows="8" name="announcementEN" class="form-control"
                                                  id="announcementEN">{{$announcement->getTranslation('en')->first()->announcement}}</textarea>
                                                <label for="announcementEN">Duyuru metni ingilizce</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn green">Kaydet</button>
                        <button type="reset" class="btn default">İptal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection