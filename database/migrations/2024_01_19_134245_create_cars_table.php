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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('Content', 500);
            $table->integer('Luggage');
            $table->integer('Doors');
            $table->integer('Passengers');
            $table->integer('Price');
            $table->boolean('Active');
            $table->string('image',100);
            $table->foreignId('category_id')->constrained('categories')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
