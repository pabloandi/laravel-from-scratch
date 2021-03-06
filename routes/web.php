<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

Route::resource('posts', PostController::class);

Route::get('articles/tag/{tag}', [ArticleController::class, 'index']);
Route::resource('articles', ArticleController::class);

Route::get('reports', function () {
    return 'reports';
})->middleware('can:view_reports')->name('reports');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
