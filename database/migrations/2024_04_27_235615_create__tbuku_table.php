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
        Schema::create('tbuku', function (Blueprint $table) {
            $table->integer('idBuku')->primary();
            $table->string('namaBuku', 45)->nullable();
            $table->string('pengarangBuku', 45)->nullable();
            $table->string('deskripsiBuku', 45)->nullable();
            $table->dateTime('tahunTerbitBuku')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbuku');
    }
};
