<?php

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;

final class EqualityTest extends TestCase
{
    public function testEquality(): void
    {
        $this->assertSame(2, 2);
    }
}
