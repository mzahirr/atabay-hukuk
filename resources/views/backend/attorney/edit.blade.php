@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Avukat düzenle</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('attorneys.update',$attorney->id)}}" method="POST"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="name" value="{{$attorney->name}}" class="form-control" id="name">
                            <label for="name">Ad soyad</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="email" value="{{$attorney->email}}" class="form-control"
                                   id="email">
                            <label for="email">E-posta adresi</label>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="number" value="{{$attorney->number}}" class="form-control"
                                   id="number">
                            <label for="number">Numara</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <textarea rows="8" name="description" class="form-control" id="description"
                                      title="description">{{$attorney->getTranslation('tr')->first()->description}}</textarea>
                                    <label for="description">Açıklama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <textarea rows="8" name="descriptionEN" class="form-control" id="descriptionEN"
                                      title="descriptionEN">{{$attorney->getTranslation('tr')->first()->descriptionEN}}</textarea>
                                    <label for="descriptionEN">İngilizce açıklama</label>
                                </div>
                            </div>

                        </div>

                        @if(!is_null($attorney->image))
                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                <div class="thumbnail">
                                    <img src="{{asset($attorney->image)}}">
                                </div>
                            </div>
                        @endif

                        <div class="form-group">

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <label for="image">Profil Resmi</label>

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