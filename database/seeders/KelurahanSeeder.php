<?php

namespace Database\Seeders;

use App\Models\Kelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelurahan = [
            ['kelurahan' => 'Awk A', 'kecamatan' => 'Awk Utara'],
            ['kelurahan' => 'Awk B', 'kecamatan' => 'Awk Utara'],
            ['kelurahan' => 'Awk C', 'kecamatan' => 'Awk Selatan'],
            ['kelurahan' => 'Awk D', 'kecamatan' => 'Awk Selatan'],
            ['kelurahan' => 'Kaw A', 'kecamatan' => 'Kaw City'],
            ['kelurahan' => 'Kaw B', 'kecamatan' => 'Kaw City'],
            ['kelurahan' => 'Kaw C', 'kecamatan' => 'Kaw Central'],
            ['kelurahan' => 'Kaw D', 'kecamatan' => 'Kaw Central'],
            ['kelurahan' => 'Wak A', 'kecamatan' => 'Wak Haiya'],
            ['kelurahan' => 'Wak B', 'kecamatan' => 'Wak Haiya'],
            ['kelurahan' => 'Wak C', 'kecamatan' => 'Wak Hulu hulu'],
            ['kelurahan' => 'Wak D', 'kecamatan' => 'Wak Hulu hulu'],
        ];

        Kelurahan::insert($kelurahan);
    }
}
