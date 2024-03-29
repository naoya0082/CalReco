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
        Schema::create('user_goal', function (Blueprint $table) {
            $table->string('user_id',100)->primary();
            $table->string('user_name', 100);
            $table->integer('weight');
            $table->integer('fat_persentage');
            $table->integer('bmi');
            $table->tinyInteger('is_completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_goal');
    }
};
