<a href="{{route('attorneys.edit',$attorney->id)}}" class="btn btn-sm blue btn-outline filter-submit margin-bottom">
    <i class="fa fa-pencil"></i> Düzenle
</a>
{!! Form::open(['route' => ['attorneys.destroy', $attorney->id],'method' => 'DELETE','class'=>'inline']) !!}
<button onclick="return confirm('Are you sure ?')" type="submit"
        class="btn btn-sm red btn-outline filter-submit margin-bottom">
    <i class="fa fa-trash"></i> Sil
</button>
{!! Form::close() !!}