<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('reg_number')->unique();
            $table->string('brand');
            $table->string('model');
            $table->foreignId('lecturer_id');
            $table->timestamps();

            $table->foreign('lecturer_id')->references('id')->on('lecturers');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
