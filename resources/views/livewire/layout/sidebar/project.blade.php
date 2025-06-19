<li>
    <button type="button"
        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
        aria-controls="dropdown-playground" data-collapse-toggle="dropdown-playground">
        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z">
            </path>
        </svg>
        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Projects</span>
        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <ul id="dropdown-playground" class="hidden py-2 space-y-2 ">
        <li>
            <a wire:navigate href="{{ route('manpro.project.index') }}"
                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">
                Manage
            </a>
        </li>
        <li>
            <a href=""
                {{-- wire:navigate href="{{ route('flowbite.playground.sidebar') }}" --}}
                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 pl-11 dark:text-gray-200 dark:hover:bg-gray-700 ">
                Sidebar
            </a>
        </li>
    </ul>
</li>
