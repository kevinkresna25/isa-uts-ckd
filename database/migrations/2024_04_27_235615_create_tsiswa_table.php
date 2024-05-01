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
            $table->foreignId('user_id'); 
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->date('tanggalLahir');
            $table->enum('jenisKelamin', ['L', 'P']);
            $table->string('alamat', 45); 
            $table->string('nomorTelp', 45);
            $table->string('pasFoto', 45)->nullable();
            $table->date('tanggalMasuk');
            $table->date('tanggalKeluar')->nullable();
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
