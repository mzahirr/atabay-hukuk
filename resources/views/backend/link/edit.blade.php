@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold uppercase"> Bağlantı düzenle</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('links.update',$link->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="name" value="{{$link->name}}" class="form-control"
                                   id="name">
                            <label for="name">Bağlantı adı</label>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="url" value="{{$link->url}}" class="form-control"
                                   id="url">
                            <label for="url">Bağlantı</label>
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

@endpush
@push('scripts')

@endpush