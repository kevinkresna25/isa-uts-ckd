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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username', 45);
            $table->string('password');
            $table->string('nomorTelp', 45)->nullable();
            $table->enum('jenisKelamin', ['L', 'P']);
            $table->string('hubungan', 45)->nullable();
            $table->rememberToken();
            $table->timestamps();
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
