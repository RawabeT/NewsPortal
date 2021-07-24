<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
    public function store(Request $request, $id)
    {

        $article = Article::find($id);
        $comment = new Comment();
        $comment->username = $request->username;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->created_at = Carbon::now();
        $comment-> article_id = $id;
        $article->comments()->save($comment);

        return redirect()->route('allarticles');
    }

    public function show(){
        return view('comment', [
            'comments' => DB::table('comments')-> paginate(5)
        ]);
    }

    public function approved(Request $request, $id){

        $comment = Comment::find($id);
        $comment->approved = $request-> approved ? true : false;
        $comment->save();
        return view('comment', [
            'comments' => DB::table('comments')-> paginate(5)
        ]);
    }
}
