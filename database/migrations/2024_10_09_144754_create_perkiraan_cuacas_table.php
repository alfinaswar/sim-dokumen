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
        Schema::create('perkiraan_cuacas', function (Blueprint $table) {
            $table->id();
            $table->string('Wilayah', 255)->nullable();
            $table->string('TanggalBerlaku', 255)->nullable();
            $table->string('TanggalBerakhir', 255)->nullable();
            $table->string('Cuaca', 50)->nullable();
            $table->string('Angin')->nullable();
            $table->string('Gelombang')->nullable();
            $table->string('Peringatan')->nullable();
            $table->string('Gambar')->nullable();
            $table->text('Keterangan')->nullable();
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
        Schema::dropIfExists('perkiraan_cuacas');
    }
};
