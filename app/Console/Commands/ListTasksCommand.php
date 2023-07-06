<?php

namespace App\Console\Commands;

use App\Models\Task;
use Illuminate\Console\Command;

class ListTasksCommand extends Command
{
    protected $signature = 'app:list-tasks-command';
    protected $description = 'Listar tarea por estado';

    public function handle()
    {

        $this->info('MOSTRAR TAREAS');

        $taskPorHacer = Task::where('state', 'Por hacer')->count();
        $taskEnProgreso = Task::where('state', 'En progreso')->count();
        $taskFinalizada = Task::where('state', 'Finalizada')->count();

        $this->info('Por hacer: ' . $taskPorHacer);
        $this->info('En progreso: ' . $taskEnProgreso);
        $this->info('Finalizada: ' . $taskFinalizada);
    }
}


//Este command es para preguntar cuales son los estados de las tareas.
/*$this->info('MOSTRAR TAREAS');
        $state = $this->choice('Seleccione el estado que desea filtrar:', ['Por hacer', 'En progreso', 'Finalizada']);

        $tasks = Task::where('state', $state)->get();

            $this->info('TAREAS FILTRADAS POR ESTADO: ' . $state);
            $this->line('---------------------');
            
            for ($i = 0; $i < sizeof($tasks); $i++) {
                $this->info($tasks[$i]->id);
                $this->error($tasks[$i]->state);
                $this->info($tasks[$i]->title);
                $this->warn($tasks[$i]->description);
                $this->line('---------------------');
            }*/