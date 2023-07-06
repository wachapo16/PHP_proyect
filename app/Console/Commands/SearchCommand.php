<?php

namespace App\Console\Commands;

use App\UseCases\SearchInArrayUC;
use Illuminate\Console\Command;

class SearchCommand extends Command
{
    protected $signature = 'app:search-command';
    protected $description = 'Command description';

    public function handle() 
    {
        $collection = [1, 40, 30, 3, 5, 10, 60];
        $userAnyNumb = $this->ask('Ingrese un número: ');

        $uc = new SearchInArrayUC();

        $found = $uc->execute($collection, $userAnyNumb);

        if ($found === true) {
            $this->info('El valor fue encontrado');
        } else {
            $this->error('El valor NO FUE encontrado');
        }
    }
}
