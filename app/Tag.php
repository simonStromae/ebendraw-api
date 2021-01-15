<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    public function illustrations()
    {
        return $this->belongsToMany('App\Illustration');
    }

    public function patterns(){
        return $this->belongsToMany('App\Pattern');
    }
}
