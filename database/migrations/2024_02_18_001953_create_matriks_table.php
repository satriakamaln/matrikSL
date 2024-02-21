<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matriks', function (Blueprint $table) {
            $table->id();
            $table->string('pilar');
            $table->string('goal_sdgs');
            $table->string('misi_rpjmd');
            $table->string('prioritas_daerah');
            $table->string('program');
            $table->string('kegiatan');
            $table->string('subkegiatan');
            $table->string('aktifitas');
            $table->string('target');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('koordinat');
            $table->decimal('biaya', 13, 2);
            $table->string('dinas_pengampu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriks');
    }
};
