<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::select('select * from articles');
        return view('read',['articles'=>$articles]);
    }

    public function home()
    {
        $articles = DB::select('select * from articles');
        return view('home',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = DB::select('select * from articles where id = ?',[$id]);
        return view('edit',['articles'=>$articles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = $request->input('title');
        DB::update('update articles set title = ? where id = ?',[$article,$id]);
        return redirect()->route('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from articles where id = ?',[$id]);
        return redirect()->route('articles');
    }
}
