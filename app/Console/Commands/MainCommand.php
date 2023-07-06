<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/*class MainCommand extends Command
{
     /**
     * The name and signature of the console command.
     *
     * @var string
      
     
    protected $signature = 'salary-annual';

    protected $description = 'calculadora de salario anual';

    public function handle()
    {
        $monthlySalary = 1_160_000; //mejorar en constante
        $annualSalary = $monthlySalary * 12;
        echo "Lo que gana una persona anual en colombia: " .$annualSalary;
    } 

}*/
 /*PROBLEMA 2
    Escribir un programa que ingresando la cantidad de kilómetros recorridos por 
    una motocicleta y la cantidad de galones de combustible que consumió durante ese recorrido. 
    Mostrar el consumo de combustible por kilómetro.*/
class MainCommand extends Command
{

        protected $signature = 'consumption';
    
        protected $description = 'calculadora de combustible por km de Sincelejo a Medellin';
    
        public function handle()
        {
            $kilometersTraveled = 471; 
            $gallonsConsumed = 7.397; 
            $fuelKilometer= $kilometersTraveled / $gallonsConsumed;
            echo "Lo que recorre en KM por galon de Sincelejo a Medellin es: " .$fuelKilometer;
        } 
    
}