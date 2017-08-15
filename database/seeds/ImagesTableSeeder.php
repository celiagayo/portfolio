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
                'url' => '/public/images/b'
            ],
            [
                'id' => 3,
                'url' => '/public/images/c'
            ],
        ]);
    }
}
