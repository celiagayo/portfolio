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
                'category_id' => 2
            ],
            [
                'project_id' => 3,
                'category_id' => 1
            ]
        ]);
    }
}
