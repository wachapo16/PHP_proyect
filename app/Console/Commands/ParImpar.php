<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ParImpar extends Command
{

    protected $signature = 'app:parimpar {z}';

    protected $description = 'Command description';

    public function handle()
    {
      $z =  $this->argument('z');    
      
      if ($z % 2 == 0)  {
            $this->info("El numero es : $z par");
            for ($i=0; $i <= $z ; $i = $i + 2) { 
              $this -> info($i);
            }
      }else {
        $this->info("El número es : $z ImPar");
      }
    }
}
