<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'HighSchoolAdmission',
        'HighSchoolAdmissionMonth',
        'HighSchoolEntrance',
        'HighSchoolEntranceMonth',
        'HighSchoolName',
        'HighSchoolDepartment',
        'UniversityAdmission',
        'UniversityAdmissionMonth',
        'UniversityEntrance',
        'UniversityEntranceMonth',
        'UniversityName',
        'UniversityDepartment',
        'GraduateAdmission',
        'GraduateAdmissionMonth',
        'GraduateEntrance',
        'GraduateEntranceMonth',
        'GraduateName',
        'GraduateDepartment'
    ];  
}
