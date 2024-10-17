<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @notifyCss
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css']) --}}
    @yield('styles')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/client/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/assets/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/client/assets/css/main.css?v=6.0') }}" />
    <link rel="stylesheet" href="{{ asset('assets/client/assets/css/plugins/slider-range.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('assets/client/assets/imgs/theme/loading.gif')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
    @include('client.layout.header')
    <main>
        @yield('content')
    </main>

    @include('client.layout.footer')

    <x-notify::notify />
    @notifyJs
    @yield('script')
    <!-- Vendor JS-->
    <script src="{{ asset('assets/client/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/leaflet.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/client/assets/js/plugins/slider-range.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('assets/client/assets/js/main.js?v=6.0') }}"></script>
    <script src="{{ asset('assets/client/assets/js/shop.js?v=6.0') }}"></script>
</body>

</html>
