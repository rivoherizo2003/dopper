<?php

namespace App\Helpers;

class SumNumber
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function addPlus(int $a, int $b): int
    {
        return $a + $b + 2;
    }
}
