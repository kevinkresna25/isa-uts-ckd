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
        Schema::create('torangtua_has_tsiswa', function (Blueprint $table) {
            $table->integer('tOrangTua_id')->index('fk_torangtua_has_tsiswa_torangtua1_idx');
            $table->integer('tSiswa_idSiswa')->index('fk_torangtua_has_tsiswa_tsiswa1_idx');

            $table->primary(['tOrangTua_id', 'tSiswa_idSiswa']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torangtua_has_tsiswa');
    }
};
