<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Microx - Portfolio Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend/img/favicon.ico')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/preloader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
    @yield('css')
</head>

<body>
     @include('frontend.layouts.header')

    <div class="offcanvas-overlay"></div>
    <main>
        @include('frontend.layouts.slider')
        
       @yield('body')
    </main>
    @include('frontend.layouts.footer')
    <!-- JS here -->
    <script src="{{asset('assets/frontend/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/one-page-nav-min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/ajax-form.js')}}"></script>
    <script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/plugins.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
    @yield('js')
</body>

</html>