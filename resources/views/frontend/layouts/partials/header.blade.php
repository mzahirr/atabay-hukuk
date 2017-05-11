@inject('pages', 'App\Services\PagesService')
<!--Start Top section-->
<header class="stricky anim-5-all">
    <div class="container">
        <div class="logo pull-left">
            <a href="{{url('/')}}">
                <img src="/img/logo-2.png" alt="Logo image">
            </a>
        </div>
        <nav class="mainmenu pull-right">
            <div class="nav-holder">
                <ul>
                    <li><a href="{{url('/')}}">{{trans('frontend.homepage')}}</a></li>
                    <li class="dropdown">
                        <a href="#">{{trans('frontend.corporate')}}</a>
                        <ul class="submenu">
                            <li><a href="{{route('actions.index')}}">{{trans('frontend.activities')}}</a></li>
                            {!! $pages->generate() !!}
                        </ul>
                    </li>
                    <li><a href="{{route('lawyers.index')}}">{{trans('frontend.attorneys')}}</a></li>
                    <li><a href="{{route('news.index')}}">{{trans('frontend.articles')}}</a></li>
                    <li><a target="_blank"
                           href="{{env('TURKODEME_URL')}}">{{trans('frontend.collection')}}</a>
                    </li>
                    <li><a href="{{route('contacts.index')}}">{{trans('frontend.contact')}}</a></li>
                    <li class="dropdown">
                        <a href="#">{{trans('frontend.management')}}</a>
                        <ul class="submenu">
                            @if(auth()->check())
                                @can(env('PANEL-YÖNETİMİ'))
                                    <li>
                                        <a target="_blank" href="{{route('backend.dashboard')}}">Panel</a>
                                    </li>
                                @endcan
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                        Çıkış yap</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;visibility: hidden;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('login')}}">{{trans('frontend.login')}}</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{route('files.query')}}">{{trans('frontend.query')}}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">{{trans('frontend.language')}}</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('locale.setLocale','tr')}}">TR</a>
                            </li>
                            <li>
                                <a href="{{route('locale.setLocale','en')}}">EN</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="nav-expander">
                <ul>
                    <li>
                        <button class="nav-collapser"><i class="fa fa-bars"></i></button>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</header>
<!--End Top section-->

