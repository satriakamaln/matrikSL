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
        Schema::create('bidang_urusan_skpd', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skpd_prov_id');
            $table->unsignedBigInteger('bidang_id');
            $table->foreign('skpd_prov_id')->references('id')->on('skpd_provs')->onDelete('cascade');
            $table->foreign('bidang_id')->references('id')->on('bidangs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidang_urusan_skpd');
    }
};
