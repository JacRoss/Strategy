<?php

namespace Jackross\Strategy\Operations;

class Multiplication implements IOperation
{

    public function calculate(int $a, int $b): int
    {
        return $a * $b;
    }
}