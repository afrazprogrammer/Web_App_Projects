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
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('name', 150);
            $table->string('programming_languages')->nullable();
            $table->string('skills')->nullable();
            $table->string('experience', 50)->nullable();
            $table->date('open_until')->nullable();
            $table->bigInteger('total_applicants')->default(0);
            $table->string('description')->nullable();
            $table->string('faculty', 150)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('programming_languages');
            $table->dropColumn('skills');
            $table->dropColumn('experience');
            $table->dropColumn('open_until');
            $table->dropColumn('total_applicants');
            $table->dropColumn('description');
            $table->dropColumn('faculty');
        });
    }
};
