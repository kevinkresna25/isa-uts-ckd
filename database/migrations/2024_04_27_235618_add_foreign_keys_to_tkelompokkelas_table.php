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
        Schema::table('tkelompokkelas', function (Blueprint $table) {
            $table->foreign('tahunSekolah_idtahunSekolah')->references(['idtahunSekolah'])->on('tahunsekolah')->onUpdate('no action')->onDelete('no action');
            $table->foreign('idGuru')->references(['idPegawai'])->on('tpegawai')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tkelompokkelas', function (Blueprint $table) {
            $table->timestamps();
            $table->dropForeign('fk_tKelompokKelas_tahunSekolah1');
            $table->dropForeign('fk_tKelompokKelas_tPegawai1');
        });
    }
};
