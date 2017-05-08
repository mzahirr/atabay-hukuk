@foreach($pages as $page)
    @if(is_null($page->parent_id))
        <li @if(count($page->subPages)>0) class="dropdown" @endif>
            <a href="{{route('pages.show',$page->id)}}">{{$page->getTranslation->first()->title}}</a>
            @if(count($page->subPages)>0)
                <ul class="submenu">
                    @foreach($page->subPages as $subPage)
                        <li>
                            <a href="{{route('pages.show',$subPage->id)}}">{{$subPage->getTranslation->first()->title}}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endif
@endforeach