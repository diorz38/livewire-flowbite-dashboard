<?php

namespace App\Livewire\Admin\Role;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.role.index',[
            'title'  => 'Roles & Permissions'
        ]);
    }
}
