<?php

namespace App\Livewire\Setting;

use Livewire\Component;
use Livewire\Attributes\On;

class Index extends Component
{
    public $orgs = [];

    #[On('dispatch-org-update')]
    #[On('dispatch-org-create')]
    #[On('dispatch-dept-create')]
    public function render()
    {
        $this->orgs = \DB::table('organizations')
            ->select('id', 'name')
            ->get();
        return view('livewire.setting.index');
    }
}