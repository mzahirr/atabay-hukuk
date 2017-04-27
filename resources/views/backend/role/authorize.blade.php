@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> Rol Yetkilendir</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('roles.authorize',$role->id)}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group">
                            <label>İzinler</label>
                            <div class="input-group">
                                <div class="icheck">
                                    @foreach($permissions as $permission)
                                        <label>
                                            <input type="checkbox" name="permissions[]"
                                                   @if($role->permissions->contains($permission->id))
                                                   checked
                                                   @endif
                                                   class="icheck" value="{{$permission->id}}">
                                            {{$permission->label}}
                                        </label>
                                        <div style="clear: both"></div>
                                    @endforeach
                                </div>
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
<link href="/assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css"/>
@endpush
@push('scripts')
<script src="/assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
@endpush