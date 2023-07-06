<?php

namespace App\Console\Commands;

use App\UseCases\CalculatorUC;
use Illuminate\Console\Command;

class CalculatorCommand extends Command
{
    protected $signature = 'app:calculator-command';
    protected $description = 'Calculadora';

    public function handle()
    {
        $numb1 = $this->ask("Dame el número 1: ");
        $numb2 = $this->ask("Dame el número 2: ");

        $op = $this->choice(
            '¿Qué operación vas a realizar?',
            [
                '+' => 'Suma',
                '-' => 'Resta',
                '*' => 'Multiplicación',
                '/' => 'División',
                '%' => 'Residuo'
            ]
        );

        $uc = new CalculatorUC();

        $result = null;

        if ($op === '+') {
            $result = $uc->sum($numb1, $numb2);
        }

        if ($op === '-') {
            $result = $uc->subtraction($numb1, $numb2);
        }

        if ($op === '*') {
            $result = $uc->multiplication($numb1, $numb2);
        }

        if ($op === '/') {
            $result = $uc->division($numb1, $numb2);
        }

        if ($op === '%') {
            $result = $uc->residue($numb1, $numb2);
        }

        $this->info('Resultado = ' . $result);
    }
}
