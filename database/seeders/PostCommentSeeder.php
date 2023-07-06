<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts_comments')-> insert([
            'content' => 'viaje',
            'publisher_at' => '2023-04-04 18:16:12',
            'updated_at' => '2023-04-04 18:26:12',
            'user_id'=> 1,
            'post_id'=> 101,
        ]);

        DB::table('posts_comments')-> insert([
            'content' => 'viaje2',
            'publisher_at' => '2023-04-04 18:16:12',
            'updated_at' => '2023-04-04 18:26:12',
            'user_id'=> 2,
            'post_id'=> 102,
        ]);

        DB::table('posts_comments')-> insert([
            'content' => 'viaje3',
            'publisher_at' => '2023-04-04 18:16:12',
            'updated_at' => '2023-04-04 18:26:12',
            'user_id'=> 3,
            'post_id'=> 103,
        ]);

        DB::table('posts_comments')-> insert([
            'content' => 'viaje4',
            'publisher_at' => '2023-04-04 18:16:12',
            'updated_at' => '2023-04-04 18:26:12',
            'user_id'=> 4,
            'post_id'=> 104,
        ]);

        DB::table('posts_comments')-> insert([
            'content' => 'viaje5',
            'publisher_at' => '2023-04-04 18:16:12',
            'updated_at' => '2023-04-04 18:26:12',
            'user_id'=> 5,
            'post_id'=> 105,
        ]);
        
    }
}
