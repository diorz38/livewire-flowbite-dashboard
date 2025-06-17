<?php

namespace App\Livewire\Kegiatan;

use App\Livewire\Forms\KegiatanForm;
use App\Models\Kegiatan;
use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public KegiatanForm $form;

    #[Url(history:true)]
    public $search = '';

    #[Url(history:true)]
    public $selectedfungsi = '';

    #[Url(history:true)]
    public $sortBy = 'created_at';

    #[Url(history:true)]
    public $sortDir = 'DESC';

    #[Url()]
    public $perPage = 5;

    public function delete(Kegiatan $kegiatan){
        dd($kegiatan);
        // $kegiatan->delete();
    }

    public function setSortBy($sortByField){

        if($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : "ASC";
            return;
        }

        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    #[On('dispatch-kegiatan-create-save')]
    #[On('dispatch-kegiatan-create-edit')]
    #[On('dispatch-kegiatan-delete-del')]
    public function render()
    {
        $listFungsi = Kegiatan::groupBy('fungsi')->pluck('fungsi');
        $data = Kegiatan::when($this->search !== '',function($query){
                    $query->where('nama', 'like', '%' . $this->search . '%');
                })
                ->when($this->selectedfungsi !== '',function($query){
                    $query->where('fungsi',$this->selectedfungsi);
                })
                ->withSum('penugasan', 'volume')
                ->orderBy($this->sortBy,$this->sortDir)
                ->paginate($this->perPage);
        return view('livewire.kegiatan.table', [
            'data'  => $data,
            'listFungsi' => $listFungsi
        ]);
    }
}
