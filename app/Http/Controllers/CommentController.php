<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'comment' => $request->comment
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $comments = Comment::with('user')->latest()->get();
        return view('comments.index', compact('comments'));
    }
}
