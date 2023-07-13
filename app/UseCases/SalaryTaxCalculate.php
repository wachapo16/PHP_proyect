<?php

namespace App\UseCases;

class SalaryTaxCalculate
{
    public function taxCalculate(int $salary): int
    {
        if ($salary < 1160000) {
            $percentage = 0.05;
        } elseif ($salary < 2320000) {
            $percentage = 0.15;
        } elseif ($salary < 4640000) {
            $percentage = 0.2;
        } elseif ($salary < 5800000) {
            $percentage = 0.3;
        } else {
            $percentage = 0.45;
        }

        return $salary * $percentage;
    }
}
