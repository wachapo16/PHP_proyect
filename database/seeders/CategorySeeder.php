<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')-> insert([
            'id' => 1,
            'name' => 'Liceth',
            'content' => 'Vieje2',
            'slug' => 'cualquiercosa3',
        ]);

        DB::table('categories')-> insert([
            'id' => 2,
            'name' => 'Juanito',
            'content' => 'Vieje8',
            'slug' => 'cualquiercosa8',
        ]);

        DB::table('categories')-> insert([
            'id' => 3,
            'name' => 'pedrito',
            'content' => 'Vieje7',
            'slug' => 'cualquiercosa7',
        ]);

        DB::table('categories')-> insert([
            'id' => 4,
            'name' => 'Juanchito',
            'content' => 'Vieje6',
            'slug' => 'cualquiercosa4',
        ]);

        DB::table('categories')-> insert([
            'id' => 5,
            'name' => 'Pedro',
            'content' => 'Vieje5',
            'slug' => 'cualquiercosa5',
        ]);

        
    }
}
