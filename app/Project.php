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

    public function categoriesDb(){
    	return DB::table('category_project')->where('project_id', $this->id)->get();
    }

    public function images()
    {
        return $this->belongsToMany('App\Image');
    }

    public function imagesDb(){
    	return DB::table('images')
    		-> join('image_project','images.id','image_project.image_id')
    		->where('image_project.project_id', $this->id)
    		->select('images.*')
    		->get();
    }
}
