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
        Schema::table('applicant', function (Blueprint $table) {
            //
            $table->string('email', 150);
            $table->string('password');
            $table->string('full_name', 100);
            $table->string('phone_number', 13);
            $table->string('address', 500);
            $table->string('major', 100);
            $table->string('cgpa', 4);
            $table->string('faculty', 200);
            $table->string('preferred_job_type', 150);
            $table->string('resume_path'); // Assuming this will store the path to the resume file
            $table->string('linkedin_profile', 200)->nullable(); // Nullable in case the applicant doesn't have a LinkedIn profile
            $table->string('portfolio', 300)->nullable(); // Nullable in case the applicant doesn't have a portfolio
            $table->string('usertype', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applicant', function (Blueprint $table) {
            //
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('full_name');
            $table->dropColumn('phone_number');
            $table->dropColumn('address');
            $table->dropColumn('major');
            $table->dropColumn('cgpa');
            $table->dropColumn('faculty');
            $table->dropColumn('preferred_job_type');
            $table->dropColumn('resume_path');
            $table->dropColumn('linkedin_profile');
            $table->dropColumn('portfolio');
        });
    }
};
