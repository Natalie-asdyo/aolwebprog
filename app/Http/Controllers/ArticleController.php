<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::query()
            ->where('title', 'like', '%' . $request->search . '%')
            ->paginate(10);

        return view('articles.index', compact('articles'));
    }
}
