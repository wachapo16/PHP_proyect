<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')-> insert([
            'id'=> 1,
            'first_name'=> 'Walter',
            'last_name'=> 'Chavez',
            'email'=> 'walterch@yahoo.co',
            'password'=> '43256',
            'registered_at'=> '1993-11-16 13:15:12',
            'last_login' => '2023-05-26 19:54:55',
            'user_name'=> 'wachapo',
        ]);

        DB::table('users')-> insert([
            'id'=> 2,
            'first_name'=> 'Violet',
            'last_name'=> 'Chavez',
            'email'=> 'violetch@yahoo.co',
            'password'=> '432561',
            'registered_at'=> '2002-11-16 13:15:12',
            'last_login' => '2023-05-26 19:54:55',
            'user_name'=> 'Violeta',
        ]);

        DB::table('users')-> insert([
            'id'=> 3,
            'first_name'=> 'Liceth',
            'last_name'=> 'Marrugo',
            'email'=> 'Liceth@yahoo.co',
            'password'=> '4325614',
            'registered_at'=> '1995-11-16 13:15:12',
            'last_login' => '2023-05-26 19:54:55',
            'user_name'=> 'Licho',
        ]);

        DB::table('users')-> insert([
            'id'=> 4,
            'first_name'=> 'Kennit',
            'last_name'=> 'Russ',
            'email'=> 'Russ@yahoo.co',
            'password'=> '4325614',
            'registered_at'=> '1997-11-16 13:15:12',
            'last_login' => '2023-05-26 19:54:55',
            'user_name'=> 'Kennitromero',
        ]);

        DB::table('users')-> insert([
            'id'=> 5,
            'first_name'=> 'Sair',
            'last_name'=> 'Cuello',
            'email'=> 'sair@yahoo.co',
            'password'=> '4325614',
            'registered_at'=> '2002-11-16 13:15:12',
            'last_login' => '2023-05-26 19:54:55',
            'user_name'=> 'ZarTan',
        ]);
        
    }
}
