<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Article;

Route::get('/',[Controller::class,'index']);
Route::get('/category',[Controller::class,'category']);
Route::get('/about',[Controller::class,'about']);
Route::get('/contact',[Controller::class,'contact']);
Route::get('/detail', [Controller::class,'detail']);


Route::get('/login', function () {
    return view('login');
});

Route::get('/news',[NewsController::class,'newss']);



Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [DashboardController::class, 'admin']);
    Route::get('/read', [DashboardController::class, 'read']);
    Route::get('/create', [DashboardController::class, 'create']);
    Route::get('/edit', [DashboardController::class, 'edit']);
    Route::post('/create-post', [DashboardController::class, 'createArticle']);

});

Route::resource('/operations', DashboardController::class);

// Route::get('/admin', [DashboardController::class, 'admin']);
// Route::get('/read', [DashboardController::class, 'read']);
// Route::get('/create', [DashboardController::class, 'create']);
// Route::get('/edit', [DashboardController::class, 'edit']);
