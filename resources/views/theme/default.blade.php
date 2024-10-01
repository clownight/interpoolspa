<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Interpoolspa,สระว่ายน้ำ,ออนเซ็น" />
    <meta name="description" content="INTERPOOLSPA พร้อมดูแลสระว่ายน้ำของคุณ บริการครบวงจร ตั้งแต่การออกแบบจนถึงการติดตั้ง พร้อมทีมงานมืออาชีพ" />
    <meta name="author" content="" />
    <!-- Title  -->
    <title>{{ env('APP_NAME') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/fonts.min.css') }}" />
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KPFC7MX2');</script>
    <!-- End Google Tag Manager -->
    @yield('css')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPFC7MX2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
    <!-- ==================== Start Loading ==================== -->

    {{-- <div id="preloader">
        <div class="loading-text">Loading</div>
    </div> --}}

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    {{-- <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> --}}

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->

        @include('theme.header')
        @include('theme.sidebar')

        @yield('content')

    @include('theme.footer')
    <!-- Placed JS at the end of the document so the pages load faster -->

    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script> --}}
    <!-- plugins -->
    <script src="{{ asset('js/plugins.min.js') }}"></script> 

    <!-- custom scripts -->
    
    <script src="{{ asset('js/scripts.min.js') }}"></script>

    
    <!-- End Google Tag Manager (noscript) -->
    @yield('script')

</body>
</html>