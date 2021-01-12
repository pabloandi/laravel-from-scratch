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

Route::get('about', function(){
    $articles = Article::take(3)->latest()->get();

    return view('about', compact('articles'));
});

Route::resource('articles', ArticleController::class);
