<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Categorías de ejemplo
        DB::table('categories')->insert([
            [
                'id' => 1,
                'slug' => 'web',
                'css_class' => 'c-web',
                'title' => 'WEB',
                'detail' => 'Detalle de la categoria diseño web'
            ],
            [
                'id' => 2,
                'slug' => 'graphic',
                'css_class' => 'c-graphic',
                'title' => 'GRAPHIC',
                'detail' => 'Detalle de la categoria diseño gráfico'
            ],
            [
                'id' => 3,
                'slug' => 'product',
                'css_class' => 'c-product',
                'title' => 'PRODUCTO',
                'detail' => 'Detalle de la categoria diseño de producto'
            ],
            [
                'id' => 4,
                'slug' => 'architecture',
                'css_class' => 'c-architecture',
                'title' => 'ARQUITECTURA',
                'detail' => 'Detalle de la categoria arquitectra'
            ]
        ]);
    }

}
