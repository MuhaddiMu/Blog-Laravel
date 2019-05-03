<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];    

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function Comments(){
        return $this->hasMany('App\Comments', 'post_id');
    }
}
