<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PromedioCommand extends Command
{
    protected $signature = 'app:promedio-command';
    protected $description = 'Command description';

    public function handle()
    {
        $nums = [10, 12, 14, 16, 18,50];
            
    function calcularPromedio ($nums){
        $suma = 0;
        $amount = sizeof($nums);

        for ($i = 0; $i < $amount; $i ++) { 
            $suma += $nums [$i];
        }
        return $suma / $amount;         
    }

    $this-> info(calcularPromedio ($nums));

 }

    
}
