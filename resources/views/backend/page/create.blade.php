@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Sayfa oluştur</span>
                </div>
            </div>
            <div class="form">
                <form role="form" action="{{route('pages.store')}}" method="POST">
                    {{csrf_field()}}
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
                                                <input type="text" id="title" class="form-control" name="title"
                                                       value="{{old('title')}}">
                                                <label for="title">Başlık</label>
                                            </div>

                                            <div class="form-group">
                                                <textarea rows="8" name="body" class="form-control"
                                                          id="body" title="body">{{old('body')}}</textarea>
                                            </div>


                                        </div>
                                        <div class="tab-pane" id="portlet_tab2">
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                <input type="text" id="titleEN" class="form-control" name="titleEN"
                                                       value="{{old('titleEN')}}">
                                                <label for="titleEN">Başlık ingilizce</label>
                                            </div>


                                            <div class="form-group">
                                                <textarea rows="8" name="bodyEN" class="form-control"
                                                          id="bodyEN" title="bodyEN">{{old('bodyEN')}}</textarea>
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
@push('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#body').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null
        });
        $('#bodyEN').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null
        });
    });

</script>
@endpush