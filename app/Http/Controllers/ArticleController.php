<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Input;


class ArticleController extends Controller
{

    public function index()
    {
        return view('operations.read', [
            'articles' => DB::table('articles')->paginate(5)
        ]);
    }

    public function home()
    {
        return view('public.home', [
            'articles' => DB::table('articles')->orderBy('date_of_publish', 'desc')
                ->take(10)
                ->get()
        ]);
    }

    public function create()
    {
        return view('operations.create');
    }

    public function storeUploads(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->author_name = $request->author_name;
        $article->date_of_publish = Carbon::now();
        $article->category = $request->category;
        $article->user_id = auth()->id();
        if ($request->file('file')) {
            $response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();
        } else {
            $article->save();
            return redirect()->route('articles');
        }
        $article->image = $response;
        $article->save();
        return redirect()->route('articles');
    }

    public function handleChart()
    {

        //number of articles of each category            
        $art = Article::where('category', 'Art')->get()->count();
        $design = Article::where('category', 'Design')->get()->count();
        $digitl = Article::where('category', 'Digitl')->get()->count();
        $computer = Article::where('category', 'Computer')->get()->count();
        $games = Article::where('category', 'Games')->get()->count();
        $study = Article::where('category', 'Study')->get()->count();

        $visitors = DB::table('articles')->sum('view_count');
        $hidden = Comment::where('is_visible', false)->get()->count();
        $shown = Comment::where('is_visible', true)->get()->count();

       
       

        $articleCount = DB::table('articles')->count();
        return view('dashboard', compact('visitors', 'hidden', 'shown', 'art', 'design', 'digitl', 'computer', 'games', 'study', 'articleCount'));
    }

    public function show($id)
    {
        return view('public.detail')->with('article', Article::find($id));
    }

    public function edit($id)
    {
        $articles = DB::select('select * from articles where id = ?', [$id]);
        return view('operations.edit', ['articles' => $articles]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->author_name = $request->author_name;
        $article->category = $request->category;
        if ($request->file('file')) {
            $response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();
        } else {
            $article->save();
            return redirect()->route('articles');
        }
        $article->image = $response;
        $article->save();
        return redirect()->route('articles');
    }

    public function destroy($id)
    {
        DB::delete('delete from articles where id = ?', [$id]);
        return redirect()->route('articles');
    }
}
