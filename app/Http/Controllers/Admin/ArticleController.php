<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Commit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\ArticleService;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ArticleService $articleService)
    {
        $articles = $articleService->list(Auth::id());

        return view('article/home')->with('articles', $articles)->with('commits',Commit::all());
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ArticleService $articleService)
    {
        //
        $params = $request->only('title','content','commit');
        $params['user_id'] = Auth::id();


        $articleService->create($params);

        return redirect('/admin/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ArticleService $articleService)
    {
        $article = $articleService->find($id);

        return view('article/detail')->with('article', $article)->with('commits',Commit::all());
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, ArticleService $articleService)
    {
        $article = $articleService->find($id);

        return view('article/edit')->with('article', $article);
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, ArticleService $articleService)
    {
        $params = $request->only('title', 'content');

        $articleService->update($id, $params);

        return redirect('/admin/article/' . $id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ArticleService $articleService)
    {
        $articleService->delete($id);

        return redirect('/admin/article');
    }

}
