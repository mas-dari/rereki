<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminDetail;

class AdminDetailController extends Controller
{
    public function create()
    {
        return view('admin.commentdetail');
    }

    public function store(Request $request)
    {
        $AdminId = auth()->user()->id;
        $post =AdminDetail::create([
            'admin_id' => $AdminId,
            'comment' => $request->comment,
            'commentType' => $request->commentType
        ]);
        // return view('comment');
        // return redirect()->route('admin.comment');
        return back();
    }
}
