<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\AdminComment;

class CommentController extends Controller
{
    public function create()
    {
        return view('comment');
        // return redirect()->route('candidate-comment');
    }

    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $post =Comment::create([
            'user_id' => $userId,
            'comment' => $request->comment,
            'commentType' => $request->commentType
        ]);
        // return view('comment');
        // return redirect()->route('candidate');
        return back();
    }

    public function index()
    {
        $profilecomments = Comment::where('commentType', 'profile')->get();
        $summary = Comment::where('commentType', 'summary')->get();
        $workcomments = Comment::where('commentType', 'work')->get();
        $academiccomments = Comment::where('commentType', 'academic')->get();
        $certification = Comment::where('commentType', 'certification')->get();
        $aprofilecomments = AdminComment::where('commentType', 'profile')->get();
        $asummary = AdminComment::where('commentType', 'summary')->get();
        $aworkcomments = AdminComment::where('commentType', 'work')->get();
        $aacademiccomments = AdminComment::where('commentType', 'academic')->get();
        $acertification = AdminComment::where('commentType', 'certification')->get();

        $comments = [
            'profile' => $profilecomments,
            'summary' => $summary,
            'work' => $workcomments,
            'academic' => $academiccomments,
            'certification' => $certification,
            'aprofile' => $aprofilecomments,
            'asummary' => $asummary,
            'awork' => $aworkcomments,
            'aacademic' => $aacademiccomments,
            'acertification' => $acertification
          ];

        return view('comment', compact('comments'));
        // return view('dashboard', compact('comments'));
        // return view('admin/comment', compact('comments'));

    }


    public function indexAdmin()
    {
        $profilecomments = Comment::where('commentType', 'profile')->get();
        $summary = Comment::where('commentType', 'summary')->get();
        $workcomments = Comment::where('commentType', 'work')->get();
        $academiccomments = Comment::where('commentType', 'academic')->get();
        $certification = Comment::where('commentType', 'certification')->get();
        $aprofilecomments = AdminComment::where('commentType', 'profile')->get();
        $asummary = AdminComment::where('commentType', 'summary')->get();
        $aworkcomments = AdminComment::where('commentType', 'work')->get();
        $aacademiccomments = AdminComment::where('commentType', 'academic')->get();
        $acertification = AdminComment::where('commentType', 'certification')->get();

        $comments = [
            'profile' => $profilecomments,
            'summary' => $summary,
            'work' => $workcomments,
            'academic' => $academiccomments,
            'certification' => $certification,
            'aprofile' => $aprofilecomments,
            'asummary' => $asummary,
            'awork' => $aworkcomments,
            'aacademic' => $aacademiccomments,
            'acertification' => $acertification

          ];

        // return view('comment', compact('comments'));
        // return view('dashboard', compact('comments'));
        return view('admin/comment', compact('comments'));

    }

}
