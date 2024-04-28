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
        Schema::create('tkelas', function (Blueprint $table) {
            $table->integer('tSubjek_id')->index('fk_tsubjek_has_tpegawai_tsubjek_idx');
            $table->integer('idGuru')->index('fk_tsubjek_has_tpegawai_tpegawai1_idx');
            $table->string('lokasiKelas', 45)->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jamKelas')->nullable();
            $table->integer('tahunSekolah_idtahunSekolah')->index('fk_tkelas_tahunsekolah1_idx');

            $table->primary(['tSubjek_id', 'idGuru']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkelas');
    }
};
