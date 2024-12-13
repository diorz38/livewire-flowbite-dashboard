<?php

namespace App\Livewire\Admin\Permission;

use App\Livewire\Forms\PermissionForm;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\On;
use Livewire\Component;

class Edit extends Component
{
    public PermissionForm $form;
    public $modalPermissionEdit = false;

    #[On('dispatch-permissions-table-edit')]
    public function set_permission(Permission $id)
    {
        $this->form->setPermission($id);

        $this->modalPermissionEdit = true;
    }

    public function edit()
    {
        if (\Auth::user()->hasRole('super-admin')){
            $this->validate();

            $update = $this->form->update();

            $this->modalPermissionEdit = false;
        }

        is_null($update)
            ? $this->dispatch('notify', title: 'success', message: 'Data Berhasil Diupdate !')
            : $this->dispatch('notify', title: 'failed', message: 'Data Gagal Diupdate !');

        $this->dispatch('dispatch-permissions-create-edit')->to(Table::class);
    }

    public function render()
    {
        return view('livewire.admin.permission.edit');
    }
}
