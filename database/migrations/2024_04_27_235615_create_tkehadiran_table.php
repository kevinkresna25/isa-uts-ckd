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
        Schema::create('tkehadiran', function (Blueprint $table) {
            $table->integer('tSiswa_idSiswa')->index('fk_tkelas_has_tsiswa_tsiswa1_idx');
            $table->dateTime('tanggal')->nullable();
            $table->tinyInteger('statusHadir')->nullable();
            $table->integer('tKelas_id'); 

            $table->index(['tKelas_id'], 'fk_tkehadiran_tkelas1_idx');
            $table->primary(['tSiswa_idSiswa']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkehadiran');
    }
};
