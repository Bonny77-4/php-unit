<?php

namespace App;

final class Hello
{
    public function hello(string $name): string
    {
        return 'Hello ' . $name;
    }
}
