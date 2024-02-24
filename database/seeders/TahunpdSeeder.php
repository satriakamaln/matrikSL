<?php

namespace Database\Seeders;

use App\Models\Tahunpd;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TahunpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tahunpd = [
            ['tahunpd' => '2024'],
            ['tahunpd' => '2025'],

        ];

        Tahunpd::insert($tahunpd);
    }
}
