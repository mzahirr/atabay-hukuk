@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Dava müvekkilleri</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('trials.clientStore',$trial->id)}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Seçiminiz</label>
                            <div class="col-md-9">
                                <select multiple="multiple" class="multi-select" id="my_multi_select1"
                                        name="clients[]" title="attorneys">
                                    @foreach($clients as $client)
                                        <option
                                                @if(count($client->trials)>0)
                                                @if($client->trials->contains($trial->id)) selected @endif
                                                @endif
                                                value="{{$client->id}}">{{$client->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn green">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<link href="/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/jquery-multi-select/css/multi-select.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
@endpush

@push('scripts')
<script src="/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
<script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/assets/pages/scripts/components-multi-select.min.js" type="text/javascript"></script>
@endpush