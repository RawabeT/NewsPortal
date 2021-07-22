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

    public function handleChart()
    {
        //number of articles by days
        // $articleData = Article::select(\DB::raw("COUNT(*) as count"))
        //             ->whereYear('date_of_publish', date('Y'))
        //             ->groupBy(\DB::raw("Day(date_of_publish)"))
        //             ->pluck('count');

        //number of articles of each category            
        $art = Article::where('category','Art')->get();
    	$design = Article::where('category','Design')->get();
    	$digitl = Article::where('category','Digitl')->get();
        $computer = Article::where('category','Computer')->get();
    	$games = Article::where('category','Games')->get();
    	$study = Article::where('category','Study')->get();
    	$art_c = count($art);    	
    	$design_c = count($design);
    	$digitl_c = count($digitl);
        $computer_C = count($computer);    	
    	$games_c = count($games);
    	$study_c = count($study);

        $articleCount = DB::table('articles')->count();
        return view('dashboard', compact('art_c','design_c','digitl_c','computer_C','games_c','study_c', 'articleCount'));
    }

    public function show($id)
    {
        return view('detail')->with('article',Article::find($id));
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

    public function storeUploads(Request $request)
    {
        $article = new Article();
        $article ->title = $request->title;
        $article ->description = $request->description;
        $article ->author_name = $request->author_name;
        $article ->date_of_publish = Carbon::now();
        $article ->category = $request ->category;
        $response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();
        // $responsevideo = cloudinary()->upload($request->file('video')->getRealPath())->getSecurePath();
        $article ->image = $response;
        // $article ->video = $responsevideo;
        $article-> save();
        return redirect()->route('articles');
    }
}
