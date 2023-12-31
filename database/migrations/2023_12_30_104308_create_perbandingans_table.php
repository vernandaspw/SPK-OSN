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
        Schema::create('perbandingans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kriteria_1_id')->constrained('kriterias')->onUpdate('cascade')->onDelete('cascade');
            $table->double('nilai');
            $table->foreignId('kriteria_2_id')->constrained('kriterias')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perbandingans');
    }
};
