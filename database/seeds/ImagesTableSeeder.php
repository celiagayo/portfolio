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
            [
                'id' => 1,
                'url' => '/img/web/migayo/web-celia-gayo-www.migayo.com-blog.png'
            ],
            [
                'id' => 2,
                'url' => '/img/web/migayo/web-celia-gayo-www.migayo.com-home.png'
            ],
             [
                'id' => 3,
                'url' => '/img/web/migayo/web-celia-gayo-www.migayo.com-material-producto.png'
            ],
            [
                'id' => 4,
                'url' => '/img/web/migayo/web-celia-gayo-www.migayo.com-material.png'
            ],
            [
                'id' => 5,
                'url' => '/img/web/migayo/web-celia-gayo-www.migayo.com-shop.png'
            ],
            [
                'id' => 6,
                'url' => '/img/web/migayo/web-celia-gayo-www.migayo.com-tablet-home.png'
            ],
            
            
        ]);
    }
}
