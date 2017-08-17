<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
                'project_id' => 13
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
