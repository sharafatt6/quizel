<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link rel="apple-touch-icon" href="{{asset('images/me.png')}}">
        <link rel="shortcut icon" type="image/png" href="{{asset('images/me.png')}}">

    <link href="{{asset('backend/css/chartist.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{asset('backend/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark" data-bs-theme="dark">

    <div id="layout-wrapper">
        @include('backend.components.header')
        @include('backend.components.sidebar')
        <div class="main-content">
            @yield('content')
        </div>
        @include('backend.components.footer')
    </div>


    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/js/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/js/waves.min.js')}}"></script>


    <!-- Peity chart-->
    <script src="{{asset('backend/js/jquery.peity.min.js')}}"></script>

    <!-- Plugin Js-->
    <script src="{{asset('backend/js/chartist.min.js')}}"></script>
    <script src="{{asset('backend/js/chartist-plugin-tooltip.min.js')}}"></script>

    <script src="{{asset('backend/js/dashboard.init.js')}}"></script>

    <script src="{{asset('backend/js/app.js')}}"></script>
</body>

</html>
