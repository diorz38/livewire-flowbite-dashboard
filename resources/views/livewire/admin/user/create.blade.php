<div class="print:!hidden">
    <span><x-button @click="$wire.set('modalUserCreate', true)"
        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd"></path>
            </svg>
            Add User
    </x-button></span>

    <x-flowbite.drawer wire:model.live="modalUserCreate" submit="save" maxWidth="max-w-xl">
        <x-slot name="title">
            New User
        </x-slot>

        <x-slot name="content">
            <div class="col-span-12 mb-4">
                <x-label for="form.name" value="Nama User" />
                <x-input id="form.name" wire:model="form.name" type="text" class="w-full mt-1"
                    autocomplate="form.name" />
                <x-input-error for="form.name" class="mt-1" />
            </div>
            <div class="col-span-12 mb-4">
                <x-label for="form.email" value="Email" />
                <x-input id="form.email" wire:model="form.email" type="text" class="w-full mt-1"
                    autocomplate="form.email" />
                <x-input-error for="form.email" class="mt-1" />
            </div>

            <div class="grid justify-between grid-cols-2 gap-2">
                <div class="mb-4">
                    <x-label for="form.roles" value="Roles" />
                    <x-select wire:model="form.roles" id="roles" multiple>
                        <option selected value=NULL>pilih roles</option>
                        @foreach ($listRoles as $role)
                        <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </x-select>
                    <x-input-error for="form.roles" class="mt-1" />
                </div>
                <div class="mb-4">
                    <x-label for="form.password" value="Password" />
                    <x-input id="form.password" wire:model="form.password" type="text" class="w-full mt-1"/>
                    <x-input-error for="form.password" class="mt-1" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalUserCreate', false)"
                wire:loading.attr="disabled"
                class="inline-flex justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                Batal
            </x-secondary-button>

            <x-button @click="$wire.save()" class="ms-3"
                class="text-white justify-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                wire:loading.attr="disabled">
                Simpan
            </x-button>
        </x-slot>
    </x-flow>
</div>
