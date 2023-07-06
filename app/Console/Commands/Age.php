<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Age extends Command
{
   
    protected $signature = 'app:age {age}';
    protected $description = 'Calculadora para registro de personas mayores de edad';

    public function handle()
    {
        $minimunAge = 18;
        $agePerson = $this->argument('age');
        
        
        if ($agePerson >= $minimunAge) {
            $this->warn('La persona es mayor de edad');
        } else {
            $this->error('La persona es menor de edad');
        }
    }
}
