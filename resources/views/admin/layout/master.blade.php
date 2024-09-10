<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @notifyCss
    @yield('styles')
</head>

<body>
    @include('admin.layout.topbar')
    <main>
        @yield('content')
    </main>
    @include('admin.layout.sidebar')
    <x-notify::notify />
    @notifyJs
    @yield('script')
</body>

</html>
