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
        Schema::create('tpinjambuku', function (Blueprint $table) {
            $table->integer('tSiswa_idSiswa')->index('fk_tsiswa_has_ tbuku_tsiswa1_idx');
            $table->integer(' tBuku_idBuku')->index('fk_tsiswa_has_ tbuku_ tbuku1_idx');
            $table->dateTime('tanggalPinjam')->nullable();
            $table->dateTime('tanggalKembali')->nullable();
            $table->integer('tPegawai_idPegawai')->index('fk_tpinjambuku_tpegawai1_idx');

            $table->primary(['tSiswa_idSiswa', ' tBuku_idBuku']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpinjambuku');
    }
};
