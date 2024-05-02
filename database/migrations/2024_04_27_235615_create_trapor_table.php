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
        Schema::create('trapor', function (Blueprint $table) {
            $table->id('id'); 
            $table->foreignId('tSiswa_idSiswa');
            $table->double('nilaiUTS')->nullable();
            $table->double('nilaiUAS')->nullable();
            $table->double('nilaiAfektif')->nullable();
            $table->foreignId('idGuru');
            $table->string('pendapatGuru', 45)->nullable();
            $table->foreignId('tSubjek_id');
            $table->foreignId('tahunSekolah_idtahunSekolah');
            $table->timestamps();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trapor');
    }
};
