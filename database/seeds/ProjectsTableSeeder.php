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
                'slug' => 'takk',
                'title' => 'Nueva web de la empresa Takk',
                'url' => 'www.takkgroup.es',
                'featured_image' => '/public/takk.png',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
            	'id' => 2,
                'slug' => 'PFC',
                'title' => 'Proyecto de fin de carrera',
                'url' => 'www.ualcala.es',
                'featured_image' => '/public/pfc.png',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
            	'id' => 3,
                'slug' => 'Examinador',
                'title' => 'Examinador de examenes',
                'url' => 'www.examinador.es',
                'featured_image' => '/public/examinador.png',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
        ]);
    }
}
