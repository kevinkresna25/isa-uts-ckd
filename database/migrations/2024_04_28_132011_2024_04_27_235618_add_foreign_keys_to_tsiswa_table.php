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
        Schema::table('tsiswa', function (Blueprint $table) {
            $table->foreign(['tKelompokKelas_id'], 'fk_tKelompokKelas_tSiswa1')->references(['id'])->on('tkelompokkelas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tsiswa', function (Blueprint $table) {
            $table->dropForeign('fk_tKelompokKelas_tSiswa1');
        });
    }
};
