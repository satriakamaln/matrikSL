<?php

namespace Database\Seeders;

use App\Models\Misirpjmd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MisirpjmdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $misi_rpjmd = [
            ['misi_rpjmd' => 'Membangun Sumber Daya Manusia yang Berkualitas dan Berbudi Pekerti Luhur '],
            ['misi_rpjmd' => 'Mendorong Pertumbuhan Ekonomi yang Merata'],
            ['misi_rpjmd' => 'Memperkuat Sarana Prasarana Dasar dan Perekonomian'],
            ['misi_rpjmd' => 'Tata Kelola Pemerintahan yang Lebih Fokus pada Pelayanan Publik'],
            ['misi_rpjmd' => 'Menjaga Kelestarian Lingkungan Hidup dan Memperkuat Ketahanan Bencana ']
        ];

        Misirpjmd::insert($misi_rpjmd);
    }
}
