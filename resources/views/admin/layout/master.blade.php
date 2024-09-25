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

<body class="">
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
    <!-- Add jQuery via CDN in a Blade template -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    {{--  <script src="{{ asset('assets/admin/js/greeting.js') }}"></script> --}}
    <script src="{{ asset('assets/admin/js/parsley-validator.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('script')
    <script>
        document.querySelectorAll('.select-menu').forEach(menu => {
            const selectBtn = menu.querySelector(".select-btn");
            const options = menu.querySelectorAll(".option");
            const sBtn_text = menu.querySelector(".sBtn-text");

            // Toggle the dropdown
            selectBtn.addEventListener("click", () => {
                menu.classList.toggle("active");
            });

            // Handle each option click
            options.forEach(option => {
                option.addEventListener("click", () => {
                    let selectedOption = option.querySelector(".option-text").innerText;
                    sBtn_text.innerText = selectedOption;
                    menu.classList.remove("active"); // Close the menu after selection
                });
            });

            // Close the dropdown if clicked outside
            document.addEventListener("click", function(e) {
                if (!menu.contains(e.target)) {
                    menu.classList.remove("active");
                }
            });
        });
    </script>
</body>

</html>
