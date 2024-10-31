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
        Schema::create('pre_juvenils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('telefono');
            $table->boolean('bautizado');
            $table->date('fecha_bautizo')->nullable();
            $table->boolean('asiste_sociedad_jovenes');
            $table->boolean('asiste_iglesia');
            $table->string('nombre_iglesia_asiste')->nullable();
            $table->foreignId('padre_id')->constrained();
            $table->foreignId('madre_id')->constrained();
            $table->string("razon_deja_ser_miembro")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_juvenils');
    }
};
