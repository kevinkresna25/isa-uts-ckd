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
        Schema::create('tkelompokkelas', function (Blueprint $table) {
            $table->foreignId('idGuru');
            $table->string('namaKelas', 45)->nullable();
            $table->id('id');
            $table->foreignId('tahunSekolah_idtahunSekolah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkelompokkelas');
    }
};
