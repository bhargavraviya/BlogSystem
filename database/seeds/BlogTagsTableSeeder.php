<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogtags')->insert([
            ['id'           => '1',
            	'name'        => 'tag1',
                'slug'       => 'tag1',
                'published'     => 'yes',
                'created_at' => '2020-02-16 11:32:05',
                'deleted_at'    => null,
            ]
        ]);
    }
}
