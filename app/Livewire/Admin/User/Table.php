<?php

namespace App\Livewire\Admin\User;

use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Livewire\Forms\FormUser;


class Table extends Component
{
    use WithPagination;

    public FormUser $form;

    #[Url(history:true)]
    public $search;

    public $deletedId;
    public $editMode = false;
    public $createMode = false;


    #[Computed()]
    public function dataUser()
    {
        return User::when($this->search !== '',function($query){
            $query->where('name', 'like', '%' . $this->search . '%');
        })->orderBy('created_at', 'desc')->simplepaginate();
    }

    #[On('user-create-save')]
    #[On('user-edit-update')]
    #[On('user-delete-table')]
    public function render()
    {
        return view('livewire.admin.user.table',[
            'dataUser' => $this->dataUser()
        ]);
    }
}
