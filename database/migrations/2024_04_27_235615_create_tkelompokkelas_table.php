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
        Schema::create('tkelompokkelas', function (Blueprint $table) {
            $table->integer('idGuru')->index('fk_tkelompokkelas_tpegawai1_idx');
            $table->string('namaKelas', 45)->nullable();
            $table->integer('id')->primary(); 
            $table->integer('tahunSekolah_idtahunSekolah')->index('fk_tkelompokkelas_tahunsekolah1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkelompokkelas');
    }
};
