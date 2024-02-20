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
            ['kabupaten' => 'BALANGAN'],
            ['kabupaten' => 'BANJAR'],
            ['kabupaten' => 'BARITO KUALA'],
            ['kabupaten' => 'HULU SUNGAI SELATAN'],
            ['kabupaten' => 'HULU SUNGAI TENGAH'],
            ['kabupaten' => 'HULU SUNGAI UTARA'],
            ['kabupaten' => 'KOTA BANJARMASIN'],
            ['kabupaten' => 'KOTA BANJARBARU'],
            ['kabupaten' => 'KOTABARU'],
            ['kabupaten' => 'TABALONG'],
            ['kabupaten' => 'TANAH BUMBU'],
            ['kabupaten' => 'TANAH LAUT'],
            ['kabupaten' => 'TAPIN'],
        ];

        Kabupaten::insert($kabupaten);
    }
}
