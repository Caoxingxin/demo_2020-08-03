<?php

namespace App\Http\Services;

use App\Article;

class ArticleService
{
    public function list($user = null)
    {
        $articles = null;
        $query = Article::orderByDesc('updated_at');

        if (is_null($user)) {
            $articles = $query->get();
        }
        else {
            $articles = $query->where('user_id', $user)->get();
        }

        return $articles;
    }

    public function find($id)
    {
        return Article::find($id);
    }
    public function create($data){
        return Article::create($data);
    }

    public function update($id, $data)
    {
        $article = $this->find($id);

        return $article->update($data);
    }



    public function delete($id)
    {
        $article = $this->find($id);
//
//        if ($user != $article['user_id']) {
//            throw \Exception('no authentication');
//        }

        return Article::destroy($id);
    }


}
