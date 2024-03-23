<?php

namespace App\Models;

use COM;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'CompanyName',
        'CompanyAdmission',
        'CompanyAdmissionMonth',
        'CompanyEntrance',
        'CompanyEntranceMonth',
        'BusinessContent',
        'EmploymentStatus',
        'capital',
        'NumberOfEmployees',
        'HP',
        'ProjectAdmission',
        'ProjectAdmissionMonth',
        'ProjectEntrance',
        'ProjectEntranceMonth',
        'ProjectName',
        'ProjectContent',
        'Project2Admission',
        'Project2AdmissionMonth',
        'Project2Entrance',
        'Project2EntranceMonth',
        'Project2Name',
        'Project2Content',
        'Project3Admission',
        'Project3AdmissionMonth',
        'Project3Entrance',
        'Project3EntranceMonth',
        'Project3Name',
        'Project3Content'
    ];
}
