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
                'title' => 'Web',
                'detail' => '
                    <p>Entiendo el diseño web como una prolongación de la imagen de marca o producto.</p>
<p>Mi intención es guiar sin forzar, haciendo elementos atractivos y funcionalidades intuitivas.</p>                     
<p>Algo que me fascina y que está muy relacionado con mis estudios de arquitectura, es que la web, del mismo modo que los espacios proyectados, son vividos por el usuario. Hay algo muy divertido en el hecho de intentar marcar un camino al usuario, pero sin forzarle, e intentar que vaya a usar lo que hemos diseñado para él de la manera que hemos diseñado para él... y luego, ver cómo hace lo que quiere.</p>
             
   <h3>Currículum</h3>              
                <ul>
                    <li><span>2016</span> Diseño y Desarrollo Web de sitio online de <em>Takk Group</em></li>      
                    <li><span>2014</span> Curso profesional de diseño y desarrollo web adaptativo con html 5.0 ,CSS y JavaScript en <em>Escuela Cice</em></li>          
                     <li><span>2014-actualidad</span> Diseñadora y Front Web Developer en <em>IMF Business School</em></li>       
                    <li><span>2013</span> Diseño y Desarrollo Web de sitio y tienda online de <em>MIGAYO</em></li>                

                </ul>
                <br/>
                <h3>Herramientas</h3>
                <ul>
                    <li>HTML, CSS, SASS, Wordpress, Laravel, GIT, Meteor, Compiladores </li>
                    <li>SEO, Validaciones W3School, Velocidades de carga, Diseño responsive, UX, Maquetación y programación front.</li>
                   
                </ul>

'
            ],
            [
                'id' => 2,
                'slug' => 'graphic',
                'css_class' => 'c-graphic',
                'title' => 'Graphic',
                'detail' => 'Un buen proyecto no llega a nadie si no se consigue comunicar de manera atractiva.
Transformar ideas en dibujos. 

Intento entender qué llama nuestra atención, qué queda en nuestra retina cuando levantamos la mirada de algo. Por qué recordamos ciertos elementos. Por qué algo hace que nos tengamos que girar o parar a ver.

Yo recuerdo, pienso y me organizo dibujando. Para aprender a sintetizar y a comunicar un producto desde un punto de vista comercial, me apoyo en 3 acciones que hago por placer en mi día a día.'
            ],
            [
                'id' => 3,
                'slug' => 'product',
                'css_class' => 'c-product',
                'title' => 'Producto',
                'detail' => 'La necesidad de generar materialidades, de poder diseñar piezas que sacar, que usar, con un objetivo. 
Joyas a medida, para recordar o marcar un momento, una persona. Son piezas que las personas van a llevar y les va a recordar algo. Representan una persona o un sentimiento o un momento. La sintetización. El saber qué representa el oro, una perla, un diamante. Qué dice de la persona que lo lleva. La historia de la joya es fascinante.
La paciencia, la delicadeza, la dureza del metal. Transformarlo poco a poco. Sin la existencia de la tecla CTR Z. Enfrentarse a la vida real y no a la digital. Mancharse las manos, tener agujetas y cortarse en los dedos. 
Mis caras son el mundo digital de las webs y el mundo material del metal.

Pero no acaba en el metal, la cerámica, la madera, el textil… están ahí fuera para ser probados.
'
            ],
            [
                'id' => 4,
                'slug' => 'architecture',
                'css_class' => 'c-architecture',
                'title' => 'Arquitectura',
                'detail' => 'Es mi origen, no mi pasado. Me ha enseñado todo lo que se; son mis cimientos. A través de la arquitectura he aprendido a mirar. Me ha dado las herramientas para desarrollarme y entenderme. Me he enseñado a aguantar, a sufrir y a frustrarme.  A no dormir.
A no dar nada por hecho, a pensar en el detalle, a unir fuerzas con colegas. A entender que un buen diseño es la solución más eficiente a un problema. A ser meticulosa y perfeccionista. 
A no tener miedo de asumir un cambio de profesión y saber que aunque no me dedique ya a la arquitectura, todo lo que hago surge de ella.
'
            ]
        ]);
    }

}
