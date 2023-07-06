<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Score extends Command
{
    protected $signature = 'app:score {score}';

    protected $description = 'Puntuación de empleado';

    public function handle()
    {
        $inaceptable = 0.0; 
        $aceptable = 0.4;
        
    
        if ($inaceptable = 0.0) {
            $sueldo = ($inaceptable * 2400) + 2400;
            $this -> info ("El resultado es $sueldo Inaceptable");
        }
        

    }    
}