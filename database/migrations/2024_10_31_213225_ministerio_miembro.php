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
        Schema::create('ministerios_miembros', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->foreignId('ministerio_id')->constrained();
        $table->foreign('joven_id')->references('id')->on('jovenes')->nullable();
        $table->foreign('pre_juvenil_id')->references('id')->on('pre_juveniles')->nullable();
        $table->foreign('madre_id')->references('id')->on('madres')->nullable();
        $table->foreign('padre_id')->references('id')->on('padres')->nullable();

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
