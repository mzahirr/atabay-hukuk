@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Müvekkil oluştur</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('clients.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">

                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="identity" value="{{old('identity')}}"
                                   class="form-control"
                                   id="identity">
                            <label for="identity">Kimlik No</label>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
                            <label for="name">Ad soyad</label>
                        </div>

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
                                    <input type="text" name="email" value="{{old('email')}}" class="form-control"
                                           id="email">
                                    <label for="email">E-posta adresi</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="password" name="password" class="form-control"
                                   id="password">
                            <label for="password">Şifre</label>
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