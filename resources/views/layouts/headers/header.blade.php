<div class="header bg-gradient-mobile_afya pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <p class="font-weight-bold"><h1 class=" text-white">{{$title}}</h1></p>
            </div>
        </div>
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
</div>
