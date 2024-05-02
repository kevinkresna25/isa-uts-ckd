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
        Schema::create('torangtua_has_tsiswa', function (Blueprint $table) {
            $table->foreignId('tOrangTua_id');
            $table->foreignId('tSiswa_idSiswa');
            $table->timestamps();
            
            $table->primary(['tOrangTua_id', 'tSiswa_idSiswa']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torangtua_has_tsiswa');
    }
};
