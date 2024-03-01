<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangUrusanSkpd extends Model
{
    use HasFactory;

    protected $table = 'bidang_urusan_skpd';
    protected $fillable = [
        'skpd_prov_id',
        'bidang_id'
    ];

    public function SkpdProv()
    {
        return $this->belongsTo(SkpdProv::class, 'skpd_prov_id');
    }

    public function Bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
}
