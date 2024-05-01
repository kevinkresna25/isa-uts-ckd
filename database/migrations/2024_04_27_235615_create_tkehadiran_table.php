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
            $table->id('id');
            $table->foreignId('tSiswa_idSiswa');
            $table->dateTime('tanggal')->nullable();
            $table->tinyInteger('statusHadir')->default(0);
            $table->foreignId('tKelas_id'); 
            $table->timestamps();
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
