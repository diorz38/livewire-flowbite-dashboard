<?php

namespace App\Livewire\Manpro\Project;

use Livewire\Component;
use Livewire\Attributes\On;

class Index extends Component
{
    public $modalCreateProduct = 0;
    public $array = ['active', 'inactive', 'pending', 'suspended'];
    #[On('open-modal')]
    public function openModal()
    {
        $this->modalCreateProduct = ++$this->modalCreateProduct;
    }

    public function render()
    {
        return view('livewire.manpro.project.index');
    }
}
