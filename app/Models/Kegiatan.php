<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\FungsiType;
use App\Enums\JenisKegiatanType;
use App\Enums\SatuanType;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';

    protected $guarded = [];

    protected $casts = [
        'tgl_mulai' => 'date',
        'tgl_selesai' => 'date',
        'fungsi' => FungsiType::class,
        'jenis_kegiatan' => JenisKegiatanType::class,
        'satuan' => SatuanType::class,
    ];
}
