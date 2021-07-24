<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Carbon\Carbon;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        $comment = new Comment();

        $comment->username = $request->username;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->created_at = Carbon::now();
        $comment -> article_id = auth()->id();
        $comment->save();

        return redirect()->route('allarticles');
    }
}
