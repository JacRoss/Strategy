<?php

namespace Jackross\Strategy\Operations;

class Subtraction implements IOperation
{

    public function calculate(int $a, int $b): int
    {
        return $a - $b;
    }
}