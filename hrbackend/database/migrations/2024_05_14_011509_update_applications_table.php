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
        Schema::table('applications', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('applicant_id');
            $table->unsignedBigInteger('job_id');

            // Define foreign key constraints
            $table->foreign('applicant_id')->references('id')->on('applicants');
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            //
            $table->dropForeign(['applicant_id']);
            $table->dropForeign(['job_id']);
            $table->dropColumn('applicant_id');
            $table->dropColumn('job_id');
        });
    }
};
