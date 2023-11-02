<?php

namespace App;

final class Calculatrice
{

    function addition(int $a, int $b): int
    {
        return $a + $b;
    }
    function
    soustraction(int $a, int $b): int
    {
        return $a - $b;
    }

    function division(int $a, int $b): float | string 
    {
        if ($b === 0) {
            return "impossible de diviser par zero";
        } else {
            return $a / $b;
        }
    }


    function
    multiplication(int $a, int $b): int
    {
        return $a * $b;
    }
}
