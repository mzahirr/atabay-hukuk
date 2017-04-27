<a href="{{route('role.show',$role->id)}}" class="btn btn-sm purple btn-outline filter-submit margin-bottom">
    <i class="fa fa-shield" aria-hidden="true"></i> Authorize
</a>
<a href="{{route('role.edit',$role->id)}}" class="btn btn-sm blue btn-outline filter-submit margin-bottom">
    <i class="fa fa-pencil"></i> Edit
</a>
{!! Form::open(['route' => ['role.destroy', $role->id],'method' => 'DELETE','class'=>'inline']) !!}
<button onclick="return confirm('Are you sure ?')" type="submit"
        class="btn btn-sm red btn-outline filter-submit margin-bottom">
    <i class="fa fa-trash"></i> Delete
</button>
{!! Form::close() !!}