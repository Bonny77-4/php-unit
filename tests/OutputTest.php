<?php

declare(strict_types=1);

namespace APP;

use PHPUnit\Framework\TestCase;


final class OutputTest extends TestCase
{
    public function testFooOutput(): void
    {
        $this->expectOutputString('foo');
        echo 'foo';
    }
}
