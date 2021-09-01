<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="Vivere Plus" />
    <meta name="description" content="Vivere Plus">
    <meta name="author" content="vivereplus.com">

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" /> --}}
    {{-- <link rel="apple-touch-icon" href="img/apple-touch-icon.png"> --}}
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/circle-flip-slideshow/css/component.css') }}">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('css')

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

</head>

    <body>
        <div class="body">
            @include('site.partials.navbar')

            <!-- main content -->
            <div role="main" class="main" id="home">
                @yield('content')
            </div>
            <!-- finish main content -->
        </div>
        @include('site.partials.footer', ['active' => $active])
        <!-- Vendor -->
		<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('vendor/common/common.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>
		<script src="{{ asset('vendor/nanoscroller/jquery.nanoscroller.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script src="{{ asset('vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
		<script src="{{ asset('js/views/view.home.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js') }}"></script>
        @yield('js')
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
    </body>

</html>
