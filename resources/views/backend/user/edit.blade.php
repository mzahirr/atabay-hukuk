@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-pin font-green"></i>
                    <span class="caption-subject bold"> User Edit</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('user.update',$user->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="username" value="{{$user->username}}" class="form-control"
                                   id="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="text" name="email" value="{{$user->email}}" class="form-control" id="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label has-success">
                            <input type="password" name="password" class="form-control"
                                   id="password">
                            <label for="password">Password</label>
                        </div>
                        @if($roles->count())
                            <div class="form-group">
                                <label>Roles</label>
                                <div class="input-group">
                                    <div class="icheck">
                                        @foreach($roles as $role)
                                            <label>
                                                <input type="checkbox" name="roles[]"
                                                       @if($user->roles->contains('id',$role->id))
                                                       checked
                                                       @endif
                                                       class="icheck" value="{{$role->id}}">
                                                {{$role->label}}
                                            </label>
                                            <div style="clear: both"></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($permissions->count())
                            <div class="form-group">
                                <label>Permissions</label>
                                <div class="input-group">
                                    <div class="icheck">
                                        @foreach($permissions as $permission)
                                            <label>
                                                <input type="checkbox" name="permissions[]"
                                                       @if($user->specialPermissions->contains('id',$permission->id))
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
                        @endif
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
<link href="/assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css"/>
@endpush
@push('scripts')
<script src="/assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
@endpush