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
        Schema::table('tsiswa_has_tsubjek_has_tpegawai', function (Blueprint $table) {
            $table->foreign(['tSiswa_idSiswa'], 'fk_tSiswa_has_tSubjek_has_tPegawai_tSiswa1')->references(['idSiswa'])->on('tsiswa')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tSubjek_has_tPegawai_tSubjek_id', 'tSubjek_has_tPegawai_tPegawai_idPegawai'], 'fk_tSiswa_has_tSubjek_has_tPegawai_tSubjek_has_tPegawai1')->references(['tSubjek_id', 'idGuru'])->on('tkelas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tsiswa_has_tsubjek_has_tpegawai', function (Blueprint $table) {
            $table->dropForeign('fk_tSiswa_has_tSubjek_has_tPegawai_tSiswa1');
            $table->dropForeign('fk_tSiswa_has_tSubjek_has_tPegawai_tSubjek_has_tPegawai1');
        });
    }
};
