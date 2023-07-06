<?php

namespace App\Models;

class Customer
{
    public static $name = 'Pepito';
    public static $age = 25;
    public static function getInfo(): string
    {
        return 'Hola soy ' . static::$name . ' y tengo ' . static::$age . ' años';
    }
}
$info = Customer::getInfo();
$this->info($info);
