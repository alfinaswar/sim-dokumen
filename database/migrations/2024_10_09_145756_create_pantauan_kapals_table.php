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
        Schema::create('pantauan_kapals', function (Blueprint $table) {
            $table->id();
            $table->string('MMSI', 255)->nullable();
            $table->string('NamaKapal', 255)->nullable();
            $table->string('NegaraKapal', 255)->nullable();
            $table->string('JenisKapal', 50)->nullable();
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
        Schema::dropIfExists('pantauan_kapals');
    }
};
