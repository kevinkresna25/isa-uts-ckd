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
        Schema::create('trapor', function (Blueprint $table) {
            $table->integer('tSiswa_idSiswa')->index('fk_tsubjek_has_tsiswa_tsiswa1_idx');
            $table->double('nilaiUTS')->nullable();
            $table->double('nilaiUAS')->nullable();
            $table->double('nilaiTugas')->nullable();
            $table->double('nilaiKeterampilan')->nullable();
            $table->double('nilaiAfektif')->nullable();
            $table->integer('idGuru')->index('fk_trapor_tpegawai1_idx');
            $table->string('pendapatGuru', 45)->nullable();
            $table->integer('tSubjek_id')->index('fk_trapor_tsubjek1_idx');
            $table->integer('tahunSekolah_idtahunSekolah')->index('fk_trapor_tahunsekolah1_idx');

            $table->primary(['tSiswa_idSiswa']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trapor');
    }
};
