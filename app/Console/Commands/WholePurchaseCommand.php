<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WholePurchaseCommand extends Command
{
    protected $signature = 'app:whole-purchase-command';
    protected $description = 'Calcular producto + domicilio';

    public function handle()
    {
        $prices = [1000, 5000, 4000, 60000, 400, 5000, 3300];

        $totalPrice = $this->calculateTotalPrice($prices);
        $this->info("Precio total con domicilio: $totalPrice");
    }
    function calculateTotalPrice(array $prices):int
    {
        $subtotal = 0;
        $domicilio = 0;
        $quantity = sizeof($prices);


        foreach ($prices as $price) {
            $subtotal += $price;
        }

        if ($quantity >= 2 && $quantity < 4) {
            $domicilio = 4000;
        } elseif ($quantity >= 4 && $quantity < 6) {
            $domicilio = 2000;
        } elseif ($quantity >= 6 && $quantity < 10) {
            $domicilio = 1000;
        }

        return $subtotal + $domicilio;
    }
}

/*Dado un arreglo que contiene en cada posición el valor de cada producto, calcule el valor total de la compra:

Ejemplo del arreglo: [1000, 5000, 4000, 60000, 400, 5000, 3300]

Valor domicilio de acuerdo a la siguiente lógica:
2 productos en adelante, se cobrará: 4000
4 productos en adelante, se cobrará: 2000
6 productos en adelante, se cobrará: 1000
10 productos en adelante nos e cobra domicilio

Calcular valor total del pedido: suma de todos los productos + valor del domicilio*/
