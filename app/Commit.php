<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    //
    protected $table = 'commit';

    protected $fillable = [
        'title',
        'name',
        'commit',

    ];
}
