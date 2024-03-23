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
        Schema::create('academic_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('HighSchoolAdmission');
            $table->integer('HighSchoolAdmissionMonth');
            $table->integer('HighSchoolEntrance');
            $table->integer('HighSchoolEntranceMonth');
            $table->string('HighSchoolName');
            $table->string('HighSchoolDepartment');
            $table->integer('UniversityAdmission');
            $table->integer('UniversityAdmissionMonth');
            $table->integer('UniversityEntrance');
            $table->integer('UniversityEntranceMonth');
            $table->string('UniversityName');
            $table->string('UniversityDepartment');
            $table->integer('GraduateAdmission');
            $table->integer('GraduateAdmissionMonth');
            $table->integer('GraduateEntrance');
            $table->integer('GraduateEntranceMonth');
            $table->string('GraduateName');
            $table->string('GraduateDepartment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_posts');
    }
};
