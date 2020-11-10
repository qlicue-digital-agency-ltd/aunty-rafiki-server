
<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>

    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">

        <div class="row">
            <div class="col-12">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button class="close" type="button" data-dismiss="alert"><span>&times;</span></button>
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('msg'))
                    <div class="alert alert-success alert-dismissible">
                        <button class="close" type="button" data-dismiss="alert"><span>&times;</span></button>
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
            <div class="col-md-12 {{ $class ?? '' }}">
                <h1 class="display-2 text-white">{{ $title }}</h1>
                @if (isset($description) && $description)
                    <p class="text-white mt-0 mb-5">{{ $description }}</p>
                @endif
            </div>
        </div>
    </div>
</div> 