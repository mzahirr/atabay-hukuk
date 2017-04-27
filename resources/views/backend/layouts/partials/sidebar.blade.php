<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"></div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="nav-item @if(request()->is('dashboard')) active @endif">
                <a href="{{route('backend.dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    @if(request()->is('dashboard')) <span class="selected"></span> @endif
                </a>
            </li>

            @can(env('SYSTEM_MANAGEMENT'))
                <li class="heading">
                    <h3 class="uppercase">Sistem Yönetimi</h3>
                </li>
                <li class="nav-item @if(request()->is('permissions/*') || request()->is('permissions')) active open @endif">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-layers"></i>
                        <span class="title">İzinler</span>
                        @if(request()->is('permissions/*') || request()->is('permissions'))
                            <span class="selected"></span>
                        @endif
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item @if(request()->is('permissions/create')) active open @endif">
                            <a href="{{route('permissions.create')}}" class="nav-link ">
                                <span class="title">Ekle</span>
                                @if(request()->is('permissions/create'))
                                    <span class="selected"></span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item @if(request()->is('permissions')) active open @endif">
                            <a href="{{route('permissions.index')}}" class="nav-link ">
                                <span class="title">Listele</span>
                                @if(request()->is('permissions'))
                                    <span class="selected"></span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if(request()->is('roles/*') || request()->is('roles')) active open @endif">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-layers"></i>
                        <span class="title">Roller</span>
                        @if(request()->is('roles/*') || request()->is('roles'))
                            <span class="selected"></span>
                        @endif
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item @if(request()->is('roles/create')) active open @endif">
                            <a href="{{route('roles.create')}}" class="nav-link ">
                                <span class="title">Ekle</span>
                                @if(request()->is('roles/create'))
                                    <span class="selected"></span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item @if(request()->is('roles')) active open @endif">
                            <a href="{{route('roles.index')}}" class="nav-link ">
                                <span class="title">Listele</span>
                                @if(request()->is('roles'))
                                    <span class="selected"></span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan

            @can(env('USER_MANAGEMENT'))
                <li class="heading">
                    <h3 class="uppercase">Kullanıcı Yönetimi</h3>
                </li>
                <li class="nav-item @if(request()->is('users/*') || request()->is('users')) active open @endif">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-layers"></i>
                        <span class="title">Kullanıcılar</span>
                        @if(request()->is('users/*') || request()->is('users'))
                            <span class="selected"></span>
                        @endif
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item @if(request()->is('users/create')) active open @endif">
                            <a href="{{route('users.create')}}" class="nav-link ">
                                <span class="title">Ekle</span>
                                @if(request()->is('users/create'))
                                    <span class="selected"></span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item @if(request()->is('users')) active open @endif">
                            <a href="{{route('users.index')}}" class="nav-link ">
                                <span class="title">Listele</span>
                                @if(request()->is('users'))
                                    <span class="selected"></span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->