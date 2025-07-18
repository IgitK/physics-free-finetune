<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->year('year');
            $table->enum('day', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'satureday', 'sunday']);
            $table->string('institute')->nullable();
            $table->enum('type', ['online', 'physical']);
            $table->enum('medium', ['sinhala', 'english']);
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
