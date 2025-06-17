<div>
    <div class="space-y-4">
        <div>
            <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun
                Kegiatan</label>
            <select wire:model="form.tahun" id="tahun"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option value=NULL>pilih tahun</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
            </select>
            @error('form.tahun')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="kode_kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                Kegiatan</label>
            <input wire:model="form.kode_kegiatan" type="text" name="kode_kegiatan" id="kode_kegiatan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="misal: 054.01.GG.2906.BMA.006.005.A.521213" required>
            @error('form.kode_kegiatan')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input wire:model="form.nama" type="text" name="nama" id="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ketik nama kegiatan" required>
            @error('form.nama')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="fungsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fungsi</label>
            <select wire:model="form.fungsi" id="fungsi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected value=NULL>pilih fungsi</option>
                @foreach (\App\Enums\FungsiType::cases() as $item)
                    <option value="{{ $item->value }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('form.fungsi')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="volume"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Volume</label>
                <input wire:model="form.volume" type="number" name="volume" id="volume"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="misal: 159" required>
                @error('form.volume')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div>
                <label for="satuan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                <select wire:model="form.satuan" id="satuan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected value=NULL>pilih satuan</option>
                    @foreach (\App\Enums\SatuanType::cases() as $item)
                        <option value="{{ $item->value }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('form.satuan')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror

            </div>
        </div>
        <div>
            <label for="rate_satuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rate
                Satuan</label>
            <input wire:model="form.rate_satuan" type="number" name="rate_satuan" id="rate_satuan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="misal: 159" required="">
            @error('form.rate_satuan')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror

        </div>

        <div>
            <label for="jenis_kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                Kegiatan</label>
            <select wire:model="form.jenis_kegiatan" id="jenis_kegiatan" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected value=NULL>pilih jenis kegiatan</option>
                @foreach (\App\Enums\JenisKegiatanType::cases() as $item)
                    <option value="{{ $item->value }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('form.jenis_kegiatan')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror

        </div>
        <div>
            <label for="jml_ptgs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                Petugas</label>
            <input wire:model="form.jml_ptgs" type="number" name="jml_ptgs" id="jml_ptgs"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="isi jumlah petugas" required>
            @error('form.jml_ptgs')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror

        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="tgl_mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Mulai</label>
                <input wire:model="form.tgl_mulai" type="date" name="tgl_mulai" id="tgl_mulai"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="isi tanggal mulai kegiatan" required>
                @error('form.tgl_mulai')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div>
                <label for="tgl_selesai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Berakhir</label>
                <input wire:model="form.tgl_selesai" type="date" name="tgl_selesai" id="tgl_selesai"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="isi tanggal berakhir kegiatan" required>
                @error('form.tgl_selesai')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <button type="submit"
        class="w-full text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
        Simpan
    </button>

    </div>

</div>

