<?php

namespace App;

Use DB;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category','category_project','project_id','category_id');
    }

    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
}
