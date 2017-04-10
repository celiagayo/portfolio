<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
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
            ,
            [
                'id' => 5,
                'slug' => 'graphic-marketing-migayo',
                'title' => 'Comunicaciones comerciales',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/graphic/marketing/featured-marketing-migayo-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 6,
                'slug' => 'graphic-bitacora',
                'title' => 'Cuadernos de viaje',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/graphic/bitacora/featured-graphic-bitacora-fez-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 7,
                'slug' => 'graphic-photography',
                'title' => 'Fotografía',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/graphic/photography/featured-photography-portadas-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 8,
                'slug' => 'graphic-illustration',
                'title' => 'Ilustraciones',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/graphic/illustration/featured-graphic-illustration-woman-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
             ,
            [
                'id' => 9,
                'slug' => 'product-objetcs',
                'title' => 'Objetos',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/product/objects/featured-product-caja-madera-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
             ,
            [
                'id' => 10,
                'slug' => 'product-joyas-artistica',
                'title' => 'Joyería Artística',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/product/joyeria-artisitica/featured-product-joyeria-artistica-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ] ,
            [
                'id' => 11,
                'slug' => 'product-joyas',
                'title' => 'Joyería',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/product/joyas/featured-product-joyas-a-medida-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 12,
                'slug' => 'architecture-pfc',
                'title' => 'Proyecto Final de Carrera',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/architecture/pfc/featured-architecture-pfc-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 13,
                'slug' => 'architecture-reebok',
                'title' => 'Reebok Creative Hub',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/architecture/reebok/featured-architecture-reebok-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 14,
                'slug' => 'architecture-urban',
                'title' => 'Planeamiento Urbano',
                'url' => 'www.ualcala.es',
                'featured_image' => '/img/architecture/urban/featured-architecture-urban-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
        ]);
    }

}
