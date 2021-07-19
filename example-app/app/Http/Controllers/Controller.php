<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('home');
    }

    public function category(){
        return view('list');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function detail(){
        return view('detail');
    }
}
