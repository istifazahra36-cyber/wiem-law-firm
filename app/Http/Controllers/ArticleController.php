<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();

        return view('pages.article', compact('articles'));
    }

    public function show($id)
    {
        $articles = Article::findOrFail($id);

        return view('pages.article-detail', compact('articles'));
    }
}
