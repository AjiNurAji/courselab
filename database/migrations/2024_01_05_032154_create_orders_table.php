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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id_order')->autoIncrement();
            $table->integer('id_course')->nullable();
            $table->foreign('id_course')->references('id_course')->on('courses')->onDelete('SET NULL')->onUpdate('SET NULL')->nullable();
            $table->integer('id_user')->nullable();
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('SET NULL')->onUpdate('SET NULL')->nullable();
            $table->string('name', 35);
            $table->enum('payment_method', ['cash', 'transfer']);
            $table->enum('payment_status', ['pending', 'succeed', 'failed']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
