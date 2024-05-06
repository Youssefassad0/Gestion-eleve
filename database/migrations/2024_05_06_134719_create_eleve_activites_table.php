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
        Schema::create('eleve_activites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_eleve');
            $table->unsignedBigInteger('id_activite');
            $table->foreign('id_eleve')->references('id')->on('eleves');
            $table->foreign('id_activite')->references('id')->on('activites');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleve_activites');
    }
};
