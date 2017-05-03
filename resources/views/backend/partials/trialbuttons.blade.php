<a href="{{route('trials.show',$trial->id)}}" class="btn btn-sm purple btn-outline filter-submit margin-bottom">
    <i class="fa fa-info"></i> Detay
</a>
<a href="{{route('trials.status',$trial->id)}}" class="btn btn-sm dark btn-outline filter-submit margin-bottom">
    <i class="fa fa-info"></i> Durum
</a>
<a href="{{route('trials.attorney',$trial->id)}}" class="btn btn-sm yellow btn-outline filter-submit margin-bottom">
    <i class="fa fa-info"></i> Avukat
</a>
<a href="{{route('trials.client',$trial->id)}}" class="btn btn-sm green btn-outline filter-submit margin-bottom">
    <i class="fa fa-info"></i> Müvekkil
</a>
<a href="{{route('trials.edit',$trial->id)}}" class="btn btn-sm blue btn-outline filter-submit margin-bottom">
    <i class="fa fa-pencil"></i> Düzenle
</a>
{!! Form::open(['route' => ['trials.destroy', $trial->id],'method' => 'DELETE','class'=>'inline']) !!}
<button onclick="return confirm('Are you sure ?')" type="submit"
        class="btn btn-sm red btn-outline filter-submit margin-bottom">
    <i class="fa fa-trash"></i> Sil
</button>
{!! Form::close() !!}