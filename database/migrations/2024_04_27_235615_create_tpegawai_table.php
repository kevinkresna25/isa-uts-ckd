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
        Schema::create('tpegawai', function (Blueprint $table) {
            $table->integer('idPegawai')->primary();
            $table->string('nama', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('password', 45)->nullable();
            $table->string('username', 45)->nullable();
            $table->string('alamat', 45)->nullable();
            $table->date('tanggalMasuk')->nullable();
            $table->enum('peran', ['Guru', 'KepalaSekolah', 'Admin'])->nullable();
            $table->string('nomorTelp', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpegawai');
    }
};
