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
        Schema::create('work_posts', function (Blueprint $table) {
            $table->id();
            $table->string('CompanyName');
            $table->integer('CompanyAdmission');
            $table->integer('CompanyAdmissionMonth');
            $table->integer('CompanyEntrance');
            $table->integer('CompanyEntranceMonth');
            $table->string('BusinessContent');
            $table->string('EmploymentStatus');
            $table->string('capital');
            $table->string('NumberOfEmployees');
            $table->string('HP');
            $table->integer('ProjectAdmission');
            $table->integer('ProjectAdmissionMonth');
            $table->integer('ProjectEntrance');
            $table->integer('ProjectEntranceMonth');
            $table->string('ProjectName');
            $table->string('ProjectContent');
            $table->integer('Project2Admission');
            $table->integer('Project2AdmissionMonth');
            $table->integer('Project2Entrance');
            $table->integer('Project2EntranceMonth');
            $table->string('Project2Name');
            $table->string('Project2Content');
            $table->integer('Project3Admission');
            $table->integer('Project3AdmissionMonth');
            $table->integer('Project3Entrance');
            $table->integer('Project3EntranceMonth');
            $table->string('Project3Name');
            $table->string('Project3Content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_posts');
    }
};
