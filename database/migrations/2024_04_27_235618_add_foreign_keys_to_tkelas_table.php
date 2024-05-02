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
            $table->foreign('tahunSekolah_idtahunSekolah')->references(['idtahunSekolah'])->on('tahunsekolah')->onUpdate('no action')->onDelete('no action');
            $table->foreign('idGuru')->references(['idPegawai'])->on('tpegawai')->onUpdate('no action')->onDelete('no action');
            $table->foreign('tSubjek_id')->references(['id'])->on('tsubjek')->onUpdate('no action')->onDelete('no action');
            $table->foreign('tkelompokkelas_id')->references(['id'])->on('tkelompokkelas')->onUpdate('no action')->onDelete('no action');
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
            $table->dropForeign('tkelompokkelas_id');
        });
    }
};
