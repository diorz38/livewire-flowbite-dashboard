@props(['id', 'maxWidth'])

@php
$id = $id ?? md5($attributes->wire('model'));

$maxWidth = $maxWidth ?? 'max-w-xl';
@endphp

<div
    x-data="{ show: @entangle($attributes->wire('model')) }"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-show="show"
    id="{{ $id }}"
    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: none;"
>
    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
    </div>

    <div x-show="show"
    class="fixed top-0 right-0 z-40 w-full h-screen {{ $maxWidth }} p-4 overflow-y-auto transition-transform bg-white dark:bg-gray-800 transform-none"
    tabindex="-1" aria-labelledby="drawer-label" aria-modal="true" role="dialog"
                    x-trap.inert.noscroll="show"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 border-b">
            {{ $title }}
        </div>
        <div class="my-4">
            {{ $content }}
        </div>
        <div class="flex justify-between bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6">
            {{ $footer }}
        </div>
    </div>
</div>
