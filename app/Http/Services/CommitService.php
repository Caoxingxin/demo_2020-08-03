<?php


namespace App\Http\Services;



use App\Article;
use App\Commit;

class CommitService
{
    public function list()
    {
        return Commit::orderByDesc('updated_at')->get(); //orderByDesc('id') 将文章倒序排列显示

    }
    public function find($id)
    {
        return Commit::find($id);
    }
    public function create($data){
        return Commit::create($data);
    }

}
