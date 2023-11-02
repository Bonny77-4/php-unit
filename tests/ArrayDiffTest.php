<?php

declare(strict_types=1);

namespace APP;

use PHPUnit\Framework\TestCase;


final class ArrayDiffTest extends TestCase
{
    public function testArrayDiff(): void
    {

        $a = [1, 2, 3];
        $b = [1, 2, 3];

        $this->assertSame($a, $b);
    }
}
