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
                'url' => '/img/web/migayo/web-migayo-celia-gayo-1.png',
                'project_id' => 2
            ],
            [
                'id' => 2,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-2.png',
                'project_id' => 2
            ],
            [
                'id' => 3,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-3.png',
                'project_id' => 2
            ],
            [
                'id' => 4,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-4.png',
                'project_id' => 2
            ],
            [
                'id' => 5,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-5.png',
                'project_id' => 2
            ],
            [
                'id' => 6,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-6.png',
                'project_id' => 2
            ],
            [
                'id' => 7,
                'url' => '/img/web/migayo/web-migayo-celia-gayo-7.png',
                'project_id' => 2
            ],
            /* GRAPHIC */
            [
                'id' => 60,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-1.jpg',
                'project_id' => 6
            ],
            [
                'id' => 61,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-2.jpg',
                'project_id' => 6
            ],
            [
                'id' => 62,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-3.jpg',
                'project_id' => 6
            ],
            [
                'id' => 63,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-4.jpg',
                'project_id' => 6
            ],
            [
                'id' => 64,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-5.jpg',
                'project_id' => 6
            ],
            [
                'id' => 65,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-6.jpg',
                'project_id' => 6
            ],
            [
                'id' => 66,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-7.jpg',
                'project_id' => 6
            ],
            [
                'id' => 67,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-8.jpg',
                'project_id' => 6
            ],
            [
                'id' => 68,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-9.jpg',
                'project_id' => 6
            ],
            [
                'id' => 69,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-10.jpg',
                'project_id' => 6
            ],
            [
                'id' => 70,
                'url' => '/img/graphic/bitacora/bitacora-celia-gayo-11.jpg',
                'project_id' => 6
            ],
            [
                'id' => 80,
                'url' => '/img/graphic/photography/photography-celia-gayo-1.jpg',
                'project_id' => 7
            ],
            [
                'id' => 81,
                'url' => '/img/graphic/photography/photography-celia-gayo-2.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 82,
                'url' => '/img/graphic/photography/photography-celia-gayo-3.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 83,
                'url' => '/img/graphic/photography/photography-celia-gayo-4.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 84,
                'url' => '/img/graphic/photography/photography-celia-gayo-5.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 85,
                'url' => '/img/graphic/photography/photography-celia-gayo-6.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 86,
                'url' => '/img/graphic/photography/photography-celia-gayo-7.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 87,
                'url' => '/img/graphic/photography/photography-celia-gayo-8.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 88,
                'url' => '/img/graphic/photography/photography-celia-gayo-9.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 89,
                'url' => '/img/graphic/photography/photography-celia-gayo-10.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 90,
                'url' => '/img/graphic/photography/photography-celia-gayo-11.jpg',
                'project_id' => 7
            ],
                   [
                'id' => 91,
                'url' => '/img/graphic/photography/photography-celia-gayo-12.jpg',
                'project_id' => 7
            ],
             [
                'id' => 92,
                'url' => '/img/graphic/photography/photography-celia-gayo-13.jpg',
                'project_id' => 7
            ],
             [
                'id' => 93,
                'url' => '/img/graphic/photography/photography-celia-gayo-14.jpg',
                'project_id' => 7
            ],
             [
                'id' => 94,
                'url' => '/img/graphic/photography/photography-celia-gayo-15.jpg',
                'project_id' => 7
            ],
             [
                'id' => 95,
                'url' => '/img/graphic/photography/photography-celia-gayo-16.jpg',
                'project_id' => 7
            ],
            /* PRODUCT */
            [
                'id' => 8,
                'url' => '/img/product/objects/objects-celia-gayo-1.jpg',
                'project_id' => 9
            ],
            [
                'id' => 9,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-1.jpg',
                'project_id' => 10
            ],
            [
                'id' => 10,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-2.jpg',
                'project_id' => 10
            ],
            [
                'id' => 11,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-3.jpg',
                'project_id' => 10
            ],
            [
                'id' => 12,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-4.jpg',
                'project_id' => 10
            ],
            [
                'id' => 13,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-5.jpg',
                'project_id' => 10
            ],
            [
                'id' => 27,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-6.jpg',
                'project_id' => 10
            ],
            [
                'id' => 28,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-7.jpg',
                'project_id' => 10
            ],
            [
                'id' => 29,
                'url' => '/img/product/joyeria-artisitica/joyeria-celia-gayo-8.jpg',
                'project_id' => 10
            ],
            [
                'id' => 40,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-1.jpg',
                'project_id' => 11
            ],
            [
                'id' => 41,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-2.jpg',
                'project_id' => 11
            ],
            [
                'id' => 42,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-3.jpg',
                'project_id' => 11
            ],
            [
                'id' => 43,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-4.jpg',
                'project_id' => 11
            ],
            [
                'id' => 44,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-5.jpg',
                'project_id' => 11
            ],
            [
                'id' => 45,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-6.jpg',
                'project_id' => 11
            ],
            [
                'id' => 46,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-7.jpg',
                'project_id' => 11
            ],
            [
                'id' => 47,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-8.jpg',
                'project_id' => 11
            ],
            [
                'id' => 48,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-9.jpg',
                'project_id' => 11
            ],
            [
                'id' => 49,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-10.jpg',
                'project_id' => 11
            ],
            [
                'id' => 50,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-11.jpg',
                'project_id' => 11
            ],
            [
                'id' => 51,
                'url' => '/img/product/joyas/joyas-a-medida-celia-gayo-12.jpg',
                'project_id' => 11
            ],
            /* ARCHITECTURE */
            [
                'id' => 14,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-1.jpg',
                'project_id' => 12
            ],
            [
                'id' => 15,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-2.jpg',
                'project_id' => 12
            ],
            [
                'id' => 16,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-3.jpg',
                'project_id' => 12
            ],
            [
                'id' => 17,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-4.jpg',
                'project_id' => 12
            ],
            [
                'id' => 18,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-5.jpg',
                'project_id' => 12
            ],
            [
                'id' => 19,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-6.jpg',
                'project_id' => 12
            ],
            [
                'id' => 20,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-7.jpg',
                'project_id' => 12
            ],
            [
                'id' => 21,
                'url' => '/img/architecture/pfc/architecture-pfc-celia-gayo-8.jpg',
                'project_id' => 12
            ],
            [
                'id' => 22,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-1.jpg',
                'project_id' => 13
            ],
            [
                'id' => 23,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-2.jpg',
                'project_id' => 13
            ],
            [
                'id' => 24,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-3.jpg',
                'project_id' => 13
            ],
            [
                'id' => 25,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-4.jpg',
                'project_id' => 13
            ],
            [
                'id' => 26,
                'url' => '/img/architecture/reebok/architecture-reebok-celia-gayo-5.jpg',
                'project_id' => 13
            ],
        ]);
    }

}
