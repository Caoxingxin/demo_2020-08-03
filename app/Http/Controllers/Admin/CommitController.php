<?php

namespace App\Http\Controllers\Admin;

use App\Commit;
use App\Http\Services\ArticleService;

use App\Http\Services\CommitService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommitController extends Controller
{
    //

    public function index($id, ArticleService $articleService)
    {
        $article = $articleService->find($id);

        return view('article/commit')->with('commits',Commit::all())->with('article', $article);
//        return Commit::all();
    }

//    public function index($id, ArticleService $articleService)
//    {
//        $article = $articleService->find($id);
//
//        return view('article/commit')->with('article', $article);
//    }



    public function store(Request $request,CommitService $commitService,$id)
    {
        //

        $params = $request->only('commit');
        $params['name'] = Auth::id();
        $params['title'] = $id;
        $commitService->create($params);

        return redirect('/admin/article');
    }
    public function show($id, ArticleService $articleService)
    {
        $article = $articleService->find($id);

        return view('article/detail')->with('commits',Commit::all())->with('article', $article);


    }


}
