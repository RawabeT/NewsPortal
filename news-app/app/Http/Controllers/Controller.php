<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('public.list', [
            'articles' => DB::table('articles')-> paginate(5)
        ]);
    }

    public function search(Request $request){
        $s = trim($request->get('s'));
        $article = Article::where('title','LIKE','%'.$s.'%')->orWhere('description','LIKE','%'.$s.'%')->orWhere('author_name','LIKE','%'.$s.'%')->get();
        if(count($article) > 0)
            return view('public.list')->withDetails($article)->withQuery ( $s );
        else return view ('public.list')->withMessage('No Details found. Try to search again !');

    }

    public function advancedSearch(Request $request){
        $s = trim($request->get('s'));
        $from = trim($request->get('from'));
        $to = trim($request->get('to'));
        $category = $request->get('categories');

        $query = Article::where('title','LIKE','%'.$s.'%');
        if($request->from != null) $query->where("date_of_publish", ">=", $request->from);
        if($request->to != null) $query->where("date_of_publish", "<=", $request->to . ' 23:59:59');
        if($category != null){ 
            
            $query->where(function ($query) use($category){
                for ($i=0; $i < count($category); $i++) { 
                    $query->orwhere('category', 'LIKE','%'.$category[$i].'%' );
                }
            });
        }

        $article = $query->get();
        if(count($article) > 0)
            return view('public.advancedSearch')->withDetails($article)->withQuery ( [$from ,$to]);
        else return view ('public.advancedSearch')->withMessage('No Details found. Try to search again !');

    }

    public function details($id){

        $article = DB::select('select * from articles where id = ?',[$id]);
        $post = Article::find($id);
        $viewed = Session::get('view_count', []);
        if(!in_array($post, $viewed)){
            $post->increment('view_count');
            Session::push('view_count', $post);
        }
        $comment = DB::select('select * from comments where article_id = ?',[$id]);
        return view('public.detail',['articles'=>$article],['comments'=>$comment]);
    }

    public function contact(Request $request){
        $contact = new Contact();
        $contact->username = $request->username;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->created_at = Carbon::now();
        $contact->save();
        return redirect()->route('contacts');
    }

}
