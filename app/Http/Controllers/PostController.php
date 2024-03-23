<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        $post =Post::create([
            'name' => $request->name,
            'furigana' => $request->furigana,
            'date' => $request->date,
            'adress' => $request->adress,
            'tel' => $request->tel,
            'email' => $request->email
        ]);

        // $request->session()->flash('status', 'Post was created!');
        return redirect()->route('admin.post.create-academic');
    }

    public function viewAcademic()
    {
        return view('admin.post.create-academic');
    }

//     public function storeAcademic(Request $request)
//     {
//         $post =AcademicPost::viewAcademic([
//             'HighSchoolAdmission' => $request->HighSchoolAdmission,
//             'HighSchoolEntrance' => $request->HighSchoolEntrance,
//             'HighSchoolName' => $request->HighSchoolName,
//             'HighSchoolDepartment ' => $request->HighSchoolDepartment,
//             'UniversityAdmission' => $request->UniversityAdmission,
//             'UniversityEntrance' => $request->UniversityEntrance,
//             'UniversityName' => $request->UniversityName,
//             'UniversityDepartment ' => $request->UniversityDepartment,
//             'GraduateAdmission' => $request->GraduateAdmission,
//             'GraduateEntrance' => $request->GraduateEntrance,
//             'GraduateName' => $request->GraduateName,
//             'GraduateDepartment ' => $request->GraduateDepartment,
//         ]);

//         // $request->session()->flash('status', 'Post was created!');
//         return redirect()->route('admin.post.create-detail');
//     }
}
