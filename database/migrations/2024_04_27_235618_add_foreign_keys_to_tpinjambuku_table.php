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
        Schema::table('tpinjambuku', function (Blueprint $table) {
            $table->foreign('tPegawai_idPegawai')->references(['idPegawai'])->on('tpegawai')->onUpdate('no action')->onDelete('no action');
            $table->foreign('tBuku_idBuku')->references(['idBuku'])->on('tbuku')->onUpdate('no action')->onDelete('no action');
            $table->foreign('tSiswa_idSiswa')->references(['idSiswa'])->on('tsiswa')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tpinjambuku', function (Blueprint $table) {
            $table->dropForeign('fk_tPinjamBuku_tPegawai1');
            $table->dropForeign('fk_tSiswa_has_tBuku_tBuku1');
            $table->dropForeign('fk_tSiswa_has_tBuku_tSiswa1');
        });
    }
};
