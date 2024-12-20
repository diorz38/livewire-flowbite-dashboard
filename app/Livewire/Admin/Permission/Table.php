<?php

namespace App\Livewire\Admin\Permission;

use App\Livewire\Forms\PermissionForm;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public PermissionForm $form;


    public function delete(Role $role){
        dd($role);
        if ($role->hasRole('Super Admin'))
        {
            $role->syncRoles([]);
            $role->delete();

        }else{
            abort(403, 'USER DOES NOT HAVE THE RIGHT PERMISSIONS');

        }
        // $kegiatan->delete();
    }


    #[On('dispatch-permissions-create-save')]
    #[On('dispatch-permissions-create-edit')]
    #[On('dispatch-permissions-delete-del')]
    public function render()
    {
        return view('livewire.admin.permission.table', [
            'permissions'  => Permission::simplepaginate(100),
        ]);
    }
}
