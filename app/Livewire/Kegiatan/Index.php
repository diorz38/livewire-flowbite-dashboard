<?php

namespace App\Livewire\Kegiatan;

use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Kegiatan;
use App\Livewire\Forms\FormKegiatan;

class Index extends Component
{
    use WithPagination;

    public FormKegiatan $form;

    #[Url(history:true)]
    public $search;

    public $deletedId;
    public $editMode = false;
    public $createMode = false;


    #[Computed()]
    public function dataKeg()
    {
        return Kegiatan::when($this->search !== '',function($query){
            $query->where('nama', 'like', '%' . $this->search . '%');
        })->orderBy('created_at', 'desc')->simplepaginate();
    }

    #[On('edit-kegiatan-table')]
    public function edit(Kegiatan $id)
    {
        $this->form->setKegiatan($id);

    }
    #[On('edit-kegiatan-close')]
    public function clear()
    {
        $this->form->reset();
    }

    #[On('dispatch-kegiatan-table-edit')]
    public function setKegiatan($id)
    {
        $kegiatan = Kegiatan::find($id);
        $this->form->setKegiatan($kegiatan);
        $this->editMode = true;

    }
    public function update()
    {
        $this->validate();
        $this->form->updateKegiatan();

        request()->session()->flash('success', __('Kegiatan berhasil diperbarui'));
        $this->dispatch('kegiatan-edit-update')->to(Index::class);
        $this->redirectRoute('kegiatan.index', navigate: true);

        $this->editMode = false;
        $this->createMode = false;

        $this->dispatch('kegiatan-edit-update')->to(Index::class);
    }

    public function create()
    {
        $this->createMode = true;

    }

    public function save()
    {
        $this->validate();

        $update = $this->form->createKegiatan();

        $this->redirectRoute('kegiatan.index',navigate:true);
        request()->session()->flash('success', __('Kegiatan berhasil ditambahkan'));

        $this->createMode = false;
        $this->editMode = false;
        $this->form->editMode = false;

        $this->dispatch('kegiatan-create-save')->to(Index::class);
    }
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        Kegiatan::findOrFail($this->deleteId)->delete();

        $this->redirectRoute('kegiatan.index', navigate: true);
        request()->session()->flash('success', __('Kegiatan berhasil dihapus'));
        $this->dispatch('kegiatan-delete-table')->to(Index::class);
    }

    public function close()
    {
        $this->createMode = false;
        $this->editMode = false;
        $this->reset();
        // $this->dispatch('dispatch-kegiatan-delete-del')->to(Index::class);
    }

    #[On('kegiatan-create-save')]
    #[On('kegiatan-edit-update')]
    #[On('kegiatan-delete-table')]
    public function render()
    {
        return view('livewire.kegiatan.index',[
            'dataKeg' => $this->datakeg()
        ])->layout('layouts.app');
    }
}
