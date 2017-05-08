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
                        <a href="attorney-v1.html">{{trans('frontend.corporate')}}</a>
                        <ul class="submenu">
                            <li>
                                <a href="attorney-v2.html">{{trans('frontend.about-us')}}</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.html">{{trans('frontend.attorneys')}}</a></li>
                    <li><a href="blog-left-sidebar.html">{{trans('frontend.articles')}}</a></li>
                    <li><a target="_blank"
                           href="{{env('TURKODEME_URL')}}">{{trans('frontend.collection')}}</a>
                    </li>
                    <li><a href="contact.html">{{trans('frontend.contact')}}</a></li>
                    <li class="dropdown">
                        <a href="attorney-v1.html">{{trans('frontend.language')}}</a>
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