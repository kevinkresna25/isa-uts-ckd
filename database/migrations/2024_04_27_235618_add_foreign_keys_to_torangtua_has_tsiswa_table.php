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
        Schema::table('torangtua_has_tsiswa', function (Blueprint $table) {
            $table->foreign('tOrangTua_id')->references(['id'])->on('torangtua')->onUpdate('no action')->onDelete('no action');
            $table->foreign('tSiswa_idSiswa')->references(['idSiswa'])->on('tsiswa')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('torangtua_has_tsiswa', function (Blueprint $table) {
            $table->dropForeign('fk_tOrangTua_has_tSiswa_tOrangTua1');
            $table->dropForeign('fk_tOrangTua_has_tSiswa_tSiswa1');
        });
    }
};
