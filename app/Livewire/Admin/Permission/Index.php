<?php

namespace App\Livewire\Admin\Permission;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.permission.index', [
            'roles' => Role::simplePaginate(10),
            'permissions' => Permission::simplePaginate(10),
        ]);
    }
}