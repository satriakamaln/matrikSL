<?php

namespace Database\Seeders;

use App\Models\Goalsdgs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalsdgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goal_sdgs = [
            ['goal_sdgs' => '1. TANPA KEMISKINAN'],
            ['goal_sdgs' => '2. TANPA KELAPARAN'],
            ['goal_sdgs' => '3. KEHIDUPAN SEHAT DAN SEJAHTERA'],
            ['goal_sdgs' => '4. PENDIDIKAN BERKUALITAS'],
            ['goal_sdgs' => '5. KESETARAAN GENDER'],
            ['goal_sdgs' => '6. AIR BERSIH DAN SANITASI LAYAK'],
            ['goal_sdgs' => '7. ENERGI BERSIH DAN TERJANGKAU'],
            ['goal_sdgs' => '8. PEKERJAAN LAYAK DAN PERTUMBUHAN EKONOMI'],
            ['goal_sdgs' => '9. INDUSTRI INOVASI DAN INFRASTRUKTUR'],
            ['goal_sdgs' => '10. BERKURANGNYA KESENJANGAN'],
            ['goal_sdgs' => '11. KOTA DAN PEMUKIMAN YANG BERKELANJUTAN'],
            ['goal_sdgs' => '12. KONSUMSI DAN PRODUKSI YANG BERTANGGUNG JAWAB'],
            ['goal_sdgs' => '13. PENANGANAN PERUBAHAN IKLIM'],
            ['goal_sdgs' => '14. EKOSISTEM LAUTAN'],
            ['goal_sdgs' => '15. EKOSISTEM DARATAN'],
            ['goal_sdgs' => '16. PERDAMAIAN, KEADILAN DAN KELEMBAGAAN YANG TANGGUH '],
            ['goal_sdgs' => '17. KEMITRAAN UNTUK MENCAPAI TUJUAN'],
        ];

        Goalsdgs::insert($goal_sdgs);
    }
}
