<?php

namespace App\Livewire\Admin\User;

use App\Livewire\Forms\FormUser;
use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    public FormUser $form;

    public $modalUserCreate = false;

    public $roles = [];

    public function mount()
    {
        $this->roles = Role::pluck('name');
    }

    public function save()
    {
        if(\Auth::user()->hasRole('super-admin')){

            $simpan = $this->form->store();
        }

        $this->modalUserCreate = false;

        is_null($simpan)
            ? $this->dispatch('notify', title: 'success', message: 'Data Berhasil Disimpan!')
            : $this->dispatch('notify', title: 'failed', message: 'Data Gagal Disimpan!');

        $this->dispatch('dispatch-user-create-save')->to(Table::class);
    }
    public function render()
    {
        return view('livewire.admin.user.create',[
            'listRoles' => $this->roles
        ]);
    }
}
