<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkpdProv extends Model
{
    use HasFactory;

    public function bidangs()
    {
        return $this->belongsToMany(Bidang::class, 'bidang_urusan_skpd');
    }

    public function matriks()
    {
        return $this->hasMany(Matrik::class);
    }
}
