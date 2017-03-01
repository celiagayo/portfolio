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
                'slug' => 'web',
                'title' => 'Diseño web',
                'detail' => 'Detalle de la categoria diseño web'
            ],
            [
                'id' => 2,
                'slug' => 'graphic',
                'title' => 'Diseño gráfico',
                'detail' => 'Detalle de la categoria diseño gráfico'
            ],
            [
                'id' => 3,
                'slug' => 'product',
                'title' => 'Diseño de producto',
                'detail' => 'Detalle de la categoria diseño de producto'
            ],
            [
                'id' => 4,
                'slug' => 'architecture',
                'title' => 'Proyectos de arquitectura',
                'detail' => 'Detalle de la categoria arquitectra'
            ]
        ]);
    }
}
