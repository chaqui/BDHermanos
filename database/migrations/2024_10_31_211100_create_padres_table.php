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
        Schema::create('padres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->nullable();
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->boolean('bautizado');
            $table->date('fecha_bautizo')->nullable();
            $table->boolean('asiste_iglesia');
            $table->string('nombre_iglesia_asiste')->nullable();
            $table->foreign('padre_id')->references('id')->on('padres')->nullable();
            $table->foreign('madre_id')->references('id')->on('madres')->nullable();
            $table->foreign('esposa_id')->references('id')->on('madres')->nullable();
            $table->string("razon_deja_ser_miembro")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('padres');
    }
};
