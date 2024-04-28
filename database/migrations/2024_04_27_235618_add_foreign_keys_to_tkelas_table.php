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
        Schema::table('tkelas', function (Blueprint $table) {
            $table->foreign(['tahunSekolah_idtahunSekolah'], 'fk_tKelas_tahunSekolah1')->references(['idtahunSekolah'])->on('tahunsekolah')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['idGuru'], 'fk_tSubjek_has_tPegawai_tPegawai1')->references(['idPegawai'])->on('tpegawai')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tSubjek_id'], 'fk_tSubjek_has_tPegawai_tSubjek')->references(['id'])->on('tsubjek')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tkelas', function (Blueprint $table) {
            $table->dropForeign('fk_tKelas_tahunSekolah1');
            $table->dropForeign('fk_tSubjek_has_tPegawai_tPegawai1');
            $table->dropForeign('fk_tSubjek_has_tPegawai_tSubjek');
        });
    }
};
