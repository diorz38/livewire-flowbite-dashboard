<?php

namespace App\Livewire\Forms;

use App\Models\Kegiatan;
use Livewire\Attributes\Rule;
use Livewire\Form;

class FormKegiatan extends Form
{
    public ?Kegiatan $kegiatan;

    public $editMode = false;

    #[Rule('required')]
    public $tahun;

    #[Rule('required|min:5')]
    public $kode_kegiatan;

    #[Rule('required')]
    public $fungsi;

    #[Rule('required|min:5')]
    public $nama;

    #[Rule('required|date')]
    public $tgl_mulai;

    #[Rule('required|date')]
    public $tgl_selesai;

    #[Rule('required')]
    public $jenis_kegiatan;

    #[Rule('required')]
    public $jml_ptgs;

    #[Rule('required')]
    public $volume;

    #[Rule('required')]
    public $satuan;

    #[Rule('required')]
    public $rate_satuan;

    public function setKegiatan(Kegiatan $kegiatan)
    {
        // dd($kegiatan);
        $this->kegiatan = $kegiatan;
        $this->editMode = true;

        $this->tahun = $kegiatan->tahun;
        $this->kode_kegiatan = $kegiatan->kode_kegiatan;
        $this->fungsi = $kegiatan->fungsi;
        $this->nama = $kegiatan->nama;
        $this->tgl_mulai = $kegiatan->tgl_mulai->format('Y-m-d');
        $this->tgl_selesai = $kegiatan->tgl_selesai->format('Y-m-d');
        $this->jenis_kegiatan = $kegiatan->jenis_kegiatan;
        $this->jml_ptgs = $kegiatan->jml_ptgs;
        $this->volume = $kegiatan->volume;
        $this->satuan = $kegiatan->satuan;
        $this->rate_satuan = $kegiatan->rate_satuan;
    }

    public function createKegiatan()
    {
            $this->validate();
            Kegiatan::create($this->except(['kegiatan', 'id','editMode']));
            $this->reset();
    }

    public function updateKegiatan()
    {
            $this->kegiatan->update($this->except(['kegiatan', 'id','editMode']));
            $this->reset();

    }

}
