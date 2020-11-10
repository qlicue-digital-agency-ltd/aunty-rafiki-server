<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 18-Nov-19
 * Time: 17:27
 */
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> {{config('app.name', 'MobiAd')}} </title>
    <!-- MDB icon -->
    <link rel="icon" href="{{asset('icons/logo.png')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('MDB/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('MDB/css/mdb.min.css')}}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('MDB/css/style.css')}}">

{{--    <link href="{{ asset('argon/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    @yield('styles')
</head>
<body>
<!-- Start your project here-->
@auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@if(!Auth::user()->hasRole('administrator'))
<div class="col">
    @include('layouts.navbars.sidebar')
</div>
@else
    @include('layouts.navbars.sidebar')
@endif()

@endauth

<div class="main-content" >
    @include('layouts.navbars.navbar')
    @yield('content')
</div>

@guest()
    @include('layouts.footers.guest')
@endguest
<!-- End your project here-->

<!-- jQuery -->
<script type="text/javascript" src="{{asset('MDB/js/jquery.min.js')}} "></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('MDB/js/popper.min.js')}} "></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('MDB/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('MDB/js/mdb.min.js')}}"></script>
<script src="{{asset('popups/boot4alert.js')}}"></script>
<!-- Your custom scripts (optional) -->
{{--<script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>--}}
{{--<script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>--}}

{{--@stack('js')--}}

<!-- Argon JS -->
<script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>

<script type="text/javascript">
</script>
@yield('scripts')
</body>
</html>

