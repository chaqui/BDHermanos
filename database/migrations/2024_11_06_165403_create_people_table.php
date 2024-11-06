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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('gender');
            $table->date('birthday');
            $table->boolean('assistant')->default(false);
            $table->boolean('member')->default(false);
            $table->date('baptism_date')->nullable();
            $table->date('conversion_date')->nullable();
            $table->date('membership_date')->nullable();
            $table->integer('mother_id')->unsigned()->nullable();
            $table->integer('father_id')->unsigned()->nullable();
            $table->integer('spouse_id')->unsigned()->nullable();
            $table->foreign('mother_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('father_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('spouse_id')->references('id')->on('people')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
