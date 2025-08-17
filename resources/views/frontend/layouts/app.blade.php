<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Perukar Barber Shop</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    @yield('customCss')
</head>

<body>
<!-- Preloader -->
<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"><span></span></div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>


@include('frontend.inc.header')

@yield('content')

@include('frontend.inc.footer')
<!-- jQuery -->
<script src="{{asset('js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.isotope.v3.0.2.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/scrollIt.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/YouTubePopUp.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
<script src="{{asset('js/datepicker.js')}}"></script>
<script src="{{asset('js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@yield('customJs')
</body>
</html>
