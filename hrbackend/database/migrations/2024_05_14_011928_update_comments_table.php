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
        Schema::table('comments', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('applicant_id');
            $table->string('reply')->nullable();
            $table->string('comment');

            // Define foreign key constraints
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('applicant_id')->references('id')->on('applicants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            //
            $table->dropForeign(['job_id']);
            $table->dropForeign(['applicant_id']);
            $table->dropColumn('job_id');
            $table->dropColumn('applicant_id');
            $table->dropColumn('reply');
            $table->dropColumn('comment');
        });
    }
};
