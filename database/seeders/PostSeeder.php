<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::table('posts')-> insert([
            'id' => 101,
            'title' => 'aventura',
            'content' => 'viaje',
            'slug'=> 'cualquiera cosa',
            'summary'=> 'cualquier cosa2',
            'publisher_at'=> '2023-04-04 13:15:12',
            'created_at'=>'2023-04-04 18:15:12',
            'update_at'=>'2023-05-04 20:15:12',
            'user_id'=> 1,
        ]);
        
        DB::table('posts')-> insert([
            'id' => 102,
            'title' => 'aventura2',
            'content' => 'viaje2',
            'slug'=> 'cualquiera cosa2',
            'summary'=> 'cualquier cosa3',
            'publisher_at'=> '2023-04-04 13:15:12',
            'created_at'=>'2023-04-04 18:15:12',
            'update_at'=>'2023-05-04 20:15:12',
            'user_id'=> 2,
        ]);  
        
        DB::table('posts')-> insert([
            'id' => 103,
            'title' => 'aventura3',
            'content' => 'viaje3',
            'slug'=> 'cualquiera cosa3',
            'summary'=> 'cualquier cosa4',
            'publisher_at'=> '2023-04-04 13:15:12',
            'created_at'=>'2023-04-04 18:15:12',
            'update_at'=>'2023-05-04 20:15:12',
            'user_id'=> 3,
        ]);

        DB::table('posts')-> insert([
            'id' => 104,
            'title' => 'aventura4',
            'content' => 'viaje4',
            'slug'=> 'cualquiera cosa4',
            'summary'=> 'cualquier cosa5',
            'publisher_at'=> '2023-04-04 13:15:12',
            'created_at'=>'2023-04-04 18:15:12',
            'update_at'=>'2023-05-04 20:15:12',
            'user_id'=> 4,
        ]);

        DB::table('posts')-> insert([
            'id' => 105,
            'title' => 'aventura5',
            'content' => 'viaje5',
            'slug'=> 'cualquiera cosa5',
            'summary'=> 'cualquier cosa6',
            'publisher_at'=> '2023-04-04 13:15:12',
            'created_at'=>'2023-04-04 18:15:12',
            'update_at'=>'2023-05-04 20:15:12',
            'user_id'=> 5,
        ]);
    }
}
