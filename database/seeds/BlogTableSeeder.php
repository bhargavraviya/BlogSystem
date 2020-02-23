<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            ['id'           => '1',
            	'user_id'       => '1',
                'category_id'   => '1',
                'images'        => 'imgage url',//easy to other server imgage given
                'title'         => 'title of blog',
                'caption'       => 'title of blog image / thing SEO help',
                'description'   => '<p>blog text</p>',
                'tags'          => 'tag1,tag2',
                'slug'       => 'title-of-blog',
                'published'     => 'yes',
                'created_at' => '2020-02-16 11:32:05',
                'deleted_at'    => null,
            ]
        ]);
    }
}
