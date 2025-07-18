<?php

namespace App\Livewire\Kegiatan;

use App\Livewire\Forms\KegiatanForm;
use App\Models\Kegiatan;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public KegiatanForm $form;
    public $modalKegiatanCreate = false;
    public $modalKegiatanEdit = false;
    public $selectedJenis;

    #[On('dispatch-kegiatan-table-create')]
    public function set_create()
    {
        $this->modalKegiatanCreate = true;
    }

    public function updatedSelectedJenis()
    {
        $this->form->jenis_kegiatan = $this->selectedJenis;
    }
    public function save()
    {
        $this->validate();

        // dd($this->form);
        $this->form->jenis_kegiatan = $this->selectedJenis;
        $update = $this->form->store();

        $this->modalKegiatanCreate = false;

        is_null($update)
            ? $this->dispatch('notify', title: 'success', message: 'Data Berhasil Diupdate !')
            : $this->dispatch('notify', title: 'failed', message: 'Data Gagal Diupdate !');

        $this->dispatch('dispatch-kegiatan-create-save')->to(Table::class);
    }

    public function render()
    {
        return view('livewire.kegiatan.create');
    }
}
