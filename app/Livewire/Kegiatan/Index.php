<?php

namespace App\Livewire\Kegiatan;

use Livewire\Component;
use Carbon\Carbon;

class Index extends Component
{
    public function render()
    {
        $date = Carbon::parse('2021-03-16 08:27:00')->locale('id')->settings(['formatFunction' => 'translatedFormat']);

        $data = [
            'hari' => $date->format('l'),
            'tanggal' => $date->format('j F Y'),
            'hari_tanggal' => $date->format('l, j F Y'),
        ];
        // dd($data);
        // dd($date->format('l, j F Y ; h:i a')); // Selasa, 16 Maret 2021 ; 08:27 pagi
        return view('livewire.kegiatan.index');
    }
}
