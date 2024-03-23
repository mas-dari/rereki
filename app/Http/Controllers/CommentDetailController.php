<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\AdminComment;
use App\Models\CommentDetail;
use App\Models\AdminDetail;


class CommentDetailController extends Controller
{
    public function create()
    {
        return view('commentdetail');
        // return redirect()->route('candidate-comment');
    }

    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $post =CommentDetail::create([
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
        $pj11 = CommentDetail::where('commentType', 'pj11')->get();
        $pj12 = CommentDetail::where('commentType', 'pj12')->get();
        $pj21 = CommentDetail::where('commentType', 'pj21')->get();
        $pj22 = CommentDetail::where('commentType', 'pj22')->get();
        $pj31 = CommentDetail::where('commentType', 'pj31')->get();
        $pj32 = CommentDetail::where('commentType', 'pj32')->get();
        $apj11 = AdminDetail::where('commentType', 'pj11')->get();
        $apj12 = AdminDetail::where('commentType', 'pj12')->get();
        $apj21 = AdminDetail::where('commentType', 'pj21')->get();
        $apj22 = AdminDetail::where('commentType', 'pj22')->get();
        $apj31 = AdminDetail::where('commentType', 'pj31')->get();
        $apj32 = AdminDetail::where('commentType', 'pj32')->get();

        // $aprofilecomments = AdminComment::where('commentType', 'profile')->get();
        // $asummary = AdminComment::where('commentType', 'summary')->get();
        // $aworkcomments = AdminComment::where('commentType', 'work')->get();
        // $aacademiccomments = AdminComment::where('commentType', 'academic')->get();
        // $acertification = AdminComment::where('commentType', 'certification')->get();

        $comments = [
            'pj11' => $pj11,
            'pj12' => $pj12,
            'pj21' => $pj21,
            'pj22' => $pj22,
            'pj31' => $pj31,
            'pj32' => $pj32,
            'apj11' => $apj11,
            'apj12' => $apj12,
            'apj21' => $apj21,
            'apj22' => $apj22,
            'apj31' => $apj31,
            'apj32' => $apj32,
            
            // 'aprofile' => $aprofilecomments,
            // 'asummary' => $asummary,
            // 'awork' => $aworkcomments,
            // 'aacademic' => $aacademiccomments,
            // 'acertification' => $acertification
          ];

        return view('commentdetail', compact('comments'));
        // return view('dashboard', compact('comments'));
        // return view('admin/comment', compact('comments'));

    }


    public function indexAdmin()
    {
        $pj11 = CommentDetail::where('commentType', 'pj11')->get();
        $pj12 = CommentDetail::where('commentType', 'pj12')->get();
        $pj21 = CommentDetail::where('commentType', 'pj21')->get();
        $pj22 = CommentDetail::where('commentType', 'pj22')->get();
        $pj31 = CommentDetail::where('commentType', 'pj31')->get();
        $pj32 = CommentDetail::where('commentType', 'pj32')->get();
        $apj11 = AdminDetail::where('commentType', 'pj11')->get();
        $apj12 = AdminDetail::where('commentType', 'pj12')->get();
        $apj21 = AdminDetail::where('commentType', 'pj21')->get();
        $apj22 = AdminDetail::where('commentType', 'pj22')->get();
        $apj31 = AdminDetail::where('commentType', 'pj31')->get();
        $apj32 = AdminDetail::where('commentType', 'pj32')->get();

        $comments = [
            'pj11' => $pj11,
            'pj12' => $pj12,
            'pj21' => $pj21,
            'pj22' => $pj22,
            'pj31' => $pj31,
            'pj32' => $pj32,
            'apj11' => $apj11,
            'apj12' => $apj12,
            'apj21' => $apj21,
            'apj22' => $apj22,
            'apj31' => $apj31,
            'apj32' => $apj32,

          ];

        // return view('comment', compact('comments'));
        // return view('dashboard', compact('comments'));
        return view('admin/commentdetail', compact('comments'));

    }
}
