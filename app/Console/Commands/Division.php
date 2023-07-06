<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Division extends Command
{
    
    protected $signature = 'app:division {numZ1} {numZ2}';

    protected $description = 'Divisor distinto de cero';

    public function handle()

        {
        $numA = $this->argument('numZ1');
        $numB = $this->argument('numZ2');
        
        if ($numB != 0) {
            $quotient = $numA / $numB;
            $this->info("El resultado es: $quotient");
        }else {
            $this->error("SintaxError");
        }
    }
}
