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
        Schema::table('user_goal', function (Blueprint $table) {
            $table->renameColumn('fat_persentage', 'fat_percentage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_goal', function (Blueprint $table) {
            $table->renameColumn('fat_percentage', 'fat_persentage');
        });
    }
};
