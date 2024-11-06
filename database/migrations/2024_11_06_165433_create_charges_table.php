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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->integer('person_id')->unsigned();
            $table->integer('ministry_id')->unsigned();
            $table->boolean('leader')->default(false);
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('ministry_id')->references('id')->on('ministries')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
