<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('blogcategories')->insert([
            ['id'           => '1',
            	'user_id'       => '1',
                'name'   => 'Categories1',
                'slug'        => 'Categories1',
                'status'         => 'show',
                'created_at' => '2020-02-16 11:32:05',
                'deleted_at'    => null,
            ]
        ]);
    }
}
