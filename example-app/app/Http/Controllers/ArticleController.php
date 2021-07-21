<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{

    public function index()
    {
        return view('read', [
            'articles' => DB::table('articles')-> paginate(5)
        ]);
    }

    public function home()
    {
        return view('home', [
            'articles' => DB::table('articles')->orderBy('date_of_publish', 'desc')
            ->take(10)
            ->get()
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article ->title = $request->title;
        $article ->description = $request->description;
        $article ->author_name = $request->author_name;
        $article ->date_of_publish = Carbon::now();
        $article-> save();
        return redirect()->route('dashboard')->with('success','Post created successfully.');
    }

    public function handleChart()
    {
        $articleData = Article::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('date_of_publish', date('Y'))
                    ->groupBy(\DB::raw("Day(date_of_publish)"))
                    ->pluck('count');
          
        return view('charts', compact('articleData'));
    }

    public function show(Article $article)
    {
        //
    }

    public function edit($id)
    {
        $articles = DB::select('select * from articles where id = ?',[$id]);
        return view('edit',['articles'=>$articles]);
    }

    public function update(Request $request, $id)
    {
        $article = $request->input('title');
        DB::update('update articles set title = ? where id = ?',[$article,$id]);
        return redirect()->route('articles');
    }

    public function destroy($id)
    {
        DB::delete('delete from articles where id = ?',[$id]);
        return redirect()->route('articles');
    }
}
