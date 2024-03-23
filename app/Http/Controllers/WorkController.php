<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkPost;

class WorkController extends Controller
{
    public function create()
    {
        return view('admin.post.create-detail');
    }

    public function store(Request $request)
    {
        $post =WorkPost::create([
            'CompanyName' => $request->CompanyName,
            'CompanyAdmission' => $request->CompanyAdmission,
            'CompanyAdmissionMonth' => $request->CompanyAdmissionMonth,
            'CompanyEntrance' => $request->CompanyEntrance,
            'CompanyEntranceMonth' => $request->CompanyEntranceMonth,
            'BusinessContent' => $request->BusinessContent,
            'EmploymentStatus' => $request->EmploymentStatus,
            'capital' => $request->capital,
            'NumberOfEmployees' => $request->NumberOfEmployees,
            'HP' => $request->HP,
            'ProjectAdmission' => $request->ProjectAdmission,
            'ProjectAdmissionMonth' => $request->ProjectAdmissionMonth,
            'ProjectEntrance' => $request->ProjectEntrance,
            'ProjectEntranceMonth' => $request->ProjectEntranceMonth,
            'ProjectName' => $request->ProjectName,
            'ProjectContent' => $request->ProjectContent,
            'Project2Admission' => $request->Project2Admission,
            'Project2AdmissionMonth' => $request->Project2AdmissionMonth,
            'Project2Entrance' => $request->Project2Entrance,
            'Project2EntranceMonth' => $request->Project2EntranceMonth,
            'Project2Name' => $request->Project2Name,
            'Project2Content' => $request->Project2Content,
            'Project3Admission' => $request->Project3Admission,
            'Project3AdmissionMonth' => $request->Project3AdmissionMonth,
            'Project3Entrance' => $request->Project3Entrance,
            'Project3EntranceMonth' => $request->Project3EntranceMonth,
            'Project3Name' => $request->Project3Name,
            'Project3Content' => $request->Project3Content

        ]);

        // $request->session()->flash('status', 'Post was created!');
        return redirect()->route('admin.post.create-detail');
    }
}
