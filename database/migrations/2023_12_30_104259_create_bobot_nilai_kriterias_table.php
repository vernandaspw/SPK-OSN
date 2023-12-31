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
        Schema::create('bobot_nilai_kriterias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('olimpiade_id')->constrained('olimpiades')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kriteria_id')->constrained('kriterias')->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('bobot')->default(0);
            $table->tinyInteger('awal')->default(0);
            $table->tinyInteger('akhir')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bobot_nilai_kriterias');
    }
};
