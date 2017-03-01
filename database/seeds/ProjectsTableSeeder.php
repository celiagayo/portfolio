<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categorías de ejemplo
    	DB::table('projects')->insert([
            [
            	'id' => 1,
                'slug' => 'web-takk',
                'title' => 'Nueva web de la empresa Takk',
                'url' => 'www.takkgroup.es',
                'featured_image' => '/img/web/takk/featured-landing-web-takk-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
            	'id' => 2,
                'slug' => 'web-migayo',
                'title' => 'Web y tienda online de Migayo',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/web/migayo/featured-web-migayo-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
            	'id' => 3,
                'slug' => 'web-imf',
                'title' => 'Web de la Escuela de Negocios IMF',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/web/imf/featured-web-imf-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
            	'id' => 4,
                'slug' => 'web-formando-imf',
                'title' => 'Landing page de formación online',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/web/formando-imf/featured-landing-formando-imf-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
        ]);
    }
}
