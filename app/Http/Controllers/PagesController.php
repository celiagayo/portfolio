<?php

namespace App\Http\Controllers;

use App\Category;

class PagesController extends Controller
{
	public function home(){

		$categories = Category::all();

		/**
		Para cada categoría, obtenemos sus proyectos
		y los guardamos en el atributo no persistente
		*/
		foreach ($categories as $category) {

			$category->projects = $category->projects()->get();

		}

		return view('home')
			->with('categories',$categories);

	}

	public function show($category_slug,$project_slug)
	{

		$categories = Category::all();
		// Obtenemos la categoría, first() devuelve un objeto de la clase del Modelo Category
		$category = $categories->where('slug','=',$category_slug)->first();


		if ($category == null){
			return "error";
		}

		/**
		De todos los proyectos de la categoría, obtenemos el que tiene
		el slug buscado
		*/
		$project = $category -> projects()->where('slug','=',$project_slug)->first();

		if ($project == null){
			return "error";
		}

		// Obtenemos las imágenes de ese proyecto
		$images = $project->images()->get();

		return view('project')
            ->with('categories',$categories)
			->with('category',$category)
			->with('project',$project)
			->with('images',$images);
	}
}
