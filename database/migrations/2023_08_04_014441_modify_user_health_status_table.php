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
        Schema::table('user_health_status', function (Blueprint $table) {
            $table->decimal('weight', 5, 2)->change();
            $table->decimal('height', 4, 1)->change();
            $table->decimal('fat_percentage', 3, 1)->change();
            $table->decimal('bmi', 2, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_health_status', function (Blueprint $table) {
            $table->integer('weight')->change();
            $table->integer('height')->change();
            $table->integer('fat_percentage')->change();
            $table->integer('bmi')->change();
        });
    }
};
