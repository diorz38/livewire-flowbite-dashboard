<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\FungsiType;
use App\Enums\JenisKegiatanType;
use App\Enums\SatuanType;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $guarded = ['id'];

    protected $casts = [
        'tgl_mulai' => 'datetime:Y-m-d',
        'tgl_selesai' => 'datetime:Y-m-d',
        'fungsi' => FungsiType::class,
        'jenis_kegiatan' => JenisKegiatanType::class,
        'satuan' => SatuanType::class,
    ];

    public function penugasan(): HasMany
    {
        return $this->hasMany(Penugasan::class);
    }
}
