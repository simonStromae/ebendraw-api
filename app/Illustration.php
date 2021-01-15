<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}