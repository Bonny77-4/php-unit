<?php

declare(strict_types=1);

namespace APP;

use App\Hello;
use PHPUnit\Framework\TestCase;


final class HelloTest extends TestCase
{
    public function testSameHello(): void
    {
        $hello = new Hello();
        $this->assertSame("Hello Bonny", $hello->hello('Bonny'));
    }
}
