{{-- <div class="px-20 col-span-full xl:col-span-12 dark:bg-gray-800">

        <!-- Table -->
        <div class="overflow-x-auto">
            <div class="flex flex-wrap justify-between mt-5">

                @foreach ($data as $item)
                <div class="max-w-sm py-2">
                    <div class="flex flex-col h-full p-2 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div class="flex items-center justify-start mb-3">
                            <h2 class="mr-2 text-lg font-medium text-gray-700 dark:text-white">{{ $item->name }}</h2>
                            @if($item->id != 1 || \Auth::user()->id == 1 )
                            <div>
                                <button class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 text-white bg-yellow-500 rounded-full dark:bg-yellow-500"
                                    @click="$dispatch('dispatch-roles-table-edit', {id: '{{ $item->id }}'})" />
                                    <x-fwb-o-edit class="w-4 h-4"/>
                                </button>
                                <button class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 text-white bg-red-500 rounded-full dark:bg-red-500"
                                    @click="$dispatch('dispatch-roles-table-delete', {id: '{{ $item->id }}', nama: '{{ $item->name }}'})"/>
                                    <x-fwb-o-trash-bin class="w-4 h-4"/>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
</div> --}}
<div class="flex flex-col">
    <livewire:admin.role.delete />
    <livewire:admin.role.edit />
    <livewire:admin.role.create />
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-2 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Role Name
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach ($data as $item)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td class="flex items-center p-2 whitespace-nowrap">
                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                    <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $item->name }}</div>
                                </div>
                            </td>
                            <td class="p-2 space-x-2 whitespace-nowrap">
                                <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                    @click="$dispatch('dispatch-roles-table-edit', {id: '{{ $item->id }}'})">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                    {{-- Edit user --}}
                                </button>
                                <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900"
                                    @click="$dispatch('dispatch-roles-table-delete', {id: '{{ $item->id }}', nama: '{{ $item->name }}'})">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    {{-- Delete user --}}
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $data->onEachSide(1)->links() }}
</div>

