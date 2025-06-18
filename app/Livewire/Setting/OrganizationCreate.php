<?php

namespace App\Livewire\Setting;

use Livewire\Component;

class OrganizationCreate extends Component
{
    public $orgModal = false;
    public $deptModal = false;
    public $selectedOrg;
    public $selectedDept;
    public $org =[];
    public $dept =[];

    public function mount()
    {
        $this->org = \DB::table('organizations')
            ->select('id', 'name')
            ->get();
        $this->dept = \DB::table('departements')
            ->where('organization_id', \Auth::user()->organizations->pluck('id')->first())
            ->select('id', 'name')
            ->get();
        $this->selectedOrg = \Auth::user()->organizations->pluck('id')->first();
        $this->selectedDept = \Auth::user()->departements->pluck('id')->first();
    }
    public function openOrgModal()
    {
        $this->orgModal = true;
        $this->selectedOrg = null;
        
    }
    public function openDeptModal()
    {
        $this->deptModal = true;
        $this->selectedDept = null;
        
    }
    public function saveOrg()
    {
        $this->validate([
            'selectedOrg' => 'required|unique:organizations,name',
        ]);

        $org = \DB::table('organizations')->insert([
            'name' => $this->selectedOrg,
            'created_at' => now(),
        ]);
        $this->closeModal();
        $orgName = \DB::table('organizations')->where('id', $this->selectedOrg)->first();

        is_null($org)
            ? $this->dispatch('notify', title: 'failed', message: 'Data Gagal Ditambahkan !')
            : $this->dispatch('notify', title: 'success', message: 'Data Organisasi anda Berhasil Ditambahkan yaitu ' 
                . $orgName->name . '.');

        $this->dispatch('dispatch-org-create')->to(Index::class);
    }
    public function saveDept()
    {
        $this->validate([
            'selectedDept' => 'required|unique:departements,name',
        ]);
        // dd($this->selectedOrg);

        $dept = \App\Models\Departement::create([
            'name' => $this->selectedDept,
            'organization_id' => $this->selectedOrg,
            'created_at' => now(),
        ]);
        // dd($dept);
        $this->closeModal();
        // $deptName = \DB::table('departements')->where('id', $this->selectedDept)->first(); 

        is_null($dept)
            ? $this->dispatch('notify', title: 'failed', message: 'Data Gagal Ditambahkan !')
            : $this->dispatch('notify', title: 'success', message: 'Data Departemen/Seksi anda Berhasil Ditambahkan yaitu ' 
                . $dept->name . '.');

        $this->dispatch('dispatch-dept-create')->to(Index::class);
    }
    public function save()
    {
        if(empty($this->selectedDept)){
            $this->validate([
                'selectedOrg' => 'required',
            ]);
        }else{
            $this->validate([
                'selectedOrg' => 'required',
                'selectedDept' => 'required',
            ]);
        }
        $this->validate([
            'selectedOrg' => 'required|unique:organizations,name',
        ]);
        $myorg = [$this->selectedOrg];
        $mydept = [$this->selectedDept];

        \Auth::user()->organizations()->attach($myorg);
        $success = \Auth::user()->organizations()->sync($myorg);

        \Auth::user()->departements()->attach($mydept);
        $success = \Auth::user()->departements()->sync($mydept);


        $orgName = \DB::table('organizations')->where('id', $this->selectedOrg)->first();
        $this->dept = \DB::table('departements')->where('organization_id', $this->selectedOrg)->get();
        if(empty($this->selectedDept)){
            $msg = 'Data Organisasi anda Berhasil Diupdate menjadi ' . $orgName->name . '.';
        }else{
            $deptName = \DB::table('departements')->where('id', $this->selectedDept)->first();
            $msg = 'Data Organisasi anda Berhasil Diupdate menjadi ' . $orgName->name . ', dan Departemen anda Berhasil Diupdate menjadi ' . $deptName->name . '.';   
        }

        is_null($success)
            ? $this->dispatch('notify', title: 'failed', message: 'Data Gagal Diupdate !')
            : $this->dispatch('notify', title: 'success', message: $msg);

        $this->dispatch('dispatch-org-update')->to(Index::class);
    }
    public function closeModal()
    {
        $this->orgModal = false;
        $this->deptModal = false;
    }
    // public function getDept()
    // {
    //     dd($this->selectedOrg);

    //     $this->dept = \DB::table('departements')->where('organization_id', $this->selectedOrg)->get();
    // }

    public function render()
    {
        $this->dept = \DB::table('departements')->when($this->selectedOrg !== '',function($query){
                    $query->where('organization_id', $this->selectedOrg);
                })->get();
        return view('livewire.setting.organization-create');
    }
}