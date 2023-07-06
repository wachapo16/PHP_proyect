<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MultiplicarCommand extends Command
{

    protected $signature = 'app:multiplicar-command {multiplication}';
    protected $description = 'calculadora de tablas de multiplicar';
    /*Tabla de multiplicar personalizada, escribe un programa que pida 
    al usuario un número entero y muestre en pantalla su tabla de multiplicar del 1 al 10.*/

    public function handle()
    {
        $n = $this -> argument("multiplication");

        for ($i = 1; $i <= 12; $i = $i + 1) {
            $this->info("$n x $i = ".($n * $i));
            
        }
    }
}
