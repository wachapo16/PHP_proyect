<?php

namespace App\UseCases;

use Error;

class CalculatorUC{

    public function sum($numb1, $numb2){
        return $numb1 + $numb2;
    }

    public function subtraction($numb1, $numb2){
        return $numb1 - $numb2;
    }

    public function multiplication($numb1, $numb2){
        return $numb1 * $numb2;
    }

    public function division($numb1,$numb2){
        if ($numb2 != 0) {
            return $numb1 / $numb2;
        }else {
            return ("SintaxError");
        }
    }

    public function residue($numb1, $numb2){
        return $numb1 % $numb2;
    }

}