<div>
    <div
        class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="flex items-center justify-between mb-4">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Kantor</h3>
            <button
                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                @click="$wire.save" wire:loading.attr="disabled">
                Simpan Info
            </button>
        </div>
        <div class="mb-4">
            {{-- <label for="settings-language"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select language</label> --}}
            <select id="selectedOrg" name="selectedOrg"
                class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                wire:model="selectedOrg">
                @foreach ($org as $i)
                <option value="{{ $i->id }}">{{ $i->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            {{-- <label for="settings-timezone"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time Zone</label> --}}
            <select id="settings-timezone" name="countries"
                class="bg-gray-50 border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option>GMT+0 Greenwich Mean Time (GMT)</option>
                <option>GMT+1 Central European Time (CET)</option>
                <option>GMT+2 Eastern European Time (EET)</option>
                <option>GMT+3 Moscow Time (MSK)</option>
                <option>GMT+5 Pakistan Standard Time (PKT)</option>
                <option>GMT+8 China Standard Time (CST)</option>
                <option>GMT+10 Eastern Australia Standard Time (AEST)</option>
            </select>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                @click="$wire.orgModal = true">
                Buat Organisasi Baru
            </button>
            <button
                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Buat Departemen Baru
            </button>
        </div>
    </div>

    <x-mary-modal wire:model="orgModal" title="Hey" class="relative z-50" aria-labelledby="dialog-title"
        role="dialog" aria-modal="true">
        <div class="fixed inset-0 transition-opacity bg-gray-500/75" aria-hidden="true"></div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-4 sm:mt-10">
                <div
                    class="relative w-full overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 md:max-w-lg">
                    <div class="px-4 pt-5 pb-4 bg-white dark:bg-gray-600 sm:p-6 sm:pb-4">
                        <!-- Modal header -->
                        <div
                            class="flex items-start justify-between border-b border-gray-200 rounded-t rounded-b dark:border-gray-700">
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">
                                Buat Organisasi Baru
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                @click="$wire.orgModal = false">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="my-6 space-y-6">
                            <form action="#">
                                <div class="grid grid-cols-6 gap-6">
                                    {{-- <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                            Name</label>
                                        <input type="text" name="first-name" id="first-name"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Bonnie" required>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                            Name</label>
                                        <input type="text" name="last-name" id="last-name"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Green" required>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                        <input type="email" name="email" id="email"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="example@company.com" required>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="position"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                        <input type="text" name="position" id="position"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="e.g. React developer" required>
                                    </div> --}}
                                    <div class="col-span-6">
                                        <label for="biography"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Organisasi</label>
                                        <textarea id="biography" rows="2" wire:model="selectedOrg"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="👨‍💻Full-stack web developer. Open-source contributor."></textarea>
                                            <x-input-error for="selectedOrg" class="mt-1" />
                                    </div>
                                </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="items-center border-t border-gray-200 rounded-b dark:border-gray-700">
                            <button
                                class="w-full mt-4 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                type="submit" @click="$wire.saveOrg()" wire:loading.attr="disabled">Simpan
                            </button>
                            <button
                                class="w-full mt-4 dark:text-white bg-gray-400 hover:bg-gray-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                type="submit" @click="$wire.closeModal()" wire:loading.attr="disabled">
                                Batal
                            </button>
                            <div class="mt-4 text-xs text-gray-500 dark:text-gray-400">Press `ESC`, click outside or click `CANCEL` to close.</div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </x-mary-modal>
</div>
