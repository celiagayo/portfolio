<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Category;
use DB;

class StaticPagesController extends Controller
{
	public function home(){

		$categories = Category::all();

		/**
		Para cada categoría, obtenemos sus proyectos
		y los guardamos en el atributo no persistente
		*/
		foreach ($categories as $category) {

			$projects = $category->projectsDb();
			$category->projects = $projects;

		}

		return view('home')
			->with('categories',$categories);

	}

	public function show($category_slug,$project_slug)
	{
		/**
			Obtenemos la categoría, first() devuelve un objeto
			de la clase del Modelo Category
		*/
		$category = Category::where('slug','=',$category_slug)->first();

		if ($category == null){
			return "error";
		}

		/**
			Obtenemos el projecto. getProject también
			devuelve un objeto de la clase del Modelo
		*/
		$project = $category->getProject($project_slug);

		if ($project == null){
			return "error";
		}


		return view('project')
			->with('category',$category)
			->with('project',$project);
	}
}
