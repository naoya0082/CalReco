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
            $table->dropColumn('id');
            $table->string('user_id',100)->change()->primary();
            $table->string('user_name',100)->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_health_status', function (Blueprint $table) {
            $table->dropPrimary('user_id');
            $table->dropColumn('user_name');
            $table->bigIncrements('id')->first();
        });
    }
};
