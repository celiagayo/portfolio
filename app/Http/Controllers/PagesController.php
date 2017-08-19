<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use Illuminate\Routing\Route;

class PagesController extends Controller
{
	public function home(Route $route){

	    try {
            $categories = Category::all();


            if ($categories->isEmpty()){
                Log::critical("No se encontraron categorías en  " . $route->getActionName());
                return view('error');
            }else{
                Log::debug('Se encontraron las siguientes categorías:' . $categories->count());
            }

            /**
            Para cada categoría, obtenemos sus proyectos
            y los guardamos en el atributo no persistente
             */
            foreach ($categories as $category) {
                $category->projects = $category->projects()->get();
            }

        }catch(QueryException $e){
            Log::emergency("Excepción al conectar a BBDD en " . $route->getActionName());
            return view('error');
        }


		return view('home')
			->with('categories',$categories);

	}

	public function show($category_slug,$project_slug,Route $route)
	{

	    try{
            $categories = Category::all();
            // Obtenemos la categoría, first() devuelve un objeto de la clase del Modelo Category
            $category = $categories->where('slug','=',$category_slug)->first();


            if ($category == null){
                Log::critical('Categoría ' . $category_slug . ' no encontrada en ' . $route->getActionName());
                return view('error');
            }

            /**
            De todos los proyectos de la categoría, obtenemos el que tiene
            el slug buscado
             */
            $project = $category -> projects()->where('slug','=',$project_slug)->first();

            if ($project == null){
                Log::critical('Proyecto ' . $project_slug . ' no encontrada para la categoría ' . $category_slug . ' en ' . $route->getActionName());
                return view('error');
            }

        }catch(QueryException $e){
            Log::emergency("Excepción al conectar a BBDD en " . $route->getActionName());
            return view('error');
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
