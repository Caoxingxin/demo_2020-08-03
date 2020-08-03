<?php

namespace App\Http\Controllers;

use App\Commit;
use App\Http\Services\ArticleService;

class ArticleController extends Controller
{
    public function index(ArticleService $articleService)
    {
        $articles = $articleService->list();

        return view('article/home')->with('articles', $articles)->with('commits',Commit::all());
    }

    public function show($id, ArticleService $articleService)
    {
        $article = $articleService->find($id);

        return view('article/detail')->with('article', $article)->with('commits',Commit::all());


    }

}
