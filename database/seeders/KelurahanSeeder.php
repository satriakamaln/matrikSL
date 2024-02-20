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
            ['kelurahan' => 'AMBAKIANG', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'AWAYAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'AWAYAN HILIR', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BADALUNGGA', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BADALUNGGA HILIR', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BARAMBAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BARU', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BIHARA', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'BIHARA HILIR', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'KEDONDONG', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'MERAH', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'MUARA JAYA', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'NUNGKA', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'PIYAIT', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'PUDAK', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'PULANTAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'PUTAT BASIUN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'SEI PUMPUNG', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'SIKONTAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'TANGALIN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'TUNDAKAN', 'kecamatan' => 'AWAYAN'],
            ['kelurahan' => 'TUNDI', 'kecamatan' => 'AWAYAN'],

        ];

        Kelurahan::insert($kelurahan);
    }
}
