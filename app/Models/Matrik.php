<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Matrik extends Model
{
    use HasFactory;

    protected $fillable = [
        'pilar',
        'goal_sdgs',
        'misi_rpjmd',
        'tahunpd',
        'prioritas_daerah',
        'skpd_prov_id',
        'kode_bidang',
        'kode_program',
        'kode_kegiatan',
        'kode_subkegiatan',
        'aktifitas',
        'target',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'koordinat',
        'biaya',
    ];

    public function SkpdProv()
    {
        return $this->belongsTo(SkpdProv::class, 'skpd_prov_id');
    }

    public function Bidang()
    {
        return $this->belongsTo(Bidang::class, 'kode_bidang', 'kode_bidang');
    }

    public function Program()
    {
        return $this->belongsTo(Program::class, 'kode_program', 'kode_program');
    }

    public function Kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kode_kegiatan', 'kode_kegiatan');
    }
    public function Subkegiatan()
    {
        return $this->belongsTo(Subkegiatan::class, 'kode_subkegiatan', 'kode_subkegiatan');
    }
}
