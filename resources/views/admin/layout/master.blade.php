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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="overflow-hidden">

    <main>
        <div class="flex ">

            <div class="w-[21%]">
                @include('admin.layout.sidebar')
            </div>
            <div class="w-full m-3">
                <div>
                    @include('admin.layout.topbar')
                </div>
                <div class="min-h-[83vh]">
                    @yield('content')
                </div>
                <div>
                    @include('admin.layout.footer')
                </div>
            </div>
        </div>
    </main>

    <x-notify::notify />
    @notifyJs
    @yield('script')
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"
        integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script>
        // Function to update greeting and time
        function updateGreeting() {
            const now = new Date();
            const hours = now.getHours();
            let greeting = "Good Morning";

            if (hours >= 12 && hours < 18) {
                greeting = "Good Afternoon";
            } else if (hours >= 18) {
                greeting = "Good Evening";
            }
            document.getElementById("greeting").textContent = greeting;
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const dateString = now.toLocaleDateString(undefined, options);
            const timeString = now.toLocaleTimeString();

            document.getElementById("dateTime").textContent = `${dateString}, ${timeString}`;
        }
        window.onload = updateGreeting;
        setInterval(updateGreeting, 1000);
    </script>

</body>

</html>
