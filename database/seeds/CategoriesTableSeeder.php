<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Categorías de ejemplo
    	DB::table('categories')->insert([
            [
            	'id' => 1,
                'slug' => 'disenyo-web',
                'title' => 'Proyectos de diseño web',
                'detail' => 'Detalle de la categoria diseño web'
            ],
            [
                'id' => 2,
                'slug' => 'arquitectura',
                'title' => 'Proyectos de arquitectura',
                'detail' => 'Detalle de la categoria arquitectra'
            ]
        ]);
    }
}
