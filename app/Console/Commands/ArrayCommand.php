<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ArrayCommand extends Command
{
    protected $signature = 'app:array-command';
    protected $description = 'Command description';

    public function handle()
    {
        $elements = [1, 40, 30, 3, 5, 10, 60];
        $valor = $this->ask('Ingresa el valor a buscar: ');

        if (in_array($valor, $elements)) {
            $this->info("El valor $valor está presente en el arreglo.");
        } else {
            $this->info("El valor $valor no está presente en el arreglo.");
        }  
    }
}

