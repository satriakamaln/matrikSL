<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Goalsdgs;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Misirpjmd;
use App\Models\Prioritas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     KabupatenSeeder::class
        // ]);

        // $this->call([
        //     KecamatanSeeder::class
        // ]);

        // $this->call([
        //     KelurahanSeeder::class
        // ]);

        // $this->call([
        //     GoalsdgsSeeder::class
        // ]);

        // $this->call([
        //     PilarSeeder::class
        // ]);

        // $this->call([
        //     MisirpjmdSeeder::class
        // ]);

        // $this->call([
        //     TahunpdSeeder::class
        // ]);

        $this->call([
            PrioritasSeeder::class
        ]);

        //  
    }
}
