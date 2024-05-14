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
        Schema::table('hr', function (Blueprint $table) {
            $table->string('username', 100)->nullable();
            $table->string('password')->nullable();
            $table->string('faculty', 200)->nullable();
            $table->string('usertype', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hr', function (Blueprint $table) {
            //
        });
    }
};
