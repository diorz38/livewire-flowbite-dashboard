<x-app-layout>
    <main>
        <div class="px-4 pt-6">
            <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">
                <!-- Main widget -->
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <livewire:dashboard.main-chart />
                    <!-- Card Footer -->
                    <div
                        class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                        <div>
                            <button
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                                type="button" data-dropdown-toggle="weekly-sales-dropdown">Last 7 days <svg
                                    class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="weekly-sales-dropdown">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                        role="none">
                                        Sep 16, 2021 - Sep 22, 2021
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Yesterday</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Today</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 7 days</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 30 days</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 90 days</a>
                                    </li>
                                </ul>
                                <div class="py-1" role="none">
                                    <a wire:navigate href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Custom...</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a wire:navigate href="#"
                                class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                Sales Report
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Tabs widget -->
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">
                        Statistics this month
                        <button data-popover-target="popover-description" data-popover-placement="bottom-end"
                            type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg><span class="sr-only">Show information</span></button>
                    </h3>
                    <div data-popover id="popover-description" role="tooltip"
                        class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Statistics</h3>
                            <p>Statistics is a branch of applied mathematics that involves the collection,
                                description, analysis, and inference of conclusions from quantitative data.</p>
                            <a wire:navigate href="#"
                                class="flex items-center font-medium text-primary-600 dark:text-primary-500 dark:hover:text-primary-600 hover:text-primary-700">Read
                                more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg></a>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select tab</label>
                        <select id="tabs"
                            class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option>Statistics</option>
                            <option>Services</option>
                            <option>FAQ</option>
                        </select>
                    </div>
                    <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400"
                        id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                        <li class="w-full">
                            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                                aria-controls="faq" aria-selected="true"
                                class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Top
                                products</button>
                        </li>
                        <li class="w-full">
                            <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                                aria-controls="about" aria-selected="false"
                                class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Top
                                Customers</button>
                        </li>
                    </ul>
                    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                        <div class="hidden pt-4" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10"
                                                src="{{ asset('images/products/iphone.png') }}" alt="imac image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    iPhone 14 Pro
                                                </p>
                                                <div
                                                    class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                        </path>
                                                    </svg>
                                                    2.5%
                                                    <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $445,467
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10"
                                                src="{{ asset('images/products/imac.png') }}" alt="imac image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Apple iMac 27"
                                                </p>
                                                <div
                                                    class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                        </path>
                                                    </svg>
                                                    12.5%
                                                    <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $256,982
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10"
                                                src="{{ asset('images/products/watch.png') }}" alt="watch image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Apple Watch SE
                                                </p>
                                                <div
                                                    class="flex items-center justify-end flex-1 text-sm text-red-600 dark:text-red-500">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                            d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                                        </path>
                                                    </svg>
                                                    1.35%
                                                    <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $201,869
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10"
                                                src="{{ asset('images/products/ipad.png') }}" alt="ipad image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Apple iPad Air
                                                </p>
                                                <div
                                                    class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                        </path>
                                                    </svg>
                                                    12.5%
                                                    <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $103,967
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10"
                                                src="{{ asset('images/products/imac.png') }}" alt="imac image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate dark:text-white">
                                                    Apple iMac 24"
                                                </p>
                                                <div
                                                    class="flex items-center justify-end flex-1 text-sm text-red-600 dark:text-red-500">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                            d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                                        </path>
                                                    </svg>
                                                    2%
                                                    <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $98,543
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden pt-4" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="{{ asset('images/users/neil-sims.png') }}" alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Neil Sims
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@flowbite.com
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $3320
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="{{ asset('images/users/bonnie-green.png') }}" alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Bonnie Green
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@flowbite.com
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $2467
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="{{ asset('images/users/michael-gough.png') }}" alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Michael Gough
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@flowbite.com
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $2235
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="{{ asset('images/users/thomas-lean.png') }}" alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Thomes Lean
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@flowbite.com
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $1842
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full"
                                                src="{{ asset('images/users/lana-byrd.png') }}" alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Lana Byrd
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@flowbite.com
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $1044
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div
                        class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                        <div>
                            <button
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                                type="button" data-dropdown-toggle="stats-dropdown">Last 7 days <svg
                                    class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="stats-dropdown">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                        role="none">
                                        Sep 16, 2021 - Sep 22, 2021
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Yesterday</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Today</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 7 days</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 30 days</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 90 days</a>
                                    </li>
                                </ul>
                                <div class="py-1" role="none">
                                    <a wire:navigate href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Custom...</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a wire:navigate href="#"
                                class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                Full Report
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
                <div
                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <livewire:dashboard.new-product-chart />
                </div>
                <div
                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <livewire:dashboard.week-signups-chart />
                </div>
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <livewire:dashboard.traffic-channels-chart />
                </div>
            </div>
            <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <livewire:dashboard.traffic-device-chart />
                    <!-- Card Footer -->
                    <div class="flex items-center justify-between pt-4 lg:justify-evenly sm:pt-6">
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.25A2.25 2.25 0 014.25 2h11.5A2.25 2.25 0 0118 4.25v8.5A2.25 2.25 0 0115.75 15h-3.105a3.501 3.501 0 001.1 1.677A.75.75 0 0113.26 18H6.74a.75.75 0 01-.484-1.323A3.501 3.501 0 007.355 15H4.25A2.25 2.25 0 012 12.75v-8.5zm1.5 0a.75.75 0 01.75-.75h11.5a.75.75 0 01.75.75v7.5a.75.75 0 01-.75.75H4.25a.75.75 0 01-.75-.75v-7.5z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Desktop</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                234k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                    4%
                                </span>
                                vs last month
                            </p>
                        </div>
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M8 16.25a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z">
                                </path>
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M4 4a3 3 0 013-3h6a3 3 0 013 3v12a3 3 0 01-3 3H7a3 3 0 01-3-3V4zm4-1.5v.75c0 .414.336.75.75.75h2.5a.75.75 0 00.75-.75V2.5h1A1.5 1.5 0 0114.5 4v12a1.5 1.5 0 01-1.5 1.5H7A1.5 1.5 0 015.5 16V4A1.5 1.5 0 017 2.5h1z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Phone</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                94k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                    1%
                                </span>
                                vs last month
                            </p>
                        </div>
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M5 1a3 3 0 00-3 3v12a3 3 0 003 3h10a3 3 0 003-3V4a3 3 0 00-3-3H5zM3.5 4A1.5 1.5 0 015 2.5h10A1.5 1.5 0 0116.5 4v12a1.5 1.5 0 01-1.5 1.5H5A1.5 1.5 0 013.5 16V4zm5.25 11.5a.75.75 0 000 1.5h2.5a.75.75 0 000-1.5h-2.5z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Tablet</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                16k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                    0,6%
                                </span>
                                vs last month
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Right Content -->
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <livewire:dashboard.sales-category-chart />
                    <!-- Card Footer -->
                    <div
                        class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                        <div>
                            <button
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                                type="button" data-dropdown-toggle="sales-by-category-dropdown">Last 7
                                days <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="sales-by-category-dropdown">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                        role="none">
                                        Sep 16, 2021 - Sep 22, 2021
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Yesterday</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Today</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 7 days</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 30 days</a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 90 days</a>
                                    </li>
                                </ul>
                                <div class="py-1" role="none">
                                    <a wire:navigate href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Custom...</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a wire:navigate href="#"
                                class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                Sales Report
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2 columns --> <!-- Activity Card --> <!--Carousel widget -->

            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <!-- Card header -->
                <div class="items-center justify-between lg:flex">
                    <div class="mb-4 lg:mb-0">
                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Transactions</h3>
                        <span class="text-base font-normal text-gray-500 dark:text-gray-400">This is a list of
                            latest transactions</span>
                    </div>
                    <div class="items-center sm:flex">
                        <div class="flex items-center">
                            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                                class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                type="button">
                                Filter by status
                                <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                    Category
                                </h6>
                                <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                    <li class="flex items-center">
                                        <input id="apple" type="checkbox" value=""
                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                        <label for="apple"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            Completed (56)
                                        </label>
                                    </li>

                                    <li class="flex items-center">
                                        <input id="fitbit" type="checkbox" value="" checked
                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                        <label for="fitbit"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            Cancelled (56)
                                        </label>
                                    </li>

                                    <li class="flex items-center">
                                        <input id="dell" type="checkbox" value=""
                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                        <label for="dell"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            In progress (56)
                                        </label>
                                    </li>

                                    <li class="flex items-center">
                                        <input id="asus" type="checkbox" value="" checked
                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                        <label for="asus"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            In review (97)
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div date-rangepicker class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                        </path>
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                        </path>
                                    </svg>
                                </div>
                                <input name="start" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="From">
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                        </path>
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                        </path>
                                    </svg>
                                </div>
                                <input name="end" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="To">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table -->
                <div class="flex flex-col mt-6">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Transaction
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Date & Time
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Amount
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Reference number
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Payment method
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800">
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment from <span class="font-semibold">Bonnie Green</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Apr 23 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                $2300
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0047568936
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-7 h-7" aria-hidden="true"
                                                    enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                        fill="#d9222a" />
                                                    <path
                                                        d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                        fill="#ee9f2d" />
                                                    <path
                                                        d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109" />
                                                    <path
                                                        d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                        fill="#fff" />
                                                    <path
                                                        d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z" />
                                                    <path
                                                        d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                        fill="#fff" />
                                                </svg>
                                                <span>????????? 475</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50 dark:bg-gray-700">
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment refund to <span class="font-semibold">#00910</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Apr 23 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                -$670
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0078568936
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-6 h-6"
                                                    aria-hidden="true"xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 83">
                                                    <defs>
                                                        <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                            y1="-2.006%" y2="100%">
                                                            <stop offset="0%" stop-color="#222357" />
                                                            <stop offset="100%" stop-color="#254AA5" />
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#logosVisa0)"
                                                        d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                        transform="matrix(1 0 0 -1 0 82.668)" />
                                                </svg>
                                                <span>????????? 924</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment failed from <span class="font-semibold">#087651</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Apr 18 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                $234
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0088568934
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-6 h-6"
                                                    aria-hidden="true"xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 83">
                                                    <defs>
                                                        <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                            y1="-2.006%" y2="100%">
                                                            <stop offset="0%" stop-color="#222357" />
                                                            <stop offset="100%" stop-color="#254AA5" />
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#logosVisa0)"
                                                        d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                        transform="matrix(1 0 0 -1 0 82.668)" />
                                                </svg>
                                                <span>????????? 826</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400">Cancelled</span>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50 dark:bg-gray-700">
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment from <span class="font-semibold">Lana Byrd</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Apr 15 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                $5000
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0018568911
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-6 h-6"
                                                    aria-hidden="true"xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 83">
                                                    <defs>
                                                        <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                            y1="-2.006%" y2="100%">
                                                            <stop offset="0%" stop-color="#222357" />
                                                            <stop offset="100%" stop-color="#254AA5" />
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#logosVisa0)"
                                                        d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                        transform="matrix(1 0 0 -1 0 82.668)" />
                                                </svg>
                                                <span>????????? 634</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">In
                                                    progress</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment from <span class="font-semibold">Jese Leos</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Apr 15 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                $2300
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0045568939
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-7 h-7" aria-hidden="true"
                                                    enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                        fill="#d9222a" />
                                                    <path
                                                        d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                        fill="#ee9f2d" />
                                                    <path
                                                        d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109" />
                                                    <path
                                                        d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                        fill="#fff" />
                                                    <path
                                                        d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z" />
                                                    <path
                                                        d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                        fill="#fff" />
                                                </svg>
                                                <span>????????? 163</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50 dark:bg-gray-700">
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Refund to <span class="font-semibold">THEMESBERG LLC</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Apr 11 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                -$560
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0031568935
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-7 h-7" aria-hidden="true"
                                                    enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                        fill="#d9222a" />
                                                    <path
                                                        d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                        fill="#ee9f2d" />
                                                    <path
                                                        d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109" />
                                                    <path
                                                        d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                        fill="#fff" />
                                                    <path
                                                        d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z" />
                                                    <path
                                                        d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                        fill="#fff" />
                                                </svg>
                                                <span>????????? 443</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">In
                                                    review</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment from <span class="font-semibold">Lana Lysle</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Apr 6 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                $1437
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0023568934
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-7 h-7" aria-hidden="true"
                                                    enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                        fill="#d9222a" />
                                                    <path
                                                        d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                        fill="#ee9f2d" />
                                                    <path
                                                        d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109" />
                                                    <path
                                                        d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                        fill="#fff" />
                                                    <path
                                                        d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z" />
                                                    <path
                                                        d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                        fill="#fff" />
                                                </svg>
                                                <span>????????? 223</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">In
                                                    review</span>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50 dark:bg-gray-700">
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment to <span class="font-semibold">Joseph Mcfall</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Apr 1 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                $980
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0057568935
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-6 h-6"
                                                    aria-hidden="true"xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 83">
                                                    <defs>
                                                        <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                            y1="-2.006%" y2="100%">
                                                            <stop offset="0%" stop-color="#222357" />
                                                            <stop offset="100%" stop-color="#254AA5" />
                                                        </linearGradient>
                                                    </defs>
                                                    <path fill="url(#logosVisa0)"
                                                        d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                        transform="matrix(1 0 0 -1 0 82.668)" />
                                                </svg>
                                                <span>????????? 363</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment from <span class="font-semibold">Alphabet LLC</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Mar 23 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                $11,436
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                00836143841
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-7 h-7" aria-hidden="true"
                                                    enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                        fill="#d9222a" />
                                                    <path
                                                        d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                        fill="#ee9f2d" />
                                                    <path
                                                        d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109" />
                                                    <path
                                                        d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                        fill="#fff" />
                                                    <path
                                                        d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z" />
                                                    <path
                                                        d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                        fill="#fff" />
                                                </svg>
                                                <span>????????? 771</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">In
                                                    progress</span>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50 dark:bg-gray-700">
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                Payment from <span class="font-semibold">Bonnie Green</span>
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Mar 23 ,2021
                                            </td>
                                            <td
                                                class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                                $560
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                0031568935
                                            </td>
                                            <td
                                                class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <svg class="w-7 h-7" aria-hidden="true"
                                                    enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                        fill="#d9222a" />
                                                    <path
                                                        d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                        fill="#ee9f2d" />
                                                    <path
                                                        d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109" />
                                                    <path
                                                        d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                        fill="#fff" />
                                                    <path
                                                        d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z" />
                                                    <path
                                                        d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                        fill="#fff" />
                                                </svg>
                                                <span>????????? 023</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="flex items-center justify-between pt-3 sm:pt-6">
                    <div>
                        <button
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            type="button" data-dropdown-toggle="transactions-dropdown">Last 7 days <svg
                                class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="transactions-dropdown">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                    Sep 16, 2021 - Sep 22, 2021
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a wire:navigate href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Yesterday</a>
                                </li>
                                <li>
                                    <a wire:navigate href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Today</a>
                                </li>
                                <li>
                                    <a wire:navigate href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 7 days</a>
                                </li>
                                <li>
                                    <a wire:navigate href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 30 days</a>
                                </li>
                                <li>
                                    <a wire:navigate href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 90 days</a>
                                </li>
                            </ul>
                            <div class="py-1" role="none">
                                <a wire:navigate href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Custom...</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a wire:navigate href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Transactions Report
                            <svg class="w-4 h-4 ml-1 sm:w-5 sm:h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
