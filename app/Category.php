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
}
