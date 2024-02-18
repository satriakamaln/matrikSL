<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatan = [
            ['kecamatan' => 'Awk Utara', 'kabupaten' => 'Kabupaten Awk'],
            ['kecamatan' => 'Awk Selatan', 'kabupaten' => 'Kabupaten Awk'],
            ['kecamatan' => 'Kaw City', 'kabupaten' => 'Kota Kaw'],
            ['kecamatan' => 'Kaw Central', 'kabupaten' => 'Kota Kaw'],
            ['kecamatan' => 'Wak Haiya', 'kabupaten' => 'Kabupaten Wak'],
            ['kecamatan' => 'Wak Hulu hulu', 'kabupaten' => 'Kabupaten Wak'],
        ];

        Kecamatan::insert($kecamatan);
    }
}
