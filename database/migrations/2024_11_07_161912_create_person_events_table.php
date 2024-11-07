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
        Schema::create('person_events', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('person_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('event_id')->references('id')->on('events');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_events');
    }
};
