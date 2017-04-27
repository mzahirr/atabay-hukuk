<a href="{{route('user.show',$user->id)}}" class="btn btn-sm purple btn-outline filter-submit margin-bottom">
    <i class="fa fa-shield" aria-hidden="true"></i> Authorize
</a>
<a href="{{route('user.edit',$user->id)}}" class="btn btn-sm blue btn-outline filter-submit margin-bottom">
    <i class="fa fa-pencil"></i> Edit
</a>
{!! Form::open(['route' => ['user.destroy', $user->id],'method' => 'DELETE','class'=>'inline']) !!}
<button onclick="return confirm('Are you sure ?')" type="submit"
        class="btn btn-sm red btn-outline filter-submit margin-bottom">
    <i class="fa fa-trash"></i> Delete
</button>
{!! Form::close() !!}