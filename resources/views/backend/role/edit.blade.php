@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold uppercase"> Role Edit</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('role.update',$role->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="label" value="{{$role->label}}" class="form-control"
                                   id="label">
                            <label for="label">Permission label</label>
                        </div>
                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn green">Submit</button>
                        <button type="reset" class="btn default">Cancel</button>
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