@props(['name' => 'drawer', 'label' => 'example', 'width' => 'max-w-xl'])

<div <div x-data="{ modalIsOpen: @entangle($attributes->wire('model')), name: '{{ $name }}' }" {{ $attributes }}>
    <div drawer-backdrop="" x-cloak
        x-show="modalIsOpen"
        x-on:open-modal.window = "modalIsOpen = ($event.detail.name === name)"
        x-on:close-modal.window = "$event.detail.name === name ? modalIsOpen = false : ''"
        x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" @keydown.esc.window="modalIsOpen = false"
        @click.self="modalIsOpen = false" class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-30">
        <div id="{{ $name }}"
            class="fixed top-0 right-0 z-40 w-full h-screen {{ $width }} p-4 overflow-y-auto transition-transform bg-white dark:bg-gray-800 transform-none"
            tabindex="-1" aria-labelledby="drawer-label" aria-modal="true" role="dialog">
            <h5 id="drawer-label"
                class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">
                {{ $label }}</h5>
            <button type="button" @click="modalIsOpen = false" aria-label="close modal"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <form>
                <div class="space-y-4">
                    {{ $slot }}
                </div>
            </form>

        </div>

    </div>
</div>
