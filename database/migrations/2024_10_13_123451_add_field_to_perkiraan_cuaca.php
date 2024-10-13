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
        Schema::table('perkiraan_cuacas', function (Blueprint $table) {
            $table->string('ArahAngin')->nullable()->after('Angin');
            $table->string('TinggiGelombang')->nullable()->after('Gelombang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perkiraan_cuacas', function (Blueprint $table) {
            //
        });
    }
};
