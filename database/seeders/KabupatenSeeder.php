<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabupaten = [
            ['kabupaten' => 'Kabupaten Awk'],
            ['kabupaten' => 'Kabupaten Kaw'],
            ['kabupaten' => 'Kabupaten Wak']
        ];

        Kabupaten::insert($kabupaten);
    }
}
