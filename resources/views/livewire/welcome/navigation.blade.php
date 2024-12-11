<div class="flex items-center justify-between lg:order-2">
    @auth
    <button type="button" data-dropdown-toggle="notification-dropdown"
        class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
        <span class="sr-only">View notifications</span>

        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
            </path>
        </svg>
    </button>

    <div class="z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:divide-gray-600 dark:bg-gray-700"
        id="notification-dropdown">
        <div
            class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            Notifications
        </div>
        <div>
            <a wire:navigate href="#"
                class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                <div class="flex-shrink-0">
                    <img class="rounded-full w-11 h-11"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                        alt="Bonnie Green avatar">
                    <div
                        class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-primary-700 dark:border-gray-700">
                        <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                            </path>
                            <path
                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">New
                        message from <span
                            class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span>:
                        "Hey, what's up? All set for the presentation?"</div>
                    <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few
                        moments ago</div>
                </div>
            </a>
            <a wire:navigate href="#"
                class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                <div class="flex-shrink-0">
                    <img class="rounded-full w-11 h-11"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                        alt="Jese Leos avatar">
                    <div
                        class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-700">
                        <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"><span
                            class="font-semibold text-gray-900 dark:text-white">Jese leos</span> and
                        <span class="font-medium text-gray-900 dark:text-white">5 others</span>
                        started following you.</div>
                    <div class="text-xs font-medium text-primary-700 dark:text-primary-400">10
                        minutes ago</div>
                </div>
            </a>
            <a wire:navigate href="#"
                class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                <div class="flex-shrink-0">
                    <img class="rounded-full w-11 h-11"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                        alt="Joseph McFall avatar">
                    <div
                        class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-700">
                        <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"><span
                            class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span>
                        and <span class="font-medium text-gray-900 dark:text-white">141
                            others</span> love your story. See it and view more stories.</div>
                    <div class="text-xs font-medium text-primary-700 dark:text-primary-400">44
                        minutes ago</div>
                </div>
            </a>
            <a wire:navigate href="#"
                class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                <div class="flex-shrink-0">
                    <img class="rounded-full w-11 h-11"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                        alt="Roberta Casas image">
                    <div
                        class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-700">
                        <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"><span
                            class="font-semibold text-gray-900 dark:text-white">Leslie
                            Livingston</span> mentioned you in a comment: <span
                            class="font-medium text-primary-700 dark:text-primary-500">@bonnie.green</span>
                        what do you say?</div>
                    <div class="text-xs font-medium text-primary-700 dark:text-primary-400">1 hour
                        ago</div>
                </div>
            </a>
            <a wire:navigate href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
                <div class="flex-shrink-0">
                    <img class="rounded-full w-11 h-11"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                        alt="Robert image">
                    <div
                        class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-700">
                        <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="w-full pl-3">
                    <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"><span
                            class="font-semibold text-gray-900 dark:text-white">Robert Brown</span>
                        posted a new video: Glassmorphism - learn how to implement the new design
                        trend.</div>
                    <div class="text-xs font-medium text-primary-700 dark:text-primary-400">3 hours
                        ago</div>
                </div>
            </a>
        </div>
        <a wire:navigate href="#"
            class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:text-white dark:hover:underline">
            <div class="inline-flex items-center ">
                <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                    <path fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd"></path>
                </svg>
                View all
            </div>
        </a>
    </div>
    @endauth
    <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>
    <div id="tooltip-toggle" role="tooltip"
        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
        Toggle dark mode
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    @if (Route::has('login'))
    <button type="button"
        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
        id="userMenuDropdownButton" aria-expanded="false"
        data-dropdown-toggle="userMenuDropdown">
        <span class="sr-only">Open menu</span>
        <svg class="w-6 h-6 dark:text-white" aria-hidden="true" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.5 8C5.80777 8 5.13108 7.79473 4.55551 7.41015C3.97993 7.02556 3.53133 6.47893 3.26642 5.83939C3.00152 5.19985 2.9322 4.49612 3.06725 3.81719C3.2023 3.13825 3.53564 2.51461 4.02513 2.02513C4.51461 1.53564 5.13825 1.2023 5.81719 1.06725C6.49612 0.932205 7.19985 1.00152 7.83939 1.26642C8.47893 1.53133 9.02556 1.97993 9.41015 2.55551C9.79473 3.13108 10 3.80777 10 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.5 17H1V15C1 13.9391 1.42143 12.9217 2.17157 12.1716C2.92172 11.4214 3.93913 11 5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M19.5 11H18.38C18.2672 10.5081 18.0714 10.0391 17.801 9.613L18.601 8.818C18.6947 8.72424 18.7474 8.59708 18.7474 8.4645C18.7474 8.33192 18.6947 8.20476 18.601 8.111L17.894 7.404C17.8002 7.31026 17.6731 7.25761 17.5405 7.25761C17.4079 7.25761 17.2808 7.31026 17.187 7.404L16.392 8.204C15.9647 7.93136 15.4939 7.73384 15 7.62V6.5C15 6.36739 14.9473 6.24021 14.8536 6.14645C14.7598 6.05268 14.6326 6 14.5 6H13.5C13.3674 6 13.2402 6.05268 13.1464 6.14645C13.0527 6.24021 13 6.36739 13 6.5V7.62C12.5081 7.73283 12.0391 7.92863 11.613 8.199L10.818 7.404C10.7242 7.31026 10.5971 7.25761 10.4645 7.25761C10.3319 7.25761 10.2048 7.31026 10.111 7.404L9.404 8.111C9.31026 8.20476 9.25761 8.33192 9.25761 8.4645C9.25761 8.59708 9.31026 8.72424 9.404 8.818L10.204 9.618C9.9324 10.0422 9.73492 10.5096 9.62 11H8.5C8.36739 11 8.24021 11.0527 8.14645 11.1464C8.05268 11.2402 8 11.3674 8 11.5V12.5C8 12.6326 8.05268 12.7598 8.14645 12.8536C8.24021 12.9473 8.36739 13 8.5 13H9.62C9.73283 13.4919 9.92863 13.9609 10.199 14.387L9.404 15.182C9.31026 15.2758 9.25761 15.4029 9.25761 15.5355C9.25761 15.6681 9.31026 15.7952 9.404 15.889L10.111 16.596C10.2048 16.6897 10.3319 16.7424 10.4645 16.7424C10.5971 16.7424 10.7242 16.6897 10.818 16.596L11.618 15.796C12.0422 16.0676 12.5096 16.2651 13 16.38V17.5C13 17.6326 13.0527 17.7598 13.1464 17.8536C13.2402 17.9473 13.3674 18 13.5 18H14.5C14.6326 18 14.7598 17.9473 14.8536 17.8536C14.9473 17.7598 15 17.6326 15 17.5V16.38C15.4919 16.2672 15.9609 16.0714 16.387 15.801L17.182 16.601C17.2758 16.6947 17.4029 16.7474 17.5355 16.7474C17.6681 16.7474 17.7952 16.6947 17.889 16.601L18.596 15.894C18.6897 15.8002 18.7424 15.6731 18.7424 15.5405C18.7424 15.4079 18.6897 15.2808 18.596 15.187L17.796 14.392C18.0686 13.9647 18.2662 13.4939 18.38 13H19.5C19.6326 13 19.7598 12.9473 19.8536 12.8536C19.9473 12.7598 20 12.6326 20 12.5V11.5C20 11.3674 19.9473 11.2402 19.8536 11.1464C19.7598 11.0527 19.6326 11 19.5 11ZM14 14.5C13.5055 14.5 13.0222 14.3534 12.6111 14.0787C12.2 13.804 11.8795 13.4135 11.6903 12.9567C11.5011 12.4999 11.4516 11.9972 11.548 11.5123C11.6445 11.0273 11.8826 10.5819 12.2322 10.2322C12.5819 9.8826 13.0273 9.6445 13.5123 9.54804C13.9972 9.45157 14.4999 9.50108 14.9567 9.6903C15.4135 9.87952 15.804 10.2 16.0787 10.6111C16.3534 11.0222 16.5 11.5055 16.5 12C16.5 12.663 16.2366 13.2989 15.7678 13.7678C15.2989 14.2366 14.663 14.5 14 14.5Z" fill="currentColor"/>
        </svg>
    </button>

    <div class="z-50 hidden w-56 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
        id="userMenuDropdown">
        <ul class="py-1 font-light text-gray-500 dark:text-gray-400"
            aria-labelledby="userMenuDropdownButton">
            <li>
                <a wire:navigate href="{{ route('login') }}"
                    class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                    Login
                </a>
            </li>
            @if (Route::has('register'))
            <li>
                <a wire:navigate href="{{ route('register') }}"
                    class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                    Register
                </a>
            </li>
            @endif
        </ul>
    </div>

    {{-- dropdown menu --}}
    <button type="button" id="toggleMobileMenuButton" data-collapse-toggle="toggleMobileMenu"
        class="items-center p-2 text-gray-500 rounded-lg md:ml-2 lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
        <span class="sr-only">Open menu</span>
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
    </button>
    @endif

    @auth
    <button type="button" data-dropdown-toggle="apps-dropdown"
        class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
        <span class="sr-only">View notifications</span>

        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
            </path>
        </svg>
    </button>

    <div class="z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:bg-gray-700 dark:divide-gray-600"
        id="apps-dropdown">
        <div
            class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            Apps
        </div>
        <div class="grid grid-cols-3 gap-4 p-4">
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Sales</div>
            </a>
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Users</div>
            </a>
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Inbox</div>
            </a>
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Profile</div>
            </a>
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Settings</div>
            </a>
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                    <path fill-rule="evenodd"
                        d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Products</div>
            </a>
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                    </path>
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Pricing</div>
            </a>
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Billing</div>
            </a>
            <a wire:navigate href="#"
                class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                <svg aria-hidden="true"
                    class="mx-auto mb-1 text-gray-400 w-7 h-7 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                    </path>
                </svg>
                <div class="text-sm text-gray-900 dark:text-white">Logout</div>
            </a>
        </div>
    </div>
    <button type="button"
        class="flex flex-shrink-0 mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
        id="userMenuDropdownButton" aria-expanded="false"
        data-dropdown-toggle="userMenuDropdown">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full"
            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
    </button>

    <div class="z-50 hidden w-56 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
        id="userMenuDropdown">
        <div class="px-4 py-3">
            <span class="block text-sm font-semibold text-gray-900 dark:text-white">Neil
                Sims</span>
            <span
                class="block text-sm font-light text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
        </div>
        <ul class="py-1 font-light text-gray-500 dark:text-gray-400"
            aria-labelledby="userMenuDropdownButton">
            <li>
                <a wire:navigate href="#"
                    class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                    profile</a>
            </li>
            <li>
                <a wire:navigate href="#"
                    class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account
                    settings</a>
            </li>
        </ul>
        <ul class="py-1 font-light text-gray-500 dark:text-gray-400"
            aria-labelledby="userMenuDropdownButton">
            <li>
                <a wire:navigate href="#"
                    class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                        class="w-5 h-5 mr-2 text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd"></path>
                    </svg> My likes</a>
            </li>
            <li>
                <a wire:navigate href="#"
                    class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                        class="w-5 h-5 mr-2 text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                        </path>
                    </svg> Collections</a>
            </li>
        </ul>
        <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
            <li>
                <a wire:navigate href="#"
                    class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                    out</a>
            </li>
        </ul>
    </div>

    <button type="button" id="toggleMobileMenuButton" data-collapse-toggle="toggleMobileMenu"
        class="items-center p-2 text-gray-500 rounded-lg md:ml-2 lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
        <span class="sr-only">Open menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    @endauth
</div>
