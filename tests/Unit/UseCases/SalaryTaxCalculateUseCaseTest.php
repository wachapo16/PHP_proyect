<?php

namespace Tests\Unit\UseCases;

use App\UseCases\SalaryTaxCalculate;
use Tests\TestCase;

class SalaryTaxCalculateUseCaseTest extends TestCase
{
    public function testSalaryLessThan1160000(): void
    {
        // Dado
        //Una persona tiene un salario menor a 1160000
        $salary = 1000000;

        // Cuando
        $salaryTaxCalculate = new SalaryTaxCalculate();
        $result = $salaryTaxCalculate->taxCalculate($salary);

        // Debería pasar
        $this->assertSame(50000, $result);
    }

    public function testSalaryBetween1160000And2320000(): void
    {
        // Dado
        // Una persona tiene un salario mayor o igual a 1160000 y menor que 2320000
        $salary = 1500000;

        // Cuando
        $salaryTaxCalculate = new SalaryTaxCalculate();
        $result = $salaryTaxCalculate->taxCalculate($salary);

        // Debería pasar
        $this->assertSame(225000, $result);
    }

    public function testSalaryBetween2320000And4640000(): void
    {
        // Dado
        // Una persona tiene un salario mayor o igual a 2320000  y menor que 4640000
        $salary = 3000000;

        // Cuando
        $salaryTaxCalculate = new SalaryTaxCalculate();
        $result = $salaryTaxCalculate->taxCalculate($salary);

        // Debería pasar
        $this->assertSame(600000, $result);
    }

    public function testSalaryBetween4640000And5800000(): void
    {
        // Dado
        // Una persona tiene un salario mayor o igual a 4640000 y menor que 5800000
        $salary = 5000000;

        // Cuando
        $salaryTaxCalculate = new SalaryTaxCalculate();
        $result = $salaryTaxCalculate->taxCalculate($salary);

        // Debería pasar
        $this->assertSame(1500000, $result);
    }

    public function testSalaryGreaterThan5800000(): void
    {
        // Dado
        // Una persona tiene un salario mayor a 5800000
        $salary = 7000000;

        // Cuando
        $salaryTaxCalculate = new SalaryTaxCalculate();
        $result = $salaryTaxCalculate->taxCalculate($salary);

        // Debería pasar
        $this->assertSame(3150000, $result);
    }
}
