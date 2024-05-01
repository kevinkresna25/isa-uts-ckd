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
            $table->string('alamat', 45)->nullable();
            $table->date('tanggalMasuk');
            $table->string('alamat', 45); 
            $table->foreignId('user_id'); 
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
