<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!-- Page Title -->

    <title>@yield('title', config('app.name'))</title>
    <meta name="meta-title" content="@yield('meta-title', config('app.name'))">
    <meta name="description" content="@yield('meta-description', 'Nexa Health Consult is a leading healthcare consultancy firm specializing in Ayurveda, mental health, and neuro psychiatry. Our expert team provides personalized solutions to enhance well-being and promote holistic health. With a commitment to excellence, we offer comprehensive services that cater to the unique needs of our clients, ensuring a healthier and happier life.')">
    <meta name="keywords" content="@yield('keywords', 'Ayurveda, mental health, neuro psychiatry, healthcare consultancy, personalized solutions, holistic health, well-being, expert team, comprehensive services')">
    <meta name="google-site-verification" content="octGOgJnCgmtq0S7hYj5Nkm8yf3ZupVojHfWkI5Uk9o" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ static_asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ static_asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ static_asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ static_asset('assets/favicon/favicon.ico') }}">
    <link rel="manifest" href="{{ static_asset('assets/favicon/site.webmanifest') }}">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ static_asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ static_asset('assets/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ static_asset('assets/css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ static_asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ static_asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MZLLCDS2');</script>
    <!-- End Google Tag Manager -->

    @stack('style')
    
    

    <style>.service-entry .service-title{font-size:48px;font-weight:500;letter-spacing:-0.01em;margin-bottom:20px;line-height:1.1em;color:var(--primary-color)}.service-entry .service-title span{font-weight:400;font-family:var(--accent-font);background:linear-gradient(to right,var(--accent-color) 0%,var(--accent-secondary-color) 50%,var(--accent-color) 100%);background-size:200% auto;background-clip:text;-webkit-text-fill-color:transparent;transition:all .3s ease-in-out}.service-entry .service-title:hover span{background-position:right center}(max-width:991px){.service-entry .service-title{font-size:34px}}</style>
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZLLCDS2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Preloader Start -->
    <!-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
        </div>
    </div> -->
    <!-- Preloader End -->

    <!-- Header Start -->

    @include('frontend.includes.header')

    <!-- Header End -->


    @yield('content')

    <!-- Main Footer Start -->

    @include('frontend.includes.footer')

    <!-- Main Footer End -->

    <!-- Jquery Library File -->
    <script src="{{ static_asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Circle Progress Js File -->
    <script src="{{ static_asset('assets/js/circle-progress.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ static_asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- SlickNav js file -->
    <script src="{{ static_asset('assets/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ static_asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ static_asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ static_asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ static_asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ static_asset('assets/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ static_asset('assets/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ static_asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ static_asset('assets/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ static_asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ static_asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ static_asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ static_asset('assets/js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ static_asset('assets/js/function.js') }}"></script>

    @stack('script')

</body>

</html>