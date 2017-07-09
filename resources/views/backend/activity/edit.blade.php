@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Faaliyet güncelle</span>
                </div>
            </div>
            <div class="form">
                <form role="form" action="{{route('activities.update',$activity->id)}}" method="POST">
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
                                                <input class="form-control" type="text" name="subject" id="subject"
                                                       value="{{$activity->getTranslation('tr')->first()->subject ?? ''}}">
                                                <label for="subject">Başlık</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea rows="8" name="description" class="form-control"
                                                          id="description"
                                                          title="description">{{$activity->getTranslation('tr')->first()->description ?? ''}}</textarea>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="portlet_tab2">
                                            <div class="form-group form-md-line-input form-md-floating-label has-success">
                                                <input class="form-control" type="text" name="subjectEN" id="subjectEN"
                                                       value="{{$activity->getTranslation('en')->first()->subject ?? ''}}">
                                                <label for="subjectEN">Başlık ingilizce</label>
                                            </div>
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea rows="8" name="descriptionEN" class="form-control"
                                                          id="descriptionEN"
                                                          title="descriptionEN">{{$activity->getTranslation('en')->first()->description ?? ''}}</textarea>
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
@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#description').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null
        });
        $('#descriptionEN').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null
        });
    });

</script>
@endpush