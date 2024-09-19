<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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

{{-- <div class="page-loader">
    <div class="spinner"></div>
    <div class="txt">Cargando<br>vacaciones</div>
</div> --}}

<body class="">
    <main>
        <div class="flex h-screen">
            <div class="w-[22%]">
                @include('admin.layout.sidebar')
            </div>
            <div class="w-full m-3 flex flex-col">
                <div>
                    @include('admin.layout.topbar')
                </div>
                <div class="flex-1 overflow-y-auto main-content">
                    @yield('content')
                </div>
                {{-- <div>
                    @include('admin.layout.footer')
                </div> --}}
            </div>
        </div>
    </main>

    <x-notify::notify />
    @notifyJs
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
    <!-- Add jQuery via CDN in a Blade template -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="{{ asset('assets/admin/js/greeting.js') }}"></script>
    <script src="{{ asset('assets/admin/js/parsley-validator.js') }}"></script>
    @yield('script')
</body>

</html>
