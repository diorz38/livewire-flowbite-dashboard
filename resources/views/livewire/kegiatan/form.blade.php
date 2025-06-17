    <div class="grid grid-cols-2 gap-2 justify-between">
        <div class="mb-4">
            <x-label for="form.tahun" value="Tahun Kegiatan" />
            <x-select wire:model="form.tahun" id="tahun">
                <option selected value=NULL>pilih tahun</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
            </x-select>
            <x-input-error for="form.nama" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-label for="form.kode_kegiatan" value="Kodering Kegiatan" />
            <x-input id="form.kode_kegiatan" wire:model="form.kode_kegiatan" type="text" class="w-full mt-1"
                autocomplate="form.kode_kegiatan" />
            <x-input-error for="form.kode_kegiatan" class="mt-1" />
        </div>
    </div>
    <div class="col-span-12 mb-4">
        <x-label for="form.nama" value="Nama Kegiatan" />
        <x-input id="form.nama" wire:model="form.nama" type="text" class="w-full mt-1"
            autocomplate="form.nama" />
        <x-input-error for="form.nama" class="mt-1" />
    </div>

    <div class="grid grid-cols-2 gap-2 justify-between">
        <div class="mb-4">
            <x-label for="form.fungsi" value="Fungsi" />
            <x-select wire:model="form.fungsi" id="fungsi">
                <option selected value=NULL>pilih fungsi</option>
                @foreach (App\Enums\FungsiType::cases() as $case)
                <option value="{{ $case->value }}">{{ $case->name }}</option>
                @endforeach
            </x-select>
            <x-input-error for="form.fungsi" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-label for="selectedJenis" value="jenis_kegiatan" />
            <x-select wire:model.change="selectedJenis" id="selectedJenis" class="w-full">
                <option selected value=NULL>pilih jenis kegiatan</option>
                @foreach (App\Enums\JenisKegiatanType::cases() as $case)
                <option value="{{ $case->value }}">{{ $case->name }}</option>
                @endforeach
            </x-select>
            <x-input-error for="form.jenis_kegiatan" class="mt-1" />
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2 justify-between">
        <div class="mb-4">
            <x-label for="form.volume" value="Volume" />
            <x-input id="form.volume" wire:model="form.volume" type="number" class="w-full mt-1"
                autocomplate="form.volume" />
            <x-input-error for="form.volume" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-label for="form.satuan" value="Satuan" />
            <x-select wire:model="form.satuan" id="satuan" class="w-full">
                <option selected value=NULL>pilih satuan</option>
                @foreach (App\Enums\SatuanType::cases() as $case)
                <option value="{{ $case->value }}">{{ $case->name }}</option>
                @endforeach
            </x-select>
        </div>

    </div>
    @if($selectedJenis == "PENGUMPULAN DATA" && $modalKegiatanCreate == true)
    <div class="grid grid-cols-2 gap-2 justify-between">
        <div class="mb-4">
            <x-label for="form.rate_pcl" value="Rate Pencacahan" />
            <x-input id="form.rate_pcl" wire:model="form.rate_pcl" type="number" class="w-full mt-1"
                autocomplate="form.rate_pcl" />
            <x-input-error for="form.rate_pcl" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-label for="form.rate_pml" value="Rate Pengawasan" />
            <x-input id="form.rate_pml" wire:model="form.rate_pml" type="number" class="w-full mt-1"
                autocomplate="form.rate_pml" />
            <x-input-error for="form.rate_pml" class="mt-1" />
        </div>
    </div>
    @endif
    @if($modalKegiatanEdit == true)
    <div class="grid grid-cols-2 gap-2 justify-between">
        <div class="mb-4">
            <x-label for="form.rate_pcl" value="Rate Pencacahan" />
            <x-input id="form.rate_pcl" wire:model="form.rate_pcl" type="number" class="w-full mt-1"
                autocomplate="form.rate_pcl" />
            <x-input-error for="form.rate_pcl" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-label for="form.rate_pml" value="Rate Pengawasan" />
            <x-input id="form.rate_pml" wire:model="form.rate_pml" type="number" class="w-full mt-1"
                autocomplate="form.rate_pml" />
            <x-input-error for="form.rate_pml" class="mt-1" />
        </div>
    </div>
    @endif
    <div class="grid grid-cols-2 gap-2 justify-between">
        @if($selectedJenis == "PENGOLAHAN" && $modalKegiatanCreate == true)
        <div class="mb-4">
            <x-label for="form.rate_entri" value="Rate Entri" />
            <x-input id="form.rate_entri" wire:model="form.rate_entri" type="number" class="w-full mt-1"
                autocomplate="form.rate_entri" />
            <x-input-error for="form.rate_entri" class="mt-1" />
        </div>
        @endif
        @if($modalKegiatanEdit == true)
        <div class="mb-4">
            <x-label for="form.rate_entri" value="Rate Entri" />
            <x-input id="form.rate_entri" wire:model="form.rate_entri" type="number" class="w-full mt-1"
                autocomplate="form.rate_entri" />
            <x-input-error for="form.rate_entri" class="mt-1" />
        </div>
        @endif
        <div class="mb-4">
            <x-label for="form.jml_ptgs" value="Jml Petugas" />
            <x-input id="form.jml_ptgs" wire:model="form.jml_ptgs" type="number" class="w-full mt-1"
                autocomplate="form.jml_ptgs" />
            <x-input-error for="form.jml_ptgs" class="mt-1" />
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2 justify-between">
        <div class="mb-4">
            <x-label for="form.tgl_mulai" value="Mulai" />
            <x-input id="form.tgl_mulai" wire:model="form.tgl_mulai" type="date" class="w-full mt-1"/>
            <x-input-error for="form.tgl_mulai" class="mt-1" />
        </div>
        <div class="mb-4">
            <x-label for="form.tgl_selesai" value="Selesai" />
            <x-input id="form.tgl_selesai" wire:model="form.tgl_selesai" type="date" class="w-full mt-1"
            placeholder="dd-mm-yyyy"/>
            <x-input-error for="form.tgl_selesai" class="mt-1" />
        </div>
    </div>
