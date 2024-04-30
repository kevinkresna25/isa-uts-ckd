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
        Schema::create('tpinjambuku', function (Blueprint $table) {
            $table->id('id'); 
            $table->foreignId('tSiswa_idSiswa');
            $table->foreignId('tBuku_idBuku');
            $table->dateTime('tanggalPinjam')->nullable();
            $table->dateTime('tanggalKembali')->nullable();
            $table->boolean('statusKembali'); 
            $table->foreignId('tPegawai_idPegawai');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpinjambuku');
    }
};
