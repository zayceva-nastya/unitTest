<?php

namespace App;

class Calculator
{

    protected $a;
    protected $b;

    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }
    public function dif(int $a, int $b): int
    {
        return $a - $b;
    }
    public function mul(int $a, int $b): int
    {
        return $a * $b;
    }
    public function del(int $a, int $b): float
    {
        return $a / $b;
    }
}
