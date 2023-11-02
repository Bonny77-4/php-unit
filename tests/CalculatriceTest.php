<?php

declare(strict_types=1);

namespace APP;

use App\Calculatrice;
use PHPUnit\Framework\TestCase;


final class CalculatriceTest extends TestCase
{
    public function testAddition(): void
    {
        $calculatrice = new Calculatrice();
        $this->assertSame(4, $calculatrice->addition(2, 2));
    }
    public function testMultiplication(): void
    {
        $calculatrice = new Calculatrice();
        $this->assertSame(9, $calculatrice->multiplication(3, 3));
    }
    public function testSoustraction(): void
    {
        $calculatrice = new Calculatrice();
        $this->assertSame(3, $calculatrice->soustraction(5, 2));
    }
    public function testDivision(): void
    {
        $calculatrice = new Calculatrice();
        $this->assertSame((float)5, $calculatrice->division(5, 1));
    }
    public function testDivision0(): void
    {
        $calculatrice = new Calculatrice();
        $this->assertSame("impossible de diviser par zero", $calculatrice->division(5, 0));
    }
}
