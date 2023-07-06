<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskManagement extends Seeder
{
    
    public function run(): void
    {
        DB::table('task_management')-> insert([
            'state' => 'por hacer',
            'title' => 'Tarea 1',
            'description' => 'guardar información de la tarea',
            
        ]);

    }

    
}