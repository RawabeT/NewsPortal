<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class DashboardController extends Controller
{
    public function admin(){
        return view('dashboard');
    }

    public function read(){
        return view('admin.operations.read');
    }

    public function create(){
        return view('admin.operations.create');
    }

    public function createArticle(Request $request){
        $article = new Article();
        $article ->title = $request->title;
        $article ->description = $request->description;
        $article-> save();
        // return back()->with('article_created','Article created ^^');
        return redirect()->route('admin.operations.create')->with('success','Post created successfully.');
    }

    public function edit(){
        return view('admin.operations.edit');
    }
}
