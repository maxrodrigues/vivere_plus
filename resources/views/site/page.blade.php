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
        <a href="https://api.whatsapp.com/send?phone=+5527997333555"
            target="_blank"
            style="position:fixed;bottom:50px;right:30px;z-index:9999">
            <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
        </a>
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
