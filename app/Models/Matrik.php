<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrik extends Model
{
    use HasFactory;

    protected $fillable = [
        'program',
        'kabupaten',
        'kecamatan',
        'koordinat',
        'biaya'
    ];
}
