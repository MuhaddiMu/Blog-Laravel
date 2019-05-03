<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $guarded = ['id'];    

    public function Post(){
        return $this->belongsTo('App\Post');
    }
}
