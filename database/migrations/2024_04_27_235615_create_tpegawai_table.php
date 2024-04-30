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
            $table->id('idPegawai')->primary();
            $table->string('nama', 45);
            $table->string('email', 45)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 45);
            $table->string('username', 45)->nullable();
            $table->string('alamat', 45)->nullable();
            $table->date('tanggalMasuk');
            $table->enum('peran', ['Guru', 'Admin', 'Pustakawan']);
            $table->string('nomorTelp', 45)->nullable();
            $table->rememberToken();
            $table->timestamps();
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
