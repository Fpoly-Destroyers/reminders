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
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained(); 
            $table->integer('reminder_time');
            $table->enum('reminder_unit', ['hour', 'day', 'week', 'month', 'year']);
            $table->integer('repeat_count')->nullable();
            $table->enum('repeat_unit', ['day', 'week', 'month', 'year'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
