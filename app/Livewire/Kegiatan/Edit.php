<?php

namespace App\Livewire\Kegiatan;

use App\Livewire\Forms\KegiatanForm;
use App\Models\Kegiatan;
use Livewire\Attributes\On;
use Livewire\Component;

class Edit extends Component
{
    public KegiatanForm $form;
    public $modalKegiatanEdit = false;
    public $selectedJenis;

    public function updatedSelectedJenis()
    {
        $this->form->jenis_kegiatan = $this->selectedJenis;
    }
    #[On('dispatch-kegiatan-table-edit')]
    public function set_kegiatan(Kegiatan $id)
    {
        $this->form->setKegiatan($id);
        $this->selectedJenis = $this->form->jenis_kegiatan;

        $this->modalKegiatanEdit = true;
    }

    public function edit()
    {
        $this->form->jenis_kegiatan = $this->selectedJenis;
        $this->validate();

        // dd($this->form);
        $update = $this->form->update();

        $this->modalKegiatanEdit = false;

        is_null($update)
            ? $this->dispatch('notify', title: 'success', message: 'Data Berhasil Diupdate !')
            : $this->dispatch('notify', title: 'failed', message: 'Data Gagal Diupdate !');

        $this->dispatch('dispatch-kegiatan-create-edit')->to(Table::class);
    }

    public function render()
    {
        return view('livewire.kegiatan.edit');
    }
}
