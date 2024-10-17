<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @notifyCss
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    @yield('styles')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/client/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/assets/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/client/assets/css/main.css') }}" />
</head>

<body>
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
    <!-- Template  JS -->
    <script src="{{ asset('assets/client/assets/js/main.js?v=6.0') }}"></script>
    <script src="{{ asset('assets/client/assets/js/shop.js?v=6.0') }}"></script>
</body>

</html>
