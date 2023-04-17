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
        Schema::create('user_health_status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',100);
            $table->integer('weight');
            $table->integer('height');
            $table->integer('fat_percentage');
            $table->integer('bmi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_health_status');
    }
};
