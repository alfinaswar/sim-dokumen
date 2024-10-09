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
        Schema::create('situasi_maritims', function (Blueprint $table) {
            $table->id();
            $table->string('Kategori', 255)->nullable();
            $table->string('Lokasi', 255)->nullable();
            $table->datetime('Waktu',)->nullable();
            $table->text('Keterangan',)->nullable();
            $table->string('Created_By', 255)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('situasi_maritims');
    }
};
