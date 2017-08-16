<?php

use Illuminate\Database\Seeder;

class ProjectImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_project')->insert([
            [
                'image_id' => 1,
                'project_id' => 2
            ],
            [
                'image_id' =>  2,
                'project_id' => 2
            ],
            [
                'image_id' =>  3,
                'project_id' => 2
            ],
            [
                'image_id' =>  4,
                'project_id' => 2
            ],
            [
                'image_id' =>  5,
                'project_id' => 2
            ],
            [
                'image_id' =>  6,
                'project_id' => 2
            ],
              [
                'image_id' =>  7,
                'project_id' => 2
            ],
              [
                'image_id' =>  8,
                'project_id' => 9
            ],
              [
                'image_id' =>  9,
                'project_id' => 10
            ],
              [
                'image_id' =>  10,
                'project_id' => 10
            ],
              [
                'image_id' =>  11,
                'project_id' => 10
            ],
              [
                'image_id' =>  12,
                'project_id' => 10
            ],
              [
                'image_id' =>  13,
                'project_id' => 10
            ],
              [
                'image_id' =>  14,
                'project_id' => 12
            ],
              [
                'image_id' =>  15,
                'project_id' => 12
            ],
              [
                'image_id' =>  16,
                'project_id' => 12
            ],
              [
                'image_id' =>  17,
                'project_id' => 12
            ],
              [
                'image_id' =>  18,
                'project_id' => 12
            ],
            [
                'image_id' =>  19,
                'project_id' => 12
            ],
            [
                'image_id' =>  20,
                'project_id' => 12
            ],
            [
                'image_id' =>  21,
                'project_id' => 13
            ],
            [
                'image_id' =>  22,
                'project_id' => 13
            ],
            [
                'image_id' =>  23,
                'project_id' => 13
            ],
             [
                'image_id' =>  24,
                'project_id' => 13
            ],
            [
                'image_id' =>  25,
                'project_id' => 13
            ],
        ]);
    }
}
