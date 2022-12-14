<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <link rel="stylesheet"  href="{{ mix('dist/css/app.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('js/charts-pie.js') }}" defer></script>
    @livewireStyles
    @stack('style')
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layout.sidebar')
        <div class="flex flex-col flex-1 w-full">
          @include('layout.header')
            <main class="h-full overflow-y-auto">
                <div class="container grid px-6 mx-auto">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        @yield('title')
                    </h2>
                    @yield('content')
                </div>
            </main>
        </div>
    </div>


    <script src="{{ asset('dist/js/app.js') }}"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @livewireScripts
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        @stack('script')





        <script>
            // import Toastify from 'toastify-js'
            Livewire.on('success', message => {
                Toastify({
                    text: message,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    },
                }).showToast();

            })
            Livewire.on('error', message => {
                Toastify({
                    text: message,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                    style: {
                        background: "linear-gradient(to right, #DC1C13, #F07470)",
                    },
                }).showToast();

            })
        </script>
</body>

</html>
