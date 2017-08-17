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
                <h3>Herramientas</h3>
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
                'detail_one' => '<p>A tinta, a carboncillo, con bolígrafo, con acuarela...</p><p> En servilletas, en cuadernos de dibujo, en folios...</p> <p>Cuando viajo necesito hacer apuntes rápidos de lo que veo, no se otro modo de quedarme con un lugar guardado en mi memoria para siempre.</p> <p>El dibujo, a diferencia de la fotgrafía, me permite abstraerme de la realidad y captar aquello y sólo aquello que me llama la atención y quiero mantener en el recuerdo.</p> <p>El esfuerzo es más grande que tomar una fotografía, el hecho de elegir un lugar y ponerme a dibujar me obliga a pararme, a decidir si vale la pena, a pensar... y a disfrutar  </p>',
                'detail_two' => '<p>Bocetos y recuerdos de viajes</p>',
            ]
            ,
            [
                'id' => 7,
                'slug' => 'photography',
                'title' => 'Fotografía',
                'url' => 'graphic/photography',
                'featured_image' => '/img/graphic/photography/featured-photography-portadas-celia-gayo.jpg',
                'detail_one' => '<p>Organizar, encontrar patrones... me gusta hacer las mismas fotos cuando viajo, en este caso, de fachadas que me voy encontrando y llaman mi atención.</p><p>Quizá no son las fotos más representativas de los lugares que visito, pero me llegan más los pequeños detalles</p>',
                'detail_two' => '<p>Serie de fotografía: "Portadas que cruzo"</p>',
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
                'detail_one' => '<p>La serie <strong>Broches en Proceso</strong> surge como un <strong>proyecto de investigación</strong> en el que busco los <strong>límites de la joyería:</strong></p>
<p>Qué es lo mínimo que necesita una pieza para ser joya y por otro lado, cuánto carga artística es capaz de absorber.</p>
<p>Para ello realizo un proyecto de <strong>arte procesual</strong> en le que unos usuarios piden intervenciones sobre una estructura inicial muy básica.</p>
<p>A partir de ahí, mediante una aplicación web que diseñé, se establecía un <strong>diálogo</strong> en el que los usuario iban pidiendo pasos en su broche y yo les devolvía imágenes de su pieza como una joya terminada. Este proceso se repetía tantas veces como el usuario quisiera, generando <strong>piezas metamorfoseadas</strong>.</p>
<br /><p>Como, reslutado, obtuve una serie de piezas en un estado de mayor o menor evolución, que muestran las infinitas posibilidades formales de la joya.</p>
<p>Lo importante de los Broches en Proceso no son los resultados finales de las piezas. Lo importante son todos los <strong>estados intermedios que se han ido generando</strong> y que quedan documentados en cada ficha de broche.</p> <br/><br/><p>Esta colección ha sido expuesta en:</p> <ul><li><strong>Joya Barcelona</strong>. Barcelona 2016</li> <li>Escuela de Arte de la Palma. Madrid 2106</li></ul>',
                'detail_two' => '<p>Joyería de investigación: Broches en proceso</p>  ',
            ],
            [
                'id' => 11,
                'slug' => 'joyas',
                'title' => 'Joyería',
                'url' => 'https://www.migayo.com/',
                'featured_image' => '/img/product/joyas/featured-product-joyas-a-medida-celia-gayo.jpg',
                'detail_one' => '<p>Migayo nace en el año 2012 como escaparate de mis diseños de joyería minimalista.</p><p>Empiezo participando en diferentes ferias en Madrid y Barcelona (varias ediciones del Mercado Central de Diseño en Matadero, Ciento y Pico Market y Festivalet en Barcelona) con piezas de colección a las que llamo "joyas mínimas", pensadas para reasaltar la parte del cuerpo en que se llevan pero sin ser protagonsitas.</p><p>Poco a poco la marca evoluciona y me centro en el diseño y realización artesanal de joyas a medida. Este enfoque me permite hacer piezas más personales y con un simbolismo muy potente ya que van a acompañar a su dueño durante toda la vida, celebrando un evento, evocando un recuerdo, transformando una pieza heredada...</p> <p>Trabajo principalmente con oro y gemas nuevas, heredadas o compradas en viajes</p> <p><a href="https://www.migayo.com/" title="Visita Migayo" target="_blank">www.migayo.com</a></p>',
                'detail_two' => '<p>Joyería a medida y artesanal bajo la marca Migayo</p>',
            ],
            [
                'id' => 12,
                'slug' => 'pfc',
                'title' => 'Proyecto Final de Carrera',
                'url' => 'architecture/pfc',
                'featured_image' => '/img/architecture/pfc/featured-architecture-pfc-celia-gayo.jpg',
                'detail_one' => '
<p>El proyecto se ubica en el Sitio Arqueológico de <em>Complutum</em>, origen de la actual ciudad de Alcalá de Henares entre los siglos I y V a.C.</p>                    
<p>Las caracterísiticas de la arqueología, como son la indeterminación y la temporalidad, son la base del proyecto, que plantea un sistema que va evolucionando junto con los descubrimientos arqueológicos y donde cada estado tiene un valor propio.</p>
<p>El objetivo es dar una solución inmediata y continuada en el tiempo a la situación actual del yacimiento, un descampado con puntuales espacios de trabajo arqueológico.</p>
<p>Para ello, se define un catálogo de actuación a modo de red de intervenciones que envían "satélites" a las zonas con actividad arqueológica. Estos elementos irán colonizando el yacimiento hasta que su uso no sea necesario, momento en el que se integrarán en el edificio principal, que con el aumento de los decubrimientos, necesitará más espacio.</p>
<p>El sistema constructivo, modular, es clave para permitr esta diversidad de formas: Todo el conjunto se construye con barras de 4 longitudes diferentes, que se unen entre sí mediante una rótula que permite diferentes ángulos de anclaje, generando diferentes tipolgías de pórticos. </p>
',
                'detail_two' => '<p>Proyecto que parte de la indeterminación y la temporalidad intrínsecas a una internvención arqueológica. ',
            ],
            [
                'id' => 13,
                'slug' => 'reebok',
                'title' => 'Reebok Creative Hub',
                'url' => 'architecture/reebok',
                'featured_image' => '/img/architecture/reebok/featured-architecture-reebok-celia-gayo.jpg',
                'detail_one' => '<p>Proyecto realizado con la arquitecta Marta Menéndez para transformar el espacio y usos de un local de Madrid para acoger dureante dos meses el Reebok Creative Hub </p>'
                . '<p>Las características del encargo requerían de una intervención rápida y temporal para generar un espacio multiusos que acogiera eventos, talleres y presentaciones.</p><p>El espacio, recorrido y unificado mediante un tubo de acero que adquiere diferentes funciones, queda organizado y estructurado mediante una grada móvil de madera y una mesa-bici giratoria. De esta manera, conseguíamos generar diferentes espacios y usos</p>',
                'detail_two' => '<p>Proyecto de arquitectura efímera para el Rebook Creative Hub. Madrid 2014</p>',
            ],
            [
                'id' => 14,
                'slug' => 'urban',
                'title' => 'Planeamiento Urbano',
                'url' => 'architecture/urban',
                'featured_image' => '/img/architecture/urban/featured-architecture-urban-celia-gayo.jpg',
                'detail_one' => '<p>Low density urban development proposal in Arroyomolinos, Madrid.</p>',
                'detail_two' => 'texto de detalle 2',
            ]
        ]);
    }

}
