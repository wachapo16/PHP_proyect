<?php

namespace Tests\Unit\UseCases;

use App\UseCases\UtilUseCase;
use Tests\TestCase;

class UtilUseCaseTest extends TestCase
{
    public function testIsUserOfLegalAgeReturnsTrueForValidAge(): void
    {
        // Dado
        $utilUseCase = new UtilUseCase();
        $age = 20;

        // Cuando
        $result = $utilUseCase->isUserOfLegalAge($age);

        // Debería pasar
        $this->assertTrue($result);
    }

    public function testIsUserOfLegalAgeReturnsFalseForInvalidAge(): void
    {
        // Dado
        $utilUseCase = new UtilUseCase();
        $age = 16;

        // Cuando
        $result = $utilUseCase->isUserOfLegalAge($age);

        // Debería pasar
        $this->assertFalse($result);
    }
}
