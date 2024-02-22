<?php

namespace Database\Seeders;

use App\Models\Pilar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pilarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pilar = [
            ['pilar' => 'SOSIAL'],
            ['pilar' => 'LINGKUNGAN'],
            ['pilar' => 'EKONOMI']
        ];

        Pilar::insert($pilar);
    }
}
