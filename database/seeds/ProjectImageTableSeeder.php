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
                'project_id' => 1
            ],
            [
                'image_id' => 2,
                'project_id' => 2
            ],
            [
                'image_id' => 3,
                'project_id' => 3
            ],
        ]);
    }
}
