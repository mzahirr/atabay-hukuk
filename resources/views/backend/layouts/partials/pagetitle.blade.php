<h3 class="page-title">
    @foreach(request()->segments() as $segment)
        {{ucfirst($segment)}}
    @endforeach
    <small>
        @foreach(request()->segments() as $segment)
            {{$segment}}
        @endforeach
    </small>
</h3>