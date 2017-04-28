@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Dava oluştur</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('trials.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                                    <input type="text" name="number" value="{{old('number')}}" class="form-control"
                                           id="number">
                                    <label for="number">Numara</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                                    <input type="text" name="label" value="{{old('label')}}" class="form-control"
                                           id="label">
                                    <label for="label">Ad</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="subject" value="{{old('subject')}}" class="form-control"
                                   id="subject">
                            <label for="subject">Konu</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="time" value="{{old('time')}}" class="form-control"
                                   id="time">
                            <label for="time">Süre</label>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <textarea class="form-control" rows="3" title="trial" id="trial"></textarea>
                            <label for="trial">Olay</label>
                        </div>

                        <div class="form-group">

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <label for="evidence">Eklentiler</label>

                                <div class="input-group input-large">
                                    <div class="form-control uneditable-input input-fixed input-medium"
                                         data-trigger="fileinput">
                                        <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                        <span class="fileinput-filename"> </span>
                                    </div>
                                    <span class="input-group-addon btn default btn-file">
                                                                <span class="fileinput-new"> Dosya seç </span>
                                                                <span class="fileinput-exists"> Değiştir </span>
                                                                <input type="file" name="evidence"
                                                                       id="evidence"> </span>
                                    <a href="javascript:;" class="input-group-addon btn red fileinput-exists"
                                       data-dismiss="fileinput"> Kaldır </a>
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

@endpush