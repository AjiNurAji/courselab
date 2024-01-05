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
        Schema::create('schedule', function (Blueprint $table) {
            $table->integer('id_schedule')->autoIncrement();
            $table->integer('id_teacher')->nullable();
            $table->foreign('id_teacher')->references('id_teacher')->on('teachers')->onDelete('SET NULL')->onUpdate('SET NULL')->nullable();
            $table->string('schedule_name', 40);
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
