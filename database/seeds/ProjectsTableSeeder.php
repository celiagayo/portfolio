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
                'url' => 'web/web-takk',
                'featured_image' => '/img/web/takk/featured-landing-web-takk-celia-gayo.jpg',
                'detail_one' => ' <p>Las necesidades específicas de la empresa requería de una web que aglutinara los diferentes proyectos que realizan con uno o varios clientes. Por eso, los proyectos se agrupan según cliente... </p>
 
                <br/>
                <h3>TECNOLOÍAS UTILIZADAS</h3>
                <ul>
                <li>SEO, Validaciones W3School, Velocidades de carga, Diseño responsive, UX, Maquetación y programación front.</li>
                    <li>HTML, CSS, SASS, Laravel, GIT,</li>
                </ul>',
                'detail_two' => '<p>Diseño y programación Front de la web corporativa de la empresa de retail Takk Group</p>',
            ],
            [
                'id' => 2,
                'slug' => 'web-migayo',
                'title' => 'Web y tienda online de Migayo',
                'url' => 'web/web-migayo',
                'featured_image' => '/img/web/migayo/featured-web-migayo-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 3,
                'slug' => 'web-imf',
                'title' => 'Web de la Escuela de Negocios IMF',
                'url' => 'web/web-imf',
                'featured_image' => '/img/web/imf/featured-web-imf-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 4,
                'slug' => 'web-formando-imf',
                'title' => 'Landing page de formación online',
                'url' => 'web/web-formando-imf',
                'featured_image' => '/img/web/formando-imf/featured-landing-formando-imf-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 5,
                'slug' => 'marketing-migayo',
                'title' => 'Comunicaciones comerciales',
                'url' => 'graphic/graphic-marketing-migayo',
                'featured_image' => '/img/graphic/marketing/featured-marketing-migayo-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 6,
                'slug' => 'bitacora',
                'title' => 'Cuadernos de viaje',
                'url' => 'graphic/bitacora',
                'featured_image' => '/img/graphic/bitacora/featured-graphic-bitacora-fez-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 7,
                'slug' => 'photography',
                'title' => 'Fotografía',
                'url' => 'graphic/photography',
                'featured_image' => '/img/graphic/photography/featured-photography-portadas-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 8,
                'slug' => 'illustration',
                'title' => 'Ilustraciones',
                'url' => 'graphic/illustration',
                'featured_image' => '/img/graphic/illustration/featured-graphic-illustration-woman-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 9,
                'slug' => 'objetcs',
                'title' => 'Objetos',
                'url' => 'product/objetcs',
                'featured_image' => '/img/product/objects/featured-product-caja-madera-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
            ,
            [
                'id' => 10,
                'slug' => 'joyeria-artistica',
                'title' => 'Joyería Artística',
                'url' => 'product/joyeria-artistica',
                'featured_image' => '/img/product/joyeria-artisitica/featured-product-joyeria-artistica-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 11,
                'slug' => 'joyas',
                'title' => 'Joyería',
                'url' => 'product/joyas',
                'featured_image' => '/img/product/joyas/featured-product-joyas-a-medida-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 12,
                'slug' => 'pfc',
                'title' => 'Proyecto Final de Carrera',
                'url' => 'architecture/pfc',
                'featured_image' => '/img/architecture/pfc/featured-architecture-pfc-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 13,
                'slug' => 'reebok',
                'title' => 'Reebok Creative Hub',
                'url' => 'architecture/reebok',
                'featured_image' => '/img/architecture/reebok/featured-architecture-reebok-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ],
            [
                'id' => 14,
                'slug' => 'urban',
                'title' => 'Planeamiento Urbano',
                'url' => 'architecture/urban',
                'featured_image' => '/img/architecture/urban/featured-architecture-urban-celia-gayo.jpg',
                'detail_one' => 'texto de detalle 1',
                'detail_two' => 'texto de detalle 2',
            ]
        ]);
    }

}
