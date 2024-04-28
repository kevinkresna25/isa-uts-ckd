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
        Schema::table('tkehadiran', function (Blueprint $table) {
            $table->foreign(['tKelas_tSubjek_id', 'tKelas_idGuru'], 'fk_tKehadiran_tKelas1')->references(['tSubjek_id', 'idGuru'])->on('tkelas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tSiswa_idSiswa'], 'fk_tKelas_has_tSiswa_tSiswa1')->references(['idSiswa'])->on('tsiswa')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tkehadiran', function (Blueprint $table) {
            $table->dropForeign('fk_tKehadiran_tKelas1');
            $table->dropForeign('fk_tKelas_has_tSiswa_tSiswa1');
        });
    }
};
