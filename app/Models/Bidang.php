<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    public function skpdprovs()
    {
        return $this->belongsToMany(SkpdProv::class, 'bidang_urusan_skpd');
    }
}
