@props([
    'data' => [],
])

<div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
    {{-- <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0"
        src="http://127.0.0.1:8000/images/users/bonnie-green-2x.png" alt="Jese picture"> --}}
    <div>
        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">{{ \Auth::user()->name }}</h3>
        <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
            {{ \Auth::user()->email }}
        </div>
        @foreach ($data as $i)
            <span class="bg-gray-400 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded">{{ $i }}</span>
        @endforeach
        <div class="flex items-center mt-2 space-x-4">
            <button
                {{-- href="{{ route('profile.show') }}" wire:navigate --}}
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg z-index-20 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                    </path>
                    <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                </svg>
                Upload picture
            </button>
        </div>

    </div>
</div>
