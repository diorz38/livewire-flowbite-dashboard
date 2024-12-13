<?php

namespace App\Livewire\Admin\Role;

use App\Livewire\Forms\RoleForm;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public RoleForm $form;


    public function delete(Role $role){
        dd($role);
        if ($role->hasRole('super-admin'))
        {
            $role->syncRoles([]);
            $role->delete();

        }else{
            abort(403, 'USER DOES NOT HAVE THE RIGHT PERMISSIONS');

        }
        // $kegiatan->delete();
    }

    #[On('dispatch-roles-create-save')]
    #[On('dispatch-roles-create-edit')]
    #[On('dispatch-roles-delete-del')]
    public function render()
    {
        // dd(Role::simplepaginate(10));
        return view('livewire.admin.role.table', [
            'data'  => Role::simplepaginate(100),
        ]);
    }
}
