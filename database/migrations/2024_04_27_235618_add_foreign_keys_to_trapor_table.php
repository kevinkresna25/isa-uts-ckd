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
        Schema::table('trapor', function (Blueprint $table) {
            $table->foreign(['tahunSekolah_idtahunSekolah'], 'fk_tRapor_tahunSekolah1')->references(['idtahunSekolah'])->on('tahunsekolah')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['idGuru'], 'fk_tRapor_tPegawai1')->references(['idPegawai'])->on('tpegawai')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tSubjek_id'], 'fk_tRapor_tSubjek1')->references(['id'])->on('tsubjek')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tSiswa_idSiswa'], 'fk_tSubjek_has_tSiswa_tSiswa1')->references(['idSiswa'])->on('tsiswa')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trapor', function (Blueprint $table) {
            $table->dropForeign('fk_tRapor_tahunSekolah1');
            $table->dropForeign('fk_tRapor_tPegawai1');
            $table->dropForeign('fk_tRapor_tSubjek1');
            $table->dropForeign('fk_tSubjek_has_tSiswa_tSiswa1');
        });
    }
};
