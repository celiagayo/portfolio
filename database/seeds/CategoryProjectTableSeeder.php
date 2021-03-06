<?php

use Illuminate\Database\Seeder;

class CategoryProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('category_project')->insert([
            [
                'project_id' => 1,
                'category_id' => 1
            ],
            [
                'project_id' => 2,
                'category_id' => 1
            ],
            [
                'project_id' => 3,
                'category_id' => 1
            ],
              [
                'project_id' => 15,
                'category_id' => 1
            ],
            [
                'project_id' => 4,
                'category_id' => 1
            ],
            [
                'project_id' => 5,
                'category_id' => 2
            ]
            ,
            [
                'project_id' => 6,
                'category_id' => 2
            ],
            [
                'project_id' => 7,
                'category_id' => 2
            ]
            , [
                'project_id' => 8,
                'category_id' => 2
            ] ,
            [
                'project_id' => 9,
                'category_id' => 3
            ]
            ,
            [
                'project_id' => 10,
                'category_id' => 3
            ] ,
            [
                'project_id' => 11,
                'category_id' => 3
            ] ,
            [
                'project_id' => 12,
                'category_id' => 4
            ],
            [
                'project_id' => 13,
                'category_id' => 4
            ],
            [
                'project_id' => 14,
                'category_id' => 4
            ]
            
        ]);
    }
}
