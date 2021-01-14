<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ArticleController extends Controller
{

    public function __construct() {
        FacadesAuth::loginUsingId(1);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('tag')){
            $articles = Tag::where('name',request('tag'))->firstOrFail()->articles;
        }
        else{
            $articles = Article::take(5)->latest()->get();
        }

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create', [
            'article' => new Article(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedFields = $this->validateArticle($request);

        $validatedFields['slug'] = Str::slug($validatedFields['title']);
        $validatedFields['user_id'] = FacadesAuth::id();

        $article = Article::create($validatedFields);

        $article->tags()->attach(request('tags'));

        return redirect(route('articles.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticle($request));

        return redirect($article->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    protected function validateArticle(Request $request)
    {
        return $request->validate([
            'title' =>  'required',
            'excerpt' =>  'required',
            'body' =>  'required',
            'tags'  =>  'exists:tags,id'
        ]);
    }
}
