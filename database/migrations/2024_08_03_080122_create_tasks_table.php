<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); 
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content')->nullable();
            $table->date('on_date')->default(DB::raw('CURRENT_DATE'));
            $table->time('on_time')->default(DB::raw('CURRENT_TIME'));
            $table->string('location')->nullable();
            $table->text('url')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('folder_id')->constrained();
            $table->tinyInteger('status')->default(0)->comment('0: not done, 1: done');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
