<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/' , [ArticleController::class, 'home']);
Route::any('/allarticles', [Controller::class, 'search'])->name('allarticles');
Route::get('/details/{id}', [Controller::class,'details']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [ArticleController::class, 'handleChart'])->middleware(['auth'])->name('dashboard');
Route::resource('articles', ArticleController::class);

require __DIR__.'/auth.php';

Route::get('/articles' , [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/create' , [ArticleController::class, 'create'])->name('articles.create');
Route::get('/articles/edit/{id}' , [ArticleController::class, 'edit']);
Route::post('/articles/edit/{id}' , [ArticleController::class, 'update']);
Route::get('/articles/delete/{id}' , [ArticleController::class, 'destroy']);
Route::post('/upload', [ArticleController::class, 'store']);

// Route::get('/articles' , [ArticleController::class, 'index']);
// Route::get('/articles' , [ArticleController::class, 'show']);
// Route::get('/articles/create' , [ArticleController::class, 'create']);
// Route::get('/articles/id/edit' , [ArticleController::class, 'edit']);
// Route::post('/articles' , [ArticleController::class, 'store']);
// Route::put('/articles' , [ArticleController::class, 'update']);
// Route::delete('/articles' , [ArticleController::class, 'destroy']);


Route::get('/upload', [ArticleController::class, 'showUploadForm']);
Route::post('/upload', [ArticleController::class, 'storeUploads']);