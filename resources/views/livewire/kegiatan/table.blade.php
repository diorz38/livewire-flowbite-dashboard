<main>
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="#"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Users</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                    aria-current="page">List</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All users</h1>
            </div>
            <div class="sm:flex">
                <div
                    class="items-center mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">


                    <label for="users-search" class="sr-only">Search</label>
                    <div class="relative mt-1 lg:w-64 xl:w-96">
                        <input type="text" wire:model.live.debounce.300ms="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Cari Kegiatan...">
                    </div>
                    <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                    <div class="flex items-center space-x-3">
                        {{-- <label class="w-40 text-sm font-medium text-gray-900 dark:text-gray-400">
                            Fungsi:
                        </label> --}}
                        <select wire:model.live="selectedfungsi"
                            class="bg-gray-50 dark:bg-gray-600 border border-gray-300 text-gray-900 dark:text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="">Fungsi:</option>
                            @foreach ($listFungsi as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>

                    </div>
                </div>




                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <livewire:kegiatan.create />
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="text-xs bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    ID
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    <span class="sr-only">Actions</span>
                                </th>
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'nama',
                                    'displayName' => 'Nama Kegiatan',
                                ])
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'jenis_kegiatan',
                                    'displayName' => 'Jenis',
                                ])
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'jml_ptgs',
                                    'displayName' => 'Jml Petugas',
                                ])
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'volume',
                                    'displayName' => 'Volume',
                                ])
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    <span>Rate</span>
                                </th>
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'penugasan_sum_volume',
                                    'displayName' => 'Penugasan',
                                ])
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ ($data->currentpage() - 1) * $data->perpage() + $loop->index + 1 }}
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="inline-flex rounded-md shadow-sm">
                                            <button type="button"
                                                class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                                                @click="$dispatch('dispatch-kegiatan-table-edit', {id: '{{ $item->id }}'})">
                                                Ubah
                                            </button>
                                            <button type="button"
                                                class="px-4 py-2 text-sm font-medium text-gray-900 bg-red-300 border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                                                @click="$dispatch('dispatch-kegiatan-table-delete', {id: '{{ $item->id }}', nama: '{{ $item->nama }}'})">
                                                Hapus
                                            </button>
                                        </div>
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold text-gray-900 dark:text-white">
                                            {{ $item->nama }}</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                            {{ $item->kode_kegiatan }}</div>
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-normal text-gray-900 dark:text-white">
                                            {{ $item->jenis_kegiatan }}</div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                            {{ $item->fungsi }}
                                        </div>
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->jml_ptgs }}</td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $item->volume }} {{ $item->satuan }}</td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @if ($item->rate_pcl)
                                            <div>PCL: Rp {{ number_format($item->rate_pcl, 0, ',', '.') }}</div>
                                        @endif
                                        @if ($item->rate_pml)
                                            <div>PML: Rp {{ number_format($item->rate_pml, 0, ',', '.') }}</div>
                                        @endif
                                        @if ($item->rate_entri)
                                            <div>Entri: Rp {{ number_format($item->rate_entri, 0, ',', '.') }}</div>
                                        @endif

                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        @if ($item->penugasan_sum_volume)
                                            {{ $item->penugasan_sum_volume }} {{ $item->satuan }}
                                            @if ($item->penugasan_sum_volume == $item->volume)
                                                <span>
                                                    <x-fwb-s-badge-check class="w-4 h-4 text-green-400" />
                                                </span>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                Belum Ada Data
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                {{ $data->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

</main>







{{-- <div class="px-1 mx-auto">
    <section class="mt-10">
        <div class="px-4 mx-auto max-w-screen-2xl ">
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
                <div class="mx-4 my-4">
                    <livewire:kegiatan.create />
                </div>
                <div class="flex items-center justify-between p-4 d">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms="search" type="text"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <div class="flex items-center space-x-3">
                            <label class="w-40 text-sm font-medium text-gray-900">
                                Fungsi:
                            </label>
                            <select wire:model.live="selectedfungsi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">All</option>
                                @foreach ($listFungsi as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">ID</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                                @include('livewire.includes.table-sortable-th',[
                                'name' => 'nama',
                                'displayName' => 'Nama Kegiatan'
                                ])
                                @include('livewire.includes.table-sortable-th',[
                                'name' => 'jenis_kegiatan',
                                'displayName' => 'Jenis'
                                ])
                                @include('livewire.includes.table-sortable-th',[
                                'name' => 'jml_ptgs',
                                'displayName' => 'Jml Petugas'
                                ])
                                @include('livewire.includes.table-sortable-th',[
                                'name' => 'volume',
                                'displayName' => 'Volume'
                                ])
                                <th scope="col" class="px-4 py-3">
                                    <span>Rate</span>
                                </th>
                                @include('livewire.includes.table-sortable-th',[
                                'name' => 'penugasan_sum_volume',
                                'displayName' => 'Penugasan'
                                ])
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-4 py-3">
                                    {{ ($data->currentpage() - 1) * $data->perpage() + $loop->index + 1 }}
                                </td>
                                <td class="px-4 py-3 w-44">
                                    <div class="inline-flex rounded-md shadow-sm">
                                        <button type="button"
                                            class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                                            @click="$dispatch('dispatch-kegiatan-table-edit', {id: '{{ $item->id }}'})">
                                            Ubah
                                        </button>
                                        <button type="button"
                                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-red-300 border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white"
                                            @click="$dispatch('dispatch-kegiatan-table-delete', {id: '{{ $item->id }}', nama: '{{ $item->nama }}'})">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-left w-80">
                                    <div class="text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $item->nama }}</div>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                        {{ $item->kode_kegiatan }}</div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="text-base font-normal text-gray-900 dark:text-white">
                                        {{ $item->jenis_kegiatan }}</div>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                        {{ $item->fungsi }}
                                    </div>
                                </td>
                                <td class="px-4 py-3">{{ $item->jml_ptgs }}</td>
                                <td class="px-4 py-3">{{ $item->volume }} {{ $item->satuan }}</td>
                                <td class="px-4 py-3">
                                    @if ($item->rate_pcl)
                                    <div>PCL: Rp {{ number_format($item->rate_pcl,0,",",".") }}</div>
                                    @endif
                                    @if ($item->rate_pml)
                                    <div>PML: Rp {{ number_format($item->rate_pml,0,",",".") }}</div>
                                    @endif
                                    @if ($item->rate_entri)
                                    <div>Entri: Rp {{ number_format($item->rate_entri,0,",",".") }}</div>
                                    @endif

                                </td>
                                <td class="px-4 py-3">
                                    @if ($item->penugasan_sum_volume)
                                    {{ $item->penugasan_sum_volume }} {{ $item->satuan }}
                                    @if ($item->penugasan_sum_volume == $item->volume)
                                    <span>
                                        <x-fwb-s-badge-check class="w-4 h-4 text-green-400" />
                                    </span>
                                    @endif
                                    @endif
                                </td>
                            </tr>
                            @empty
                            Belum Ada Data
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="px-3 py-4">
                    <div class="flex ">
                        <div class="flex items-center mb-3 space-x-4">
                            <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                            <select wire:model.live='perPage'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="5">5</option>
                                <option value="7">7</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                    </div>
                    {{ $data->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </section>
</div> --}}
