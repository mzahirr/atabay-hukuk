@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 ">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> {{ucfirst(request()->segment(1))}}
                </div>
                <div class="tools"></div>
            </div>
            <div class="portlet-body">
                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
@endsection
@push('styles')

@endpush
@push('scripts')
{!! $dataTable->scripts() !!}
@endpush