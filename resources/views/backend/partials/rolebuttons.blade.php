<a href="{{route('roles.show',$role->id)}}" class="btn btn-sm purple btn-outline filter-submit margin-bottom">
    <i class="fa fa-shield" aria-hidden="true"></i> Yetkilendir
</a>
<a href="{{route('roles.edit',$role->id)}}" class="btn btn-sm blue btn-outline filter-submit margin-bottom">
    <i class="fa fa-pencil"></i> Düzenle
</a>
{!! Form::open(['route' => ['roles.destroy', $role->id],'method' => 'DELETE','class'=>'inline']) !!}
<button onclick="return confirm('Are you sure ?')" type="submit"
        class="btn btn-sm red btn-outline filter-submit margin-bottom">
    <i class="fa fa-trash"></i> Sil
</button>
{!! Form::close() !!}