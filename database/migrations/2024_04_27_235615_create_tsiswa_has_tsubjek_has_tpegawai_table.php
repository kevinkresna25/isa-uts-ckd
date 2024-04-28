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
        Schema::create('tsiswa_has_tsubjek_has_tpegawai', function (Blueprint $table) {
            $table->integer('tSiswa_idSiswa')->index('fk_tsiswa_has_tsubjek_has_tpegawai_tsiswa1_idx');
            $table->integer('tSubjek_has_tPegawai_tSubjek_id');
            $table->integer('tSubjek_has_tPegawai_tPegawai_idPegawai');

            $table->index(['tSubjek_has_tPegawai_tSubjek_id', 'tSubjek_has_tPegawai_tPegawai_idPegawai'], 'fk_tsiswa_has_tsubjek_has_tpegawai_tsubjek_has_tpegawai1_idx');
            $table->primary(['tSiswa_idSiswa', 'tSubjek_has_tPegawai_tSubjek_id', 'tSubjek_has_tPegawai_tPegawai_idPegawai']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsiswa_has_tsubjek_has_tpegawai');
    }
};
