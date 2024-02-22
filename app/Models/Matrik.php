<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrik extends Model
{
    use HasFactory;

    protected $fillable = [

        'pilar',
        'goal_sdgs',
        'misi_rpjmd',
        'prioritas_daerah',
        'program',
        'kegiatan',
        'subkegiatan',
        'aktifitas',
        'target',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'koordinat',
        'biaya',
        'dinas_pengampu',
    ];
}
