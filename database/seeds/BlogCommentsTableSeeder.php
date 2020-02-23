<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogcomments')->insert([
            ['id'           => '1',
            	'user_id'        => '1',
            	'blog_id'        => '1',
            	'comment'        => 'blog comment',
                'slug'       => 'comment',
                'published'     => 'yes',
                'created_at' => '2020-02-16 11:32:05',
                'deleted_at'    => null,
            ]
        ]);
    }
}
