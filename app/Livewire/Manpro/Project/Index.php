<?php

namespace App\Livewire\Manpro\Project;

use Livewire\Component;
use Livewire\Attributes\On;

class Index extends Component
{
    public $modalCreateProduct = 0;
    public $id = 0;
    public $array = ['Pelatihan Petugas', 'Pelaksanaan Lapangan', 'Supervisi Lapangan', 'Pengolahan Hasil', 'Evaluasi','Pelaporan'];
    #[On('open-modal')]
    public function openModal($id)
    {
        $this->id = $id+1;
        $this->modalCreateProduct = ++$this->modalCreateProduct;
    }

    public function render()
    {
        return view('livewire.manpro.project.index');
    }
}
