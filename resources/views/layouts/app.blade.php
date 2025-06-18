<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  data-theme="garden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- Scripts -->
    @livewireStyles

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</head>

<body class="bg-gray-50 dark:bg-gray-800">
    <x-wire-toast />
    <livewire:layout.navigation />

    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

        <livewire:layout.sidebar />

        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            {{ $slot }}


            <livewire:layout.footer />
        </div>

    </div>

    {{-- @stack('modals') --}}

    @livewireScripts


    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('app.bundle.js') }}"></script>
    <script src="{{ asset('datepicker.min.js') }}"></script> --}}

    @stack('page-scripts')

</body>

</html>
