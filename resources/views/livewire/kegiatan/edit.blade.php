<div>
    <x-dialog-modal wire:model.live="modalKegiatanEdit" submit="edit">
        <x-slot name="title">
            Ubah Kegiatan
        </x-slot>

        <x-slot name="content">
            @include('livewire.kegiatan.form')
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalKegiatanEdit', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <x-button class="ms-3" @click="$wire.edit()" wire:loading.attr="disabled">
                Update
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
