<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark" >
    <div class="container px-4">
        <div class="row">
            <a class="" href="{{ route('home') }}">
                {{--<span class="avatar avatar-lg">--}}
                   <img class="avatar circle" style="object-fit: fill; background-color: #FFFFFF"    src="{{ asset('icons/logo-small.png') }}" />
                {{--</span>--}}

            </a>
            <p class="h4-responsive font-weight-bold text-white mt-1 ml-2"> MobiAd </p>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <div class="row">
                            <img src="{{ asset('icons/logo.png') }}">
                            <span class="m-2 my-auto"><h3>MobiAd</h3></span>
                        </div>

                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                        <i class="ni ni-key-25"></i>
                        <span class="nav-link-inner--text">{{ __('Login') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                </li>
            </ul>
        </div>
    </div>
</nav>
