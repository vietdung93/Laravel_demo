<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Requests\ArticlesFormRequest;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);
        return view('articles.index')->with('articles', $articles);
    }

    public function show($id='')
    {
        $article = Article::find($id);
        return view('articles.show')->with('article', $article);
    }
    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticlesFormRequest $request)
    {
        Article::create([
            'title' => $request->get('title'),
            'content' => $request->get('content')
            ]);
        return redirect()->route('article.index');
    }

    public function edit($id='')
    {
        $article = Article::find($id);
        return view('articles.edit')->with('article', $article);
    }

    public function update($id='', ArticlesFormRequest $request)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect()->route('article.show', $id);
    }

    public function destroy($id='')
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('article.index');
    }
}
