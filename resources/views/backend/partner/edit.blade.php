@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Referans güncelle</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('partners.update',$partner->id)}}" method="POST"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="name" value="{{$partner->name}}" class="form-control" id="name">
                            <label for="name">Referans adı</label>
                        </div>
                    </div>

                    @if(!is_null($partner->image))
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <div class="thumbnail">
                                <img src="{{asset($partner->image)}}">
                            </div>
                        </div>
                    @endif


                    <div class="form-group">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <label for="image">Referans Resmi</label>

                            <div class="input-group input-large">
                                <div class="form-control uneditable-input input-fixed input-medium"
                                     data-trigger="fileinput">
                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                    <span class="fileinput-filename"> </span>
                                </div>
                                <span class="input-group-addon btn default btn-file">
                                                                <span class="fileinput-new"> Dosya seç </span>
                                                                <span class="fileinput-exists"> Değiştir </span>
                                                                <input type="file" name="image"
                                                                       id="image"> </span>
                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists"
                                   data-dismiss="fileinput"> Kaldır </a>
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