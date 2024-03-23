<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminComment;

use function Ramsey\Uuid\v1;

class AdminCommentController extends Controller
{
    public function create()
    {
        return view('admin.comment');
    }

    public function store(Request $request)
    {
        $AdminId = auth()->user()->id;
        $post =AdminComment::create([
            'admin_id' => $AdminId,
            'comment' => $request->comment,
            'commentType' => $request->commentType
        ]);
        // return view('comment');
        // return redirect()->route('admin.comment');
        return back();
    }

    public function index()
    {
        // $comments = Comment::all();
        // return view('comment', compact('comments'));
        // 職歴だけを取得
        // $workcomments = Comment::where('commentType', 'work')->get();;
        // return view('comment', compact('workcomments'));
        $profilecomments = AdminComment::where('commentType', 'profile')->get();
        $summary = AdminComment::where('commentType', 'summary')->get();
        $workcomments = AdminComment::where('commentType', 'work')->get();
        $academiccomments = AdminComment::where('commentType', 'academic')->get();
        $certification = AdminComment::where('commentType', 'certification')->get();

        $acomments = [
            'profile' => $profilecomments,
            'summary' => $summary,
            'work' => $workcomments,
            'academic' => $academiccomments,
            'certification' => $certification
          ];
          
            // echo($acomments);

        return view('admin/comment', compact('acomments'));
        // return view('dashboard', compact('comments'));
        // return view('admin/comment', compact('comments'));


    }
}


