<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light " id="sidenav-main">

    <div class="container-fluid">
        @if(Auth::user()->hasRole('administrator'))
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        @endif
    <!-- Brand -->
        <div class="col m-2">
            <div class="card-body">
                <div class="row justify-content-center">

                    <a class=" pt-0" href="{{ route('home') }}">
                        <img src="{{ asset('icons/logo-small.png') }}" style="  height: 80px; object-fit: fill" class=""
                             alt="...">
                    </a>

                </div>
                <div class="row justify-content-center mt-1">
                    <p class="text-uppercase font-weight-bold h5-responsive ml-2" style="color: #213A84">MobiAd</p>
                </div>
            </div>
        </div>


        <!-- User -->
        <ul class="nav align-items-center d-md-none text-white">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('icons/user_icon.png') }}">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    {{--                <!-- {{ route('profile.edit') }} -->--}}
                    <a href="{{route('profile.edit')}}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="{{route('profile.edit')}}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('Home') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand h1">
                        <a href="{{ route('home') }}">

                            <img src="{{ asset('icons/logo-small.png') }}" class="navbar-brand-img" alt="...">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        <!-- Form -->
        <!-- Navigation -->
        @if(Auth::user()->hasRole('administrator'))
            <ul class="navbar-nav pl-3 ">
                <li class="nav-item text-kilimo-primary {{ request()->is('home') ? 'active' : '' }}">
                    <a class="nav-link text-kilimo-primary" href="{{ route('home') }}">
                        <i class="fa fa-home text-kilimo-primary "></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item {{ request()->is('menu') ? 'active' : '' }} ">
                    <a class="nav-link text-kilimo-primary" href="{{route('menu')}}">

                        <i class="fa fa-clipboard-list text-kilimo-primary">

                        </i>
                        {{ __('Menu') }}

                    </a>
                </li>
                <li class="nav-item {{ request()->is('messages') ? 'active' : '' }}">
                    <a class="nav-link text-kilimo-primary" href="{{route('messages')}}">
                        <i class="fa fa-comment-alt text-kilimo-primary"></i> {{ __('Messages') }}
                    </a>
                </li>
                <li class="nav-item {{ request()->is('entity.type.manage') ? 'active' : '' }}">
                    <a class="nav-link text-kilimo-primary" href="{{route('entity.type.manage')}}">
                        <i class="fa fa-sitemap text-kilimo-primary"></i> {{ __('Entity Types') }}
                    </a>
                </li>
                <li class="nav-item {{ request()->is('entity.manager') ? 'active' : '' }}">
                    <a class="nav-link text-kilimo-primary" href="{{route('entity.manager')}}">
                        <i class="fa fa-university text-kilimo-primary"></i> {{ __('Entities') }}
                    </a>
                </li>
                <li class="nav-item {{ request()->is('product.type.manage') ? 'active' : '' }}">
                    <a class="nav-link text-kilimo-primary" href="{{route('product.type.manage')}}">
                        <i class="fa fa-cubes text-kilimo-primary"></i> {{ __('Product Types') }}
                    </a>
                </li>
                <span class="dropdown-divider"></span>
                <li class="nav-item {{ request()->is('topics') ? 'active' : '' }}">
                    <a class="nav-link text-kilimo-primary" href="{{route('topics')}}">
                        <i class="fa fa-cubes text-kilimo-primary"></i> {{ __('Topics') }}
                    </a>
                </li>

            </ul>
        @endif
        </div>
    <!-- Divider -->
            <hr class="my-3">
    </div>


</nav>
