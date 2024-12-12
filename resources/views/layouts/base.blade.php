<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-800">

    <header>
        <nav
            class="fixed z-30 w-full px-4 py-3 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mx-auto max-w-screen-2xl">
                <div class="flex items-center justify-start">
                    <a wire:navigate href="{{ route('dashboard') }}" class="flex mr-14">
                        <img src="{{ asset('images/logo.svg') }}" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span
                            class="self-center hidden text-2xl font-semibold sm:flex whitespace-nowrap dark:text-white">Flowbite</span>
                    </a>

                    <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
                        <ul class="flex flex-col mt-4 space-x-6 text-sm font-medium lg:flex-row xl:space-x-8 lg:mt-0">
                            <li>
                                <a wire:navigate href="#" class="block rounded text-primary-700 dark:text-primary-500"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a wire:navigate href="#"
                                    class="block text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-white">Messages</a>
                            </li>
                            <li>
                                <a wire:navigate href="#"
                                    class="block text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-white">Profile</a>
                            </li>
                            <li>
                                <a wire:navigate href="#"
                                    class="block text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown
                                    <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg></button>

                                <div id="dropdownNavbar"
                                    class="z-20 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a wire:navigate href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Item
                                                1</a>
                                        </li>
                                        <li>
                                            <a wire:navigate href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Item
                                                2</a>
                                        </li>
                                        <li>
                                            <a wire:navigate href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Item
                                                3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </div>
        </nav>
        <nav class="bg-white dark:bg-gray-900">

            <ul id="toggleMobileMenu" class="flex-col hidden w-full pt-16 mt-0 text-sm font-medium lg:hidden">
                <li class="block border-b dark:border-gray-700">
                    <a wire:navigate href="#"
                        class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0"
                        aria-current="page">Home</a>
                </li>
                <li class="block border-b dark:border-gray-700">
                    <a wire:navigate href="#"
                        class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Messages</a>
                </li>
                <li class="block border-b dark:border-gray-700">
                    <a wire:navigate href="#"
                        class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Profile</a>
                </li>
                <li class="block border-b dark:border-gray-700">
                    <a wire:navigate href="#"
                        class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Settings</a>
                </li>
                <li class="block border-b dark:border-gray-700">
                    <button type="button" data-collapse-toggle="dropdownMobileNavbar"
                        class="flex items-center justify-between w-full px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Dropdown
                        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <ul id="dropdownMobileNavbar" class="hidden">
                        <li class="block border-t border-b dark:border-gray-700">
                            <a wire:navigate href="#"
                                class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Item
                                1</a>
                        </li>
                        <li class="block border-b dark:border-gray-700">
                            <a wire:navigate href="#"
                                class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Item
                                2</a>
                        </li>
                        <li class="block">
                            <a wire:navigate href="#"
                                class="block px-4 py-3 text-gray-900 lg:py-0 dark:text-white lg:hover:underline lg:px-0">Item
                                3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

        <div id="main-content"
            class="relative w-full h-full mx-auto overflow-y-auto max-w-screen-2xl bg-gray-50 dark:bg-gray-900">
            <main>
                {{ $slot }}
            </main>
            <footer class="px-4 py-6 md:flex md:items-center md:justify-between 2xl:px-0 md:py-10">
                <p class="mb-4 text-sm text-center text-gray-500 md:mb-0">
                    &copy; 2019-2023 <a wire:navigate href="https://flowbite.com//" class="hover:underline"
                        target="_blank">Flowbite.com</a>. All rights reserved.
                </p>
                <ul class="flex flex-wrap items-center justify-center">
                    <li><a wire:navigate href="{{ route('terms.show') }}"
                            class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Terms</a>
                    </li>
                    <li><a wire:navigate href="#"
                            class="text-sm font-normal text-gray-500 hover:underline dark:text-gray-400">Contact</a>
                    </li>
                </ul>
            </footer>

        </div>

    </div>

    @stack('page-scripts')
    @livewireScripts
</body>

</html>
