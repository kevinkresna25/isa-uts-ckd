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
        Schema::create('torangtua', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nama', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('username', 45)->nullable();
            $table->string('password', 45)->nullable();
            $table->string('nomorTelp', 45)->nullable();
            $table->enum('jenisKelamin', ['L', 'P'])->nullable();
            $table->string('hubungan', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torangtua');
    }
};
