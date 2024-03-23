<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicPost;

class AcademicController extends Controller
{
    public function create()
    {
        return view('admin.post.create-academic');
    }

    public function store(Request $request)
    {
        $post =AcademicPost::create([
            'HighSchoolAdmission' => $request->HighSchoolAdmission,
            'HighSchoolAdmissionMonth' => $request->HighSchoolAdmissionMonth,
            'HighSchoolEntrance' => $request->HighSchoolEntrance,
            'HighSchoolEntranceMonth' => $request->HighSchoolEntranceMonth,
            'HighSchoolName' => $request->HighSchoolName,
            'HighSchoolDepartment' => $request->HighSchoolDepartment,
            'UniversityAdmission' => $request->UniversityAdmission,
            'UniversityAdmissionMonth' => $request->UniversityAdmissionMonth,
            'UniversityEntrance' => $request->UniversityEntrance,
            'UniversityEntranceMonth' => $request->UniversityEntranceMonth,
            'UniversityName' => $request->UniversityName,
            'UniversityDepartment' => $request->UniversityDepartment,
            'GraduateAdmission' => $request->GraduateAdmission,
            'GraduateAdmissionMonth' => $request->GraduateAdmissionMonth,
            'GraduateEntrance' => $request->GraduateEntrance,
            'GraduateEntranceMonth' => $request->GraduateEntranceMonth,
            'GraduateName' => $request->GraduateName,
            'GraduateDepartment' => $request->GraduateDepartment
        ]);

        // $request->session()->flash('status', 'Post was created!');
        return redirect()->route('admin.post.create-detail');
    }
}
