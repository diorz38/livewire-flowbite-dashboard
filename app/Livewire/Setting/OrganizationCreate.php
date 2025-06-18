<?php

namespace App\Livewire\Setting;

use Livewire\Component;

class OrganizationCreate extends Component
{
    public $orgModal = false;
    public $selectedOrg;
    public $org =[];
    public $deptModal = false;

    public function mount()
    {
        $this->org = \DB::table('organizations')
            ->select('id', 'name')
            ->get();
            // ->toArray();
        $this->selectedOrg = \Auth::user()->organizations->pluck('id')->first();
    }
    public function openOrgModal()
    {
        $this->orgModal = true;
    }
    public function saveOrg()
    {
        $this->validate([
            'selectedOrg' => 'required|unique:organizations,name',
        ]);

        \DB::table('organizations')->insert([
            'name' => $this->selectedOrg,
            'created_at' => now(),
        ]);
        $this->closeModal();
        return redirect()->route('settings')->navigate()
            ->with('success', 'Organization created successfully.');
    }
    public function save()
    {
        $this->validate([
            'selectedOrg' => 'required|unique:organizations,name',
        ]);
        $myorg = [$this->selectedOrg];

        \Auth::user()->organizations()->attach($myorg);
        \Auth::user()->organizations()->sync($myorg);

        // return redirect()->route('settings')->navigate()
        //     ->with('success', 'Organization created successfully.');
    }
    public function closeModal()
    {
        $this->orgModal = false;
        $this->deptModal = false;
    }




    public function render()
    {
        return view('livewire.setting.organization-create');
    }
}