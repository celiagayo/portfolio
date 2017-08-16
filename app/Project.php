<?php

namespace App;

Use DB;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
