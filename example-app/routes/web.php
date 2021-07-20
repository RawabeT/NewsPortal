<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/chart', [ArticleController::class, 'handleChart']);
Route::resource('articles', ArticleController::class)->middleware('auth');

require __DIR__.'/auth.php';

Route::get('/articles' , [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/create' , [ArticleController::class, 'create'])->name('articles.create');


// Route::resources([
//     'articles'=> ArticleController::class
// ]);

// Route::get('/articles' , [ArticleController::class, 'index']);
// Route::get('/articles' , [ArticleController::class, 'show']);
// Route::get('/articles/create' , [ArticleController::class, 'create']);
// Route::get('/articles/id/edit' , [ArticleController::class, 'edit']);
// Route::post('/articles' , [ArticleController::class, 'store']);
// Route::put('/articles' , [ArticleController::class, 'update']);
// Route::delete('/articles' , [ArticleController::class, 'destroy']);
