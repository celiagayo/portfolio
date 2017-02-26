<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Category;
use DB;

class StaticPagesController extends Controller
{
	public function index(){

		$projects = Project::all();

		$categories = Category::all(); 

		echo "PROYECTOS";
		foreach ($projects as $project) {
			echo "<div>" . $project->id . "</div>";
			echo "<div>" . $project->slug . "</div>";
			echo "<div>" . $project->title . "</div>";
			echo "<div>" . $project->url . "</div>";
			echo "<div>" . $project->featured_image . "</div>";
			echo "<div>" . $project->detail_one . "</div>";
			echo "<div>" . $project->detail_two . "</div>";

			// No funciona Eloquent con la tabla pivot
			$categories_from_project = $project->categories();
			// Así que lo saco atacando directamente BBDD
			$categories_from_project = $project->categoriesDb();

			foreach ($categories_from_project as $category_from_project){
				echo "<div> Categoria:". $category_from_project->category_id . "</div>";
			}

			$images_from_project = $project->imagesDb();
			//dd($images_from_project);

			foreach ($images_from_project as $image){
				echo "<div> Imagen:". $image->url . "</div>";
			}
		}

		echo "CATEGORIAS";
		foreach ($categories as $category) {
			echo "<div>" . $category->id . "</div>";
			echo "<div>" . $category->slug . "</div>";
			echo "<div>" . $category->title . "</div>";

		}

	}
}
