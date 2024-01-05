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
        Schema::create('courses', function (Blueprint $table) {
            $table->integer('id_course')->autoIncrement();
            $table->string('name', 35);
            $table->enum('category', ['online', 'semi online', 'offline']);
            $table->enum('status', ['pending', 'rejected', 'approved']);
            $table->integer('price', 20)->autoIncrement(false)->unsigned();
            $table->integer('id_teacher')->nullable();
            $table->foreign('id_teacher')->references('id_teacher')->on('teachers')->onDelete('SET NULL')->onUpdate('SET NULL')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
