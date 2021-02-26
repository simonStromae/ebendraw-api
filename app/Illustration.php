<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
    public $timestamps=false;
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    /**
     * Get the illustration's name.
     *
     * @param string $value
     * @return string
     */
    public function getNameAttribute($value){
        return ucfirst($value);
    }

    /**
     * Get the illustration's updated date.
     * @param $value
     * @return false|string
     */
    public function getUpdatedAtAttribute($value){
        return date('d M, Y', strtotime($value));
    }
}
