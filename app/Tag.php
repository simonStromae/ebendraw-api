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

    /**
     * Get the tag's name.
     *
     * @param string $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * Set the tag's name.
     *
     * @param string $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
