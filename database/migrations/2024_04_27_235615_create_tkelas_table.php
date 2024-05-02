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
        Schema::create('tkelas', function (Blueprint $table) {

            $table->id('id'); 
            $table->foreignId('tSubjek_id');
            $table->foreignId('idGuru');
            $table->string('lokasiKelas', 45)->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jamKelas')->nullable();
            $table->foreignId('tahunSekolah_idtahunSekolah');
            $table->foreignId('tkelompokkelas_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkelas');
    }
};
