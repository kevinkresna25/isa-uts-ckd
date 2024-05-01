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
            $table->id('idSiswa');
            $table->foreignId('tKelompokKelas_id')->nullable();
            $table->string('nama', 45);
            $table->string('email', 45)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 45);
            $table->string('username', 45)->unique();
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['L', 'P']);
            $table->string('alamat', 45); 
            $table->string('nomorTelp', 45);
            $table->string('pasFoto', 45)->nullable();
            $table->date('tanggalMasuk');
            $table->date('tanggaKeluar')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
