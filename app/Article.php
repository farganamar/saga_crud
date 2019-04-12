<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'category_id', 'title', 'slug', 'content' , 'banner'
    ];
}
