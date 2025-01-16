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
        Schema::create('attedence_kids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attedence_id');
            $table->integer('kids');
            $table->integer('small_child');
            $table->integer('pre_young');
            $table->integer('young');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attedence_kids');
    }
};
