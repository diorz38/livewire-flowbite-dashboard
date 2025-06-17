<?php

namespace App\Livewire\Forms;

use App\Models\Kegiatan;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Component;

class KegiatanForm extends Form
{
    public ?Kegiatan $kegiatan;

    #[Locked]
    public $id;


    #[Rule('required|min:4|max:4', as: 'Tahun')]
    public $tahun;

    #[Rule('required|min:11|max:11', as: 'Kode Kegiatan')]
    public $kode_kegiatan;

    #[Rule('required', as: 'Fungsi')]
    public $fungsi;

    #[Rule('required|min:10', as: 'Nama Kegiatan')]
    public $nama;

    #[Rule('required|date', as: 'Tanggal Mulai')]
    public $tgl_mulai;

    #[Rule('required|date', as: 'Tanggal Selesai')]
    public $tgl_selesai;

    #[Rule('required', as: 'Jenis Kegiatan')]
    public $jenis_kegiatan;

    #[Rule('required|numeric|min:1', as: 'Jumlah Petugas')]
    public $jml_ptgs;

    #[Rule('required|numeric|min:1', as: 'Volume')]
    public $volume;

    #[Rule('required', as: 'Satuan')]
    public $satuan;

    #[Rule('nullable|numeric|min:100', as: 'Rate PCL')]
    public $rate_pcl;

    #[Rule('nullable|numeric|min:100', as: 'Rate PML')]
    public $rate_pml;

    #[Rule('nullable|numeric|min:100', as: 'Rate Entri')]
    public $rate_entri;


    public function setKegiatan(Kegiatan $kegiatan)
    {
        $this->kegiatan = $kegiatan;

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
        $this->rate_pcl = $kegiatan->rate_pcl;
        $this->rate_pml = $kegiatan->rate_pml;
        $this->rate_entri = $kegiatan->rate_entri;
    }

    public function store()
    {
        Kegiatan::create($this->except(['kegiatan', 'id']));

        $this->reset();
    }

    public function update()
    {
        $this->kegiatan->update($this->except(['kegiatan', 'id']));
    }
}
