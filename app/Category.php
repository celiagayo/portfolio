<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{

	// Campo no persistente
	public $projects;

    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    public function getProject($project_slug){
    	return DB::table('projects')
    		-> join('category_project','projects.id','category_project.project_id')
    		->where('category_project.category_id', $this->id)
    		->where('projects.slug','=',$project_slug)
    		->select('projects.*')
    		->first();
    }
}
