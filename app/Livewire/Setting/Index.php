<?php

namespace App\Livewire\Setting;

use Livewire\Component;

class Index extends Component
{
    public $orgs = [];
    public function render()
    {
        $this->orgs = \DB::table('organizations')
            ->select('id', 'name')
            ->get();
        return view('livewire.setting.index');
    }
}