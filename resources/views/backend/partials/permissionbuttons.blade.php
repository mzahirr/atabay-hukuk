<a href="{{route('permission.edit',$permission->id)}}" class="btn btn-sm blue btn-outline filter-submit margin-bottom">
    <i class="fa fa-pencil"></i> Edit
</a>
{!! Form::open(['route' => ['permission.destroy', $permission->id],'method' => 'DELETE','class'=>'inline']) !!}
<button onclick="return confirm('Are you sure ?')" type="submit"
        class="btn btn-sm red btn-outline filter-submit margin-bottom">
    <i class="fa fa-trash"></i> Delete
</button>
{!! Form::close() !!}