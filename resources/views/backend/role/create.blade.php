@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> İzin oluştur</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('roles.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="label" value="{{old('label')}}" class="form-control" id="label">
                            <label for="label">Rol adı</label>
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