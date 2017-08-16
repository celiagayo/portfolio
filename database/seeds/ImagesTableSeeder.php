<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('images')->insert([
            /* WEB */
            [
                'id' => 1,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-1.png'
            ],
            [
                'id' => 2,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-2.png'
            ],
            [
                'id' => 3,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-3.png'
            ],
            [
                'id' => 4,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-4.png'
            ],
            [
                'id' => 5,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-5.png'
            ],
            [
                'id' => 6,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-6.png'
            ],
            [
                'id' => 7,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-7.png'
            ],
            /* GRAPHIC */
             /* PRODUCT */
            [
                'id' => 8,
                'url' => '/img/product/objects/objects-celia-gayo-1.jpg'
            ],
            [
                'id' => 9,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-1.jpg'
            ],
            [
                'id' => 10,
              'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-2.jpg'
            ],
            [
                'id' => 11,
              'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-3.jpg'
            ],
            [
                'id' => 12,
               'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-4.jpg'
            ],
            [
                'id' => 13,
                 'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-5.jpg'
            ],
           

            /* ARCHITECTURE */
            [
                'id' => 14,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-1.jpg'
            ],
            [
                'id' => 15,
               'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-2.jpg'
            ],
            [
                'id' => 16,
               'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-3.jpg'
            ],
            [
                'id' => 17,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-4.jpg'
            ],
            [
                'id' => 18,
               'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-5.jpg'
            ],
            [
                'id' => 19,
               'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-6.jpg'
            ],
            [
                'id' => 20,
               'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-7.jpg'
            ],
            [
                'id' => 21,
               'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-8.jpg'
            ],
            [
                'id' => 22,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-1.jpg'
            ],
            [
                'id' => 23,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-2.jpg'
            ],
            [
                'id' => 24,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-3.jpg'
            ],
            [
                'id' => 25,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-4.jpg'
            ],
            [
                'id' => 26,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-5.jpg'
            ],
        ]);
    }

}
