<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommentController;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


Route::any('/allarticles', [Controller::class, 'search'])->name('allarticles');
Route::any('/allarticlesA', [Controller::class, 'advancedSearch'])->name('allarticlesA');
Route::get('/details/{id}', [Controller::class,'details']);
Route::post('/contact' , [Controller::class, 'contact']);

Route::get('/about', function () {
    return view('public.about');
});
Route::get('/contact', function () {
    return view('public.contact');
})->name('contacts');

Route::get('/' , [ArticleController::class, 'home']);
Route::get('/dashboard', [ArticleController::class, 'handleChart'])->middleware(['auth'])->name('dashboard');
Route::resource('articles', ArticleController::class);
Route::get('/articles' , [ArticleController::class, 'index'])->middleware(['auth'])->name('articles');
Route::get('/articles/create' , [ArticleController::class, 'create'])->middleware(['auth'])->name('articles.create');
Route::get('/articles/edit/{id}' , [ArticleController::class, 'edit'])->middleware(['auth']);
Route::post('/articles/edit/{id}' , [ArticleController::class, 'update']);
Route::get('/articles/delete/{id}' , [ArticleController::class, 'destroy'])->middleware(['auth']);
Route::post('/upload', [ArticleController::class, 'storeUploads']);

require __DIR__.'/auth.php';

Route::post('/comment/{id}' , [CommentController::class, 'store']);
Route::get('/comments' , [CommentController::class, 'show'])->name('comments');
Route::post('/comment/edit/{id}' , [CommentController::class, 'approved']);
Route::post('/comment/visible/{id}' , [CommentController::class, 'visibility']);
Route::get('/comment/delete/{id}' , [CommentController::class, 'destroy']);
Route::get('/comments/edit/{id}' , [CommentController::class, 'edit']);
Route::post('/comments/edit/{id}' , [CommentController::class, 'updateComment']);

