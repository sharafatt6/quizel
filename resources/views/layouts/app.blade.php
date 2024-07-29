<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link rel="apple-touch-icon" href="{{asset('images/me.png')}}">
        <link rel="shortcut icon" type="image/png" href="{{asset('images/me.png')}}">
    
        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome-pro.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/flaticon_gerold.css')}}">
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('css/backToTop.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/odometer-theme-default.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/light-mode.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    
    </head>
    <body >
        @include('components.header')
        <main class="site-content" id="content">
        @yield('content')
        </main>
        @include('components.footer')
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/nice-select.min.js')}}"></script>
        <script src="{{asset('js/backToTop.js')}}"></script>
        <script src="{{asset('js/smooth-scroll.js')}}"></script>
        <script src="{{asset('js/appear.min.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/gsap.min.js')}}"></script>
        <script src="{{asset('js/one-page-nav.js')}}"></script>
        <script src="{{asset('js/lightcase.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/odometer.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup.js')}}"></script>
        <script src="{{asset('js/validate.min.js')}}"></script>
    
        <script src="{{asset('js/main.js')}}"></script>
    
    </body>

</html>
