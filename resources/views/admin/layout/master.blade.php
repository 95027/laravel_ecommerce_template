<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{-- {{$pageTitle}} --}}</title>
    <link rel="icon" href="{{ asset('assets/admin/favicon/logo.png') }}" type="image/x-icon">
    @notifyCss
    @yield('styles')
    @vite('resources/js/app.js')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/parsleyerror.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


</head>

<body class="body-scroll">
    @include('components.toast')
    <main>
        <div>
            @include('admin.layout.sidebar')
            <div class="lg:pl-72">
                @include('admin.layout.topbar')
                <div class="px-4 sm:px-6 lg:px-8 min-h-[100vh]">
                    @yield('content')
                </div>
                @include('admin.layout.footer')
            </div>
        </div>

    </main>

    <x-notify::notify />
    @notifyJs
    <!-- Add jQuery via CDN in a Blade template -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
     <script src="{{ asset('assets/admin/js/greeting.js') }}"></script>
    <script src="{{ asset('assets/admin/js/parsley-validator.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('assets/admin/js/sweet-alert.js')}}"></script>
    @yield('script')
</body>

</html>
