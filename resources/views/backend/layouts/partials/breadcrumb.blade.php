<ul class="page-breadcrumb">
    <li>
        <a href="{{route('backend.dashboard')}}">Dashboard</a>
        <i class="fa fa-circle"></i>
    </li>
    @foreach(request()->segments() as $segment)
        @if($loop->last)
            <li>
                <span>{{ucfirst($segment)}}</span>
            </li>
        @else
            <li>
                <span>{{ucfirst($segment)}}</span>
                <i class="fa fa-circle"></i>
            </li>
        @endif
    @endforeach

</ul>