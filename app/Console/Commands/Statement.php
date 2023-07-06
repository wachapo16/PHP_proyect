<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Statement extends Command
{
    
    protected $signature = 'app:statement {personIncome}';


    protected $description = 'Calculadora de renta';

    public function handle()
    {
        $personIncome = $this->argument('personIncome');
        
        if ($personIncome < 1160000) {
            $porcentage = 5;
        }elseif ($personIncome >= 1160000 && $personIncome < 2320000) {
            $porcentage = 15;
        }elseif ($personIncome >= 2320000 && $personIncome < 4640000) {
            $porcentage = 20;
        }elseif ($personIncome >= 4640000 && $personIncome < 5800000) {
            $porcentage = 30;
        }/*elseif ($personIncome >= 5800000) {
            $porcentage = 45;
        }*/else {
            $porcentage = 45;
        }        

        $tax = $personIncome * ($porcentage / 100);
        $netIncome = $personIncome - $tax;

        $this->info("La persona paga: $tax de impuesto");
        $this->info("Precio Neto es: $netIncome");
    }
    
}

