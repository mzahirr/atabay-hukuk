@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Dava dosya durumu</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('trials.statusStore',$trial->id)}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group form-md-line-input has-success">
                            <select class="form-control" id="status" name="status">
                                <option value="">Henüz işleme alınmadı.</option>
                                @foreach($statuses as $status)
                                    <option
                                            @if(!is_null($trial->status))
                                            @if($trial->status->id == $status->id) selected @endif
                                            @endif
                                            value="{{$status->id}}">{{$status->label}}</option>
                                @endforeach
                            </select>
                            <label for="status">Dosya durumu</label>
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
@endpush
@push('scripts')
@endpush