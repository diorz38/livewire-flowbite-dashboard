<?php

namespace App\Livewire\Kegiatan;

use App\Livewire\Forms\KegiatanForm;
use App\Models\Kegiatan;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{
    #[Locked]
    public $id;

    #[Locked]
    public $nama;

    public $modalKegiatanDelete = false;

    #[On('dispatch-kegiatan-table-delete')]
    public function set_kegiatan($id, $nama)
    {
        $this->id = $id;
        $this->nama = $nama;

        $this->modalKegiatanDelete = true;
    }

    public function del()
    {
        $del = Kegiatan::destroy($this->id);

        $this->modalKegiatanDelete = false;

        is_null($del)
            ? $this->dispatch('notify', title: 'failed', message: 'Data Gagal Dihapus !')
            : $this->dispatch('notify', title: 'success', message: 'Data Berhasil Dihapus !');

        $this->dispatch('dispatch-kegiatan-delete-del')->to(Table::class);
    }
    public function render()
    {
        return view('livewire.kegiatan.delete');
    }
}
