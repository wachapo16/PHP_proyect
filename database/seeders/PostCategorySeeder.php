<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts_categories')-> insert([
            'id' => 1,
            'post_id'=> 101,
            'category_id'=> 1,
        ]);

        DB::table('posts_categories')-> insert([
            'id' => 2,
            'post_id'=> 102,
            'category_id'=> 2,
        ]);

        DB::table('posts_categories')-> insert([
            'id' => 3,
            'post_id'=> 103,
            'category_id'=> 3,
        ]);

        DB::table('posts_categories')-> insert([
            'id' => 4,
            'post_id'=> 104,
            'category_id'=> 4,
        ]);

        DB::table('posts_categories')-> insert([
            'id' => 5,
            'post_id'=> 105,
            'category_id'=> 5,
        ]);
        
    }
}
