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
        Schema::create('tsiswa', function (Blueprint $table) {
            $table->integer('idSiswa')->primary();
            $table->string('nama', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('password', 45)->nullable();
            $table->string('username', 45)->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->enum('jenisKelamin', ['L', 'P'])->nullable();
            $table->string('alamat', 45)->nullable();
            $table->string('nomorTelp', 45)->nullable();
            $table->string('pasFoto', 45)->nullable();
            $table->date('tanggalMasuk')->nullable();
            $table->date('tanggaKeluar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsiswa');
    }
};
