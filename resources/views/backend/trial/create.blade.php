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
                                    <input type="text" name="court" value="{{old('court')}}" class="form-control"
                                           id="court">
                                    <label for="court">Mahkeme</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="subject" value="{{old('subject')}}" class="form-control"
                                   id="subject">
                            <label for="subject">Konu</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <textarea class="form-control" rows="3" title="description" id="description"
                                      name="description">{{old('description')}}</textarea>
                            <label for="description">Açıklama</label>
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