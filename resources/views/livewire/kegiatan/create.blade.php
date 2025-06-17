<div class="print:!hidden">
    <x-button @click="$wire.set('modalKegiatanCreate', true)">Tambah Kegiatan</x-button>

    <x-dialog-modal wire:model.live="modalKegiatanCreate" submit="save">
        <x-slot name="title">
            Kegiatan baru
        </x-slot>

        <x-slot name="content">
            @include('livewire.kegiatan.form')
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalKegiatanCreate', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <x-button class="ms-3" @click="$wire.save()" wire:loading.attr="disabled">
                Simpan
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
