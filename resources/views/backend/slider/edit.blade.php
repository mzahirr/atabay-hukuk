@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Slider düzenle</span>
                </div>
            </div>
            <div class="form">
                <form role="form" action="{{route('sliders.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
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
                                                <input type="text" id="title" class="form-control" name="titleTR"
                                                       value="{{$slider->getTranslation('tr')->first()->title ?? ''}}">
                                                <label for="title">Başlık</label>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="portlet_tab2">
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                <input type="text" id="titleEN" class="form-control" name="titleEN"
                                                       value="{{$slider->getTranslation('en')->first()->title ?? ''}}">
                                                <label for="titleEN">Başlık ingilizce</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <img src="{{asset($slider->img_source)}}">

                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <label for="img_source">Slider Resmi</label>

                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input input-fixed input-medium"
                                                 data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                <span class="fileinput-filename"> </span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                                                                <span class="fileinput-new"> Dosya seç </span>
                                                                <span class="fileinput-exists"> Değiştir </span>
                                                                <input type="file" name="img_source"
                                                                       id="img_source"> </span>
                                            <a href="javascript:;" class="input-group-addon btn red fileinput-exists"
                                               data-dismiss="fileinput"> Kaldır </a>
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
@push('styles')
<link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
@endpush
@push('scripts')
<script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
