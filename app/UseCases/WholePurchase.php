<?php

namespace App\UseCases;

class WholePurchaseCommand
{
    function calculateTotalPrice(array $prices):int
    {
        $subtotal = 0;
        $domicilio = 0;
        $quantity = sizeof($prices);


        foreach ($prices as $price) {
            $subtotal += $price;
        }

        if ($quantity < 4) {
            $domicilio = 4000;
        } elseif ($quantity >= 4 && $quantity < 6) {
            $domicilio = 2000;
        } elseif ($quantity >= 6 && $quantity < 10) {
            $domicilio = 1000;
        }

        return $subtotal + $domicilio;
    }
}
