<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'content',
        'commit',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
