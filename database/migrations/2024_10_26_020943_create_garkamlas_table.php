<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('garkamlas', function (Blueprint $table) {
            $table->id();
            $table->string('KategoriID', 100)->nullable();
            $table->string('Pelanggaran')->nullable();
            $table->string('KejahatanLintasBatas')->nullable();
            $table->string('Keselamatan')->nullable();
            $table->string('Kejadian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garkamlas');
    }
};
