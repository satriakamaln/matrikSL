<?php

namespace Database\Seeders;

use App\Models\Prioritas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrioritasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prioritas = [
            ['prioritas_daerah' => '(2024) Meningkatkan Kualitas Sumber Daya Manusia Yang Unggul Dan Berdaya Saing', 'tahunpd' => '2024'],
            ['prioritas_daerah' => '(2024) Memperkuat Infrastruktur Untuk Pemenuhan Pelayanan Dasar Dan Pengembangan Perekonomian Daerah', 'tahunpd' => '2024'],
            ['prioritas_daerah' => '(2024) Penguatan Sektor Industri, UMKM, Pertanian dan Pariwisata', 'tahunpd' => '2024'],
            ['prioritas_daerah' => '(2024) Meningkatkan Pengelolaan Lingkungan Hidup Untuk Mendukung Ketahanan Bencana', 'tahunpd' => '2024'],
            ['prioritas_daerah' => '(2024) Meningkatkan Tata Kelola Pemerintahan Yang Fokus Pada Pelayanan Publik', 'tahunpd' => '2024'],

            ['prioritas_daerah' => '(2025) Penguatan Sektor Industri, UMKM, Pertanian Dan Pariwisata Didukung Tenaga Kerja Berkualitas Dan Energi Berkelanjutan ', 'tahunpd' => '2025'],
            ['prioritas_daerah' => '(2025) Pemantapan Kualitas Sumber Daya Manusia Yang Unggul Dan Berdaya Saing', 'tahunpd' => '2025'],
            ['prioritas_daerah' => '(2025) Pemantapan Infrastruktur Dasar Dan Ekonomi', 'tahunpd' => '2025'],
            ['prioritas_daerah' => '(2025) Pemantapan Kualitas Sumber Daya Manusia Yang Unggul Dan Berdaya Saing', 'tahunpd' => '2025'],
            ['prioritas_daerah' => '(2025) Meningkatkan Pengelolaan Lingkungan Hidup Untuk Mendukung Ketahanan Bencana', 'tahunpd' => '2025'],
        ];

        Prioritas::insert($prioritas);
    }
}
